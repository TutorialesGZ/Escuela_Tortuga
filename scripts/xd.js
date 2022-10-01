var usuario=$.trim($("#correo").val());
	var password=$.trim($("#password").val());
	if(usuario=="" || password==""){
		console.log(')?');
		
	}else{
		$.ajax({
			url:"http://localhost/EscuelaTortuga/scripts/enlace.php",
			type:"POST",
			datatype:"json",
			data:{usuario:usuario,password:password},
			success:function(data){
                console.log(data);
				/*if(data==null){
					Swal.fire({
						type:'error',
						title:'datos son incorrectos',
					});
					return false;
			}
				else{
					Swal.fire({
						type:'success',
						title:'Datos Correctos!!',
						confirmButtonColor:"#3885f6",
						confirmButtonText:'Ingresar'
					}).then((result)=>{
						if(result.value){
							window.location.href="../scripts/conexion.php";
						}
					})
				}*/
			}
		});
	}