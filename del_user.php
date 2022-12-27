
<?php

require_once './includes/database.php';

if (isset($_GET['idcod'])) {
    $id = $_GET['idcod'];

    $sql = "DELETE FROM usuario WHERE idcod = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<script>
            window.alert("El registro se elimino exitosamente");
            window.location.href="./";
        </script>';
    } else {
        echo '<script>
            window.alert("Error al eliminar el registro");
            window.location.href="./";
        </script>';
        // echo "Error deleting record: " . mysqli_error($conn);
    }
}

?>
