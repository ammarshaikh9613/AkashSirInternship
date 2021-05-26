<html>
    <body>
        <form method="post">

            Enter Marks1: <input type="text" name="m1"/><br/>
            Enter Marks2: <input type="text" name="m2"/><br/>
            Enter Marks3: <input type="text" name="m3"/><br/>
            Enter Marks4: <input type="text" name="m4"/>
            
            <br/>
            <input type="submit" name="submit" value="submit">


        </form>
    </body>
</html>

<?php 
    if($_POST)
    {
    $m1=$_POST['m1'];
    $m2=$_POST['m2'];
    $m3=$_POST['m3'];
    $m4=$_POST['m4'];
    $sum=0;
    $sum=$m1+$m2+$m3+$m4;
    echo "<br/> total is : $sum";
    $avg=$sum/4;

    echo "<br/> average is $avg";

    if($avg > 70)
        echo "<br> Your grade is distinction";
    elseif($avg >=55)
        echo "<br> Your grade is first class";
    elseif($avg >=35)
        echo "<br> Your grade is second class";
    else
        echo "Youre failed";

    }

?>