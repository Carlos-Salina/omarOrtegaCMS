<?php
include "database.php";

class subirPublicacionesModel
{
    function publicarBoletines($titulo, $fecha)
    {
        try {
            $connection = database::instance();
            $sql = "INSERT INTO prueba (titulo,fecha) VALUES ('$titulo','$fecha')";
            $query = $connection->prepare($sql);
            $query->execute();
            return 1;
        } catch (\PDOException $e) {
            print "Error.." . $e->getMessage();
        }
        return 0;
    }

    function obtnerDatos(
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
    ) {

        try {
            $connection = database::instance();
            $sql = "SELECT * FROM t_publicaciones ";
            $query = $connection->prepare($sql);
            $query->execute();
            $publicaciones = $query->fetchAll();
            $idCount = count($publicaciones) + 1;

            if ($idCount == 1) {
                $tituloDB = null;
            } else {
                foreach ($publicaciones as $data) {
                    $tituloDB = $data["titulo"];
                }
            }
            if ($titulo != $tituloDB) {
                if (!$tmpArchivoP) {
                    $rutaImageP = null;
                } else {
                    $rutaImageP = 'assets/images/publicaciones/' . $selectCategoria . '/' . $idCount . '.jpeg';
                    if (move_uploaded_file($tmpArchivoP, '../../' . $rutaImageP)) {
                        $connection = database::instance();
                        $sql = "INSERT INTO t_galeria (ruta,categoria) VALUES ('$rutaImageP','$selectCategoria')";
                        $insert = $connection->prepare($sql);
                        $insert->execute();
                    } else {
                        echo "Error al";
                    }
                }
                if (!$tmpArchivoS1) {
                    $rutaImageS1 = null;
                } else {
                    $rutaImageS1 = 'assets/images/publicaciones/' . $selectCategoria . '/' . $idCount . '_1.jpeg';
                    if (move_uploaded_file($tmpArchivoS1, '../../' . $rutaImageS1)) {
                        $connection = database::instance();
                        $sql = "INSERT INTO t_galeria (ruta,categoria) VALUES ('$rutaImageS1','$selectCategoria')";
                        $insert = $connection->prepare($sql);
                        $insert->execute();
                    } else {
                        echo "Error al";
                    }
                }
                if (!$tmpArchivoS2) {
                    $rutaImageS2 = null;
                } else {
                    $rutaImageS2 = 'assets/images/publicaciones/' . $selectCategoria . '/' . $idCount . '_2.jpeg';
                    if (move_uploaded_file($tmpArchivoS2, '../../' . $rutaImageS2)) {
                        $connection = database::instance();
                        $sql = "INSERT INTO t_galeria (ruta,categoria) VALUES ('$rutaImageS2','$selectCategoria')";
                        $insert = $connection->prepare($sql);
                        $insert->execute();
                    } else {
                        echo "Error al";
                    }
                }
                if (!$tmpArchivoS3) {
                    $rutaImageS3 = null;
                } else {
                    $rutaImageS3 = 'assets/images/publicaciones/' . $selectCategoria . '/' . $idCount . '_3.jpeg';
                    if (move_uploaded_file($tmpArchivoS3, '../../' . $rutaImageS3)) {
                        $connection = database::instance();
                        $sql = "INSERT INTO t_galeria (ruta,categoria) VALUES ('$rutaImageS3','$selectCategoria')";
                        $insert = $connection->prepare($sql);
                        $insert->execute();
                    } else {
                        echo "Error al";
                    }
                }
                if (!$tmpArchivoS4) {
                    $rutaImageS4 = null;
                } else {
                    $rutaImageS4 = 'assets/images/publicaciones/' . $selectCategoria . '/' . $idCount . '_4.jpeg';
                    if (move_uploaded_file($tmpArchivoS4, '../../' . $rutaImageS4)) {
                        $connection = database::instance();
                        $sql = "INSERT INTO t_galeria (ruta,apartado) VALUES ('$rutaImageS4','$selectCategoria')";
                        $insert = $connection->prepare($sql);
                        $insert->execute();
                    } else {
                        echo "Error al";
                    }
                }
                $sql = "INSERT INTO t_publicaciones(
                                categoria,titulo,fecha,descripcion,primera_seccion,segunda_seccion,
                                imagen_p,imagen_s1,imagen_s2,imagen_s3,imagen_s4
                            ) 
                        VALUES 
                            (
                                '$selectCategoria','$titulo','$fecha','$descripcion','$primera_seccion',
                                '$segunda_seccion','$rutaImageP','$rutaImageS1','$rutaImageS2','$rutaImageS3',
                                '$rutaImageS4'
                            )";
                $query = $connection->prepare($sql);
                $query->execute();
            } else {
                echo "<br> LOS TITULOS SON IGUALES";
            }
        } catch (\PDOException $e) {
            print "Error.." . $e->getMessage();
        }

        /*  echo "ESTAMOS EN EL MODELO <br>";
        echo '<br>'.$selectCategoria;
        echo '<br>'.$titulo;
        echo '<br>'.$fecha;
        echo '<br>'.$descripcion;
        echo '<br>'.$primera_seccion;
        echo '<br>'.$segunda_seccion;
        echo '<br>'.$tmpArchivoP;
        echo '<br>'.$tmpArchivoS1;
        echo '<br>'.$tmpArchivoS2;
        echo '<br>'.$tmpArchivoS3;
        echo '<br>'.$tmpArchivoS4; */
    }
}
