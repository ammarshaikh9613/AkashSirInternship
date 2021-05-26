<?php 

    if($_POST)
    {
    $number=$_POST['num'];
    $temp = $number;

    $sum=0;

    while($temp)
    {
        $r=$temp % 10;
        $sum=($sum * 10)  + $r;
        $temp = (int) ($temp/10);

    }
    echo $sum;
}
    ?>

<html>
    <body>
        <form method="post">
            <input type="text" name="num">
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>