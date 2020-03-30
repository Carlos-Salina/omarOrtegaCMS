<?php
include "./models/database.php";
$connection = Database::instance();
$sql = "SELECT * FROM t_publicaciones";
$query = $connection->prepare($sql);
$query->execute();
$publicaciones = $query->fetchAll();

?>
<div class="row">
    <div class="col-md-12">
        <div class="mb-3 card">
            <div class="card-body">
                <ul class="tabs-animated-shadow nav-justified tabs-animated nav">
                    <li class="nav-item">
                        <a role="tab" class="nav-link active" id="tab-c1-0" data-toggle="tab" href="#tab-animated1-0">
                            <span class="nav-text">Boletín</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-c1-1" data-toggle="tab" href="#tab-animated1-1">
                            <span class="nav-text">Entrevista</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link" id="tab-c1-2" data-toggle="tab" href="#tab-animated1-2">
                            <span class="nav-text">Evento</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-animated1-0" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Publicaciones en Boletín
                                        <div class="btn-actions-pane-right">
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>titulo</th>
                                                    <th class="text-center">Editar</th>
                                                    <th class="text-center">Eliminar</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            foreach ($publicaciones as $data) {
                                                $categoria = $data["categoria"];
                                                if ($categoria == 'boletin') {
                                                    $titulo = $data["titulo"];
                                                    $fecha = $data["fecha"];
                                                    $imagenP = $data["imagen_p"];
                                            ?>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <div class="widget-content-left">
                                                                                <img width="40" class="rounded-circle" src="../<?php echo $imagenP ?>" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-left flex2">
                                                                            <div class="widget-heading"><?php echo $titulo ?></div>
                                                                            <div class="widget-subheading opacity-7"><?php echo $fecha ?></div>
                                                                            <a href="#" target="_bank">
                                                                                <button class="btn btn-success btn-sm">Ver
                                                                                    <i class="nav-link-icon fa fa-eye"></i>
                                                                                </button>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" id="PopoverCustomT-1" class="btn btn-warning btn-sm">Editar
                                                                    <i class="metismenu-icon pe-7s-pen"> </i>
                                                                </button>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm" data-toggle="modal" data-target=".delete-modal">Eliminar
                                                                    <i class="metismenu-icon pe-7s-trash"> </i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-animated1-1" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Publicaciones en Entrevista
                                        <div class="btn-actions-pane-right">
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>titulo</th>
                                                    <th class="text-center">Editar</th>
                                                    <th class="text-center">Eliminar</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            foreach ($publicaciones as $data) {
                                                $categoria = $data["categoria"];
                                                if ($categoria == 'entrevista') {
                                                    $titulo = $data["titulo"];
                                                    $fecha = $data["fecha"];
                                                    $imagenP = $data["imagen_p"];
                                            ?>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <div class="widget-content-left">
                                                                                <img width="40" class="rounded-circle" src="../<?php echo $imagenP ?>" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-left flex2">
                                                                            <div class="widget-heading"><?php echo $titulo ?></div>
                                                                            <div class="widget-subheading opacity-7"><?php echo $fecha ?></div>
                                                                            <a href="#" target="_bank">
                                                                                <button class="btn btn-success btn-sm">Ver
                                                                                    <i class="nav-link-icon fa fa-eye"></i>
                                                                                </button>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" id="PopoverCustomT-1" class="btn btn-warning btn-sm">Editar
                                                                    <i class="metismenu-icon pe-7s-pen"> </i>
                                                                </button>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm" data-toggle="modal" data-target=".delete-modal">Eliminar
                                                                    <i class="metismenu-icon pe-7s-trash"> </i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="tab-animated1-2" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Publicaciones en Evento
                                        <div class="btn-actions-pane-right">
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>titulo</th>
                                                    <th class="text-center">Editar</th>
                                                    <th class="text-center">Eliminar</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            foreach ($publicaciones as $data) {
                                                $categoria = $data["categoria"];
                                                if ($categoria == 'evento') {
                                                    $idPub = $data["id"];
                                                    $titulo = $data["titulo"];
                                                    $fecha = $data["fecha"];
                                                    $imagenP = $data["imagen_p"];
                                            ?>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <div class="widget-content-left">
                                                                                <img width="40" class="rounded-circle" src="../<?php echo $imagenP ?>" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-left flex2">
                                                                            <div class="widget-heading"><?php echo $titulo ?></div>
                                                                            <div class="widget-subheading opacity-7"><?php echo $fecha ?></div>
                                                                            <a href="https://omarortega.com.mx/templates/pub_boletines/pub_b.php?id=<?php echo $idPub ?>" target="_bank">
                                                                                <button class="btn btn-success btn-sm">Ver
                                                                                    <i class="nav-link-icon fa fa-eye"></i>
                                                                                </button>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" id="PopoverCustomT-1" class="btn btn-warning btn-sm">Editar
                                                                    <i class="metismenu-icon pe-7s-pen"> </i>
                                                                </button>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm" data-toggle="modal" data-target=".delete-modal">Eliminar
                                                                    <i class="metismenu-icon pe-7s-trash"> </i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>