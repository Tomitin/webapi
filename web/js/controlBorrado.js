function controlBorrado(path,reserva)
{
    swal({
        title: "¿Estás seguro?",
        text: "Vas a perder el turno del día "+reserva,
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location.replace(path);  
        }
      });
    return false;
}