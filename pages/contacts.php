<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Site responsive</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta property="og:title" content="Site responsive" />
        <meta property="og:type" content="profile" />
        <meta property="og:image" content="https://isaacsoloko.github.io/tp-site-responsive/img/logo-trans.png" />
        <meta property="og:description" content="TP Site responsive" />
        <link rel="shortcut icon" href="../img/logo-trans.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../css/style.css" />
    </head>
    <body>
        <?php
            include_once('../includes/header.php');
        ?>
        <div class="top-container"></div>
        <div class="container">
            <h3>Nous contacter</h3>
            <p>Remplissez ce formulaire pour nous laisser un message</p>
            <form id="form">
                <!--DESKTOP DEVICE-->
                <div class="desktop-device-contacts-form">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom">
                    <label for="mail">Adresse e-mail</label>
                    <input type="email" id="mail">
                    <label for="msg">Message</label>
                    <textarea id="msg" rows="5"></textarea>
                    <input type="submit" value="Envoyer le message">
                </div>
                <div class="desktop-device-contacts-form">
                    <label for="pays">Pays</label>
                    <select id="pays">
                        <option value="Choisir">Choisir</option>
                    </select>
                    <label for="obj">Objectif</label>
                    <input type="text" id="obj">
                </div>
                <!--MOBILE DEVICE-->
                <div class="mobile-device-contacts-form">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom">
                    <label for="pays">Pays</label>
                    <select id="pays">
                        <option value="Choisir">Choisir</option>
                    </select>
                    <label for="mail">Adresse e-mail</label>
                    <input type="email" id="mail">
                    <label for="obj">Objectif</label>
                    <input type="text" id="obj">
                    <label for="msg">Message</label>
                    <textarea id="msg" rows="5"></textarea>
                    <input type="submit" value="Envoyer le message">
                </div>
            </form>
        </div>
        <div class="boite-lettre-container">
            <div>
                <h3>Abonnez-vous à la boite aux lettres</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ea, minus similique 
                    magni voluptate dolor culpa sint, possimus aliquid eveniet quis? Deleniti, suscipit! 
                    Impedit, aspernatur iure. Quibusdam quaerat non iure.
                </p>
            </div>
            <form>
                <input type="email" name="email" id="email" placeholder="Adresse email" />
                <input type="submit" value="S'abonner">
            </form>
        </div>
        <?php
            include_once('../includes/footer.php');
        ?>
        <script src="../js/script.js"></script>
    </body>
</html>