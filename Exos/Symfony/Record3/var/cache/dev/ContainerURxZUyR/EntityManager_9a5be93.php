<?php

namespace ContainerURxZUyR;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera2286 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer40666 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties08295 = [
        
    ];

    public function getConnection()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'getConnection', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'getMetadataFactory', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'getExpressionBuilder', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'beginTransaction', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'getCache', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->getCache();
    }

    public function transactional($func)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'transactional', array('func' => $func), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'wrapInTransaction', array('func' => $func), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'commit', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->commit();
    }

    public function rollback()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'rollback', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'getClassMetadata', array('className' => $className), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'createQuery', array('dql' => $dql), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'createNamedQuery', array('name' => $name), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'createQueryBuilder', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'flush', array('entity' => $entity), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'clear', array('entityName' => $entityName), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->clear($entityName);
    }

    public function close()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'close', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->close();
    }

    public function persist($entity)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'persist', array('entity' => $entity), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'remove', array('entity' => $entity), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'refresh', array('entity' => $entity), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'detach', array('entity' => $entity), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'merge', array('entity' => $entity), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'getRepository', array('entityName' => $entityName), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'contains', array('entity' => $entity), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'getEventManager', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'getConfiguration', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'isOpen', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'getUnitOfWork', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'getProxyFactory', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'initializeObject', array('obj' => $obj), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'getFilters', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'isFiltersStateClean', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'hasFilters', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return $this->valueHoldera2286->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer40666 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera2286) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera2286 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera2286->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, '__get', ['name' => $name], $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        if (isset(self::$publicProperties08295[$name])) {
            return $this->valueHoldera2286->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2286;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera2286;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2286;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera2286;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, '__isset', array('name' => $name), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2286;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera2286;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, '__unset', array('name' => $name), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2286;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera2286;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, '__clone', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        $this->valueHoldera2286 = clone $this->valueHoldera2286;
    }

    public function __sleep()
    {
        $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, '__sleep', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;

        return array('valueHoldera2286');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer40666 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer40666;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer40666 && ($this->initializer40666->__invoke($valueHoldera2286, $this, 'initializeProxy', array(), $this->initializer40666) || 1) && $this->valueHoldera2286 = $valueHoldera2286;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera2286;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera2286;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
