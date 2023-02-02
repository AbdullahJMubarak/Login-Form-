<html>
<head>
    <title> Login form </title>
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
<script>
          function required()
               {
                  
                    var empt2 =document.forms["myform"]["email"].value;
                    if (empt2 == "")
                        {
                            alert("Please insert your E-mail");
                            return false;
                        }
                        var pass =document.forms["myform"]["password"].value;
                       
                         if (pass == "")
                        {
                            alert("Please insert your password");
                            return false;
                        }
                        
                       
                       
                    
                    
                    }
        </script>
</head>
<body>
    <!-- <h1>Login<h1>
    <form name ="myform" action='welcome.php' method='post' onsubmit="return required()" >
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="submit" name="submit">
    <a href="index.php">sign up</a>
    </form> -->
    <div class="form-style-10">
        <h1>Login now<span>login in our website</span></h1>
        <form name ="myform" action='welcome.php' method='post' onsubmit="return required()" >
           
        
            <div class="section"><span>1</span>E-mail </div>
            <div class="inner-wrap">
                <label>Email Address <input type="email" name="email" /></label>
                
            </div>
        
            <div class="section"><span>2</span>Password</div>
                <div class="inner-wrap">
                <label>Password <input type="password" name="password" /></label>
               
            </div>
            <div class="button-section">
             <input type="submit" name="Sign Up" />
             <a href="index.php">sign up</a>
            </div>
        </form>
     </div>
                
    
    
 </body>
        