$(function() {
    console.log('HOLA?');
    fetchData();

    $('#search').keyup(function(){
        if($('#search').val()){
            let search = $('#search').val();
        //console.log(search);
        $.ajax({
            url: 'http://localhost/EscuelaTortuga/scripts/searchGrupos.php',
            type: 'POST',
            data: {search: search},
            success: function(respuesta){
                let data = JSON.parse(respuesta);
                let template = '';
                console.log(data);
                data.forEach(grupos => {
                    template += `
                    <tr dataId="${grupos.clave}">
                    <td >${grupos.clave}</td>
                    <td><a href="#" class="edit">${grupos.descripcion}</a></td>
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
            url: 'http://localhost/EscuelaTortuga/scripts/getGrupos.php',
            type: 'GET',
            success: function(responde){
                let datos = JSON.parse(responde);
                let template = '';
                datos.forEach(al =>{
                    template += `
                    <tr dataId="${al.clave}">
                    <td >${al.clave}</td>
                    <td><a href="#" class="edit">${al.descripcion}</a></td>
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
        $.post('http://localhost/EscuelaTortuga/scripts/deleteGrupo.php',{id}, function(response){
           
                window.location.href='http://localhost/EscuelaTortuga/pages/listaGrupos.php';
            
        })
    }

});


$(document).on('click', '.edit', function(){
    
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('dataId');
        console.log(id);
        $.post('http://localhost/EscuelaTortuga/scripts/getFormGrupos.php',{id}, function(response){
           
            let datos = JSON.parse(response);
            console.log(datos[0].clave);
            $('#numeroControl').val(datos[0].clave);
            $('#nombre').val(datos[0].descripcion);     
    })
    

});

$(document).on('click', '.boton', function(){
    if(confirm('¿Estas seguro de que lo quieres actualizar?')){
        const data = {
            matricula: $('#numeroControl').val(),
            nombre:  $('#nombre').val(),
        };
 

        $.post('http://localhost/EscuelaTortuga/scripts/editGrupos.php',data,function(regresa){
            alert(regresa);
        })
        
    }

});
});