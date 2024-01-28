<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Nous contacter </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='app.js'></script>
</head>

<body>
    <div class="loader" id="loader">
        <p>Chargement</p>
    </div>

    <!-- Header -->
    <header>
        <a href="/"><img src="logo.png" alt="Logo du cabinet"></a>
        <ul>
            <li><a href="index.html" alt="Pour rediriger vers la page d'accueil">Accueil</a></li>
            <li><a href="Apropos/apropos.html" alt="Pour rediriger vers la page à propos">À propos</a></li>
            <li class="has-sous-nav">
                <a href="/" alt="Pour rediriger vers la page informations"><span>Informations</span></a>
                <ul class="sous-nav">
                    <li><a href="services/services.html">Services</a></li>
                    <li><a href="info-patients/info-patients.html">Informations patients</a></li>
                    <li><a href="temoignages/témoignages.html">Témoignages</a></li>
                </ul>
            </li>
            <li><a href="Nouscontacter/contact.html" alt="Pour rediriger vers la page contact">Contact</a></li>
        </ul>
    </header>
    <!-- Header -->

    <div class="page-main">


    <?php if(array_key_exists('errors', $_SESSION)): ?>
    <div class="alert alert-danger">
        <?= implode('<br>', $_SESSION['errors']); ?>
    </div>
    <?php endif; ?>


        <div class="contact-in">
            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.979295014141!2d3.3298076121286346!3d46.567874770993015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f11c466645e0ed%3A0x8801bcbe284633dd!2sDr%20Bruet%20Pierre!5e0!3m2!1sfr!2sfr!4v1706116513037!5m2!1sfr!2sfr"
                    width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-form">
                <h2>
                    Pour nous contacter :
                </h2>
                    <form action="post_contact.php" method="POST">
                    <input type="text" placeholder="Nom" class="contact-form-txt" name="Nom" value="<?= isset($_SESSION['inputs']['Nom']) ? $_SESSION['inputs']['Nom'] : '';?>">
                    <input type="text" placeholder="Prénom" class="contact-form-txt" name="Prénom" value="<?= isset($_SESSION['inputs']['Prénom']) ? $_SESSION['inputs']['Prénom'] : '';?>">
                    <input type="text" placeholder="Adresse Mail" class="contact-form-txt" name="AdresseMail" value="<?= isset($_SESSION['inputs']['AdresseMail']) ? $_SESSION['inputs']['AdresseMail'] : '';?>">
                    <textarea placeholder="Écrire..." class="contact-form-textarea" name="Message"><?= isset($_SESSION['inputs']['Message']) ? $_SESSION['inputs']['Message'] : '';?></textarea>
                    <input type="submit" value="Envoyer" class="contact-form-btn">
                </form>
            </div>
        </div>
    </div>

    <footer>
        <img src="logo.png">
        <h2>®2023 - 2027 Dentiste Sourire Sain Inc.</h2>
    </footer>
    <script src='app.js'></script>
    <script>
        window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }
    </script>
</body>
</html>

<?php 
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
?>