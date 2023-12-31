<?php
require_once("./classes/linkdb.php");
?>
<div class="col-xl-4">
    <?php
    if (isset($_GET['msg']) == 'true') {
    ?>
        <script>
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: '<?php echo $_GET['info'] ?>',
                showConfirmButton: false,
                timer: 2800
            }).then(function() {
                location.replace('profile.php');
            });
        </script>
    <?php } ?>

    <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="./assets/img/profile-img.png" style="height: 100px; width:100px;" alt="Profile" class="rounded-circle">
            <h4 class="text-center"></h4>
            <?= $_SESSION['nom'] . " " . $_SESSION['postnom'] . " " . $_SESSION['prenom'] ?></h4>
            <h6 class="fw-bold ">
                <?= $_SESSION['fonction'] ?>
            </h6>
            <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>

</div>

<div class="col-xl-8">

    <div class="card">
        <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Vue</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Modifier Mot
                        de Passe</button>
                </li>

            </ul>
            <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                    <h5 class="card-title">Details Profile</h5>

                    <div class="row mb-2">
                        <div class="col-lg-3 col-md-4 label fw-bold ">Noms</div>
                        <div class="col-lg-9 col-md-8">
                            <?= $_SESSION['nom'] . " " . $_SESSION['postnom'] . " " . $_SESSION['prenom'] ?></div>
                    </div>

                </div>
                <div class="tab-pane fade pt-3" id="profile-change-password">
                    <!-- Change Password Form -->
                    <form method="POST" action="./controller/compte.php?update=true">
                        <div class="row mb-3">
                            <input type="hidden" name="id" value="<?= $_SESSION['CODE'] ?>" />
                            <label for="currentPassword" class="col-md-6 col-lg-5 col-form-label">Nom
                                d'Utilisateur</label>
                            <div class="col-md-6 col-lg-7">
                                <input value="<?= $_SESSION['nomutilisateur'] ?>" name="nomutilisateur" type="text" class="form-control" id="currentPassword">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="currentPassword" class="col-md-6 col-lg-5 col-form-label">Mot de Passe
                                Courant</label>
                            <div class="col-md-6 col-lg-7">
                                <input name="password" type="password" class="form-control" id="currentPassword">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="newpassword" class="col-md-6 col-lg-5 col-form-label">Nouveau Mot de
                                Passe</label>
                            <div class="col-md-6 col-lg-7">
                                <input name="newpassword" type="password" class="form-control" id="newPassword">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="confirmassword" class="col-md-6 col-lg-5 col-form-label">Confirmer le</label>
                            <div class="col-md-6 col-lg-7">
                                <input name="confirmpassword" type="password" class="form-control" id="renewPassword">
                            </div>
                        </div>

                        <div class="text-center">
                            <button name="" type="submit" class="btn btn-success">Modifier</button>
                        </div>
                    </form><!-- End Change Password Form -->

                </div>

            </div><!-- End Bordered Tabs -->

        </div>
    </div>

</div>