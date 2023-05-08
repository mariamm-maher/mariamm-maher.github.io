<!DOCTYPE html>
<html>

<head>
   <link rel="icon" type="image/x-icon" href="logo.png" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>My Account</title>
   <style>
      /* Add some basic CSS styles */
      * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         font-family: 'Playfair Display', serif;
      }

      body {
         font-size: 20px;
         line-height: 1.5;
         margin: 0;
         padding: 0;
         color: white;
         background-color: #1c1b1b;

         /* Set the font color to white */
      }

      h1 {
         text-align: center;
         color: darkred;
         margin-top: 0;
      }

      table {
         border-collapse: collapse;
         width: 100%;
      }

      th,
      td {
         border: 1px solid #ddd;
         padding: 8px;
         text-align: left;
      }

      th {
         background-color: darkred;
      }

      .button {
         display: block;
         /* Change display to block */
         margin: 0 auto;
         /* Add auto margins */
         padding: 8px 16px;
         background-color: darkred;
         color: white;
         text-align: center;
         text-decoration: none;
         font-size: 16px;
         margin-top: 16px;
         border-radius: 4px;
         cursor: pointer;
      }
   </style>
</head>

<body>
   <h1>My Account</h1>
   <?php
   // Read the user data from the JSON file
   $file = 'users.json';
   if (file_exists($file)) {
      $data = file_get_contents($file);
      $users = json_decode($data, true);
   } else {
      $users = array();
   }

   // Find the last user's data in the user data array
   $last_user = end($users);

   // Display the last user's data in an HTML table
   if ($last_user) {
      echo '<table>';
      echo '<tr><th>Field</th><th>Value</th></tr>';
      echo '<tr><td>Full Name</td><td>' . $last_user['fullname'] . '</td></tr>';
      echo '<tr><td>Email</td><td>' . $last_user['Email'] . '</td></tr>';
      echo '<tr><td>ID</td><td>' . $last_user['ID'] . '</td></tr>';
      echo '<tr><td>Phone</td><td>' . $last_user['phone'] . '</td></tr>';
      echo '<tr><td>Gender</td><td>' . $last_user['Gender'] . '</td></tr>';
      echo '</table>';

      // Add a link to the home page
      echo '<a href="clienthome.php" class="button">Home</a>';
   } else {
      echo '<p>Error: User data not found.</p>';
   }
   ?>
</body>

</html>