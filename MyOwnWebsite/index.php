<?php
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header1.php"; ?>
  <body>
    <div class="signup-body">
    <div class="wrapper">
      <section class="form signup">
        <header>SignUp chat with Behroz</header>
        <form action="#" enctype="multipart/form-data" >
          <div class="error-txt"></div>
          <div class="name-details">
            <div class="field input">
              <label>Fist Name</label>
              <input type="text" name="fname" placeholder="First Name" required />
            </div>
            <div class="field input">
              <label>Last Name</label>
              <input type="text" name="lname" placeholder="Last Name" required />
            </div>
          </div>
          <div class="field input">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="Enter your email" required />
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required />
            <i class="fas fa-eye" id="sign-eye"></i>
          </div>
          <div class="field image" >
            <label>Select Image</label>
            <input type="file" name="image" required/>
          </div>
          <div class="field button">
            <input type="submit" value="Continue to chat" /><span></span>
          </div>
        </form>
        <div class="link">Alread signed up? <a href="login.php">Login now</a></div>
      </section>
    </div>
    </div>
    
    <script src="./javascript/pass-show-hide.js"></script>
    <script src="./javascript/signup.js"></script>
  </body>
</html>
