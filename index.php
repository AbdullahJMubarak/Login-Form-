
<html>
    <head>
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
        <title>
            My Sign up form</form>
        </title>
        <script>
          function required()
               {
                    var empt = document.forms["myform"]["name"].value;
                    if (empt == "")
                        {
                            alert("Please insert your Name");
                            return false;
                        }
                    var empt2 =document.forms["myform"]["email"].value;
                    if (empt2 == "")
                        {
                            alert("Please insert your E-mail");
                            return false;
                        }
                        var pass =document.forms["myform"]["password"].value;
                        var pass2 =document.forms["myform"]["password2"].value;
                         if (pass == "")
                        {
                            alert("Please insert your password");
                            return false;
                        }
                        
                        if (pass2 != pass)
                        {
                            alert("the password must match");
                            return false;
                        }
                       
                    
                    
                    }
        </script>
    </head>
<body>


<!-- Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
password: <input type="password" name="password"><br>
password confirmation: <input type="password" name="password2"><br>
<input type="submit">  -->




<div class="form-style-10">
        <h1>Sign Up Now!<span>Sign up and tell us what you think of the site!</span></h1>
        <form name ="myform" action="submit.php" onsubmit="return required()" method="post">
            <div class="section"><span>1</span>Name</div>
            <div class="inner-wrap">
                <label>Your Name <input type="text" name="name" /></label>
                
            </div>
        
            <div class="section"><span>2</span>E-mail</div>
            <div class="inner-wrap">
                <label>Email Address <input type="email" name="email" /></label>
                
            </div>
        
            <div class="section"><span>3</span>Passwords</div>
                <div class="inner-wrap">
                <label>Password <input type="password" name="password" /></label>
                <label>Confirm Password <input type="password"  name="password2" /></label>
            </div>
            <div class="button-section">
             <input type="submit" name="Sign Up" />
            <a href="Login.php">Log in</a>
            </div>
        </form>
        </div>
    </body>
    </html>