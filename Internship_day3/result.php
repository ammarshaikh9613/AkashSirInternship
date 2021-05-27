

<html>
        <head>
            <style>
                body{
                    background-color:black;
                    color:white;
                    font-size:18px;                    
                }
                .dist
                {
                    color:transparent;
                    /*font-size:80px;*/
                    position: relative;
                   /* display:inline-block;*/
                   animation:text_reveal  1.5s ease forwards;
                   animation-delay:0.5s;
                }
                .dist span{
                    position: absolute;
                    left:0;
                    top:0;
                    height:100%;
                    width:100%;
                    background-color:#0037f6;
                    animation: overlay 3s ease forwards;
                   /* animation-delay:.5s;*/
                }

                @keyframes overlay {
                    50%
                    {
                        width:100%;
                        left:0;
                    }
                    100%
                    {
                        left:100%;
                        width:0;
                    }
                }

                @keyframes text_reveal {
                    
                    100%{
                        color:#0a41ff;
                    }
                    
                }

                @keyframes text_reveal1 {
                    100%{
                        color:#19feee;
                    }
                    
                }

                @keyframes text_reveal2 {
                    100%{
                        color:#fe1976;
                    }
                    
                }
                @keyframes text_reveal3 {
                    100%{
                        color:crimson;
                    }
                    
                }

                .first
                {
                    color:transparent;
                    /*font-size:80px;*/
                    position: relative;
                   /* display:inline-block;*/
                   animation:text_reveal1  1.5s ease forwards;
                   animation-delay:0.5s;
                }
                .first span{
                    position: absolute;
                    left:0;
                    top:0;
                    height:100%;
                    width:100%;
                    background-color:#19feee;
                    animation: overlay 3s ease forwards;
                   /* animation-delay:.5s;*/
                }

                .second
                {
                    color:transparent;
                    /*font-size:80px;*/
                    position: relative;
                   /* display:inline-block;*/
                   animation:text_reveal2  1.5s ease forwards;
                   animation-delay:0.5s;
                }
                .second span{
                    position: absolute;
                    left:0;
                    top:0;
                    height:100%;
                    width:100%;
                    background-color:#fe1976;
                    animation: overlay 3s ease forwards;
                   /* animation-delay:.5s;*/
                }

                .fail
                {
                    color:transparent;
                    /*font-size:80px;*/
                    position: relative;
                   /* display:inline-block;*/
                   animation:text_reveal3  1.5s ease forwards;
                   animation-delay:0.5s;
                }
                .fail span{
                    position: absolute;
                    left:0;
                    top:0;
                    height:100%;
                    width:100%;
                    background-color:crimson;
                    animation: overlay 3s ease forwards;
                   /* animation-delay:.5s;*/
                }


            </style>
        </head>
        <body>
        </body>
</html>

<?php 
    if($_POST)
    {
        $marks=$_POST['m'];

    $is_fail=0;
    $sum=0;
    for($i=0;$i<5;$i++)
    {
        echo "<br/> Marks".($i+1).":".$marks[$i];
        $sum=$sum+$marks[$i];

    }
    echo "<br/> total is : $sum";
    $avg=$sum/5;

    for($i=0;$i<5;$i++)
    {
        if($marks[$i]<35)
            //echo "Youre failed";
            $is_fail=1;
            break;
        
    }


    echo "<br/> average is $avg<br/>";

    if($avg > 70 && $is_fail==0)
    {
        echo "<h1 class='dist'> Congratulations!!! <span></span></h1>";
        echo "<h1 class='dist'>You got,<span></span> </h1>";
        echo "<h1 class='dist'>Distinction <span></span> </h1>";
    }


    elseif($avg >=55 && $is_fail==0)
    {
        echo "<h1 class='first'> Congratulations!!! <span></span></h1>";
        echo "<h1 class='first'>You got,<span></span> </h1>";
        echo "<h1 class='first'>First Class <span></span> </h1>";
    }
    elseif($avg >=35 && $is_fail==0)
    {
            echo "<h1 class='second'> Congratulations!!! <span></span></h1>";
            echo "<h1 class='second'>You got,<span></span> </h1>";
            echo "<h1 class='second'>Second Class <span></span> </h1>";
    }
    

    else
    {
        echo "<h1 class='fail'>Sorry!!! <span></span></h1>";
        echo "<h1 class='fail'>You are Failed!<span></span> </h1>";
        echo "<h1 class='fail'>Because you got less than 35 in one or more subject <span></span> </h1>";
    }
    }

?>