function captura(){
    //alert('XDDDDD');
    let numeroControl = document.getElementById("numeroControl").value;
    let nombre = document.getElementById("nombre").value;
    let apellidoPaterno = document.getElementById("aP").value;
    let apellidoMaterno = document.getElementById("aM").value;
    let numeroInterior = document.getElementById("numIn").value;
    let numeroExterior = document.getElementById("numEx").value;
    let calle = document.getElementById("calle").value;
    let colonia = document.getElementById("colonia").value;
    let municipio = document.getElementById("municipio").value;
    let estado = document.getElementById("estado").value;
    let telefono = document.getElementById("cel").value;
    let correo = document.getElementById("correo").value;
    let claveGrupo = document.getElementById("claveGrupo").value;

   /* alert(numeroControl);
    alert(nombre);
    alert(apellidoPaterno);
    alert(apellidoMaterno);
    alert(numeroExterior);
    alert(numeroInterior);
    alert(calle);
    alert(colonia);
    alert(municipio);
    alert(estado);
    alert(telefono);
    alert(correo);*/


    //alert('Tomo variables');
    if(numeroControl != "" || nombre!= "" || apellidoPaterno != "" || apellidoMaterno != "" || numeroInterior != "" || numeroExterior != "" 
    || calle != "" || colonia != "" || municipio!= "" || estado != "" || telefono != "" || correo != "" || claveGrupo !=""){
        //alert('Entro al if');
       // alert('Pasa a ajax');
        $.ajax({
            url: 'http://localhost/EscuelaTortuga/scripts/enviarInsert.php',
            type: 'POST',
            //async: true,
            data:{
               numControl: numeroControl,
               nombre: nombre,
               aP: apellidoPaterno,
               aM: apellidoMaterno,
               numIn: numeroInterior,
               numEx: numeroExterior,
               calle: calle,
               colonia: colonia,
               municipio: municipio,
               estado: estado,
               cel: telefono,
               email: correo,
               claveG: claveGrupo
            },
            success: function(responde){
                alert(responde);
                if(responde == 'Se registro Correctamente'){
                    window.location.href='http://localhost/EscuelaTortuga/pages/listaAlumnos.php';
                }else{
                    alert('error');
                }
            
            }
        });
        
}else{
    alert('Verifique que no tenga campos vacios');
}
}