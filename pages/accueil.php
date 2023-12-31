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
        <div class="container-fluid top-container">
            <h3>Bienvenue sur notre site</h3>
            <p>
                Nous vous apprenons à changer le
            </p>
            <p>
                monde avec votre créativité
            </p>
            <a href="contacts.php?page=contacts">Nous contacter</a>
        </div>
        <div class="container-with-color">
            <img src="../img/logo-trans.png" alt="Logo Letecode" />
            <div>
                <h3>Vous avez droit d'apprendre</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ea, minus similique 
                    magni voluptate dolor culpa sint, possimus aliquid eveniet quis? Deleniti, suscipit! 
                    Impedit, aspernatur iure. Quibusdam quaerat non iure.
                </p>
            </div>
        </div>
        <div class="container">
            <h3>A propos de nous</h3>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum soluta, quo odit sapiente 
                deserunt quasi voluptas vero incidunt natus in, optio quisquam facilis 
                repellendus, alias voluptatum ipsum consequuntur vitae amet.
            </p>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum soluta, quo odit sapiente 
                deserunt quasi voluptas vero incidunt natus in, optio quisquam facilis 
                repellendus, alias voluptatum ipsum consequuntur vitae amet.
            </p>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum soluta, quo odit sapiente 
                deserunt quasi voluptas vero incidunt natus in, optio quisquam facilis 
                repellendus, alias voluptatum ipsum consequuntur vitae amet. Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Earum animi quae rerum deleniti accusantium alias. Totam rem voluptates 
                officia atque. Amet facere saepe dolore provident fuga, enim cum hic! Doloremque.
            </p>
            <p>
                <h4>Les options :</h4>
                <ul>
                    <li>- Git et Github</li>
                    <li>- Html5</li>
                    <li>- Css3</li>
                    <li>- JavaScript</li>
                </ul>
            </p>
        </div>
        <?php
            include_once('../includes/footer.php');
        ?>
        <script src="../js/script.js"></script>
    </body>
</html>