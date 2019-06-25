<?php

$pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
$pseudo = $_POST['pseudo'];
$level = $_POST['level']

$req = $bdd->prepare('INSERT INTO membres(pseudo, mdp, level) VALUES(pseudo, mdp, level)');
$req->execute(array(
    'pseudo' => $pseudo,
    'mdp' => $pass_hache,
    'level' => $level));

?>
