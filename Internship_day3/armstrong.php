<html>
    <head>
        <title>Armstrong Number</title>
        <?php 
            if($_POST)
            {
                $no=$_POST['no'];
                $sum=0;
                $temp=$no;
                while($temp > 0)
                {
                    $r=$temp % 10;
                    $sum=$sum+$r*$r*$r;
                    $temp=$temp/10;
                }
                if($no==$sum)
                {
                    echo "$no is armstrong";
                }
                else
                {
                    echo "$no is not armstrong";
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