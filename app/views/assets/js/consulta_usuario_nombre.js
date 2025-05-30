const variable_dni = document.getElementById("dni_cliente");
variable_dni.addEventListener("keyup", function (){
    //Validar que el input acepte solo números
    this.value = this.value.replace(/[^0-9]/g, '');
    if(this.value.length === 9){
        alert("El DNI solo debe contar con 8 digitos")
    }else{
        console.log("El número es: " + this.value);
        // ******** INICIO DE AJAX ******** 
        $.ajax({
            url: "../controllers/UsarioConsultaController.php",
            type: "GET",
            data: {
                dni_c: this.value
            },
            success:function(respuesta){
                console.log(respuesta);
                const variable_tabla = document.getElementById("contenedor_datos");
                variable_tabla.innerHTML = `
                                            <tr>
                                                <td>#</td>
                                                <td>${respuesta[0].idUsuario}</td>
                                                <td>${respuesta[0].nombre}</td>
                                                <td>${respuesta[0].apellido}</td>
                                                <td>${respuesta[0].telefono}</td>
                                            </tr>
                                            `
            }
        })
        // ******** FIN  DE AJAX ******** 
    }

    
});

