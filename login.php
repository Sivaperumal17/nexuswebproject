
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./main.css">
   <style>
   body{
       background-color:#fff;
   }
.blinking-text {
    animation: blink 3.0s linear infinite; /* Adjusted duration */
    color: #F93005; /* Set text color to red */
}

@keyframes blink {
    0%, 50%, 100% {
        opacity: 1;
    }
    25%, 75% {
        opacity: 0;
    }
} </style>

   <!-- Font Awesome CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   
   <!-- custom JavaScript for password toggle -->
   <script>
      function togglePassword() {
         var passwordInput = document.getElementById('password');
         var eyeIcon = document.getElementById('eye-icon');

         if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
         } else {
            passwordInput.type = "password";
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
         }
      }
   </script>
</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
     
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <div style="position: relative;">
         <input type="password" id="password" name="password" required placeholder="enter your password">
         <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);">
            <i id="eye-icon" class="fas fa-eye" onclick="togglePassword()" style="cursor: pointer;"></i>
         </span>
      </div>
      <input type="submit" name="submit" value="login now" class="form-btn">
    <a href="./forgot_password.html">Forgot Password?</a><br>
    <a href="./register.php">Register!!</a><br>
   </form>

</div>
 
</body>
</html>
