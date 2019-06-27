<?php

function get_cms($bdd, $idcms) {
    $resCms = $bdd->prepare("SELECT * FROM informations WHERE id_informations=?");
    $resCms->execute(array($idcms));
    $onecms = $resCms->fetch();
    $resCms->closeCursor();
    return $onecms;
}

function get_allcms($bdd) {
    return $bdd->query("SELECT * FROM cms");
}

?>
