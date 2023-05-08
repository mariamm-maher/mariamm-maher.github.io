<?php
//////////////////////delete operation//////////////
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get form data
    $id = $_POST['id'];

    // Load existing data from JSON file
    $data = file_get_contents('plays.json');
    $plays = json_decode($data, true);

    // Find the index of the play with the specified ID
    $index = -1;
    foreach ($plays as $key => $play) {
        if ($play['id'] == $id) {
            $index = $key;
            break;
        }
    }

    // Remove the play from the array if found
    if ($index >= 0) {
        array_splice($plays, $index, 1);

        // Save the updated data back to the JSON file
        $json_data = json_encode($plays, JSON_PRETTY_PRINT);
        file_put_contents('plays.json', $json_data);

        // Output success message
        $output_message = 'The play is deleted successfully';
        echo '<div class="output-message">' . $output_message . '</div>';
    } else {
        // Output error message
        $output_message = 'Play not found';
        echo '<div class="output-message error">' . $output_message . '</div>';
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor.css">
    <link rel="stylesheet" href="online.css">
    <title>Vendor page</title>
</head>

<body>


    <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>

        </div>
        <div class="sidebar">
            <div class="profile">
                <!-- <img src="https://1.bp.blogspot.com/-vhmWFWO2r8U/YLjr2A57toI/AAAAAAAACO4/0GBonlEZPmAiQW4uvkCTm5LvlJVd_-l_wCNcBGAsYHQ/s16000/team-1-2.jpg" alt="profile_picture"> -->
                <h3>GO TEATRO</h3>
                <!-- <p>Designer</p> -->
            </div>
            <form method="get">
                <label for="query">Search:</label>
                <input type="text" id="query" name="q" value="<?php echo isset($query) ? htmlspecialchars($query) : ''; ?>">
                <button type="submit">Search</button>
            </form>

            <ul>
                <li>
                    <a href="clienthome.php" class="active"> <!--  dont forget to chang it in vendor page -->
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="account.php">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">My account</span>
                    </a>
                </li>
                <li>
                    <a href="food.php">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Food</span>
                    </a>
                </li>
                <li>
                    <a href="Contact Us.html">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">Contact us</span>
                    </a>
                </li>

                <li>
                    <a href="payment.php">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="item">Payment</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">LOGOUT</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
    <script src="online.js"></script>

    <div class="main">

        <div class="container">
            <section class="sec1">
                <h2> romeo and juliet</h2>
                <img src="R.jfif" alt="romeo and juliet" width="300px" height="400">
                An age-old vendetta between two powerful families erupts into bloodshed.
                A group of masked Montagues risk further conflict by gatecrashing a Capulet party.
                A young lovesick Romeo Montague falls instantly in love with Juliet Capulet, who is
                due to marry her father's choice.



                <p>250 LE</p>


            </section>
            <section class="sec1">
                <h2>Antony and clepatra </h2>
                <img src="antony-and-cleopatra.jpg" alt="cleopatra" width="300px" height="400">
                The love affair between Mark Antony,
                the Roman military leader and Cleopatra,
                the queen of Egypt. Cleopatra is notorious for having charmed some of the great men of her era,
                including Caesar; Antony himself loves her passionately. Antony, however,
                is married to Fulvia, who is an enemy of Antony’s fellow triumvir, Octavius
                Caesar. While Antony is in Egypt with Cleopatra, he receives word that
                Fulvia has died, and he must return to Rome. There he marries Octavius’s
                sister Octavia in an attempt to heal the political rift. Cleopatra is furious
                when she hears about the marriage.War breaks out between Octavius and Antony.



                <p>250 LE</p>





            </section>
        </div>

        <div class="container">
            <section class="sec1">
                <h2>Merchant of Venice</h2>
                <img src="665210d6-7b13-472c-825e-0898dad3641f.jpg" alt="Merchant of Venice" width="300px" height="400">
                <div class="description">
                    Antonio, an antisemitic merchant, takes a .
                    loan from the Jew Shylock to help his friend to court Portia.
                    Antonio can't repay the loan, and without mercy, Shylock demands
                    a pound of his flesh. The heiress Portia, now the wife of Antonio's
                    friend, dresses as a lawyer and saves Antonio


                    <p>250 LE</p>




            </section>
            <section class="sec1">
                <h2>Julius Caesar </h2>
                <img src="R (1).jfif" alt="Julius Caesar" width="300px" height="400">
                <div class="description">
                    Jealous conspirators convince Caesar's friend Brutus to join
                    their assassination plot against Caesar. To stop Caesar from
                    gaining too much power, Brutus and the conspirators kill him
                    on the Ides of March. Mark Antony drives the conspirators out
                    of Rome and fights them in a battle.


                    <p>250 LE</p>



            </section>
        </div>

        <div class="container">
            <section class="sec1">
                <h2>كده اوكيه</h2>
                <img src="mov55.jpg" alt="كده اوكيه" width="300px" height="400">
                <div class="description">
                    يتراهن مدير إحدى القنوات الفضائية مع مذبع شاب على قوة النقود وقدرتها فى تحويل

                    ابنة الجناينى إلى نجمة مشهورة بل وجعل خطيبة أحد المعدين تتركه
                    وتحب المدير وينجح في ذلك، لكن الأمور تأخذ طريقًا آخر
                </div>
                <p>200 LE</p>

                </form>
            </section>
            <section class="sec1">
                <h2>مدرسة المشاغبين</h2>
                <img src="_315x420_0c9c84f22f140830febfcafc0efdc01771e97705b4fc834cdf658cd559a2941c.jpg" مدرسة المشاغبين" width="300px" height="350">
                <div class="description">
                    مدرسة بها أكثر 5 طلاب مشهورين في البلاد والذين يواصلون الفشل ويستعيدون عامهم الأخير
                    من المدرسة الثانوية. تؤدي مقالب الطلاب المستمرة كل المعلمين إلى انهيار عقلي مما يجبرهم
                    على ترك المدرسة.هذا يجبر مدير المدرسة “حسن مصطفى” على قصر موارد المدرسة
                    على فصل واحد للخمسة وتعليمهم بنفسه في وقت لاحق من المسرحية تتطوع معلمة أخرى
                    “سهير البابلي” لمساعدةالطلاب باستخدام طرق تدريس غير تقليدي

                    <p>200 LE</p>



            </section>
        </div>

        <div class="container">

            <section class="sec1">
                <h2>الزعيم</h2>
                <img src="azaeem1.jpg" alt="الزعيم" width="300px" height="400">
                <div class="description">
                    زينهم رجل بسيط، يعمل كومبارس في السينما، ويشبه زعيم البلاد لحد التطابق،
                    ويستغل رجال الدولة هذا التشابه بعد وفاة الزعيم ويطلبوا منه أداء شخصية الزعيم كأنه لا زال حيًا
                </div>
                <p>200 LE</p>


            </section>
        </div>

        <form method="POST">
            <div class="container-h">
                <div class="input-group">
                    <div class="input-box">
                        <h4>play name</h4>
                        <input type="text" name="title" class="input" required id="name" />
                    </div>
                    <div class="input-box">
                        <h4>Play ID</h4>
                        <input type="number" name="id" required id="des" class="input" />
                    </div>
                    <div class="input-box">
                        <h4>description</h4>
                        <input type="text" name="description" required id="des" class="input" />
                    </div>
                    <div class="input-box">
                        <h4>Price</h4>
                        <input type="number" name="price" required id="des" class="input" />
                    </div>
                    <div class="input-group">
                        <div class="input-box">
                            <button type="submit">Add</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>

        <div class="center">

            <div class="deleting">
                <form method="post" action="delete.php">
                    <label for="play_id">Play ID:</label>
                    <input type="text" id="play_id" name="id" required>
                    <input type="submit" value="Delete" class="delbtn">
                </form>
            </div>
        </div>
        <br><br>
        <div class="tablelist">
            <a href="table.php" class="button-link">Booking Schedule</a>
        </div>
        </main>
        <br>
        <hr><br>
        <div class="location">
            <h1>Our Locations</h1>
            <ul class="location-list">
                <li>Madinty</li>
                <li>Al Rehab</li>
                <li>Fifth Settlement</li>
                <li>Down Town</li>
                <li>Dandy mall</li>
            </ul>
        </div>
    </div>
</body>





</html>