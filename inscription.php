<html>
<head>
  <meta charset="utf-8">
</head>
<body>
    <form action="newaccount.php" method="post">
        <input type="hidden" name="id_membres" maxlength="32"/><br/>
        Level: <input type="text" name="id_level" maxlength="16"/>
        Pseudo: <input type="text" name="pseudo" maxlength="32"/><br/>
        Mot de passe: <input type="password" name="mdp" maxlength="16"/>
        <br />
        <input type="submit" value="Enregistrer"/>
    </form>
</body>
</html>
