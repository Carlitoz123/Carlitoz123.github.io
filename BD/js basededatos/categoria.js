// Obtener todos los botones con la clase "btnedit"
var botones = document.getElementsByClassName("btnedit");

// Agregar evento "onclick" a cada botón
for (var i = 0; i < botones.length; i++) {
    botones[i].onclick = function (evt) {
        var btn = evt.currentTarget; // Botón que activó el evento

        // Obtener valores de los atributos "data-*"
        var id = btn.getAttribute("data-id");
        var nombre = btn.getAttribute("data-nombre");
        var desc = btn.getAttribute("data-descripcion");

        // Establecer los valores en los campos del formulario
        document.getElementById("userid").value = id;
        document.getElementById("editname").value = nombre;
        document.getElementById("editdesc").value = desc;
    };
}



