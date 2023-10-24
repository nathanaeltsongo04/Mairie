<?php
require('./classes/linkdb.php');
require('./classes/services.php');

$data = new services();
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
    location.replace('services.php');
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
                    <a class="icon " data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                            class="bi bi-plus-circle-fill h4"></i></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $pageTitle ?></h5>

                    <table class="table datatable ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Désignation</th>
                                <th scope="col">Email</th>
                                <th scope="col">Auteur</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                            foreach ($all as $key => $val) {
                            ?>
                            <tr>
                                <th scope="row fw bold"><?= $val['CODESERVICE'] ?></th>
                                <td class="fw bold"><?= $val['DESIGNATION'] ?></td>
                                <td class="fw bold"><?= $val['EMAIL'] ?></td>
                                <td class="fw bold"><?= $val['AUTEUR'] ?></td>
                                <td class="fw bold text-center p-md-2">
                                    <a class="text-info mx-auto md-2"
                                        href="./updateservices.php?id=<?= $val['CODESERVICE'] ?>">
                                        <span class="badge bg-success ">
                                            <i class="bi bi-pencil-square fa-lg "></i>
                                        </span>
                                    </a>
                                    <a class="text-info mx-auto pd-2"
                                        href="./controller/services.php?id=<?= $val['CODESERVICE'] ?>&supprimer=true">
                                        <span class="badge bg-danger ">
                                            <i class="bi bi-trash fa-lg "></i>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header border-bottom-0 ">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">Nouveau Bureau</h5>
                <button type="button" class="btn-close h2 fw-bold" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form method="POST" action="./controller/services.php">

                    <div class="col-md-12 mb-4 ">
                        <div class="input-group has-validation">
                            <input type="text" name="designation" class="form-control" id="yourPassword"
                                placeholder="Désignation" required>
                        </div>
                    </div>

                    <div class="col-md-12 mb-4 mt-2">
                        <input type="email" name="email" class="form-control" id="yourPassword"
                            placeholder="xxxxxx@gmail.com" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-md-12 text-center">
                        <button name="save" class="btn btn-secondary w-50 fw-bold " type="submit">Enregistrer</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer border-top-0">

            </div>
        </div>
    </div>
</div>
<!-- End Add Member Modal -->