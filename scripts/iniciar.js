function captura(){
    //alert('XDDDDD')
    let email = document.getElementById("correo").value;
    let password = document.getElementById("password").value;
    let proceder = false;
    //alert(email);
    //alert(password);
    
    const checar = validarEmail(email);
    if(checar == true){
       // alert('Ingresando...');
        proceder = true;
        $.ajax({
            url: 'http://localhost/EscuelaTortuga/scripts/enlace.php',
            type: 'POST',
            //async: true,
            data:{
                correo:email,
                pass:password,
            },
            success: function(responde){
                alert(responde);
                if(responde == 'aceptado'){
                    window.location.href='http://localhost/EscuelaTortuga/pages/Home.php';
                }
            
            }
        })
        
    //let datos = [email,password];
   /* 
   
   
   ////////
   const checar = validarEmail(email);
    if(checar == true){
        alert('Ingresando...');
        //const datos = {correo:email,pas:password}
        //alert(datos);
        //const jsonString = JSON.stringify(datos);
        
        alert(jsonString);
       alert(typeof(jsonString));
    }else{
        alert('Denegado')
    }*/
}else{
    alert('Verifique su correo');
}
    
}

function validarEmail(correo){
    const expresion = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
     let validar = expresion.test(correo);
     if(validar == true){
        alert('El correo es valido');
        return true;
     }else{
        alert('El correo electronico no es valido');
        return false;
     }
}


