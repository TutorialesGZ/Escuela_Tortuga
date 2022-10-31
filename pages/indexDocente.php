<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/estilos.css">

    <title>CRUD</title>
  </head>
  <body  >
  
  <header style="padding-bottom: 5%">
  
  
  	<div class="container-fluid" style="background-color:white; text-align: center;padding: 3%; box-shadow: 3px 2px 5px gray; ">	
<div>
 <div class="logo-header">
            <img src="../img/totuga.png" alt="No se econtro la imagen" width="5%" height="5%">
        

           <a class="btn-neon" href="http://localhost/EscuelaTortuga/pages/Home.php" style="text-decoration: none; color: black; padding-right:15%"  >Inicio</a>
		
			<a class="btn-neon" href="../scripts/logout.php"  style="text-decoration: none; color: black; " >Cerrar Sesión</a>
			
		   		
		    
	</div>


        
        </div>
</div>
  	
  </header>
   

    <div class="container fondo">

        <h1 class="text-center">Docentes</h1>
      

        <div class="row">
            <div class="col-2 offset-10">
                <div class="text-center">
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="botonCrear">
                        <i class="bi bi-plus-circle-fill"></i> Crear
                        </button>
                </div>
            </div>
        </div>
        <br />
        <br />

        <div class="table-responsive">
            <table id="datos_usuario" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>ApellidoP</th>
                        <th>ApellidoM</th>
                        <th>Numero <br> interior</th>
                        <th>Numero <br> exterior</th>
                        <th>Calle</th>
                        <th>Colonia</th>
                        <th>Municipio</th>
                         <th>Estado</th>
                          <th>Telefono</th>
                           <th>Email</th>
                            <th>Ultimo grado de estudios</th>
                             <th>Especialidad1</th>
                              <th>Especialidad2</th>
                               <th>Número de cedula</th>
                                 <th>Imagen</th>
                                <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
            </table>
        </div>
   </div>

<!-- Modal -->
<div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Docente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
        <form method="POST" id="formulario" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-body">
                
                <label for="clave">Ingresa Clave</label>
                    <input type="number" name="clave" id="clave" class="form-control" >
                    <br />
                    
                    <label for="nombre">Ingrese el nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control"  pattern="([A-Z]{1}[a-zñáéíóú]+[\s]*)" >
                    <br />

                    <label for="apaterno">Ingrese Apellido Paterno</label>
                    <input type="text" name="apellidoP" id="apellidoP" class="form-control" >
                    <br />

                    <label for="amaterno">Ingrese Apellido Materno </label>
                    <input type="text" name="apellidoM" id="apellidoM" class="form-control" >
                    <br />

                    <label for="numeroI">Ingrese numero interior</label>
                    <input type="number" name="numeroIn" id="numeroIn" class="form-control" >
                    <br />
                    
                    <label for="numeroE">Ingrese número exterior</label>
                    <input type="number" name="numeroEx" id="numeroEx" class="form-control" >
                    <br />
                    
                    <label for="calle">Ingrese la calle</label>
                    <input type="text" name="calle" id="calle" class="form-control">
                    <br />
                    
                    <label for="colonia">Ingrese la colonia</label>
                    <input type="text" name="colonia" id="colonia" class="form-control" >
                    <br />
                    
                    <label for="municipio">Ingrese el municipio</label>
                    <input type="text" name="municipio" id="municipio" class="form-control">
                    <br />
                    
                    <label for="estado">Ingrese el estado</label>
                    <input type="text" name="estado" id="estado" class="form-control">
                    <br />
                    
                    <label for="telefono">Ingrese el teléfono</label>
                    <input type="number" name="telefono" id="telefono" class="form-control" >
                    <br />
                    
                    <label for="correo">Ingrese correo electronico</label>
                    <input type="email" name="email" id="email" class="form-control" >
                    <br />
                    
                    <label for="ultimogrado">Ingrese el último grado de estudios</label>
                    <input type="text" name="ultimoGradoEstudios" id="ultimoGradoEstudios" class="form-control" >
                    <br />
                    
                     <label for="especialidad1">Ingrese 1er especialidad</label>
                    <input type="text" name="especialidad1" id="especialidad1" class="form-control">
                    <br />
                    
                     <label for="especialidad2">Ingrese 2da especialidad</label>
                    <input type="text" name="especialidad2" id="especialidad2" class="form-control">
                    <br />
                    
                     <label for="cedula">Ingrese número de cedula</label>
                    <input type="number" name="numeroDeCedula" id="numeroDeCedula" class="form-control" >
                    <br />



		
                    <label for="imagen">Seleccione una imagen</label>
                    <input type="file" name="imagen_usuario" id="imagen_usuario" class="form-control">
                    <span id="imagen_subida"></span>
                    <br />
                </div>

                <div class="modal-footer">
                    <input type="hidden" name="id_usuario" id="id_usuario">
                    <input type="hidden" name="operacion" id="operacion">             
                    <input type="submit" name="action" id="action" class="btn btn-success" value="Crear">
                </div>
            </div>
        </form>
      </div>     
  </div>
