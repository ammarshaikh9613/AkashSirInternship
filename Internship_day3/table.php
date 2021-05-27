<body>
<table border="1">
        <?php
        if($_POST)
        {
        $num=$_POST['num'];
            for($i=1;$i<=10;$i++)
            {
                echo "<tr>";
                    
                        $table=$num*$i;
                        echo "<td>$num X $i = $table </td>";
                    
                echo "</tr>";
            }
        }
        ?>
</table>
        <form method="post">
        <input type="number" name="num">

<input type="submit" name="submit" value="submit">
    </form>
    </body>