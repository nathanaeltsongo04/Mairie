<?php
require('./classes/linkdb.php');
require('./classes/utilisateurs.php');
require('./classes/services.php');

$data = new Utilisateurs();
$all = $data->afficher();

$services = new services();
$rs = $services->afficher();

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
    location.replace('utilisateurs.php');
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
                                <th scope="col">NOMS</th>
                                <th scope="col">SERVICE</th>
                                <th scope="col">AUTEUR</th>
                                <th scope="col">ACTION</th>

                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                            foreach ($all as $key => $val) {
                            ?>
                            <tr>
                                <th scope="row fw bold"><?= $val['CODEUTILISATEUR'] ?></th>
                                <td class="fw bold"><?= $val['NOM'] . " " . $val['POSTNOM'] . " " . $val['PRENOM'] ?>
                                </td>
                                <td class="fw bold"><?= $val['FONCTION'] ?></td>
                                <td class="fw bold"><?= $val['AUTEUR'] ?></td>
                                <td class="fw bold text-center p-md-2">
                                    <a class="text-info mx-auto md-2"
                                        href="./updatedocuments.php?id=<?= $val['CODEUTILISATEUR'] ?>">
                                        <span class="badge bg-success ">
                                            <i class="bi bi-pencil-square fa-lg "></i>
                                        </span>
                                    </a>
                                    <a class="text-info mx-auto pd-2"
                                        href="./controller/documents.php?id=<?= $val['CODEUTILISATEUR'] ?>&supprimer=true">
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
                <h5 class="modal-title fw-bold" id="exampleModalLabel">Nouveau Utilisateur</h5>
                <button type="button" class="btn-close h2 fw-bold" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form method="POST" action="./controller/utilisateurs.php">

                    <div class="col-md-12 mb-4 ">
                        <div class="input-group has-validation">
                            <input type="text" name="nom" class="form-control" id="yourPassword" placeholder="Nom"
                                required>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4 ">
                        <div class="input-group has-validation">
                            <input type="text" name="postnom" class="form-control" id="yourPassword"
                                placeholder="Post-Nom" required>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4 ">
                        <div class="input-group has-validation">
                            <input type="text" name="prenom" class="form-control" id="yourPassword" placeholder="Prénom"
                                required>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4 ">
                        <select name="fonction" id="inputState" class="form-select">
                            <option selected>Bureau...</option>
                            <?php
                            foreach ($rs as $key => $val) {
                            ?>
                            <option value="<?= $val['CODESERVICE'] ?>"><?= $val['DESIGNATION'] ?></option>
                            <?php
                            }
                            ?>

                        </select>
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