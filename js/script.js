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
        // showCloseButton: true,
        // closeButtonAriaLabel: "Cerrar",
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
                // showCloseButton: true,
                // closeButtonAriaLabel: "Cerrar",
                allowOutsideClick: false
            });
        }
    });
}