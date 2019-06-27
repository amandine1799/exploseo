<?php
$title = "CMS";
include('header.php');

$resCms = get_cms($bdd, $_GET['id']);
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
  while($cms = $resCms->fetch())
  {
    ?>
<tr>
  <th scope="row"><?php echo $cms["id_informations"]; ?></th>
  <td><?php echo $cms["url"]; ?></td>
  <td><?php echo $cms["version"]; ?></td>
  <td><?php echo $cms["tel"]; ?></td>
  <td><?php echo $cms["mail"]; ?></td>
  <td><?php echo $cms["siret"]; ?></td>
  <td><?php echo $cms["woocommerce"]; ?></td>
  <td><?php echo $cms["raisonsociale"]; ?></td>
  <td><?php echo $cms["ville"]; ?></td>
  <td><?php echo $cms["codepostal"]; ?></td>
  <td><?php echo $cms["adresse"]; ?></td>
  <td><?php echo $cms["datecreation"]; ?></td>
  <td><?php echo $cms["dirigeant"]; ?></td>
  <td><?php echo $cms["speedmobile"]; ?></td>
  <td><?php echo $cms["speedcomputer"]; ?></td>
</tr>
<?php
  }
  ?>
</tbody>
</table>
<?php
  $resCms->closeCursor();
  ?>
