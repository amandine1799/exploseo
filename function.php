<?php

function get_cms($bdd, $idcms) {
    $resCms = $bdd->prepare("SELECT * FROM informations WHERE id_informations=?");
    $resCms->execute(array($idcms));
    $cms = $resCms->fetch();
    $resCms->closeCursor();
    return $cms;
}

function get_allcms($bdd) {
    return $bdd->query("SELECT * FROM cms");
}

?>
