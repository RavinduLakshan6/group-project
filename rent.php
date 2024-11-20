<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rent car</title>
        <link rel="stylesheet" href="main.css"> 
        <link rel="stylesheet" href="rent.css">
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
        <br><br><br><br>

            <div class="container">
                <div class="form-container">
                    <h2>BOOK A CAR</h2>
                    <form name="myform" id="login-form" action="book-car.php" onsubmit="return ValidateForm(myform)"method="post">
                        <div class="form-group">

                        
                            <label for="login-username">Full name</label>
                            <input type="text" id="fullname" name="fullname" ><br><br>

                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" ><br><br>

                            <label for="nic">Mobile Number</label>
                            <input type="text" id="mobile" name="mobile" pattern="\d{10}" ><br><br>

                            <label for="login-username">NIC number</label>
                            <input type="text" id="nic" name="nic" ><br><br>

                            <label for="login-username">Date you want</label>
                            <input type="date" id="datey" name="Date"><br><br>

                            <label for="car-model">Select Car Model</label>
                            <select id="car-model" name="car_model" >
                                <option value="" disabled selected>Choose your option</option>
                                <option value="Alto">Alto</option>
                                <option value="Swift">Swift</option>
                                <option value="Wagon-r">Wagon-r</option>
                                <option value="Aqua">Aqua</option>
                                <option value="Prius">Prius</option>
                                <option value="Vitz">Vitz</option>
                            </select><br><br>
 
                        </div>
                        
                        <button type="submit" name="submit">Book</button><br><br>
                        
                    </form>
                </div>
            </div>
            <br><br><br><br>

        

        <footer>
            <div class="footer-container">
                <div class="footer-section about">
                    <h2>About Us</h2>
                    <p>We provide the best car rental services with a wide range of vehicles to choose from. Your satisfaction is our priority.</p>
                </div>
                <div class="footer-section links">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="Home.html">Home</a></li>
                        <li><a href="car.html">Services</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="about.html">About</a></li>
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


