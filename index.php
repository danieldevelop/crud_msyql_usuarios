<?php 

require_once './includes/functions.php';
$all_usuarios = listarUsuarios();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD PHP | MySQL</title>
        <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">

        <!-- CSS only and local -->
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>

        <header class="text-center">
            <div class="container">
                <h1 class="fw-normal mt-4 h2">Lista de Usuarios</h1>
                <small class="text-muted">Database of example <span class="fw-bold">crudmysql</span></small>
            </div>
        </header>


        <main class="my-3">
            <div class="container">
                <!-- button to add new user -->
                <section>
                    <button class="btn btn-success btn-sm text-uppercase d-flex align-items-center gap-2 ms-auto" type="button" id="btn-newuser">
                        <img src="./img/person-fill-add.svg" alt="icon bootstrap" class="img-fluid">
                        nuevo usuario
                    </button>
                </section>

                <!-- table to show users -->
                <section class="py-3">
                    <div class="table-responsive">
                        <table class="table table-sm table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="text-uppercase">rut</th>
                                    <th class="text-uppercase">nombre</th>
                                    <th class="text-uppercase">nacionalidad</th>
                                    <th class="text-uppercase">sexo</th>
                                    <th class="text-uppercase">fch. nacimiento</th>
                                    <th class="text-uppercase">usuario</th>
                                    <th colspan="2"></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php if(!existeRegistros()) { ?>
                                <tr>
                                    <td colspan="8" class="text-center">No existen registros</td>
                                </tr>

                                <?php } else { 
                                    foreach($all_usuarios as $a_usuario): ?>
                                        <tr>
                                            <?php 
                                                if ($a_usuario['nacionalidad'] == "-1"):
                                                    $nacionalidad = '';
                                                else:
                                                    $nacionalidad = ucfirst($a_usuario['nacionalidad']);
                                                endif;
                                        
                                                if ($a_usuario['sexo'] == "M"):
                                                    $sexo = 'Masculino';
                                                elseif ($a_usuario['sexo'] == "F"):
                                                    $sexo ='Femenina';
                                                elseif ($a_usuario['sexo'] == "P" || $a_usuario['sexo'] == "PND"):
                                                    $sexo = 'Prefiero no decirlo';
                                                elseif ($a_usuario['sexo'] == "IND"):
                                                    $sexo = 'Indeterminado';
                                                elseif (empty($a_usuario['sexo'])):
                                                    $sexo = '';
                                                endif;
                                            ?>

                                            <td><?= $a_usuario['idcod']; ?></td>
                                            <td><?= $a_usuario['rut']; ?></td>
                                            <td><?= $a_usuario['nombre']; ?></td>
                                            <td><?= $nacionalidad; ?></td>
                                            <td><?= $sexo; ?></td>
                                            <td><?= $a_usuario['fchNacimiento']; ?></td>
                                            <td><?= $a_usuario['username']; ?></td>

                                            <td colspan="2" class="text-center">
                                                <a href="upd-user.php?idcod=<?php echo $a_usuario['idcod']; ?>" class='btn btn-sm btn-success' title='editar'>
                                                    <img src='./img/pencil-square.svg' alt='icon bootstrap' class='img-fluid'>
                                                </a>
                                                <a href="javascript:confirmDelete('del-user.php?idcod=<?php echo $a_usuario['idcod']; ?>')" class='btn btn-sm btn-danger' title='eliminar'>
                                                    <img src='./img/trash.svg' alt='icon bootstrap' class='img-fluid'>
                                                </a>
                                            </td> 
                                        </tr>
                                    <?php endforeach; ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </main>


        <!-- JS only and local -->
        <script src="./js/sweetalert.js"></script>
        <script src="./js/script.js"></script>
    </body>
</html>