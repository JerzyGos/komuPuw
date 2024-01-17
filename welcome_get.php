<html>

<body>

    <h1> Welcome - formularz przesłany </h1>
    Imie:
    <?php echo $_GET["firstname"]; ?><br>
    <?php $imie = $_GET["firstname"]; ?><br>
    Nazwisko:
    <?php echo $_GET["surname"]; ?><br>
    <?php $nazwisko = $_GET["surname"]; ?><br>
    Afiliacja:
    <?php echo $_GET["affiliation"]; ?><br>
    <?php $afil = $_GET["affiliation"]; ?><br>
    Tytuł Naukowy:
    <?php echo $_GET["tytulnaukowy"]; ?><br>
    <?php $tytul = $_GET["tytulnaukowy"]; ?><br>

    Abstrakt:
    <?php echo $_GET["abstract"]; ?><br>
    <?php $abstrakt = $_GET["abstract"]; ?><br>
    Email:
    <?php echo $_GET["email"]; ?><br>
    <?php $email = $_GET["email"]; ?><br>

    Telefon:
    <?php echo $_GET["tel"]; ?><br>
    <?php $tel = $_GET["tel"]; ?><br>






    <?php
    // wkladamy wszystkie informacje do jednej zmiennej
    $myemail = 'Formularz ze strony' . '<br>' . 'Imie: ' . $imie . '<br>' . 'Nazwisko: ' . $nazwisko . '<br>' . 'Afiliacja:  ' . $afil . '<br>' . 'Tytuł Naukowy:
' . $tytul . '<br>' . 'Abstrakt: ' . $abstrakt . '<br>' . 'Email:' . $email . '<br>' . 'Telefon: ' . $tel . '<br>';







    echo $myemail




        /*
          $to = "sender@sender.com";
          $subject = "Dane z formularza";
          $txt = 'Welcome - formularz przesłany' .'<br>', $myemail";
          $headers = "From:" . "\r\n" .
              "CC: test@test.pl";

           mail($to, $subject, $txt, $headers);
          */
        ?>



</body>

</html>