<?php

// Define the JSON file path
$jsonFilePath = 'data.json';

// Read the data from the JSON file
$jsonData = file_get_contents($jsonFilePath);
$data = json_decode($jsonData, true);

// Get the last element in the array (assuming it's the most recent entry)
$lastEntry = end($data);

// Extract the relevant data
$name = $lastEntry['name'];
$id = $lastEntry['id'];
$play_name = $lastEntry['plays'];
$price = $lastEntry['price'];
$address = $lastEntry['address'];
$day = $lastEntry['day'];
$time = $lastEntry['time'];
$seats = implode(", ", $lastEntry['seats']);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Booking Confirmation</title>
    <link rel="icon" type="image/x-icon" href="logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mariam.css" />

</head>

<body>
    <div class="container">
        <div class="booking">
            <h1>Booking Confirmation</h1>
            <p>Thank you for your booking! Here is your booking information:</p>
        </div>
        <pre><span class="label">  Name:  </span>  <?php echo   $name   ?>     </pre>
        <pre><span class="label">  Date:    </span>  <?php echo  $day . "   at  " .  $time  ?> </pre>
        <pre><span class="label">  Customer ID: </span> <?php echo    $id   ?>               </pre>
        <pre><span class="label">  Play ID:   </span><?php echo    $play_name ?>  </pre>
        <pre><span class="label">  Seat number:   </span><?php echo   $seats   ?>  </pre>
        <pre><span class="label">   Total price:  </span><?php echo   $price    ?>  </pre>
        <br>

        <div class="final-btn">
            <a href="logout.php" class="button">Logout</a>
            <a href="payment.php" class="button">Book Another Ticket</a>
        </div>
    </div>

</body>

</html>