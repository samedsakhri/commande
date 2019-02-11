<?php

try {
    $commande = new PDO('mysql:host=localhost;dbname=test;charset=utf8', '', '');
    $commande->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $commande->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (Exception $e) {
    die ('Erreur :' . $e->getMessage() . '<br/>');
}
$info = $commande->query('DELETE FROM commande WHERE id="' .$_GET['id']. '";') or die($commande->error);

?>