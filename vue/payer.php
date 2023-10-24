<?php
require('./classes/linkdb.php');
require('./classes/commandes.php');

$data = new commandes();
$data->setCODECOMMANDE($_GET['id']);
$all = $data->afficherid();

if (isset($_GET['msg']) == 'true') {
?>
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '<?php echo $_GET['info'] ?>',
            showConfirmButton: false,
            timer: 2800
        }).then(function() {
            location.replace('services.php');
        });
    </script>
<?php } ?>
<!-- Right side columns -->
<div class="col-lg-12">
    <div class="row">
        <!-- Recent motifs -->
        <div class="col-2">

        </div>
        <div class="col-8">
            <div class="card recent-sales overflow-auto">

                <div class="filter">
                    <a class="icon " data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-circle-fill h4"></i></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $pageTitle ?></h5>
                    <div class="row">
                        <form method="POST" action="./controller/paiements.php?contact=<?= $_GET['contact'] ?>">
                            <input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
                            <?php
                            foreach ($all as $key => $val) {
                            ?>
                                <div class=" col-md-12 mb-4 ">
                                    <div class=" input-group has-validation">
                                        <input value="<?= $val['NOM'] . " " . $val['POSTNOM'] . " " . $val['PRENOM'] ?>" readonly type="text" name="declarant" class="form-control" id="yourPassword" required>
                                    </div>
                                </div>
                                <div class=" col-md-12 mb-4 ">
                                    <div class=" input-group has-validation">
                                        <input value="<?= $val['DOCUMENT'] ?>" readonly type="text" name="document" class="form-control" id="yourPassword" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4 ">
                                    <div class="input-group has-validation">
                                        <input readonly value="<?= $val['PRIX'] ?>" type="text" name="montant" class="form-control" id="yourPassword" required>
                                    </div>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button name="save" class="btn btn-secondary w-50 fw-bold " type="submit">Encaisser</button>
                                </div>
                            <?php
                            }
                            ?>

                        </form>
                    </div>
                </div>

            </div>
        </div><!-- End Recent motifs -->
    </div>
</div>
<!-- End Right side columns -->