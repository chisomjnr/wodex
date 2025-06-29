<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="style.css">
</head>
<body>

<style>
    /* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background:#eee;
}
.container{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 430px;
  width: 100%;
  background: #fff;
  border-radius: 20px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.13);
}
.container .registration{
  display: none;
}
#check:checked ~ .registration{
  display: block;
}
#check:checked ~ .login{
  display: none;
}
#check{
  display: none;
}
.container .form{
  padding: 2rem;
}
.form header{
  font-size: 2rem;
  font-weight: 500;
  text-align: center;
  margin-bottom: 1.5rem;
}
 .form input{
   height: 60px;
   width: 100%;
   padding: 0 15px;
   font-size: 17px;
   margin-bottom: 1.3rem;
   border: 1px solid #ddd;
   border-radius: 6px;
   outline: none;
 }
 .form input:focus{
   box-shadow: 0 1px 0 rgba(0,0,0,0.2);
 }
.form a{
  font-size: 16px;
  color: #713cac;
  text-decoration: none;
}
.form a:hover{
  text-decoration: underline;
}
.form input.button{
  color: #fff;
  background: #713cac;
  font-size: 1.2rem;
  font-weight: 500;
  border-radius: 10px;
  letter-spacing: 1px;
  margin-top: 1.7rem;
  cursor: pointer;
  transition: 0.4s;
}
.form input.button:hover{
  background:rgb(0, 0, 0);
}
.signup{
  font-size: 17px;
  text-align: center;
}
.signup label{
  color: #713cac;
  cursor: pointer;
}
.signup label:hover{
  text-decoration: underline;
}
</style>











 <div class="container">
    <input type="checkbox" id="check">
    
    <!-- Login Form -->
    <div class="login form">
        <header>Login</header>
        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <a href="#">Forgot password?</a>
            <input type="submit" class="button" value="Login">
        </form>
        <div class="signup">
            <span class="signup">Don't have an account?
                <label for="check">Signup</label>
            </span>
        </div>
    </div>

    <!-- Signup Form -->
    <div class="registration form">
        <header>Signup</header>
        <form action="signup.php" method="POST">
            <input type="text" name="name" placeholder="Enter your Full Name" required>
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="Create a password" required>
            <input type="submit" class="button" value="Signup">
        </form>
        <div class="signup">
            <span class="signup">Already have an account?
                <label for="check">Login</label>
            </span>
        </div>
    </div>
</div>

</body>
</html>