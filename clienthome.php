<?php   ////search operation///////
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
            <img src="<?php echo $play['image']; ?>" alt="<?php echo $play['title']; ?>">
            <h2><?php echo $play['title']; ?></h2>
            <p><?php echo $play['description']; ?></p>
            <p>Price: LE<?php echo $play['price']; ?></p>
            <a href="payment.php" class="book-now-btn">Book Now</a>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <?php if (isset($_GET['q'])) : ?>
        <p>not found</p>
    <?php endif; ?>
<?php endif; ?>
<!-- </div> -->



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="online.css">
    <link rel="stylesheet" href="clienthome.css">
    <title>HOME PAGE</title>
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
            <form method="GET" action="">
                <label for="query">Search:</label>
                <input type="text" id="query" name="q">
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

        <!-- <section class="sec1">  <!--hykon b 3ard elsaf7a -->
        <h2> romeo and juliet</h2>

        <p> An age-old vendetta between two powerful families erupts into bloodshed.<br>
            A group of masked Montagues risk further conflict by gatecrashing a Capulet party.<br>
            A young lovesick Romeo Montague falls instantly in love with Juliet Capulet, who is
            due to marry her father's choice.
        </p>
        <img src="R.jfif" alt="romeo and juliet" width="300px" height="400">
        <p>250LE</p>
        <p class="play-id">ID:10005000</p>
        <a href="payment.php" class="book-now-btn">Book Now</a>
        </section>



        <br><br><br>
        <hr><br><br><br>



        <section class="sec2">
            <div class="posters">
                <div class="poster">
                    <article class="art1sec2">
                        <h2>Antony and clepatra </h2>
                        <img src="antony-and-cleopatra.jpg" alt="Antony and clepatra " width="300px" height="400">
                        <p>250 LE</p>
                        <p class="play-id">ID:10006000</p>
                        <a href="payment.php" class="book-now-btn">Book Now</a>
                        <div class="description">
                            The love affair between Mark Antony,
                            the Roman military leader and Cleopatra,
                            the queen of Egypt.
                            <details>
                                <summary>read more</summary>
                                Cleopatra is notorious for having charmed some of the great men of her era,
                                including Caesar; Antony himself loves her passionately. Antony, however,
                                is married to Fulvia, who is an enemy of Antony’s fellow triumvir, Octavius
                                Caesar. While Antony is in Egypt with Cleopatra, he receives word that
                                Fulvia has died, and he must return to Rome. There he marries Octavius’s
                                sister Octavia in an attempt to heal the political rift. Cleopatra is furious
                                when she hears about the marriage.War breaks out between Octavius and Antony.
                            </details>

                        </div>
                    </article>
                </div>
                <div class="poster">
                    <article class="art2sec2">
                        <h2>Merchant of Venice</h2>
                        <img src="665210d6-7b13-472c-825e-0898dad3641f.jpg" alt="Merchant of Venice" width="300px" height="400">
                        <p>250 LE</p>
                        <p class="play-id">ID:10007000</p>
                        <a href="payment.php" class="book-now-btn">Book Now</a>
                        <br>
                        <div class="description">
                            Antonio, an antisemitic merchant, takes a .
                            <details>
                                <summary>read more</summary>
                                loan from the Jew Shylock to help his friend to court Portia.
                                Antonio can't repay the loan, and without mercy, Shylock demands
                                a pound of his flesh. The heiress Portia, now the wife of Antonio's
                                friend, dresses as a lawyer and saves Antonio
                            </details>
                        </div>
                    </article>
                </div>
                <div class="poster">
                    <article class="art3sec2">
                        <h2>Julius Caesar </h2>
                        <img src="R (1).jfif" alt="Julius Caesar" width="300px" height="400">
                        <p>250 LE</p>
                        <p class="play-id">ID:10008000</p>
                        <a href="payment.php" class="book-now-btn">Book Now</a>
                        <br>
                        <div class="description">
                            Jealous conspirators convince Caesar's friend Brutus to join
                            <details>
                                <summary>read more</summary>
                                their assassination plot against Caesar. To stop Caesar from
                                gaining too much power, Brutus and the conspirators kill him
                                on the Ides of March. Mark Antony drives the conspirators out
                                of Rome and fights them in a battle.
                            </details>
                        </div>
                    </article>
                </div>
            </div>
        </section>





        <br><br><br>
        <hr><br><br><br>




        <section class="sec3">
            <div class="posters">
                <div class="poster">
                    <article class="sec3 art1">
                        <h2>كده اوكيه</h2>
                        <img src="mov55.jpg" alt="كده اوكيه" width="300px" height="400">
                        <p>200 LE</p>
                        <p class="play-id">ID=10009000</p>
                        <a href="payment.php" class="book-now-btn">Book Now</a>
                        <br>
                        <div class="description">
                            يتراهن مدير إحدى القنوات الفضائية مع مذبع شاب على قوة النقود وقدرتها فى تحويل
                            <details>
                                <summary>read more</summary>
                                ابنة الجناينى إلى نجمة مشهورة بل وجعل خطيبة أحد المعدين تتركه
                                وتحب المدير وينجح في ذلك، لكن الأمور تأخذ طريقًا آخر
                            </details>

                        </div>
                    </article>
                </div>
                <div class="poster">
                    <article class="sec3 art2">
                        <h2>مدرسة المشاغبين</h2>
                        <img src="_315x420_0c9c84f22f140830febfcafc0efdc01771e97705b4fc834cdf658cd559a2941c.jpg" alt="مدرسة المشاغبين" width="300px" height="400">
                        <p>200 LE</p>
                        <p class="play-id">ID=10005050</p>
                        <a href="payment.php" class="book-now-btn">Book Now</a>
                        <br>
                        <div class="description">
                            مدرسة بها أكثر 5 طلاب مشهورين في البلاد والذين يواصلون الفشل ويستعيدون عامهم الأخير
                            <details>
                                <summary>read more</summary>
                                من المدرسة الثانوية. تؤدي مقالب الطلاب المستمرة كل المعلمين إلى انهيار عقلي مما يجبرهم
                                على ترك المدرسة.هذا يجبر مدير المدرسة “حسن مصطفى” على قصر موارد المدرسة
                                على فصل واحد للخمسة وتعليمهم بنفسه في وقت لاحق من المسرحية تتطوع معلمة أخرى
                                “سهير البابلي” لمساعدةالطلاب باستخدام طرق تدريس غير تقليدي
                            </details>
                        </div>
                    </article>
                </div>
                <div class="poster">
                    <article class="sec3 art1">
                        <h2>الزعيم</h2>
                        <img src="azaeem1.jpg" alt="الزعيم" width="300px" height="400">
                        <p>200 LE</p>
                        <p class="play-id">ID=10006050</p>
                        <a href="payment.php" class="book-now-btn">Book Now</a>
                        <br>
                        <div class="description">
                            زينهم رجل بسيط، يعمل كومبارس في السينما، ويشبه زعيم البلاد لحد التطابق،
                            ويستغل رجال الدولة هذا التشابه بعد وفاة الزعيم ويطلبوا منه أداء شخصية الزعيم كأنه لا زال حيًا
                        </div>
                    </article>
                </div>
            </div>
        </section>





        <br><br><br>
        <hr><br>



        <div class="location">
            <h1>Our Locations</h1>
            <ul class="location-list">
                <li>Madinty</li>
                <br>
                <li>Al Rehab</li>
                <br>
                <li>Fifth Settlement</li>
                <br>
                <li>Down Town</li>
                <br>
                <li>Dandy mall</li>
            </ul>
            <br><br>
        </div>


    </div>
</body>

</html>