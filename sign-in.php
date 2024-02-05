<?php
session_start();
error_reporting(0);
include('admin/includes/config.php');
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $newpassword = $_POST['newpassword'];
    $sql = "SELECT email FROM users WHERE email=:email";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        $con = "update users set password=:newpassword where email=:email";
        $chngpwd1 = $dbh->prepare($con);
        $chngpwd1->bindParam(':email', $email, PDO::PARAM_STR);
        $chngpwd1->bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
        $chngpwd1->execute();
        echo "<script>
      alert('Password Changed Successfully 😊');
      window.location.href='sign-in.php';
      </script>";
    } else {
        echo "<script>
      alert('Email Id Is Invalid 😒');
      window.location.href='sign-in.php';
      </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traveler – Travel & Trip Business</title>
    <style>
        /* Css for forgot password */
        /* Style for the popup window */
    .popup {
  display: none; /* Hide the popup by default */
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
}

.popup-content {
  background-color: #ffffff;
  margin: 10% auto;
  padding: 20px;
  max-width: 350px;
  border-radius: 7px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
}

h2 {
  margin: 10px 0 20px 0;
}

form {
  margin-top: 20px;
}

label {
  display: block;
  font-weight: bold;
    margin-bottom: 10px;
}

input[type="email"],
input[type="password"],
input[type="submit"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 7px;
  background-color: #eee;
}

input[type="submit"] {
  background-color: #008ecf;
  color: white;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #1db8ff;
}

</style>
    
    <style>
    /* Import Google font - Poppins */
/* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap'); */
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
 font-family: 'Montserrat', sans-serif;
}

.container{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 380px;
  width: 100%;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.3);
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
  font-weight: 700;
  text-align: center;
  margin-bottom: 2rem;
}
 .form input{
   /* height: 60px; */
   width: 100%;
   padding: 12px 15px;
   font-size: 17px;
   margin-bottom: 1.5rem;
   border: 1px solid #ddd;
   border-radius: 6px;
   outline: none;
 }
 .form input:focus{
   box-shadow: 0 1px 0 rgba(0,0,0,0.2);
 }
.form a{
  font-size: 16px;
  color: #008ecf;
  text-decoration: none;
}
.form a:hover{
  text-decoration: underline;
}

.signup{
  font-size: 17px;
  text-align: center;
}
.signup label{
  color: #008ecf;
  cursor: pointer;
}
.signup label:hover{
  text-decoration: underline;
}
button {
            border-radius: 6px;
            box-shadow: 0 1px 1px;
            border: 1px solid #008ecf;
            background: #008ecf;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
            margin: 15px 0 15px 0;
            width: 100%;
            cursor:pointer;
        }

        button:active {
            transform: scale(.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background: transparent;
            border-color: #fff;
        }
        /* Animated Wave Background Style  */
         html,
        body {
            width: 100%;
            height: 100%;
        }

        body {
            background: radial-gradient(ellipse at center, rgba(255, 254, 234, 1) 0%, rgba(255, 254, 234, 1) 35%, #3A78C9 100%);
            overflow: hidden;
            background-repeat: no-repeat;
        }


    </style>


</head>

<body>

    <!-- Log In Form Section -->
    <section>
   <div class="site-logo text-center" style="text-align: center; margin-top: 5px;">
               <h1 class="site-title">
                  <a href="index.php">
                     <img src="assets/images/site-logo.png" alt="Logo">
                  </a>
               </h1>
            </div>
    <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Log In</header>
      <form action="process.php" method="POST">
        <input name="email" type="email" placeholder="Email" required />
        <input name="password" type="password" placeholder="Password" required />
        <a style="cursor:pointer;" onclick="openPopup()">Forgot password?</a><br>
        <button name="login">Log In</button>
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
      </div>
    </div>
    
    <div class="registration form">
      <header>Sign Up</header>
      <form action="process.php" method="POST">
        <input type="text" name="name" placeholder="Name" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <input type="password" name="cpassword" placeholder="Confirm Password" required />
         <button name="signup">Sign Up</button>
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
    </section>
    <!-- The popup window -->
            <div id="popup" class="popup">
                <div class="popup-content">
                    <span class="close" onclick="closePopup()">&times;</span>
                    <h2>Forgot Password</h2>

                    <form method="POST" action="">
                        
                        <input type="email" name="email" class="form-control" id="email" placeholder="Reg Email id" required><br><br>

                        <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="New Password" required><br><br>

                        <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required><br><br>

                        <input type="submit" value="Submit" name="submit">
                    </form>
                </div>
            </div>

    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () =>
            container.classList.add('right-panel-active'));

        signInButton.addEventListener('click', () =>
            container.classList.remove('right-panel-active'));
    </script>
    <script>
        function openPopup() {
            document.getElementById("popup").style.display = "block";
        }

        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }
    </script>
</body>

</html>