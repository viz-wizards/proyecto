//Almacenar en una variable 
// All = todo
// querySelectorAll -> Significa selecionar todos los ID que tienen ese BOTON
const btnEditar = document.querySelectorAll("#btnEditar");
const btnEliminar = document.querySelectorAll("#btnEliminar");

//Ahora consulto con un forEach, para saber cuantos botones hay con ese ID
btnEditar.forEach(botonsito => {
    //Luego a todos los botones le hago una accion de escucha
    botonsito.addEventListener('click', function(){
        //  alert("Este boton es de editar")
         $('#modalEditar').modal('show') //Jquery codigo Modal
         const inputDNIClientes = document.getElementById("dniClienetes");
         const inputNombreClientes = document.getElementById("nombreClienets");
         const inputApellidoClientes= document.getElementById("apellidoClientes");
         const inputCelularClientes = document.getElementById("celularClientes");
         inputDNIClientes.value = botonsito.dataset.dniClientes;
         inputNombreClientes.value = botonsito.dataset.name;
         inputApellidoClientes.value = botonsito.dataset.lastname;
         inputCelularClientes.value = botonsito.dataset.celularClientes;
    });
});

//Ahora consulto con un forEach, para saber cuantos botones hay con ese ID
btnEliminar.forEach(botonsito => {
    //Luego a todos los botones le hago una accion de escucha
    botonsito.addEventListener('click', function(){
         $('#modalEliminar').modal('show') //Jquery codigo
         //Almacenamos en una variable llamada INPUTDNI
         const inputDNIClientes = document.getElementById("idClientes");
         const dni_de_persona = botonsito.dataset.dni;
         //Guardo el dni de la persona en elemento del html de INPUT DNI
         inputDNI.value = dni_de_persona;
        //  alert(dni_de_persona + " ___ " + inputDNI)
    });
});

/// boton de confirmar eliminacion del modal
const btnEliminarConfirmar = document.querySelector("#btnEliminarCliente");
btnEliminarConfirmar.addEventListener('click', function(){
      const inputDNIClientes = document.getElementById("id_cliente").value;
   // ============== INICIO DE AJAX CON JQUERY ======================== //
            $.ajax({
                url: '../controllers/ClienteEliminarController.php',
                type: 'POST',
                data: {dniClientes_c : inputDNIClientes},
                success: function(respuesta){
                    if(respuesta === "yes"){
                        alert("ELIMINACION CORRECTA");
                    }else{
                        alert("ELIMINACION INCORRECTA");
                    }
                }
            })
            window.location.reload(); // CON ESTO SE ACTUALIZA LA PAGINA COMPLETA
        // ============== FINAL DE AJAX CON JQUERY ======================== //
})

//boton de confirmar actualizacion del modal
const btnActualizarConfirmar = document.querySelector("#btnEditarCliente");
btnActualizarConfirmar.addEventListener('click', function(){
         const inputDNIClientes = document.getElementById("dni");
         const inputNombreClientes = document.getElementById("nombre");
         const inputApellidoClientes= document.getElementById("apellido");
         const inputCelularClientes = document.getElementById("email");
       // ============== INICIO DE AJAX CON JQUERY ======================== //
            $.ajax({
                url: '../controllers/ClienteEditarController.php',
                type: 'POST',
                data: {
                        dniClientes_c : inputDNIClientes.value,
                        name_c : inputNombreClientes.value,
                        apellidoClientes_c : inputApellidoClientes.value,
                        celularClientes_c : inputCelularClientes.value,
                      },
                success: function(respuesta){
                    if(respuesta === "yes"){
                        alert("ACTUALIZACIÓN CORRECTA");
                    }else{
                        alert("ACTUALIZACIÓN INCORRECTA");
                    }
                }
            })
           // window.location.reload(); // CON ESTO SE ACTUALIZA LA PAGINA COMPLETA
        // ============== FINAL DE AJAX CON JQUERY ======================== //
})