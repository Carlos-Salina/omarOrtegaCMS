<?php
include "./views/layouts/header.php";
?>
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-paint icon-gradient bg-sunny-morning">
                        </i>
                    </div>
                    <div>Configuracion de usuario
                        <div class="page-title-subheading">Configura tu usuario a tu manera.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3 card">
                    <div class="card-body">
                        <ul class="tabs-animated-shadow nav-justified tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-c1-0" data-toggle="tab" href="#tab-animated1-0">
                                    <span class="nav-text">Datos Usuario</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-c1-1" data-toggle="tab" href="#tab-animated1-1">
                                    <span class="nav-text">Actualizar usuario</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-c1-1" data-toggle="tab" href="#tab-animated1-2">
                                    <span class="nav-text">Actualizar contraseña</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-animated1-0" role="tabpanel">
                                <?php include "./views/actions/user/datosUsuario.php"; ?>
                            </div>
                            <div class="tab-pane" id="tab-animated1-1" role="tabpanel">
                                <?php include "./views/actions/user/formUpdateUser.php"; ?>
                            </div>
                            <div class="tab-pane" id="tab-animated1-2" role="tabpanel">
                                <?php include "./views/actions/user/formUpdatePass.php"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "./views/layouts/footer.php";
    ?>