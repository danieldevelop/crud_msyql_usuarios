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
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="text-uppercase">nombre</th>
                                    <th class="text-uppercase">nacionalidad</th>
                                    <th class="text-uppercase">rut</th>
                                    <th class="text-uppercase">sexo</th>
                                    <th class="text-uppercase">fch. nacimiento</th>
                                    <th class="text-uppercase">usuario</th>
                                    <th colspan="2"></th>
                                </tr>
                            </thead>
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