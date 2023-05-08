<?php   ////search operation for the vendor///////
// Load the plays JSON file
$data = json_decode(file_get_contents('plays.json'), true);

// Initialize the search results array
$results = array();

// Check if the query parameter is set and not empty
if (isset($_GET['q']) && !empty($_GET['q'])) {
    $query = strtolower($_GET['q']);
    foreach ($data as $play) {
        if (strpos(strtolower($play['title']), $query) !== false) {
            $results[] = $play;
        }
    }
}

?>
<!-- <div class="main"> -->
<?php if (!empty($results)) : ?>
    <?php foreach ($results as $play) : ?>
        <div class="main">
            <section class="sec1">
                <img src="<?php echo $play['image']; ?>" alt="<?php echo $play['title']; ?>">
                <h2><?php echo $play['title']; ?></h2>
                <p><?php echo $play['description']; ?></p>
                <p>Price: LE<?php echo $play['price']; ?></p>
                <a href="paymentadmin.html" class="edit-link">Edit Booking</a>
            </section>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <?php if (isset($_GET['q'])) : ?>
        <p>not found</p>
    <?php endif; ?>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor.css">
    <link rel="stylesheet" href="online.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
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
            <form method="get" action="">
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



                <p class="price">
                    <span class="currency">200LE</span>
                </p>
                <p class="play-id">
                    <span class="label">ID: 10005000</span>

                </p>
                <a href="paymentadmin.html" class="edit-link">Edit Booking</a>
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



                <p class="price">
                    <span class="currency">200LE</span>
                </p>
                <p class="play-id">
                    <span class="label">ID: 10006000</span>

                </p>

                <a href="paymentadmin.html" class="edit-link">Edit Booking</a>
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


                    <p class="price">
                        <span class="currency">200LE</span>
                    </p>
                    <p class="play-id">
                        <span class="label">ID: 10007000</span>

                    </p>
                    <a href="paymentadmin.html" class="edit-link">Edit Booking</a>

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


                    <p class="price">
                        <span class="currency">200LE</span>
                    </p>
                    <p class="play-id">
                        <span class="label">ID: 10008000</span>

                    </p>
                    <a href="paymentadmin.html" class="edit-link">Edit Booking</a>
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
                <p class="price">
                    <span class="currency">200LE</span>
                </p>
                <p class="play-id">
                    <span class="label">ID: 10009000</span>

                </p>
                <a href="paymentadmin.html" class="edit-link">Edit Booking</a>
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

                    <p class="price">
                        <span class="currency">200LE</span>
                    </p>
                    <p class="play-id">
                        <span class="label">ID: 10005050</span>

                    </p>
                    <a href="paymentadmin.html" class="edit-link">Edit Booking</a>
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
                <p class="price">
                    <span class="currency">200LE</span>
                </p>
                <p class="play-id">
                    <span class="label">ID: 10006050</span>

                </p>
                <a href="paymentadmin.html" class="edit-link">Edit Booking</a>
            </section>
        </div>

        <form method="POST" action="add.php">
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
        <br>
    </div>
</body>





</html>