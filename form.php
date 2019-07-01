<?php
session_start();
if (isset($_SESSION['id_membres']) AND isset($_SESSION['pseudo']))
{
  ?>
  <?php
  if($_SESSION['level'] == 2){
    ?>
<!doctype html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <title>formulaire</title>
      <link rel="stylesheet" href="style.css">
  </head>

  <?php
  include('header.php');
  ?>

  <body>
  <style>

      body{
      background-color: #454d55;
    }

      input[type=text]{
      padding: 4px 4px;
      margin: 2px 0;
      border: none;
      border-bottom: 1px solid #cccecf;
      background-color: #454d55;
      color: #cccecf;
    }

      input[type=submit]{
      background-color: #343a40;
      border: none;
      color: #cccecf;
      padding: 15px 30px;
      margin: 4px 2px;
      cursor: pointer;
    }

      input[type=submit]:hover{
      color: white;
    }

      label, p{
      color: #cccecf;
    }

  </style>

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
          $secure = $_POST['secure'];
          $id_cms = $_POST['id_cms'];
          if(!empty($_POST['url']) AND !empty($_POST['version']) AND !empty($_POST['tel'])
          AND !empty($_POST['mail']) AND !empty($_POST['siret']) AND !empty($_POST['woocommerce'])
          AND !empty($_POST['raisonsociale']) AND !empty($_POST['ville']) AND !empty($_POST['codepostal'])
          AND !empty($_POST['adresse']) AND !empty($_POST['datecreation']) AND !empty($_POST['dirigeant'])
          AND !empty($_POST['speedmobile']) AND !empty($_POST['speedcomputer']) AND !empty($_POST['secure']) AND !empty($_POST['id_cms'])) {
            $requrl = $bdd->prepare("SELECT url FROM infos WHERE url = ?");
            $requrl->execute(array($url));
            $urlexist = $requrl->rowCount();
            if($urlexist == 0) {

              $req = $bdd->prepare("INSERT INTO infos(url, version, tel, mail, siret, woocommerce, raisonsociale, ville, codepostal, adresse, datecreation, dirigeant, speedmobile, speedcomputer, secure, id_cms) VALUES(:url, :version, :tel, :mail, :siret, :woocommerce, :raisonsociale, :ville, :codepostal, :adresse, :datecreation, :dirigeant, :speedmobile, :speedcomputer, :secure, :id_cms)");
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
                'secure'=> $secure,
                'id_cms'=> $id_cms));

                $bravo = "Le site a bien été intégré à la base de données !";
             } else {
                $erreur = "Url déjà existante !";
             }
          } else {
       $erreur = "Tous doit être remplis !";
          }
       }
      ?>

    <br />
    <div align="center">
      <form method="POST" action="" >
        <table>
            <p>
            CMS:
            <input type="radio" name="id_cms" value="1" id="wordpress" checked="checked" /><label for="wordpress">Wordpress</label>&nbsp;
            <input type="radio" name="id_cms" value="2" id="prestashop" /><label for="prestashop">Prestashop</label>&nbsp;
            <input type="radio" name="id_cms" value="3" id="magkit" /><label for="magkit">Magkit</label>&nbsp;
            <input type="radio" name="id_cms" value="4" id="magento" /><label for="magento">Magento</label>&nbsp;
            <input type="radio" name="id_cms" value="5" id="micrologiciel" /><label for="micrologiciel">Micrologiciel</label>&nbsp;
            <input type="radio" name="id_cms" value="6" id="shopify" /><label for="shopify">Shopify</label>&nbsp;
            <input type="radio" name="id_cms" value="7" id="opencart" /><label for="opencart">Opencart</label>
            <br /></p>
            <p>
            Woocommerce:
            <input type="radio" name="woocommerce" value="oui" id="oui" /> <label for="oui">Oui</label>&nbsp;
            <input type="radio" name="woocommerce" value="non" id="non" checked="checked" /> <label for="non">Non</label>
            <br /></p>
            <p>
            Sécurisé:
            <input type="radio" name="secure" value="oui" id="oui" /> <label for="oui">Oui</label>&nbsp;
            <input type="radio" name="secure" value="non" id="non" checked="checked" /> <label for="non">Non</label>
            </p>
            <tr><td align="right"><label>Version:</label></td><td><input type="text" name="version" /></td></tr>
            <tr><td align="right"><label>URL:</label></td><td><input type="text" name="url" /></td></tr>
            <tr><td align="right"><label>Téléphone:</label></td><td><input type="text" name="tel" /></td></tr>
            <tr><td align="right"><label>Mail:</label></td><td><input type="text" name="mail" /></td></tr>
            <tr><td align="right"><label>Siret:</label></td><td><input type="text" name="siret" /></td></tr>
            <tr><td align="right"><label>Adresse:</label></td><td><input type="text" name="adresse" /></td></tr>
            <tr><td align="right"><label>Code postal:</label></td><td><input type="text" name="codepostal" /></td></tr>
            <tr><td align="right"><label>Ville:</label></td><td><input type="text" name="ville" /></td></tr>
            <tr><td align="right"><label>Raison Sociale:</label></td><td><input type="text" name="raisonsociale" /></td></tr>
            <tr><td align="right"><label>Dirigeant:</label></td><td><input type="text" name="dirigeant" /></td></tr>
            <tr><td align="right"><label>Date de création:</label></td><td><input type="text" name="datecreation" /></td></tr>
            <tr><td align="right"><label>Google PageSpeed Insights mobile:</label></td><td><input type="text" name="speedmobile" /></td></tr>
            <tr><td align="right"><label>Google PageSpeed Insights ordinateur:</label></td><td><input type="text" name="speedcomputer" /></td></tr>
        </table>
        <br />
        <input type="submit" name="forminfos" value="Valider" />
        <br /><br />

        <?php
        if(isset($bravo)) {
           echo '<font color="#4caf50">'.$bravo.'</font>';
        }

        if(isset($erreur)) {
           echo '<font color="red">'.$erreur.'</font>';
        }
        ?>

      </form>
    </div>
  </body>
</html>
<?php
}
else {
  echo '<a href="index.php?id=1">Retour à l\'index.</a>';
  }
 ?>
<?php
}
else {
  echo '<a href="connexion.php">Veuillez vous connecter</a>';
  }
?>
