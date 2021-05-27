<html>
    <head>
        <title>Fibbonaci series</title>
        <?php 

            if($_POST)
            {
            $no=$_POST['no'];
            $a=-1;
            $b=1;
            $c=0;
            for($i=0;$i<=$no;$i++)
            {
                $c=$a+$b;
                echo "<br>$c";
                $a=$b;
                $b=$c;
            }
            }
        ?>
    </head>
    <body>
        <form method="post">
            <input type="number" name="no">

            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>