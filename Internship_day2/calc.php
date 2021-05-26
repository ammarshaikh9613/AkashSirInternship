<html>
    <head>
        <?php 
            if($_POST)
            {
            $n1=$_POST['num1'];
            $n2=$_POST['num2'];
            $op=$_POST['op'];
            $res=0;
            if(is_numeric($n1) && is_numeric($n2))
                {
                        switch($op)
                        {
                            case '+':
                                $res=$n1+$n2;
                                break;
                            case '-':
                                    $res=$n1-$n2;
                                 break;
                            case '*':
                                $res=$n1*$n2;
                                 break;
                            case '/':
                                    $res=$n1/$n2;
                                    break;
                                                        
                        }


                }
            
            }
        ?>
    
    </head>
    <body>
        <form method="post">

          
                <input type="number" placeholder="Enter no 1" name="num1"required/><br><br/>
                <input type="number" placeholder="Enter no 2" name="num2"required/><br><br/>
            
            
                <input type="readonly" name="res" value="<?php echo $res; ?>"> <b>Result:</b><br>
            <br>
            <input type="submit" value="+" name="op">
            <input type="submit" value="-" name="op">
            <input type="submit" value="*" name="op">
            <input type="submit" value="/" name="op">
            

        
        
        </form>
    </body>
</html>