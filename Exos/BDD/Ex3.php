<html>
    <body>
        <table border="2">
            <?php
            echo "<tr><td></td>";
            for ($i=0;$i<13;$i++)
            {
            echo"<th>".$i."</th>";
            }
            echo"</tr>";

            for ($j=0;$j<13;$j++)
            {
            echo"<tr><th>".$j."</th>";
            for($k=0;$k<13;$k++)
            {
            $p=$j*$k;
            echo"<td>".$p."</td>";
            }
            echo"</tr>\n";
            }
            ?>
        </table>
    </body>
</html>
