<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP/LOGIN</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div id="mcontainer">
        <div class="container1"> 
            <h2><span>Reducing<br> Waste</span> <br> Saving <br>Resources </h2> 
        </div>

        <div class="container2" id="login">
           <form class="login" action="authentication.php" method="post" >
            <h1>USER LOGIN</h1>

            <div class="username-input">
                <input type="text" placeholder="Username" name="username" >
            </div>
            <div class="password-input">
                <input type="password"  placeholder="Password" name="password">
            </div>
            <div>
                <button type="submit" value="submit" name="signin">LOGIN</button>
            </div>
            <div class="already">
                <h2>------OR------</h2>
                <p>Dont have an account yet? <a href="#signup" id="signButton">Sign Up</a></p>
            </div>
           </form>
        </div>

        
        <div class="container2" id="signup">
            <form class="login" action="authentication.php" method="POST"> 
                <h1>SIGN UP</h1>

                <div class="username-input">
                   
                    <input type="text" placeholder="enter username" id="Username" name="username" required> 
                </div>
                <div class="username-input">
                    
                    <input type="email" id="email" name="Email" placeholder="enter email" required>
                </div>
                <div class="password-input">
                    <input type="password" placeholder="Password" id="Pass1" name="password" required> 
                </div>
                <div class="password-input">
                    <input type="password" placeholder="Confirm Password" id="Pass2" name="password2" required> 
                </div>
                <div>
                    <button type="submit" value="submit" name="signup">CREATE ACCOUNT</button>
                </div>
                <h2>------OR------</h2>
                <p id="paragra">Already have an account?<a href="#login" id="logButton">Login</a></p>
            </form>
        </div>
    </div>


  <script src="toggle.js"></script>

</body>
</html>
