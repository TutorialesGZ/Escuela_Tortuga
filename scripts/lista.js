$(function() {
    console.log('HOLA?');
    fetchData();

    $('#search').keyup(function(){
        if($('#search').val()){
            let search = $('#search').val();
        //console.log(search);
        $.ajax({
            url: 'http://localhost/EscuelaTortuga/scripts/buscar.php',
            type: 'POST',
            data: {search: search},
            success: function(respuesta){
                let data = JSON.parse(respuesta);
                let template = '';
                console.log(data);
                data.forEach(alumnos => {
                    template += `
                    <tr dataId="${alumnos.matricula}">
                    <td >${alumnos.matricula}</td>
                    <td><a href="#" class="edit">${alumnos.nombre}</a></td>
                    <td>${alumnos.apellidoP}</td>
                    <td>${alumnos.apellidoM}</td>
                    <td>${alumnos.numeroIn}</td>
                    <td>${alumnos.numeroEx}</td>
                    <td>${alumnos.calle}</td>
                    <td>${alumnos.colonia}</td>
                    <td>${alumnos.municipio}</td>
                    <td>${alumnos.estado}</td>
                    <td>${alumnos.telefono}</td>
                    <td>${alumnos.email}</td>
                    <td><button type="submit" class="delete">Eliminar</button></td>
                    </tr>
                    `
                   });
                   $('#tasks').html(template);
            }
        })
    
        }
    });

   function fetchData(){
    
        $.ajax({
            url: 'http://localhost/EscuelaTortuga/scripts/mostrar.php',
            type: 'GET',
            success: function(responde){
                let datos = JSON.parse(responde);
                let template = '';
                datos.forEach(al =>{
                    template += `
                    <tr dataId="${al.matricula}">
                    <td >${al.matricula}</td>
                    <td><a href="#" class="edit">${al.nombre}</a></td>
                    <td>${al.apellidoP}</td>
                    <td>${al.apellidoM}</td>
                    <td>${al.numeroIn}</td>
                    <td>${al.numeroEx}</td>
                    <td>${al.calle}</td>
                    <td>${al.colonia}</td>
                    <td>${al.municipio}</td>
                    <td>${al.estado}</td>
                    <td>${al.telefono}</td>
                    <td>${al.email}</td>
                    <td><button type="submit" class="delete">Eliminar</button></td>
                    </tr>
                    `
                });
                $('#tasks').html(template);
                
            }
        });
       
   }

   $(document).on('click', '.delete', function(){
    if(confirm('¿Estas seguro de que lo quieres eliminar?')){
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('dataId');
        console.log(id);
        $.post('http://localhost/EscuelaTortuga/scripts/deleteId.php',{id}, function(response){
           
                window.location.href='http://localhost/EscuelaTortuga/pages/listaAlumnos.php';
            
        })
    }

});


$(document).on('click', '.edit', function(){
    
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('dataId');
        console.log(id);
        $.post('http://localhost/EscuelaTortuga/scripts/edit.php',{id}, function(response){
           
            let datos = JSON.parse(response);
            console.log(datos[0].matricula);
            $('#numeroControl').val(datos[0].matricula);
            $('#nombre').val(datos[0].nombre);
            $('#aP').val(datos[0].apellidoP);
            $('#aM').val(datos[0].apellidoM);
            $('#numIn').val(datos[0].numeroIn);
            $('#numEx').val(datos[0].numeroEx);
            $('#calle').val(datos[0].calle);
            $('#colonia').val(datos[0].colonia);
            $('#municipio').val(datos[0].municipio);
            $('#estado').val(datos[0].estado);
            $('#cel').val(datos[0].telefono);
            $('#correo').val(datos[0].email);
        
    })
    

});

$(document).on('click', '.boton', function(){
    if(confirm('¿Estas seguro de que lo quieres actualizar?')){
        const data = {
            matricula: $('#numeroControl').val(),
            nombre:  $('#nombre').val(),
            aP:  $('#aP').val(),
            aM: $('#aM').val(),
            numIn: $('#numIn').val(),
            numEx: $('#numEx').val(),
            calle:  $('#calle').val(),
            colonia: $('#colonia').val(),
            municipio:  $('#municipio').val(),
            estado:  $('#estado').val(),
            telefono:  $('#cel').val(),
            email:  $('#correo').val()

        };
 

        $.post('http://localhost/EscuelaTortuga/scripts/update.php',data,function(regresa){
            alert(regresa);
        })
        
    }

});
});