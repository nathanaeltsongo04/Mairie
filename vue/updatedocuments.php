<?php
require('./classes/linkdb.php');
require('./classes/documents.php');

$data = new documents();
$data->setCODEDOCUMENT($_GET['id']);
$all = $data->afficherid();
?>
<!-- Right side columns -->
<div class="col-lg-12">
    <div class="row text-center">
        <!-- Recent motifs -->
        <div class="col-2">

        </div>
        <div class="col-8">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title"><?= $pageTitle ?></h5>

                    <form method="POST" action="./controller/documents.php">
                        <?php
                        foreach ($all as $key => $val) {
                        ?>
                            <input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
                            <div class="col-md-12 mb-4 ">
                                <div class="input-group has-validation">
                                    <input value="<?= $val['DESIGNATION'] ?>" type="text" name="designation" class="form-control" id="yourPassword" placeholder="Désignation" required>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4 ">
                                <div class="input-group has-validation">
                                    <input value="<?= $val['PRIX'] ?>" type="number" min="0.0" step="0.1" name="prix" class="form-control" id="yourPassword" placeholder="Prix" required>
                                </div>
                            </div>

                            <div class="col-md-12 mb-4 mt-2">
                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description" required><?= $val['DESCRIPTION'] ?></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <button name="update" class="btn btn-success w-50 fw-bold " type="submit">Modifier</button>
                            </div>
                        <?php
                        }
                        ?>
                    </form>
                    <!-- End Table with stripped rows -->

                </div>

            </div>
        </div><!-- End Recent motifs -->
    </div>
</div>
<!-- End Right side columns -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header border-bottom-0 ">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">Nouveau Bureau</h5>
                <button type="button" class="btn-close h2 fw-bold" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">

            </div>
            <div class="modal-footer border-top-0">

            </div>
        </div>
    </div>
</div>
<!-- End Add Member Modal -->