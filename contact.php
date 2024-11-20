<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rent car</title>
        <link rel="stylesheet" href="main.css"> 
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <script src="main.js"></script>
       

    </head>

    <body>
        
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
        

        <div class="contact-container">
            <h1>Contact Us</h1>
            <div class="contact-info">
                <p>If you have any questions or need further information, please feel free to contact us via the form below, email, or phone. We are here to help you!</p>
                <p><b>Address:</b> No:203 Lumbini Road,Dalugama,Kelaniya,Sri lanka.</p>
                <p><b>Email:</b> RockyRentaCar@gmail.com</p>
                <p><b>Phone:</b> (94)763666614</p>
            </div>
            <div class="contact-form">
                <form action="message.php" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" ></textarea>
                    </div>
                    <button type="submit">Send Message</button>
                </form>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d817.6142235073058!2d79.91865578526475!3d6.974320394787782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1722838561133!5m2!1sen!2slk" width="859" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

            

        

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

