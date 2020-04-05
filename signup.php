<?php
    include('common.php');
    outputHeader();
?>
  <link rel="stylesheet" type="text/css" href="css/signUp.css"/>
  <script src="js/register.js"></script>
  <div class="main">
      <div class="containerSignUp">
          <h1 id="title">Sign Up</h1>
            <label><b>User Name</b></label>
                <input type="text" placeholder="Enter Name" name="username" id="username" required>
            <label><b>First Name</b></label>
                <input type="text" placeholder="Enter First Name" name="firstName" id="firstName" required>
            <label><b>Last Name</b></label>
                <input type="text" placeholder="Enter Last Name" name="lastName" id="lastName" required>
            <label><b>Home Address</b></label>
                <input type="text" placeholder="Enter Home Address" name="address" id="address" required>
            <label><b>Phone Number</b></label>
                <input type="text" placeholder="Enter Phone Number" name="phone" id="phone" required>
             <label><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" required>
            <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" id="pass" required>
            <form id="options">
              Select your Payment method:
              <select id="select">
                <option value="Paypal">Paypal</option>
                <option value="Master-Card">Master Card </option>
              </select>
            </form>
            <input type="submit" id="signupbtn" class="signupbtn" onclick="return register()">
      </div>
  </div>
<?php
    outputFooter();
?>