function captura(){
    //alert('XDDDDD');
    let clave = document.getElementById("clave").value;
    let descripcion = document.getElementById("descripcion").value;
    let tutor = document.getElementById("tutor").value;

    if(clave != "" || descripcion != "" || tutor != ""){
        $.ajax({
            url: 'http://localhost/EscuelaTortuga/scripts/isertGrupos.php',
            type: 'POST',
            //async: true,
            data:{
               clave: clave,
               desc: descripcion,
               tutor: tutor,
            },
            success: function(responde){
                alert(responde);
                if(responde == 'Se registro Correctamente'){
                    window.location.href='http://localhost/EscuelaTortuga/pages/listaGrupos.php';
                }else{
                    alert('error');
                }
            
            }
        });
        
}else{
    alert('Verifique que no tenga campos vacios');
}
}