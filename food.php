<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="food.css">
    <link rel="stylesheet" href="online.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <title>Food</title>
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
            <!-- <form method="GET" action="index.php">
                <input type="search" placeholder="Search..." id="query" name="q" value="<?php echo isset($query) ? htmlspecialchars($query) : ''; ?>">
                <button type="submit">Search</button>
            </form> -->

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
    <div class="content">

        <main>
            <h1 id="coming sec">coming soon</h1>
            <section class="sec4">

                <!--3nwan ganebe -->
                <div class="posters">
                    <div class="poster">
                        <article class="sec4art1">
                            <h2>Frozen</h2>
                            <img src="p_frozen_18373_3131259c.jpeg" alt="Frozen" width="300px" height="400">
                            <p>200 LE</p>
                            <!-- <input type="button" value="book now"> -->
                            <div class="description">
                                Princess Elsa and her younger sister Anna,
                                become distant,after an inadvertent mistake.
                                As a result Elsa secludes herself from the kingdom;
                                <details>
                                    <summary>read more</summary>
                                    struggling to keep her ever-growing curse at bay. However,
                                    conflicting emotions and bottled-up feelings threaten to
                                    plunge their realm into an eternal winter. Now, it’s up to
                                    Anna and a fearless team of unlikely allies to save the day.
                                </details>

                            </div>
                        </article>
                    </div>
                    <div class="poster">
                        <article class="sec4art2">
                            <h2>The lion king</h2>
                            <img src="image_fc5cb742.jpeg" alt="The lion king" width="300px" height="400">
                            <p>200 LE</p>
                            <!-- <input type="button" value="book now"> -->
                            <div class="description">
                                A young lion prince is cast out of
                                his pride by his cruel uncle,
                                who claims he killed his father;
                                While the uncle rules with an iron paw
                                <details>
                                    <summary>read more</summary>
                                    the prince grows up beyond the Savannah, living by
                                    a philosophy: No worries for the rest of your days.
                                    But when his past comes to haunt him, the young prince
                                    must decide his fate: Will he remain an outcast or face
                                    his demons and become what he needs to be?
                                </details>

                            </div>
                        </article>
                    </div>
                </div>
            </section>





            <br><br><br>
            <hr><br><br><br>
            <br><br><br><br><br><br>



            <section class="sec5" id="food sec">
                <h1 id="food">food</h1>
                <div class="posters">
                    <div class="poster">
                        <article class="sec5art1">
                            <h2>popcorn</h2>
                            <img src="223B2D0944CCAE1EAACEF9917AC54731.jfif" alt="popcorn" width="250px" height="250">
                            <p>50 LE</p>
                            <form>
                                <input type="number" value="1">
                            </form>
                            <input class="box" type="submit" value="buy">
                        </article>
                    </div>
                    <div class="poster">
                        <article class="sec5art2">
                            <h2>popcorn and cola</h2>
                            <img src="popcorn_and_cola.webp" alt="popcorn with cola" width="250px" height="250">
                            <p>75 LE</p>
                            <form>
                                <input type="number" value="1">
                            </form>
                            <input class="box" type="submit" value="buy">
                        </article>
                    </div>
                </div>
            </section>

        </main>

</body>

</html>