</div>

    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
      <script >
      	$(document).ready(function(){
            $("#botonCrear").click(function(){
                $("#formulario")[0].reset();
                $(".modal-title").text("Registrar Docente");
                $("#action").val("Crear");
                $("#operacion").val("Crear");
                $("#imagen_subida").html("");
            });
            
            var dataTable = $('#datos_usuario').DataTable({
                "processing":true,
                "serverSide":true,
                "order":[],
                "ajax":{
                    url: "../scripts/obtener_registrosDocente.php",
                    type: "POST"
                },
                "columnsDefs":[
                    {
                    "targets":[0, 3, 4],
                    "orderable":false,
                    },
                ],
                "language": {
                "decimal": "",
                "emptyTable": "No hay registros",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas \n",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
            });
            
            //Aquí código inserción
            $(document).on('submit', '#formulario', function(event){
            event.preventDefault();
            var clave = $('#clave').val();
            var nombre = $('#nombre').val();
            var apellidoP = $('#apellidoP').val();
            var apellidoM = $('#apellidoM').val();
            var numeroIn = $('#numeroIn').val();
            var numeroEx = $('#numeroEx').val();
            var calle = $('#calle').val();
            var colonia = $('#colonia').val();
            var municipio = $('#municipio').val();
            var estado = $('#estado').val();
            var telefono = $('#telefono').val();
            var email = $('#email').val();
            var ultimoGradoEstudios = $('#ultimoGradoEstudios').val();
            var especialidad1 = $('#especialidad1').val();
            var especialidad2 = $('#especialidad2').val();
            var numeroDeCedula = $('#numeroDeCedula').val();
            
            var extension = $('#imagen_usuario').val().split('.').pop().toLowerCase();
            if(extension != '')
            {
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                    alert("Fomato de imagen inválido");
                    $('#imagen_usuario').val('');
                    return false;
                }
            }	
		    if(nombre != '' && apellidoP != '' && email != '')
                {
                    $.ajax({
                        url:"../scripts/crearDocente.php",
                        method:'POST',
                        data:new FormData(this),
                        contentType:false,
                        processData:false,
                        success:function(data)
                        {
                            alert(data);
                            $('#formulario')[0].reset();
                            $('#modalUsuario').modal('hide');
                            dataTable.ajax.reload();
                        }
                    });
                }
                else
                {
                    alert("Algunos campos son obligatorios");
                }
	        });

            //Funcionalida de editar
            $(document).on('click', '.editar', function(){		
            var id_usuario = $(this).attr("clave");		
            $.ajax({
                url:"../scripts/obtener_registroDocente.php",
                method:"POST",
                data:{id_usuario:id_usuario},
                dataType:"json",
                success:function(data)
                    {
                        //console.log(data);				
                        $('#modalUsuario').modal('show');
                        $('#clave').val(data.clave);
                        $('#nombre').val(data.nombre);
                        $('#apellidoP').val(data.apellidoP);
                        $('#apellidoM').val(data.apellidoM);
                        $('#numeroIn').val(data.numeroIn);
                        $('#numeroEx').val(data.numeroEx);
                        $('#calle').val(data.calle);
                        $('#colonia').val(data.colonia);
                        $('#municipio').val(data.municipio);
                         $('#estado').val(data.estado);
                          $('#telefono').val(data.telefono);
                           $('#email').val(data.email);
                            $('#ultimoGradoEstudios').val(data.ultimoGradoEstudios);
                             $('#especialidad1').val(data.especialidad1);
                              $('#especialidad2').val(data.especialidad2);
                               $('#numeroDeCedula').val(data.numeroDeCedula);
                        $('.modal-title').text("Editar Docente");
                        $('#id_usuario').val(id_usuario);
                        $('#imagen_subida').html(data.imagen_usuario);
                        $('#action').val("Editar");
                        $('#operacion').val("Editar");
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    }
                })
	        });

            //Funcionalida de borrar
            $(document).on('click', '.borrar', function(){
                var id_usuario = $(this).attr("clave");
                if(confirm("Esta seguro de borrar este registro: " + id_usuario))
                {
                    $.ajax({
                        url:"../scripts/borrarDocente.php",
                        method:"POST",
                        data:{id_usuario:id_usuario},
                        success:function(data)
                        {
                            alert(data);
                            dataTable.ajax.reload();
                        }
                    });
                }
                else
                {
                    return false;	
                }
            });

        });         
      </script>
    
    <footer style="padding-top: 10%;">
    	
 <div class="container-fluid" style="background-color: white; text-align: center;padding: 20px; color: black;  box-shadow: 0px 0px 10px gray ;">
 <p> Cristian Alejandro Juarez Juarez <br>
 Telefono: 2271052086 <br>
 Direccion: Santa Ana Xalmimilulco</p>
          
 </div>
    	
    </footer>
    
  </body>
</html>