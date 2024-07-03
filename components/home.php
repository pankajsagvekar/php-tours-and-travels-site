<!DOCTYPE html>
<html lang="en" id="html" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="../css/pico.min.css" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/plane-departure-solid.svg" type="image/x-icon">
    <script src="../js/app.js"></script>
</head>

<body>
    <section style="margin: 0;">
        <nav class="container-fluid">
            <ul>
                <li style="padding-bottom: 0;">
                    <h1 style="font-size: 1.5rem;"><strong>Tours And Travel</strong></h1>
                </li>
            </ul>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="package.php">Package</a></li>
                <li><a href="book.php">Book</a></li>
                <li>
                    <input name="terms" type="checkbox" role="switch" onclick="lightMode()" />
                    <i class="fa-solid fa-circle-half-stroke"></i>
                </li>
            </ul>
        </nav>
        <hr style="margin: 0">
    </section>

    <section class="hero_image container-fluid">
        <img src="../img/hero.jpg" alt="">
        <h2 class="hero_text" data-theme="dark">Travel The World</h2>
    </section>

    <section class="container-fluid">
        <h3>Our Services</h3>
        <section class="container-fluid grid">
            <article>
                <header>Adventure</header>
                <img src="../img/adventure.jpg">
            </article>
            <article>
                <header>Tour Guide</header>
                <img src="../img/tourguide.jpg" alt="" srcset="">
            </article>
            <article>
                <header>Trekking</header>
                <img src="../img/trekking.jpg" alt="" srcset="">
            </article>
            <article>
                <header>Camp Fire</header>
                <img src="../img/campfire.jpg" alt="" srcset="">
            </article>
            <article>
                <header>Off Road</header>
                <img src="../img/offroad.jpg" alt="" srcset="">
            </article>
            <article>
                <header>Camping</header>
                <img src="../img/camping.jpg" alt="" srcset="">
            </article>
        </section>
    </section>

    <section class="container-fluid" id="about">
        <h3>About Us</h3>
        <article>
            <header>About Us</header>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae sint officia sit aperiam quasi ipsam minima et voluptas similique, doloribus pariatur. Alias aspernatur hic blanditiis quibusdam officiis tenetur veniam ipsa.</p>
            <footer><a href="about.php"><button style="padding: .5rem .7rem;">Read More</button></a></footer>
        </article>

    </section>

    <section>
        <hr style="margin-top: 0">
        <footer class="container-fluid" style="display: flex; justify-content: space-between; font-size: .8em;">
            <ul>
                <li>
                    <h4>Quick Links</h4>
                </li>
                <li><a href="home.php">Home</a>
                <li><a href="about.php">About</a></li>
                <li><a href="package.php">Package</a></li>
                <li><a href="book.php">Book</a></li>
            </ul>
            <ul>
                <li>
                    <h4>Extra Links</h4>
                </li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms Of Use</a></li>
                <li><a href="#">Terms Of Use</a></li>
            </ul>
            <ul>
                <li>
                    <h4>Contact Info</h4>
                </li>
                <li><a href="#">123456789</a></li>
                <li><a href="#">abc@gmail.com</a></li>
                <li><a href="#">Maharashtra, India</a></li>
                <li><a href="#">Maharashtra, India</a></li>
            </ul>
        </footer>
    </section>
</body>

</html>