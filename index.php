<?php

require("./classes/link_db.php");
require_once("./classes/documents.php");

$document = new documents();
$data = $document->afficher();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Commande</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/armoirie.png" rel="icon">
    <link href="assets/img/armoirie.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="./node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="bg-light">
    <?php if (isset($_GET['msg']) == 'true') {
    ?>
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '<?php echo $_GET['info'] ?>',
                showConfirmButton: false,
                timer: 2800
            }).then(function() {
                location.replace('index.php');
            });
        </script>
    <?php } ?>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-10 d-flex flex-column align-items-center justify-content-center">
                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2 mb-3">
                                        <h5 class="card-title text-center pb-0 fs-4 fw-bold">BIENVENUE SUR LA
                                            PLATFORM DE LA MAIRIE, <br>CLIQUER SUR LE BUTTON OU LE LIEN
                                            CI-DESSOUS<br>
                                            POUR
                                            PASSER LA COMMANDE DE DOCUMENT DONT VOUS AVEZ BESOIN ET QUE NOUS POUVONS
                                            VOUS
                                            LIVRER </h5>

                                    </div>

                                    <div class="row mb-3 ">
                                        <div class="col-md-12 text-center">
                                            <button class="btn btn-primary fw-bold w-50 " data-bs-toggle="modal" data-bs-target="#exampleModal" type="submit">Commander</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <p class="small mb-0 fw-bold">Je suis agent à la mairie? <a href="./login.php">Se Connecter</a></p>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->
    <!-- Modal Documents -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-bottom-0 ">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel">Documents</h5>
                    <button type="button" class="btn-close h2 fw-bold" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <section class="section">
                        <div class="iconslist ">
                            <div class="icon bg-light">
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal01" href="">
                                    <i class="bi bi-file-earmark"></i>
                                    <div class="label">Attestation <br>de Bonne conduite vie et moeurs</div>
                                </a>
                            </div>
                            <div class="icon bg-light">
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal02" href="">
                                    <i class="bi bi-file-earmark"></i>
                                    <div class="label">Acte de Naissance</div>
                                </a>
                            </div>
                            <div class="icon bg-light">
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal03" href="">
                                    <i class="bi bi-file-earmark"></i>
                                    <div class="label">Attestation de Residence</div>
                                </a>
                            </div>


                        </div>
                    </section>
                </div>
                <div class="modal-footer border-top-0">

                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Documents -->
    <!-- Modal Attestation de bonne vie et moeurs -->
    <div class="modal fade" id="exampleModal01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg ">
            <div class="modal-content">
                <div class="modal-header border-bottom-0 ">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel">Attestation de Bonne Vie et Moeurs</h5>
                    <button type="button" class="btn-close h2 fw-bold" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form method="POST" action="./controller/commandes.php?vieetmoeurs=true">
                        <div class="row">
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="nom" class="form-control" id="yourPassword" placeholder="Nom" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="postnom" class="form-control" id="yourPassword" placeholder="Post-Nom" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="prenom" class="form-control" id="yourPassword" placeholder="Prenom" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="nationalite" class="form-control" id="yourPassword" placeholder="Nationalité" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="lieudenaissance" class="form-control" id="yourPassword" placeholder="lieu de naissance" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="date" name="datedenaissance" class="form-control" id="yourPassword" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="etatcivil" class="form-control" id="yourPassword" placeholder="Etat Civil" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="pere" class="form-control" id="yourPassword" placeholder="Noms du Père" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="mere" class="form-control" id="yourPassword" placeholder="Noms de la mère" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="profession" class="form-control" id="yourPassword" placeholder="Profession" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="territoire" class="form-control" id="yourPassword" placeholder="Territoire d'origine" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="province" class="form-control" id="yourPassword" placeholder="Province d'origine" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="number" min="0" name="contact" class="form-control" id="yourPassword" placeholder="Téléphone" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="email" name="email" class="form-control" id="yourPassword" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <select name="document" id="inputState" class="form-select">
                                    <option selected>Document...</option>
                                    <?php
                                    foreach ($data as $key => $val) {
                                    ?>
                                        <option value="<?= $val['CODEDOCUMENT'] ?>"><?= $val['DESIGNATION'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 text-center mb-2">
                            <button name="save" class="btn btn-secondary w-50 fw-bold " type="submit">Commander</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-top-0">

                </div>
            </div>
        </div>
    </div>
    <!-- End Attestation bonne vie et moeurs Modal -->
    <!-- Modal Acte de Naissance -->
    <div class="modal fade" id="exampleModal02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg ">
            <div class="modal-content">
                <div class="modal-header border-bottom-0 ">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel">Acte de Naissance</h5>
                    <button type="button" class="btn-close h2 fw-bold" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form method="POST" action="./controller/commandes.php?actenaissance=true">
                        <div class=" row">
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="nationalite" class="form-control" id="yourPassword" placeholder="Nationalité" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="lieudenaissance" class="form-control" id="yourPassword" placeholder="lieu de naissance" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="date" name="datedenaissance" class="form-control" id="yourPassword" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="nom" class="form-control" id="yourPassword" placeholder="Nom" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="postnom" class="form-control" id="yourPassword" placeholder="Post-Nom" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="prenom" class="form-control" id="yourPassword" placeholder="Prenom" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="pere" class="form-control" id="yourPassword" placeholder="Noms du Père" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="mere" class="form-control" id="yourPassword" placeholder="Noms de la mère" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <select name="document" id="inputState" class="form-select">
                                    <option selected>Document...</option>
                                    <?php
                                    foreach ($data as $key => $val) {
                                    ?>
                                        <option value="<?= $val['CODEDOCUMENT'] ?>"><?= $val['DESIGNATION'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="number" min="0" name="contact" class="form-control" id="yourPassword" placeholder="Téléphone" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="email" name="email" class="form-control" id="yourPassword" placeholder="Email" required>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="adresse" class="form-control" id="yourPassword" placeholder="(Village)-Quartier-Commune-Ville" required>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 text-center mb-2">
                            <button name="save" class="btn btn-secondary w-50 fw-bold " type="submit">Commander</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-top-0">

                </div>
            </div>
        </div>
    </div>
    <!-- End Acte de naissance Modal -->
    <!-- Modal Attestation de Residence -->
    <div class="modal fade" id="exampleModal03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg ">
            <div class="modal-content">
                <div class="modal-header border-bottom-0 ">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel">Attestation de Residence</h5>
                    <button type="button" class="btn-close h2 fw-bold" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form method="POST" action="./controller/commandes.php?residence=true">
                        <div class="row">
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="nom" class="form-control" id="yourPassword" placeholder="Nom" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="postnom" class="form-control" id="yourPassword" placeholder="Post-Nom" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="prenom" class="form-control" id="yourPassword" placeholder="Prenom" required>
                                </div>
                            </div>
                        </div>
                        <div class=" row">
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="date" name="datedenaissance" class="form-control" id="yourPassword" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="idcarte" class="form-control" id="yourPassword" placeholder="N° Carte ou Passeport" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <select name="genre" id="inputState" class="form-select">
                                    <option selected>Gender...</option>
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                </select>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="pere" class="form-control" id="yourPassword" placeholder="Noms du Père" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="mere" class="form-control" id="yourPassword" placeholder="Noms de la mère" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <select name="document" id="inputState" class="form-select">
                                    <option selected>Document...</option>
                                    <?php
                                    foreach ($data as $key => $val) {
                                    ?>
                                        <option value="<?= $val['CODEDOCUMENT'] ?>"><?= $val['DESIGNATION'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="number" min="0" name="contact" class="form-control" id="yourPassword" placeholder="Téléphone" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="email" name="email" class="form-control" id="yourPassword" placeholder="Email" required>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-4 ">
                                <div class="input-group has-validation">
                                    <input type="text" name="adresse" class="form-control" id="yourPassword" placeholder="Adresse complète et durée" required>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 text-center mb-2">
                            <button name="save" class="btn btn-secondary w-50 fw-bold " type="submit">Commander</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-top-0">

                </div>
            </div>
        </div>
    </div>
    <!-- End Attestation de residence Modal -->



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>