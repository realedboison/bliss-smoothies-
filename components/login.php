<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="../styles.css"> -->
  <link rel="stylesheet" href="../styles.css">
  <!-- <link rel="stylesheet" href="admin_styles.css?v=<?php echo time(); ?>"> -->
  <title>Bliss | Login</title>
</head>
<body>
  <!-- <div class=""> -->
  <div class="main login-wrapper">
  <h3>Login</h3>

    <div class="login-form-wrapper">
      <form action="">
        
      <div class="form-inputs-wrapper">
      <div class="form-input-field">
              <label for="email">email <sup>*</sup></label>
                <input type="email" name="email" maxlength="20" required  placeholder="Enter your user email" oninput="this.value.replace(/\s/g,'')">
              </div>

              <div class="form-input-field">
                <label for="password">password <sup>*</sup></label>
                <input type="password" name="password" maxlength="20" required  placeholder="Enter your user password" oninput="this.value.replace(/\s/g,'')">
              </div>
      </div>
      
        <button class="btn" type="submit" value="Submit">submit</button>

        <div class="cta-wrapper">Don't have an account ? <a href="register.php" class="cta"><span>register</span></a></div>
      </form>
    </div>
  </div>
  <!-- </div> -->
</body>
</html>