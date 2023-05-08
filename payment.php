<?php
// Define the JSON file path
$jsonFilePath = 'data.json';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $id = $_POST['id'];
    $day = $_POST['day'];
    $time = $_POST['time'];
    $address = $_POST['address'];
    $play_name = $_POST['plays'];
    $price = $_POST['price'];
    $seats = [];

    if (isset($_POST['seatA1'])) {
        $seats[] = 'A1';
    }
    if (isset($_POST['seatA2'])) {
        $seats[] = 'A2';
    }
    if (isset($_POST['seatA3'])) {
        $seats[] = 'A3';
    }
    if (isset($_POST['seatA4'])) {
        $seats[] = 'A4';
    }
    if (isset($_POST['seatA5'])) {
        $seats[] = 'A5';
    }
    if (isset($_POST['seatB1'])) {
        $seats[] = 'B1';
    }
    if (isset($_POST['seatB2'])) {
        $seats[] = 'B2';
    }
    if (isset($_POST['seatB3'])) {
        $seats[] = 'B3';
    }
    if (isset($_POST['seatB4'])) {
        $seats[] = 'B4';
    }
    if (isset($_POST['seatB5'])) {
        $seats[] = 'B5';
    }
    if (isset($_POST['seatC1'])) {
        $seats[] = 'C1';
    }
    if (isset($_POST['seatC2'])) {
        $seats[] = 'C2';
    }
    if (isset($_POST['seatC3'])) {
        $seats[] = 'C3';
    }
    if (isset($_POST['seatC4'])) {
        $seats[] = 'C4';
    }
    if (isset($_POST['seatC5'])) {
        $seats[] = 'C5';
    }
    if (isset($_POST['seatD1'])) {
        $seats[] = 'D1';
    }
    if (isset($_POST['seatD2'])) {
        $seats[] = 'D2';
    }
    if (isset($_POST['seatD3'])) {
        $seats[] = 'D3';
    }
    if (isset($_POST['seatD4'])) {
        $seats[] = 'D4';
    }
    if (isset($_POST['seatD5'])) {
        $seats[] = 'D5';
    }

    // Define the new data
    $newData = array(

        'name' => $name,
        'id' => $id,
        'address' => $address,
        'day' => $day,
        'time' => $time,
        'plays' => $play_name,
        'seats' => $seats,
        'price' => $price
    );

    // Read the existing data from the JSON file
    $jsonData = file_get_contents($jsonFilePath);
    $data = json_decode($jsonData, true);

    // Add the new data to the existing data
    $data[] = $newData;

    // Write the updated data to the JSON file
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($jsonFilePath, $jsonData);

    // Redirect the user to a success page
    header('Location: confirmation.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" type="image/x-icon" href="logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Payment Page.css" />
    <title>Payment Page</title>
</head>

<body onload="seats()">
    <div class="container">
        <form method="post">
            <h4 class="h4main">Payment Details</h4>
            <div class="menu">
                <select id="menu" name="day" required>
                    <option value="" selected disabled>Day</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                </select>
                <select id="menu" name="time" required>
                    <option value="" selected disabled>Time</option>
                    <option value="6PM">6PM</option>
                    <option value="8PM">8PM</option>
                    <option value="10PM">10PM</option>
                    <option value="12AM">12AM</option>
                    <option value="2AM">2AM</option>
                </select>
                <select id="menu" name="address" required>
                    <option value="" selected disabled>Address</option>
                    <option value="Madinty">Madinty</option>
                    <option value="Al Rehab">Al Rehab</option>
                    <option value="Fifth Settlement">Fifth Settlement</option>
                    <option value="Down Town">Down Town</option>
                    <option value="Dandy mall">Dandy mall</option>
                </select>
                <select id="play" name="plays" required>
                    <option value="ids" selected disabled>play name</option>
                    <option value="id=10005000">romeo and juliet</option>
                    <option value="10006000">Antony and clepatra</option>
                    <option value="10007000">Merchant of Venice</option>
                    <option value="10008000">Julius Caesar</option>
                    <option value="10009000">كده اوكيه</option>
                    <option value="10005050">مدرسة المشاغبين</option>
                    <option value="10006050">الزعيم</option>
                    <option value="10007050">Frozen</option>
                    <option value="10008050">The lion king</option>
                </select>
            </div>
            <div class="input-group">
                <div class="input-box1">
                    <h4>Select seats</h4>
                    <input type="checkbox" id="a1" name="seatA1" class="checkbox" />
                    <label for="a1">A1</label>
                    <input type="checkbox" id="a2" name="seatA2" class="checkbox" />
                    <label for="a2">A2</label>
                    <input type="checkbox" id="a3" name="seatA3" class="checkbox" />
                    <label for="a3">A3</label>
                    <input type="checkbox" id="a4" name="seatA4" class="checkbox" />
                    <label for="a4">A4</label>
                    <input type="checkbox" id="a5" name="seatA5" class="checkbox" />
                    <label for="a5">A5</label>
                    <input type="checkbox" id="b1" name="seatB1" class="checkbox" />
                    <label for="b1">B1</label>
                    <input type="checkbox" id="b2" name="seatB2" class="checkbox" />
                    <label for="b2">B2</label>
                    <input type="checkbox" id="b3" name="seatB3" class="checkbox" />
                    <label for="b3">B3</label>
                    <input type="checkbox" id="b4" name="seatB4" class="checkbox" />
                    <label for="b4">B4</label>
                    <input type="checkbox" id="b5" name="seatB5" class="checkbox" />
                    <label for="b5">B5</label>
                    <input type="checkbox" id="c1" name="seatC1" class="checkbox" />
                    <label for="c1">C1</label>
                    <input type="checkbox" id="c2" name="seatC2" class="checkbox" />
                    <label for="c2">C2</label>
                    <input type="checkbox" id="c3" name="seatC3" class="checkbox" />
                    <label for="c3">C3</label>
                    <input type="checkbox" id="c4" name="seatC4" class="checkbox" />
                    <label for="c4">C4</label>
                    <input type="checkbox" id="c5" name="seatC5" class="checkbox" />
                    <label for="c5">C5</label>
                    <input type="checkbox" id="d1" name="seatD1" class="checkbox" />
                    <label for="d1">D1</label>
                    <input type="checkbox" id="d2" name="seatD2" class="checkbox" />
                    <label for="d2">D2</label>
                    <input type="checkbox" id="d3" name="seatD3" class="checkbox" />
                    <label for="d3">D3</label>
                    <input type="checkbox" id="d4" name="seatD4" class="checkbox" />
                    <label for="d4">D4</label>
                    <input type="checkbox" id="d5" name="seatD5" class="checkbox" />
                    <label for="d5">D5</label>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4>Tickets</h4>
                    <input type="number" name="numbertick" class="tickets" id="number" value="0" readonly />
                </div>
                <div class="input-box">
                    <h4>Total price</h4>
                    <input type="number" name="price" class="tickets" id="price" value="0" readonly />
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4>Name</h4>
                    <input type="text" name="name" class="name" placeholder="Full Name" required />
                </div>
                <div class="input-box">
                    <h4>ID</h4>
                    <input type="number" name="id" class="name" placeholder="Your id" />
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="radio" name="pay method" class="radio" id="option1" value=" Credit Card" checked />
                    <label for="option1"><span>Credit Card</span></label>
                    <input type="radio" name="pay method" class="radio" id="option2" value="cash" />
                    <label for="option2"><span>Cash</span></label>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="tel" name="cardnum" class="name" id="input" placeholder="Card Number" pattern="[0-9]{16}" title="Visa cards have a length of 16 digits." maxlength="16" disabled required />
                </div>
                <div class="input-box">
                    <input type="tel" name="cvvnum" class="name" id="input1" placeholder="CVV" pattern="[0-9]{3}" title="CVV number have a length of 3 digits." maxlength="3" disabled required />
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <button type="submit">CONFIRM</button>
                </div>
            </div>
        </form>
    </div>

    <script src="Payment.js"></script>
</body>

</html>