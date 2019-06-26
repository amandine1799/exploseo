<?php
include('bdd.php');

$id_membres = $_POST['id_membres'];
$pseudo = $_POST['pseudo'];
$mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
$id_level = $_POST['id_level'];

$req = $bdd->prepare("INSERT INTO membres (id_membres, pseudo, mdp, id_level) VALUES('$id_membres', '$pseudo' , '$mdp', '$id_level')");
$req->execute(array(
    'id_membres' => $id_membres,
    'pseudo' => $pseudo,
    'mdp' => $mdp,
    'id_level' => $id_level));
    header('Location: connexion.php');
            exit();
?>
