<div class="navbar">
    <div>
        <img src="../img/logo-trans.png" alt="Logo Letecode" />
        <h4>Letecode</h4>
    </div>
    <ul>
        <li>
            <a href="accueil.php?page=accueil" <?php if(isset($_GET['page']) && $_GET['page'] == 'accueil'){echo 'id="active"';} ?>>
                Accueil
            </a>
        </li>
        <li>
            <a href="communaute.php?page=communaute" <?php if(isset($_GET['page']) && $_GET['page'] == 'communaute'){echo 'id="active"';} ?>>
                Communauté
            </a>
        </li>
        <li>
            <a href="cours.php?page=cours" <?php if(isset($_GET['page']) && $_GET['page'] == 'cours'){echo 'id="active"';} ?>>
                Cours
            </a>
        </li>
        <li>
            <a href="contacts.php?page=contacts" <?php if(isset($_GET['page']) && $_GET['page'] == 'contacts'){echo 'id="active"';} ?>>
                Contacts
            </a>
        </li>
    </ul>
    <span class="toggle-btn">
        <i class="fa fa-bars"></i>
    </span>
</div>
<div class="dropdown-menu">
    <li>
        <a href="accueil.php?page=accueil" <?php if(isset($_GET['page']) && $_GET['page'] == 'accueil'){echo 'id="active"';} ?>>
            Accueil
        </a>
    </li>
    <li>
        <a href="communaute.php?page=communaute" <?php if(isset($_GET['page']) && $_GET['page'] == 'communaute'){echo 'id="active"';} ?>>
            Communauté
        </a>
    </li>
    <li>
        <a href="cours.php?page=cours" <?php if(isset($_GET['page']) && $_GET['page'] == 'cours'){echo 'id="active"';} ?>>
            Cours
        </a>
    </li>
    <li>
        <a href="contacts.php?page=contacts" <?php if(isset($_GET['page']) && $_GET['page'] == 'contacts'){echo 'id="active"';} ?>>
            Contacts
        </a>
    </li>
</div>