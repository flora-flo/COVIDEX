<?php
session_start();
session_destroy();
echo 'Vous êtes déconnecté. <a href="./cnx.php">Se connecter ?</a>';
