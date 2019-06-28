<?php
include('bdd.php');

$id_membres = $_POST['id_membres'];
$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
$level = $_POST['id_level'];

if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])) {

$req = $bdd->prepare("INSERT INTO membres (id_membres, pseudo, mdp, id_level) VALUES(:id_membres, :pseudo, :mdp, :id_level)");
$req->execute(array(
  'id_membres' => $id_membres,
  'pseudo' => $pseudo,
  'mdp' =>  $mdp,
  'id_level' => $level));

}
else {
    echo 'Erreur';
    header('Location: inscription.php');
            exit();
}



    header('Location: connexion.php');
            exit();
?>
