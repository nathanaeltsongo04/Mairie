<?php
require('./classes/linkdb.php');
require('./classes/commandes.php');

$data = new commandes();
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
            location.replace('commandes.php');
        });
    </script>
<?php } ?>
<!-- Right side columns -->
<div class="col-lg-12">
    <div class="row">
        <!-- Recent motifs -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">

                <div class="filter">
                    <a class="icon " href="./index.php"><i class="bi bi-plus-circle-fill h4"></i></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $pageTitle ?></h5>

                    <table class="table datatable ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">DECLARANT</th>
                                <th scope="col">DOCUMENT</th>
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
                                    <th scope="row fw bold"><?= $val['CODECOMMANDE'] ?></th>
                                    <td class="fw bold"><?= $val['NOM'] . " " . $val['POSTNOM'] . " " . $val['PRENOM'] ?>
                                    </td>
                                    <td class="fw bold"><?= $val['DOCUMENT'] ?></td>
                                    <td class="fw bold"><?= $val['DDATE'] ?></td>
                                    <td class="fw bold ">
                                        <?php
                                        if ($val['STATUT'] == 0) {
                                        ?>
                                            <span class="badge bg-warning ">Non Payé</span>
                                        <?php
                                        } else {
                                        ?>
                                            <span class="badge bg-success">Payé</span>
                                        <?php
                                        }
                                        ?>
                                    <td class="fw bold text-center p-md-2">
                                        <?php
                                        if ($val['STATUT'] == 0) {
                                        ?>
                                            <a class="text-info mx-auto pd-2" href="./payer.php?id=<?= $val['CODECOMMANDE'] ?>&contact=<?= $val['EMAIL'] ?>">
                                                <span class="badge bg-info ">
                                                    <i class="bi bi-cash-coin fa-lg "></i>
                                                </span>
                                            </a>
                                            <a class="text-info mx-auto md-2" href="">
                                                <span class="badge bg-success ">
                                                    <i class="bi bi-pencil-square fa-lg "></i>
                                                </span>
                                            </a>
                                            <a class="text-info mx-auto pd-2" href="#">
                                                <span class="badge bg-danger ">
                                                    <i class="bi bi-trash fa-lg "></i>
                                                </span>
                                            </a>
                                        <?php
                                        } else {
                                        ?>
                                            <a class="text-info mx-auto md-2" href="#">
                                                <span class="badge bg-success ">
                                                    <i class="bi bi-pencil-square fa-lg "></i>
                                                </span>
                                            </a>
                                            <a class="text-info mx-auto pd-2" href="#">
                                                <span class="badge bg-danger ">
                                                    <i class="bi bi-trash fa-lg "></i>
                                                </span>
                                            </a>
                                        <?php
                                        }
                                        ?>

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