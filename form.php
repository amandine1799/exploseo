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
    };

        if(isset($_POST['forminfos'])) {
          $url = htmlspecialchars($_POST['url']);
          $version = htmlspecialchars($_POST['version']);
          $tel = htmlspecialchars($_POST['tel']);
          $mail = htmlspecialchars($_POST['mail']);
          $siret = htmlspecialchars($_POST['siret']);
          $woocommerce = $_POST['woocommerce'];
          $raisonsociale = htmlspecialchars($_POST['raisonsociale']);
          $ville = htmlspecialchars($_POST['ville']);
          $codepostal = htmlspecialchars($_POST['codepostal']);
          $adresse = htmlspecialchars($_POST['adresse']);
          $datecreation = htmlspecialchars($_POST['datecreation']);
          $dirigeant = htmlspecialchars($_POST['dirigeant']);
          $speedmobile = htmlspecialchars($_POST['speedmobile']);
          $speedcomputer = htmlspecialchars($_POST['speedcomputer']);
          $id_cms = $_POST['id_cms'];


          $req = $bdd->prepare("INSERT INTO infos(url, version, tel, mail, siret, woocommerce, raisonsociale, ville, codepostal, adresse, datecreation, dirigeant, speedmobile, speedcomputer, id_cms) VALUES(:url, :version, :tel, :mail, :siret, :woocommerce, :raisonsociale, :ville, :codepostal, :adresse, :datecreation, :dirigeant, :speedmobile, :speedcomputer, :id_cms)");
          $req->execute(array(
            'url'=> $url,
            'version'=> $version,
            'tel'=> $tel,
            'mail'=> $mail,
            'siret'=> $siret,
            'woocommerce'=> $woocommerce,
            'raisonsociale'=> $raisonsociale,
            'ville'=> $ville,
            'codepostal'=> $codepostal,
            'adresse'=> $adresse,
            'datecreation'=> $datecreation,
            'dirigeant'=> $dirigeant,
            'speedmobile'=> $speedmobile,
            'speedcomputer'=> $speedcomputer,
            'id_cms'=> $id_cms));
        }
      ?>

    <center><form method="POST" action="" >
      <table>
          CMS:
          <input type="radio" name="id_cms" value="1" id="wordpress"/><label for="wordpress">Wordpress</label>
          <input type="radio" name="id_cms" value="2" id="prestashop" /><label for="prestashop">Prestashop</label>
          <input type="radio" name="id_cms" value="3" id="magkit" /><label for="magkit">Magkit</label>
          <input type="radio" name="id_cms" value="4" id="magento" /><label for="magento">Magento</label>
          <input type="radio" name="id_cms" value="5" id="micrologiciel" /><label for="micrologiciel">Micrologiciel</label>
          <input type="radio" name="id_cms" value="6" id="shopify" /><label for="shopify">Shopify</label>
          <input type="radio" name="id_cms" value="7" id="opencart" /><label for="opencart">Opencart</label>
          </br/><br />
          Woocommerce:
          <input type="radio" name="woocommerce" value="oui" id="oui" /> <label for="oui">Oui</label>
          <input type="radio" name="woocommerce" value="non" id="non" /> <label for="non">Non</label>
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
