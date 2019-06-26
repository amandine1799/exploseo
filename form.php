<!doctype html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <title>formulaire</title>
      <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <?php
    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=cms_explo;charset=utf8mb4','root','');
    }
      catch(Exception $e)
    {
      die('Erreur : '.$e->getMessage());
    }

  if(isset($_POST['forminfos'])) {
    $version = htmlspecialchars($_POST['version']);
    $url = htmlspecialchars($_POST['url']);
    $tel = htmlspecialchars($_POST['tel']);
    $mail = htmlspecialchars($_POST['mail']);
    $siret = htmlspecialchars($_POST['siret']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $codepostal = htmlspecialchars($_POST['codepostal']);
    $ville = htmlspecialchars($_POST['ville']);
    $raisonsociale = htmlspecialchars($_POST['raisonsociale']);
    $dirigeant = htmlspecialchars($_POST['dirigeant']);
    $datecreation = htmlspecialchars($_POST['datecreation']);
    $speedmobile = htmlspecialchars($_POST['speedmobile']);
    $speedcomputer = htmlspecialchars($_POST['speedcomputer']);

    $req = $bdd->prepare("INSERT INTO informations(version, url, tel, mail, siret, adresse, codepostal, ville, raisonsociale, dirigeant, datecreation, speedmobile, speedcomputer) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $req->execute(array($version, $url, $tel, $mail, $siret, $adresse, $codepostal, $ville, $raisonsociale, $dirigeant, $datecreation, $speedmobile, $speedcomputer));
      //'version' => $version,
      //'url' => $url,
      //'tel' => $tel,
      //'mail' => $mail,
      //'siret' => $siret,
      //'adresse' => $adresse,
      //'codepostal' => $codepostal,
      //'ville' => $ville,
      //'raisonsociale' => $raisonsociale,
      //'dirigeant' => $dirigeant,
      //'datecreation' => $datecreation,
      //'speedmobile' => $speedmobile,
      //'speedcomputer' => $speedcomputer));
  }
      ?>

    <center><form method="POST" action="" >
      <table>
          <!--CMS:
          <input type="radio" name="cms" value="wordpress" id="wordpress" /> <label for="wordpress">Wordpress</label>
          <input type="radio" name="cms" value="prestashop" id="prestashop" /> <label for="prestashop">Prestashop</label>
          <input type="radio" name="cms" value="magkit" id="magkit" /> <label for="magkit">Magkit</label>
          <input type="radio" name="cms" value="magento" id="magento" /> <label for="magento">Magento</label>
          <input type="radio" name="cms" value="micrologiciel" id="micrologiciel" /> <label for="micrologiciel">Micrologiciel</label>
          <input type="radio" name="cms" value="shopify" id="shopify" /> <label for="shopify">Shopify</label>
          <input type="radio" name="cms" value="opencart" id="opencart" /> <label for="opencart">Opencart</label>
          <br /><br />
          Woocommerce:
          <input type="radio" name="woocommerce" value="oui" id="oui" /> <label for="oui">Oui</label>
          <input type="radio" name="woocommerce" value="non" id="non" /> <label for="non">Non</label>
        </br/><br />-->
          <tr><td><label>Version:</label></td><td><input type="text" name="version" /></td></tr>
          <tr><td><label>URL:</label></td><td><input type="text" name="url" /></td></tr>
          <tr><td><label>Téléphone:</label></td><td><input type="text" name="tel" /></td></tr>
          <tr><td><label>Mail:</label></td><td><input type="text" name="mail" /></td></tr>
          <tr><td><label>Siret:</label></td><td><input type="text" name="siret" /></td></tr>
          <tr><td><label>Adresse:</label></td><td><input type="text" name="adresse" /></td></tr>
          <tr><td><label>Code postal:</label></td><td><input type="text" name="codepostal" /></td></tr>
          <tr><td><label>Ville:</label></td><td><input type="text" name="ville" /></td></tr>
          <tr><td><label>Raison Sociale:</label></td><td><input type="text" name="raisonsociale" /></td></tr>
          <tr><td><label>Dirigeant:</label></td><td><input type="text" name="dirigeant" /></td></tr>
          <tr><td><label>Date de création:</label></td><td><input type="text" name="datecreation" /></td></tr>
          <tr><td><label>Google PageSpeed Insights mobile:</label></td><td><input type="text" name="speedmobile" /></td></tr>
          <tr><td><label>Google PageSpeed Insights ordinateur:</label></td><td><input type="text" name="speedcomputer" /></td></tr>
      </table>
      </br/>
      <input type="submit" name="forminfos" value="Valider" />
    </form></center>

  </body>
</html>
