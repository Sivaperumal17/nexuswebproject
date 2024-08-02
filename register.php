

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./main.css">

   <!-- Font Awesome CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

   <!-- custom JavaScript for password toggle -->
   <script>
      function togglePassword(inputId, iconId) {
         var passwordInput = document.getElementById(inputId);
         var eyeIcon = document.getElementById(iconId);

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
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <div style="position: relative;">
         <input type="password" id="password" name="password" required placeholder="enter your password">
         <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);">
            <i id="eye-icon-password" class="fas fa-eye" onclick="togglePassword('password', 'eye-icon-password')" style="cursor: pointer;"></i>
         </span>
      </div>
      <div style="position: relative;">
         <input type="password" id="cpassword" name="cpassword" required placeholder="confirm your password">
         <span style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%);">
            <i id="eye-icon-cpassword" class="fas fa-eye" onclick="togglePassword('cpassword', 'eye-icon-cpassword')" style="cursor: pointer;"></i>
         </span>
      </div>
      <select name="user_type">
         <option value="admin">Staff</option>
         <option value="user">Representative</option>
         
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

</body>
</html>