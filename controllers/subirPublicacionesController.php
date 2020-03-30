<?php
include "../models/subirPublicacionesModel.php";
$selectCategoria = $_POST["selectCategoria"];
$titulo = $_POST["titulo"];
$fecha = $_POST["fecha"];
$descripcion = $_POST["descripcion"];
$primera_seccion = $_POST["primera_seccion"];
$segunda_seccion = $_POST["segunda_seccion"];
// --------- IMAGENES DE LA PUBLICACION 
$tmpArchivoP = $_FILES["archivoP"]["tmp_name"];
$archivoS1 = $_FILES["archivoS1"]["name"];
$archivoS2 = $_FILES["archivoS2"]["name"];
$archivoS3 = $_FILES["archivoS3"]["name"];
$archivoS4 = $_FILES["archivoS4"]["name"];

$null = '';

$subirPublicacion = new subirPublicacionesModel();

if (isset($_POST["subir"])) {
    if ($descripcion != '' && $primera_seccion != '' ) {
        $tmpArchivoS1 = $_FILES["archivoS1"]["tmp_name"];
        $tmpArchivoS2 = $_FILES["archivoS2"]["tmp_name"];
        $tmpArchivoS3 = $_FILES["archivoS3"]["tmp_name"];
        $tmpArchivoS4 = $_FILES["archivoS4"]["tmp_name"];
        if ($subirPublicacion->obtnerDatos(
            $selectCategoria,
            $titulo,
            $fecha,
            $descripcion,
            $primera_seccion,
            $segunda_seccion,
            $tmpArchivoP,
            $tmpArchivoS1,
            $tmpArchivoS2,
            $tmpArchivoS3,
            $tmpArchivoS4
        )) {
            //header("Location:../subirPublicacion.php?res=1");
        } else {
            //header("Location:../subirPublicacion.php?res=2");
        }
        /* if ($archivoS1 != null) {
            $tmpArchivoS1 = $_FILES["archivoS1"]["tmp_name"];
            if ($archivoS2 != null) {
                $tmpArchivoS2 = $_FILES["archivoS2"]["tmp_name"];
                if ($archivoS3 != null) {
                    $tmpArchivoS3 = $_FILES["archivoS3"]["tmp_name"];
                    if ($archivoS4 != null) {
                        $tmpArchivoS4 = $_FILES["archivoS4"]["tmp_name"];
                        if ($subirPublicacion->obtnerDatos(
                            $selectCategoria,
                            $titulo,
                            $fecha,
                            $descripcion,
                            $primera_seccion,
                            $segunda_seccion,
                            $tmpArchivoP,
                            $tmpArchivoS1,
                            $tmpArchivoS2,
                            $tmpArchivoS3,
                            $tmpArchivoS4
                        )) {
                            //header("Location:../subirPublicacion.php?res=1");
                        } else {
                            //header("Location:../subirPublicacion.php?res=2");
                        }
                    } else {
                        if ($subirPublicacion->obtnerDatos(
                            $selectCategoria,
                            $titulo,
                            $fecha,
                            $descripcion,
                            $primera_seccion,
                            $segunda_seccion,
                            $tmpArchivoP,
                            $tmpArchivoS1,
                            $tmpArchivoS2,
                            $tmpArchivoS3,
                            $null
                        )) {
                            //header("Location:../subirPublicacion.php?res=1");
                        } else {
                            //header("Location:../subirPublicacion.php?res=2");
                        }
                    }
                } else {
                    if ($subirPublicacion->obtnerDatos(
                        $selectCategoria,
                        $titulo,
                        $fecha,
                        $descripcion,
                        $primera_seccion,
                        $segunda_seccion,
                        $tmpArchivoP,
                        $tmpArchivoS1,
                        $tmpArchivoS2,
                        $null,
                        $null
                    )) {
                        //header("Location:../subirPublicacion.php?res=1");
                    } else {
                        //header("Location:../subirPublicacion.php?res=2");
                    }
                }
            } else {
                if ($subirPublicacion->obtnerDatos(
                    $selectCategoria,
                    $titulo,
                    $fecha,
                    $descripcion,
                    $primera_seccion,
                    $segunda_seccion,
                    $tmpArchivoP,
                    $tmpArchivoS1,
                    $null,
                    $null,
                    $null
                )) {
                    //header("Location:../subirPublicacion.php?res=1");
                } else {
                    //header("Location:../subirPublicacion.php?res=2");
                }
            }
        } else {
            if ($subirPublicacion->obtnerDatos(
                $selectCategoria,
                $titulo,
                $fecha,
                $descripcion,
                $primera_seccion,
                $segunda_seccion,
                $tmpArchivoP,
                $null,
                $null,
                $null,
                $null
            )) {
                //header("Location:../subirPublicacion.php?res=1");
            } else {
                //header("Location:../subirPublicacion.php?res=2");
            }
        } */
    } else {
        header("Location:../subirPublicacion.php?res=3");
    }
} else {
    echo "NO SE ENCONTRO EL BOTON";
}
