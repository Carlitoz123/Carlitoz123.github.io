document.getElementById("btnSave").onclick=(evt)=>{
    evt.preventDefault()//eitar recargar el form
    document.getElementById("form").classList.add("was-validated")
    Swal.fire({
  title: "Quieres guardar los cambios?",
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: "Guardado",
  denyButtonText: `No guardado`
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire("Guardado!", "", "Logrado");
  } else if (result.isDenied) {
    Swal.fire("Los cambios no se guardaron", "", "informacion");
  }
});

}



