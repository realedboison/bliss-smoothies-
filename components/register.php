<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="../styles.css"> -->
  <link rel="stylesheet" href="../styles.css">
  <!-- <link rel="stylesheet" href="admin_styles.css?v=<?php echo time(); ?>"> -->
  <title>Bliss | Register</title>
</head>
<body>
  <!-- <div class=""> -->
  <div class="main register-wrapper">
  <h3>Register</h3>

    <div class="register-form-wrapper">
      <form action="">
        
      <div class="form-inputs-wrapper">
      <div class="form-input-field">
              <label for="name">Name <sup>*</sup></label>
                <input type="name" name="name" maxlength="20" required  placeholder="Enter your username" oninput="this.value.replace(/\s/g,'')">
              </div>

              <div class="form-input-field">
                <label for="email">Email <sup>*</sup></label>
                <input type="email" name="email" maxlength="20" required  placeholder="Enter a valid email" oninput="this.value.replace(/\s/g,'')">
              </div>

              <div class="form-input-field">
                <label for="password">password <sup>*</sup></label>
                <input type="password" name="password" maxlength="20" required  placeholder="Enter your password" oninput="this.value.replace(/\s/g,'')">
              </div>

              <div class="form-input-field">
                <label for="password">confirm password <sup>*</sup></label>
                <input type="password" name="cpassword" maxlength="20" required  placeholder="Confirm your password" oninput="this.value.replace(/\s/g,'')">
              </div>
      </div>
      
        <button class="btn" type="submit" value="Submit">submit</button>
        <div class="cta-wrapper">Already have an account ? <a href="login.php" class="cta"><span>login</span></a></div>
      </form>
    </div>
  </div>
  <!-- </div> -->
</body>
</html>