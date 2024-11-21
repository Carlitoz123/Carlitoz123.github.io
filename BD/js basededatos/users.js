document.getElementById("btnSave").onclick=(evt)=>{
    evt.preventDefault()//eitar recargar el form
    document.getElementById("form").classList.add("was-validated")
    Swal.fire({
        title: "Guardado",
        showClass: {
          popup: `
            animate__animated
            animate__fadeInUp
            animate__faster
          `
        },
        hideClass: {
          popup: `
            animate__animated
            animate__fadeOutDown
            animate__faster
          `
        }
      });
}