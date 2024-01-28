


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css">
  <title>Profile</title>
</head>
<body>
  <!-- nav here -->
  <?php include '../components/nav.php';?>  

  <div class="profile-wrapper-pro main">
    <div class="profile-menu-pro sidebar" id="" >
      <div class="profile-info">
      <div class="image-wrapper">
        <?php
            $imageDirectory = '../img/';
            $profileImage = 'profile-picture.jpg';
            echo '<img src="' . $imageDirectory . $profileImage . '" alt="profile image" class="profile-image-sm">';
        ?> 
      </div>

      <div class="profile-name-pro">
          <span class="">Kweku Aikins</span>        
      </div>
      </div>
    
      <div class="profile-links">
        <ul>
          <li><a href="?page=dashboard">dashboard</a></li>
          <li><a href="?page=orders">orders</a></li>
          <li><a href="?page=account">account details</a></li>
          <li><a href="../main.php">logout</a></li>
        </ul>
      </div>
    </div>

    <div class="profile-details">
      <?php
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

        switch ($currentPage) {
          case 'dashboard':
            echo '<h4>Hello, Kweku !</h4>';
            echo '<p>Welcome to the profile page</p>';
            break;
          case 'orders':
            echo '<h4>Orders</h4>';
            echo '<div class="orders">
                    <p>No orders made yet.</p>
                    <div class="btn"><a href="../pages/products.php">Browse Products</a></div>
                  </div>';
            break;
          case 'account': 
            echo '<div class="register-form-wrapper profile-pro">
              <form action="">
                  <div class="form-inputs-wrapper formx">
                      <div class="form-input-field">
                          <label for="name">First name <sup>*</sup></label>
                          <input type="name" name="name" maxlength="20" required placeholder="Enter your first name" oninput="this.value.replace(/\s/g,\'\')">
                      </div>

                      <div class="form-input-field">
                          <label for="name">Last name <sup>*</sup></label>
                          <input type="name" name="name" maxlength="20" required placeholder="Enter your last name" oninput="this.value.replace(/\s/g,\'\')">
                      </div>

                      <div class="form-input-field">
                          <label for="name">Display name<sup>*</sup></label>
                          <input type="name" name="name" maxlength="20" required placeholder="Enter your display name" oninput="this.value.replace(/\s/g,\'\')">
                      </div>

                      <div class="form-input-field">
                          <label for="email">Email <sup>*</sup></label>
                          <input type="email" name="email" maxlength="20" required placeholder="Enter a valid email" oninput="this.value.replace(/\s/g,\'\')">
                      </div>

                      <div class="change-password">Change Password</div>

                      <div class="form-input-field">
                          <label for="password">Current Password <sup>*</sup></label>
                          <input type="password" name="password" maxlength="20" required placeholder="Enter your password" oninput="this.value.replace(/\s/g,\'\')">
                      </div>

                      <div class="form-input-field">
                          <label for="password">New Password <sup>*</sup></label>
                          <input type="password" name="password" maxlength="20" required placeholder="Enter your password" oninput="this.value.replace(/\s/g,\'\')">
                      </div>

                      <div class="form-input-field">
                          <label for="password">Confirm New Password <sup>*</sup></label>
                          <input type="password" name="password" maxlength="20" required placeholder="Enter your password" oninput="this.value.replace(/\s/g,\'\')">
                      </div>
                  </div>

                  <button class="btn" type="submit" value="Submit">Save Changes</button>

               
              </form>
          </div>';
    break;
            // echo '<h4>Account Details</h4>';
            // echo '<p>Your account details content goes here.</p>';
            // break;
        }
        ?>
      </div>
 
</body>
</html>