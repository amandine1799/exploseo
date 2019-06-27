<?php

function get_allcms($bdd) {
    return $bdd->query("SELECT * FROM cms");
}

?>
