<?php
require "data/info.php";
include "Template/Header.php";

var_dump($_GET);
if (!empty($_GET) && isset($_GET["id"])) {
    $id = htmlspecialchars($_GET["id"]);
} else {
     $error = "HUM HUM wrong way BITCHES !" ;
}
?>
<h2>Detail de l'article</h2>

<?php
if (isset($error)) {
    echo $error;
}
else {
    echo "Vous avez cliqué sur l'article d'ID : " . $id ;
}
?>

<?php include "Template/Footer.php"; ?>