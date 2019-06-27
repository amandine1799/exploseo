<?php
$title = "CMS";
include('header.php');

$id = $_GET['id'];

$cms = $bdd->query("SELECT * FROM informations WHERE id_cms = $id");

?>
<table class="table table-dark">
<thead>
<tr>
  <th scope="col">ID</th>
  <th scope="col">URL</th>
  <th scope="col">Version</th>
  <th scope="col">Téléphone</th>
  <th scope="col">Mail</th>
  <th scope="col">Siret</th>
  <th scope="col">WooCommerce</th>
  <th scope="col">Raison Sociale</th>
  <th scope="col">Ville</th>
  <th scope="col">Code Postal</th>
  <th scope="col">Adresse</th>
  <th scope="col">Date de Création</th>
  <th scope="col">Dirigeant</th>
  <th scope="col">Vitesse sur Téléphone</th>
  <th scope="col">Vitesse sur Ordinateur</th>
</tr>
</thead>
<tbody>
<?php
  while($rescms = $cms->fetch())
  {
    ?>
<tr>
  <th scope="row"><?php echo $rescms["id_cms"]; ?></th>
  <td><?php echo $rescms["url"]; ?></td>
  <td><?php echo $rescms["version"]; ?></td>
  <td><?php echo $rescms["tel"]; ?></td>
  <td><?php echo $rescms["mail"]; ?></td>
  <td><?php echo $rescms["siret"]; ?></td>
  <td><?php echo $rescms["woocommerce"]; ?></td>
  <td><?php echo $rescms["raisonsociale"]; ?></td>
  <td><?php echo $rescms["ville"]; ?></td>
  <td><?php echo $rescms["codepostal"]; ?></td>
  <td><?php echo $rescms["adresse"]; ?></td>
  <td><?php echo $rescms["datecreation"]; ?></td>
  <td><?php echo $rescms["dirigeant"]; ?></td>
  <td><?php echo $rescms["speedmobile"]; ?></td>
  <td><?php echo $rescms["speedcomputer"]; ?></td>
</tr>
<?php
  }
  ?>
</tbody>
</table>
