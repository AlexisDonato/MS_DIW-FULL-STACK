<?php

namespace App\Service\Cart;

use App\Entity\Cart;
use App\Entity\User;
use App\Entity\Product;
use App\Entity\OrderDetails;
use Doctrine\ORM\EntityManager;
use App\Repository\CartRepository;
use App\Repository\UserRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\OrderDetailsRepository;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class CartService
{
    protected $session;
    protected $productRepository;
    protected $cartRepository;
    protected $orderDetailsRepository;
    protected $entityManager;
    protected $UserInterface;
    protected $security;
    private $clientCart;
    private $user;

    #[IsGranted('ROLE_CLIENT')]
    public function __construct(CartRepository $cartRepository, OrderDetailsRepository $orderDetailsRepository, ?UserInterface $user, SessionInterface $session, ProductRepository $productRepository, /*UserRepository $userRepository,*/ Security $security, EntityManagerInterface $entityManager)
    {
        
        // $this->userRepository = $userRepository;
        if ($security->isGranted('ROLE_CLIENT')) {
            $this->user = $user;
            $this->session = $session;
            $this->productRepository = $productRepository;
            $this->cartRepository = $cartRepository;
            $this->orderDetailsRepository = $orderDetailsRepository;
            $this->entityManager = $entityManager;
            $this->security = $security;
        }
    }

    public function getClientCart() {
        if (isset($this->user)) {
            return $this->cartRepository->findOneByUser($this->user->getId());
        } else {
            return null;
        }
    }

    public function getOrderDetails($clientCart, $productId): ?OrderDetails {
        $orderDetails = $this->orderDetailsRepository->createQueryBuilder('o')
        ->join(Cart::class, 'c', 'WITH', 'o.cart = c.id')
        ->where('o.cart = :cart_id')
        ->andWhere('o.Product = :product_id')
        ->setParameter('cart_id', $clientCart->getId())
        ->setParameter('product_id', $productId)
        ->getQuery()
        ->getOneOrNullResult();
        
        if ($orderDetails == null)
            $orderDetails = new OrderDetails();

        return $orderDetails;
    }

    #[IsGranted('ROLE_CLIENT')]
    public function addOrRemove(int $id, bool $remove=false)
    {
        $clientCart = $this->getClientCart();
        $orderDetails = $this->getOrderDetails($clientCart, $id);
        $orderDetails->setCart($clientCart);
        $product = $this->productRepository->find($id);
        $orderDetails->setProduct($product);
        $quantity = $orderDetails->getQuantity();
        
        if ($remove) {
            $quantity--;
            if ($quantity == 0) {
                $this->entityManager->remove($orderDetails);
                $this->entityManager->flush();
                return;
            }    
        } else {
            $quantity++;
        }
        
        $orderDetails->setQuantity($quantity);
        //dd('cart', $orderDetails->getCart(), 'user', $this->user, 'quantity', $quantity);
        $this->entityManager->persist($orderDetails);
        $this->entityManager->flush();
        
    }

    #[IsGranted('ROLE_CLIENT')]
    public function remove(int $id)
    {
    // $cart = $this->session->get('cart', []);
    $clientCart = $this->getClientCart();
    $orderDetails = $this->getOrderDetails($clientCart, $id);
    }

    #[IsGranted('ROLE_CLIENT')]
    public function delete(int $id)
    {
        $clientCart = $this->getClientCart();
        $orderDetails = $this->getOrderDetails($clientCart, $id);
        $this->entityManager->remove($orderDetails);
        $this->entityManager->flush();
        // $cart = $this->session->get('cart', []);

        if (!empty($cart[$id])) {
            unset($cart[$id]);
        }
        // $this->session->set('cart', $cart);
    }

    #[IsGranted('ROLE_CLIENT')]
    public function deleteAll()
    {
        $clientCart = $this->getClientCart();
        $em = $this->entityManager;
        $em->remove($clientCart);
        $em->flush();
    }

    #[IsGranted('ROLE_CLIENT')]
    public function getItemCount(OrderDetailsRepository $orderDetails) : int
    {
        //dd($this->user, $this->clientCart);
        //$cart = $this->session->get('cart', []);
        $count = -1;
        //$cartWithData = [];
        $clientCart = $this->getClientCart();
        if ($clientCart != null) {
            $count = $orderDetails->createQueryBuilder('c')
            ->select('sum(c.Quantity)')
            ->where('c.cart = :val')
            ->setParameter('val', $clientCart->getId())
            ->getQuery()
            ->getResult()[0][1];
        }

        if ($count == null)
            return 0;
 
        return (int)$count;
    }

    #[IsGranted('ROLE_CLIENT')]
    public function getFullCart(OrderDetailsRepository $orderDetails) {
        $clientCart = $this->getClientCart();
        if ($clientCart != null) {
                $rs = $orderDetails->createQueryBuilder('o')
                ->join(Product::class, 'p', 'WITH', 'o.Product = p.id')
                ->where('o.cart = :val')
                ->setParameter('val', $clientCart->getId())
                ->getQuery()
                ->getResult();
                // dd('req', $rs);
                return $rs;
            }
            
    }

    public function getTotal(?OrderDetailsRepository $orderDetails) : float
    {
        $clientCart =$this->getClientCart();
        if ($clientCart != null) {
            $total = $orderDetails->createQueryBuilder('o')
            ->select('sum(p.price * o.Quantity)')
            ->join(Product::class, 'p', 'WITH', 'o.Product = p.id')
            ->where('o.cart = :val')
            ->setParameter('val', $clientCart->getId())
            ->getQuery()
            ->getResult()[0][1];

            if ($total == null) {
                return 0;
            }

            return $total;
        }

        return 0;
    }


    /**
     * Get the value of session
     */
    public function getSession()
    {
        return $this->session;
    }


    /**
     * Set the value of user
     */
    public function setUser($user): self
    {
        $this->user = $user;

        return $this;
    }


    /**
     * Get the value of user
     */
    public function getUser()
    {
        return $this->user;
    }

    public function getCart() {
        return $this->clientCart;
    }

    public function setCart($clientCart) {
        dump($clientCart, 'before');
        $this->clientCart = $clientCart;
        dump($this->getCart(), 'after');
    
        return $this;
    }
}
