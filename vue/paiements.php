<?php
require('./classes/linkdb.php');
require('./classes/paiement.php');

$data = new paiement();
$all = $data->afficher();

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
            location.replace('documents.php');
        });
    </script>
<?php } ?>
<!-- Right side columns -->
<div class="col-lg-12">
    <div class="row">
        <!-- Recent motifs -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title"><?= $pageTitle ?></h5>

                    <table class="table datatable ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">DECLARANT</th>
                                <th scope="col">DOCUMENT</th>
                                <th scope="col">MONTANT</th>
                                <th scope="col">CAISSIER(E)</th>
                                <th scope="col">DATE</th>
                                <th scope="col">STATUT</th>
                                <th scope="col">ACTION</th>

                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                            foreach ($all as $key => $val) {
                            ?>
                                <tr>
                                    <th scope="row fw bold"><?= $val['CODEPAYEMENT'] ?></th>
                                    <td class="fw bold"><?= $val['NOM'] . " " . $val['POSTNOM'] . " " . $val['PRENOM'] ?>
                                    </td>
                                    <td class="fw bold"><?= $val['DOCUMENT'] ?></td>
                                    <td class="fw bold"><?= $val['MONTANT'] ?></td>
                                    <td class="fw bold"><?= $val['AUTEUR'] ?></td>
                                    <td class="fw bold"><?= $val['DDATE'] ?></td>
                                    <td class="fw bold">
                                        <?php
                                        if ($val['STATUT'] == 0) {
                                        ?>
                                            <span class="badge bg-warning">Non Livré</span>
                                        <?php
                                        } else {
                                        ?>
                                            <span class="badge bg-success">Livré</span>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td class="fw bold text-center p-md-2">
                                        <a class="text-info mx-auto md-2" href="./imprimer.php?id=<?= $val['CODEPAYEMENT'] ?>&doc=<?= $val['DOCUMENT'] ?>">
                                            <span class="badge bg-success">
                                                <i class="bi bi-printer-fill fa-lg "></i>
                                            </span>
                                        </a>
                                    </td>

                                </tr>
                            <?php
                            }
                            ?>


                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>

            </div>
        </div><!-- End Recent motifs -->
    </div>
</div>
<!-- End Right side columns -->