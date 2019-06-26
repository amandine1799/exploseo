<?php
include('bdd.php');

if (isset($_POST['pseudo'])) {
$pseudo = $_POST['pseudo'];

$req = $bdd->prepare('SELECT id_membres, mdp FROM membres WHERE pseudo = :pseudo');
$req->execute(array(
    'pseudo' => $pseudo));
$resultat = $req->fetch();

$isPasswordCorrect = password_verify($_POST['mdp'], $resultat['mdp']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id_membres'] = $resultat['id_membres'];
        $_SESSION['pseudo'] = $pseudo;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
  }
}
?>

<form method="post">
    <input type="hidden" name="id_membres" maxlength="32"/><br/>
    Pseudo: <input type="text" name="pseudo" maxlength="32"/><br/>
    Mot de passe: <input type="password" name="mdp" maxlength="16"/>
    <br />
    <input type="submit" value="Enregistrer"/>
</form>
