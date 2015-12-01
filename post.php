<!doctype html>
<html>
<head>
    <title>Portfolio van Thijs van Diessen</title>

    <meta name="description" content="Mijn portfolio, om u te laten zien wat ik wil en kan doen.">

    <!-- Pintrest -->
    <meta name="p:domain_verify" content="9bb9d63ed947d584153636051b58774b"/>

    <meta http-equiv="content-type" content="text/html;charset=UTF-8">

    <script src="js/jquery-2.0.3.min.js"></script>
    <script src="js/javascript.js"></script>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="favicon.png" />

    <link rel="stylesheet" href="css/styles.css">

</head>
<body>

<nav>
    <ul>
        <li><a href="http://www.thijsvandiessen.nl">terug</a></li>
    </ul>
</nav>

<div id="PHPcover">

    <img alt="logo" src="img/handtekening_white.png" id="handtekening">

</div>

    <article id="PHPreturn">

        <?php
        
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $from = 'From: info@thijsvandiessen.nl'; 
            $to = 'thijsvandiessen@yahoo.com'; 
            $subject = 'Hello';
            $human = $_POST['human'];
                    
            $body = "From: $name\n E-Mail: $email\n Message:\n $message";
                        
            if ($_POST['submit'] && $human == '4') {                 
                if (mail ($to, $subject, $body, $from)) { 
                echo '<p>Bedankt voor uw bericht, uw bericht is verstuurd.</p>';
            } else { 
                echo '<p>Iets is verkeerd gegaan, probeert u het nog eens.</p>'; 
            } 
            } else if ($_POST['submit'] && $human != '4') {
            echo '<p>U heeft de anti spam vraag verkeerd beantwoord, 2 + 2 = 4</p>';
            }
        
        ?>

    </article>

    <script type="text/javascript">
        //Google analytics
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-37345822-2', 'auto');
        ga('send', 'pageview');
        ga(‘set’, ‘&uid’, {{USER_ID}}); // De gebruikers-ID instellen op basis van de ingelogde user_id.
    </script>

</body>
</html>