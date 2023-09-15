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
            <h3>La plus puissante Communauté</h3>
            <p>
                Une grande communauté des
            </p>
            <p>
                développeur du monde entier
            </p>
            <a href="contacts.php?page=contacts">Rejoindre</a>
        </div>
        <div class="container-with-color">
            <div>
                <h3>Apprendre la programmation</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ea, minus similique 
                    magni voluptate dolor culpa sint, possimus aliquid eveniet quis? Deleniti, suscipit! 
                    Impedit, aspernatur iure. Quibusdam quaerat non iure.
                </p>
            </div>
            <img src="../img/python.png" alt="Logo Python" />
        </div>
        <div class="container">
            <h3>Les membres</h3>
            <div class="container-membres">
                <div>
                    <img src="../img/image-emily.jpg" alt="User picture" />
                    <p>
                        <b>Emily Brown</b>
                    </p>
                </div>
                <div>
                    <img src="../img/image-jennie.jpg" alt="User picture" />
                    <p>
                        <b>Jennie Dupont</b>
                    </p>
                </div>
                <div>
                    <img src="../img/image-emily.jpg" alt="User picture" />
                    <p>
                        <b>Emily Brown</b>
                    </p>
                </div>
                <div>
                    <img src="../img/image-jennie.jpg" alt="User picture" />
                    <p>
                        <b>Jennie Dupont</b>
                    </p>
                </div>
            </div>
            <div class="container-membres">
                <div>
                    <img src="../img/image-jennie.jpg" alt="User picture" />
                    <p>
                        <b>Jennie Dupont</b>
                    </p>
                </div>
                <div>
                    <img src="../img/image-emily.jpg" alt="User picture" />
                    <p>
                        <b>Emily Brown</b>
                    </p>
                </div>
                <div>
                    <img src="../img/image-jennie.jpg" alt="User picture" />
                    <p>
                        <b>Jennie Dupont</b>
                    </p>
                </div>
                <div>
                    <img src="../img/image-emily.jpg" alt="User picture" />
                    <p>
                        <b>Emily Brown</b>
                    </p>
                </div>
            </div>
        </div>
        <?php
            include_once('../includes/footer.php');
        ?>
        <script src="../js/script.js"></script>
    </body>
</html>