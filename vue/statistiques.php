<?php
require('./classes/linkdb.php');
require('./classes/commandes.php');
require('./classes/paiement.php');

$data = new commandes();
$rs = $data->totalcommande();
$rsj = $data->journaliere();
$rsm = $data->mensuelle();
$rsa = $data->annuelle();

$paie = new paiement();
$rspaie = $paie->documentlivre();
$rsnpaie = $paie->documennontlivre();
?>
<!-- Left side columns -->
<div class="col-lg-12">
    <div class="row">
        <!-- Entrées Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">

                <div class="card-body">
                    <h5 class="card-title">Total Commandes <span></span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-file-earmark"></i>
                        </div>
                        <div class="ps-3">

                            <?php
                            foreach ($rs as $key => $val) {
                            ?>
                                <h6><?= $val['TOTAL'] ?></h6>
                            <?php
                            }
                            ?>
                            <span class="text-success small pt-1 fw-bold">Commandes</span> <span class="text-muted small pt-2 ps-1"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Entrées Card -->

        <!-- Sorties Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">

                <div class="card-body">
                    <h5 class="card-title">Documents Livrés <span></span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-file-earmark"></i>
                        </div>
                        <div class="ps-3">
                            <?php
                            foreach ($rspaie as $key => $val) {
                            ?>
                                <h6><?= $val['TOTAL'] ?></h6>
                            <?php
                            }
                            ?>
                            <span class="text-success small pt-1 fw-bold">Documents</span> <span class="text-muted small pt-2 ps-1"></span>

                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Sorties Card -->

        <!-- Solde Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">

                <div class="card-body">
                    <h5 class="card-title">Documents Non Livrés <span></span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-file-earmark"></i>
                        </div>
                        <div class="ps-3">
                            <?php
                            foreach ($rsnpaie as $key => $val) {
                            ?>
                                <h6><?= $val['TOTAL'] ?></h6>
                            <?php
                            }
                            ?>
                            <span class="text-success small pt-1 fw-bold">Documents</span> <span class="text-muted small pt-2 ps-1"></span>

                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Sorties Card -->

        <!-- Membres Card -->
        <div class="col-xxl-4 col-md-4">

            <div class="card info-card customers-card">

                <div class="card-body">
                    <h5 class="card-title">Commandes Journalières <span></span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-file-earmark"></i>
                        </div>
                        <div class="ps-3">
                            <?php
                            foreach ($rsj as $key => $val) {
                            ?>
                                <h6><?= $val['TOTAL'] ?></h6>

                                <span class="text-success small pt-1 fw-bold"><?= $val['DAY'] ?></span> <span class="text-muted small pt-2 ps-1"></span>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>
            </div>

        </div><!-- End Membres Card -->
        <!-- Sorties Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">

                <div class="card-body">
                    <h5 class="card-title">Commandes Mensuelles <span></span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-file-earmark"></i>
                        </div>
                        <div class="ps-3">
                            <?php
                            foreach ($rsm as $key => $val) {
                            ?>
                                <h6><?= $val['TOTAL'] ?></h6>

                                <span class="text-success small pt-1 fw-bold"><?= strtoupper($val['MONTH']) ?></span> <span class="text-muted small pt-2 ps-1"></span>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Sorties Card -->


        <!-- Sorties Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">

                <div class="card-body">
                    <h5 class="card-title">Commandes Annuelles <span></span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-file-earmark"></i>
                        </div>
                        <div class="ps-3">
                            <?php
                            foreach ($rsa as $key => $val) {
                            ?>
                                <h6><?= $val['TOTAL'] ?></h6>

                                <span class="text-success small pt-1 fw-bold"><?= strtoupper($val['ANNEE']) ?></span> <span class="text-muted small pt-2 ps-1"></span>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Sorties Card -->

    </div>
</div>