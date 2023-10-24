<?php
$id = $_GET['id'];
if ($_GET['doc'] == 'Attestation de Residence') {
    header("location:./residence.php?id=$id");
} elseif ($_GET['doc'] == 'Acte de Naissance') {
    header("location:./naissance.php?id=$id");
} elseif ($_GET['doc'] == 'Attestation de bonne conduite vie et moeurs') {
    header("location:./bonnevie.php?id=$id");
} else {
    echo 'Neant';
}
