<?php  ob_start();?>


<p>Ici mon formulaire</p>


<?php

$content =ob_get_clean();
$title = "Bienvenue chez X";
require_once "base.html.php";

?>