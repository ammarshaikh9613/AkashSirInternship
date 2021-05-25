<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connecting Login and Registration Form to Database-----SeekCoding</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">


     

</head>

<body>
    <div class="full-page">
        <div class='navbar'>
            <div class='logo'>
                <a href='#'><h1>Welcome</h1></a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='#'>Home</a></li>
                    <li><a href='#'>About us</a></li>
                    <li><a href='#'>Contact us</a></li>
                    
                    <li><button class='loginbtn'onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                    <li><button class='loginbtn'onclick="document.getElementById('register-form').style.display='block'" style="width:auto;">Register</button></li>
                </ul>
            </nav>
        </div>
        
        <div class="sub-page">
          <div class="overlay"></div>
           <div class="text">
               <p>First Day of The Intership Using the PHP Technology.<br>With the help of PHP we able to create this beautiful webpage.<br> Thanks to our inspiring collections and our<br> impeccable customer service, we have been highly <br>successful since day one. Browse through our site <br>and check out the latest additions to our Products,<br> and feel free to get in touch with our team if <br>you need any assistance.<br> Have A Great Day!</p>
            </div>
        </div>


        <div id='login-form' class="login-page">
            <div class="form-box">
                <span onclick="document.getElementById('login-form').style.display='none'" class="close">&times;</span>
                <div class="form">
                    <form class='login-form', action="validate.php", method="post">
                        <center><h1 class="main-heading">Login Form</h1></center>
				        <input type="text"name='email_id' placeholder="Email ID", required/>
				        <input type="password" name='password' placeholder="password", required/>
				        <button>LOGIN</button>
				    </form>
                </div>
            </div>
        </div>
        <div id="register-form" class='register-page'>
            <div class="form-box1">
               <span onclick="document.getElementById('register-form').style.display='none'" class="close">&times;</span>
                <div class="form1">
                    <form class='register-form', action="registration.php", method="post">
                    <center><h1 class="main-heading">Register Form</h1></center>
				    <table align="center" cellpadding = "10">
                        
                        <tr>
                            <td>NAME</td>
                            <td><input type="text" name="name" maxlength="30" required/></td>
                        </tr>

                        <tr>
                            <td>DATE OF BIRTH</td>
                            <td><input type="date" name="dob" maxlength="10" required/></td>
                        </tr>

                        <tr>
                            <td>EMAIL ID</td>
                            <td><input type="email" name="email_id" maxlength="100" style="width:250px"  required placeholder="Enter a valid email address"></td>
                        </tr>

                        <tr>
                            <td>MOBILE NUMBER</td>
                            <td><input type="tel" name="mobile" maxlength="10" /></td>
                        </tr>

                        <tr>
                            <td>PASSWORD</td>
                            <td><input type="password"name='password' placeholder="password" required/></td>
                        </tr>

                        <tr >
                            <td>GENDER:</td>
                            <td>
                                <div class="controls">
                                <label class="radio">
                                <input type="radio" name="gender"  value="Male">
                                Male
                                </label>
                                <label class="radio">
                                <input type="radio" name="gender"  value="Female">
                                Female
                                </label>
                                </div>
                            </td>
                        </tr>
                      
                        <tr>
                            <td>ADDRESS <br /><br /><br /></td>
                            <td><textarea name="address" rows="4" cols="30"></textarea></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><button>REGISTER</button></td>
                        </tr>
                    </table>
                    
<br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>