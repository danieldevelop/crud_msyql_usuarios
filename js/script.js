function confirmDelete(delURL) 
{
    Swal.fire({
        title: '¿Está seguro?',
        text: "¡No podrás revertir esto!",
        confirmButtonColor: '#157347',
        showCancelButton: true,
        cancelButtonColor: '#d33',
        confirmButtonText: "SI",
        cancelButtonText: "NO",
        allowOutsideClick: false

    }).then((result) => {
        if (result.isConfirmed) {
            document.location = delURL;
        } else {
            Swal.fire({
                title: 'Cancelado',
                text: "El registro seleccionado está a salvo!!",
                confirmButtonColor: '#157347',
                confirmButtonText: "Aceptar",
                allowOutsideClick: false
            });
        }
    });
}



const btn_newuser = document.querySelector("#btn-newuser");
btn_newuser.addEventListener('click', function() {
    window.location = 'add_user.php';
});