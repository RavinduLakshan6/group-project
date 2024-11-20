<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    </head>

    <body >
        
        <div class="header" >
            
            <div class="logo">
                <!-- <img src="img1.png"  class="logo"> -->
                <img src="images/Screenshot 2024-08-05 124231.png">
            </div>
            <div class="nav_area"  >
                <ul class="nav_links">
                    <li class="link"><a href="Home.php">Home</a></li>
                    <li class="link"><a href="car.php">Rent Car</a></li>
                    <li class="link"><a href="about.php">About Us</a></li>
                    <li class="link"><a href="contact.php">Contact</a></li>
                </ul>
            
            </div>
             
        </div>
<section class="body_section">
    <div class="hero_section">
    <div class="text_container">
        <h1 class="hero_title">CAR RENTAL</h1><br>
        <h1 class="hero_title hero_title2 ">WEBSITE</h1>
        <a href="car.php"><button class="btn1" id="btn1">RENT A CAR</button></a>
        
    </div>

    <div class="hero_image">
        <img src="images/bcimg.png" width="500px" >
    </div>
</div>
<div class="carousel"> 
    <h3><b>Cars available from us</b></h3>
    <a class="carousel-item" href="#one!"><img src="images/PngItem_3570880.png"> <p>Alto</p></a>
    <a class="carousel-item" href="#two!"><img src="images/PngItem_3343296.png"> <p>Swift</p></a>
    <a class="carousel-item" href="#three!"><img src="images/PngItem_99136.png"> <p>Prius</p></a>
    <a class="carousel-item" href="#four!"><img src="images/wagonr.png"> <p>Wagonr</p></a>
    <a class="carousel-item" href="#five!"><img src="images/vitz.png"> <p>Vitz</p></a>
    <a class="carousel-item" href="#six!"><img src="images/aqua.png"> <p>Aqua</p></a>
  </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
    $('.carousel').carousel({
        padding: 200
    });
    autoplay();
    function autoplay(){
        $('.carousel').carousel('next');
        setTimeout(autoplay, 4500);
    }
  });
  </script>
        <footer>
            <div class="footer-container">
                <div class="footer-section about">
                    <h2>About Us</h2>
                    <p>We provide the best car rental services with a wide range of vehicles to choose from. Your satisfaction is our priority.</p>
                </div>
                <div class="footer-section links">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="Home.php">Home</a></li>
                        <li><a href="car.php">Services</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="about.php">About</a></li>
                    </ul>
                </div>
                <div class="footer-section contact">
                    <h2>Contact Us</h2>
                    <p><i class="fas fa-phone-alt"></i> +94 763666614</p>
                    <p><i class="fas fa-envelope"></i> RockyRentaCar@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> No:203 Lumbini Road, <br>Dalugama, <br>Kelaniya,<br>Sri lanka.</p>
                </div>
                <div class="footer-section social">
                    <h2>Follow Us</h2>
                    <div class="social-links">
                        <a href="https://www.facebook.com/ravindu.lakshan.3538039?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i><img src="images/logo.png" width="50px"></a>
                        <a href="https://x.com/i/flow/login"><i class="fab fa-twitter"></i><img src="images/logo(2).png" width="50px"></a>
                        <a href="https://www.instagram.com/invites/contact/?igsh=1j9bvgchtesdj&utm_content=3rgc6gu"><i class="fab fa-instagram"></i><img src="images/logo(1).png" width="50px"></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2024 CarRental Company | Designed by Ravindu
            </div>
        </footer>
        
    </body>
</html>