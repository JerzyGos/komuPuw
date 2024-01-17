<!DOCTYPE html>
<html>

<head>
    <title>Rej PL</title>
    <!-- icon for browser tab -->
    <link rel="icon" type="images/x-icon" href="favicon.ico" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif
        }

        .w3-row-padding img {
            margin-bottom: 12px
        }

        /* Set the width of the sidebar to 120px */
        .w3-sidebar {
            width: 120px;
            background: #222;
        }

        /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
        #main {
            margin-left: 120px
        }

        /* Remove margins from "page content" on small screens */
        @media only screen and (max-width: 600px) {
            #main {
                margin-left: 0
            }
        }
    </style>
</head>

<body class="w3-black">





    <!-- Icon Bar (Sidebar - hidden on small screens) -->
    <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
        <!-- Avatar image in top left corner -->

        <p><a href="https://localhost/zadForm/en/formENv2.php#"><img src="flagGB.JPG"
                    style="width:50px;height:50px;"></a></p>


        <p>English</p>
        </a>

        <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>
        <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-eye w3-xxlarge"></i>
            <p>Misja</p>
        </a>
        <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-eye w3-xxlarge"></i>
            <p>Uczestnicy</p>
        </a>
        <a href="formENv2.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-eye w3-xxlarge"></i>
            <p>Rejestracja</p>
        </a>
        <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-envelope w3-xxlarge"></i>
            <p>Kontakt</p>
        </a>
        <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-eye w3-xxlarge"></i>
            <p>FAQ</p>
        </a>
        <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-eye w3-xxlarge"></i>
            <p>Komitet</p>
        </a>
        <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-eye w3-xxlarge"></i>
            <p>Publikacje</p>
        </a>
        <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-eye w3-xxlarge"></i>
            <p>Program</p>
        </a>

    </nav>

    <!-- Navbar on small screens (Hidden on medium and large screens) -->
    <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
        <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
            <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
            <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
            <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
            <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
        </div>
    </div>

    <!-- Page Content -->
    <div class="w3-padding-large" id="main">
        <!-- Header/Home -->
        <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
            <h1 class="w3-jumbo"><span class="w3-hide-small"></span>XI Międzynarodowy Kongres Azjatycki</h1>
            <p></p>
            <h1 class="w3-jumbo"><span class="w3-hide-small"></span>Rejestracja</h1>
            <p></p>

        </header>












        <!-- Contact Section -->
        <div class="w3-padding-64 w3-content w3-text-grey" id="contact">

            <hr style="width:200px" class="w3-opacity">

            <div class="w3-section">

            </div><br>

            <!--  !!!  Note Jerzy:  Contact form was removed for time being. We don't need it at this stage 
    -->
            <p>Wyślij nam swoje dane. Odezwiemy sie w krótce:</p>

            <form action="welcome_get.php" target="_blank">
                <p><input class="w3-input w3-padding-16" type="text" placeholder=" Imię" required name="firstname">
                </p>
                <p><input class="w3-input w3-padding-16" type="text" placeholder="Nazwisko" required name="surname"></p>
                <p><input class="w3-input w3-padding-16" type="text" placeholder="Afiliacja" required
                        name="affiliation"></p>
                <p><input class="w3-input w3-padding-16" type="text" placeholder="Tytuł Naukowy" required
                        name="tytulnaukowy"></p>
                <p><textarea class="w3-input w3-padding-16" maxlength="200" name="abstract"
                        placeholder="Abstrakt wystąpienia (do 200 znaków)"></textarea></p>

                <p><input class="w3-input w3-padding-16" type="text" placeholder="Wasz Email" required name="email"></p>
                <p><input class="w3-input w3-padding-16" type="text" placeholder="Nr telefonu *" required name="tel">
                </p>

                <p>
                    <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                        <i class="fa fa-paper-plane"></i> ZAPISZ
                    </button>
                </p>
            </form>

            <!-- End Contact Section -->
        </div>

        <!-- Footer. This section contains an ad for W3Schools Spaces. You can leave it to support us. -->

        <!-- End footer -->
        </footer>

        <!-- END PAGE CONTENT -->
    </div>

</body>

</html>