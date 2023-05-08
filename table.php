<?php

// Define the JSON file path
$jsonFilePath = 'data.json';

// Read the data from the JSON file
$jsonData = file_get_contents($jsonFilePath);
$data = json_decode($jsonData, true);

// Get the last four elements in the array
$lastFour = array_slice($data, -4);

?>

<html>

<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">


</head>

<body>
    <br>

    <h1> - Booking data schedule </h1>
    <br><br>

    <table>

        <tr>
            <th>name</th>
            <th>costumer id</th>
            <th>movie id</th>
            <th>number of seat</th>
        </tr>

        <?php
        // Loop through the last four entries
        foreach ($lastFour as $entry) {
            // Extract the relevant data
            $name = $entry['name'];
            $id = $entry['id'];
            $play_name = $entry['plays'];
            $seats = implode(", ", $entry['seats']);
            // Display the data in a table row
            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$id</td>";
            echo "<td>$play_name</td>";
            echo "<td>$seats</td>";
            echo "</tr>";
        }
        ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>

</html>