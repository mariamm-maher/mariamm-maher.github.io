<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   // Get form data
   $fullname = $_POST['fullname'];
   $email = $_POST['Email'];
   $id = $_POST['ID'];
   $phone = $_POST['phone'];
   $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
   $gender = $_POST['Gender'];
   $terms = $_POST['terms'];

   // Read the existing JSON data from the file, or create an empty array if the file doesn't exist
   $file = 'users.json';
   if (file_exists($file)) {
      $existing_data = file_get_contents($file);
      $existing_data_array = json_decode($existing_data, true);
   } else {
      $existing_data_array = array();
   }

   // Add new user to data array
   $new_user = array(
      'fullname' => $fullname,
      'Email' => $email,
      'ID' => $id,
      'phone' => $phone,
      'password' => $password,
      'Gender' => $gender,
      'terms' => $terms
   );
   $existing_data_array[] = $new_user;

   // Save data to JSON file
   $json_data = json_encode($existing_data_array);
   file_put_contents($file, $json_data);

   // Check if JavaScript function returned true
   if ($_POST['js_validation'] == 'true') {
      // Redirect to signin.php
      header('Location: signin.php');
      exit;
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Registration Form</title>
   <link rel="stylesheet" href="GO TEATROs2.CSS">
   <link rel="icon" type="image/x-icon" href="logo.png" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
   <div class="container">
      <form method="post" action="registration.php" onsubmit="return validateForm()">
         <h2>Registration</h2>
         <div class="content"></div>
         <div class="input-group">
            <div class="input-box">
               <label for="Name">Full Name</label>
               <input type="text" placeholder="Enter Your Full Name" name="fullname" required>
            </div>
            <div class="input-box">
               <label for="email" title="Please enter a valid email address">Email Address </label>
               <input type="email" placeholder="Enter Valid Email Address" name="Email" required />
            </div>
         </div>
         <div class="input-group">
            <div class="input-box">
               <label for="Name">ID (ONLY FOR ADMIN)</label>
               <input type="text" placeholder="Enter Your ID" name="ID" pattern="[0-9]{8}" title="ID must have a length of 8 digits." maxlength="8" data-toggle="tooltip" data-placement="top" title="ID must have a length of 8 digits.">
            </div>
            <div class="input-box">
               <label for="phone Number">Phone Number (ONLY FOR CLIENTS)</label>
               <input type="tel" placeholder="Enter Your Phone Number" name="phone" pattern="[0]{1}[1]{1}[0,1,2,5]{1}[0-9]{8}" title="Phone number must have a length of 11 digits." maxlength="11" data-toggle="tooltip" data-placement="top" title="Phone number must have a length of 11 digits." />
            </div>
         </div>
         <div class="input-group">
            <div class="input-box">
               <label for="password">Password</label>
               <input type="password" placeholder="Enter New Password" name="password" id="password" required />
            </div>
            <div class="input-box">
               <label for="Cpassword">Confirm Password</label>
               <input type="password" placeholder="Confirm Your Password" name="confirmPassword" id="confirmPassword" required />
            </div>
         </div>
         <div id="errors"></div>
         <div class="gender">
            <span class="Gender_title">Gender</span>
            <div class="gender-category">
               <input type="radio" name="Gender" value="male" id="Male" required />
               <label for="Male">Male</label>
               <input type="radio" name="Gender" value="female" id="Female" />
               <label for="Female">Female</label>
            </div>
         </div>
         <div class="Alert">
            <p>
               By clicking submit you agree to our
               <a href="#">Term, </a><a href="#">Privacy Policy,</a>and<a href="#">Cookies Policy, </a>
               you may receive SMS notifications from us and can opt out at any time.
            </p>
         </div>
         <div class="terms">
            <input type="checkbox" name="terms" id="terms" required />
            <label for="terms">Agreed To Terms And Conditions</label>
         </div>
         <div class="buttom-container">
            <input type="hidden" id="js_validation" name="js_validation" value="false">
            <button type="submit">SUBMIT</button>
         </div>
      </form>
   </div>
   <script>
      function validatePassword(password) {
         const errors = [];

         if (!password) {
            errors.push("Password is required.");
         }

         if (password && password.length < 8) {
            errors.push("Password must be at least 8 characters long.");
         }

         if (password && !/^[A-Z]/.test(password)) {
            errors.push("Password must start with an uppercase letter.");
         }

         // if (password && !/^[A-Za-z0-9]+$/.test(password)) {
         //    errors.push("Password must be alphanumeric.");
         // }

         if (password && !/[@$!%*?&]/.test(password)) {
            errors.push(
               'Password must contain at least one special character (@, $, !, &, etc).'
            );
         }

         return errors;
      }

      function validateForm() {
         const password = document.getElementById("password").value;
         const confirmPassword =
            document.getElementById("confirmPassword").value;
         const errors = validatePassword(password);

         if (password !== confirmPassword) {
            errors.push("Passwords do not match.");
         }

         if (errors.length > 0) {
            const errorsDiv = document.getElementById("errors");
            errorsDiv.innerHTML = "";

            errors.forEach((error) => {
               const errorP = document.createElement("p");
               errorP.innerText = error;
               errorsDiv.appendChild(errorP);
            });

            return false;
         }

         // Set hidden input value to true
         document.getElementById("js_validation").value = true;
         return true;
      }
   </script>
</body>

</html>