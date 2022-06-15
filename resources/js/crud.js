$(document).ready(function(){
    getLevels();
    showEnabled();
    showDisabled();
});
//Funcion para mostrar los grados activos en la tabla
function showEnabled(){
    $.ajax({
        url: 'controller/showDegrees.php?status=a',
        type: 'GET',
        success: function(Result){
            $('#enableDegree').html(Result);
        }
    });
}

//Funcion para mostrar los grados inactivos en la tabla
function showDisabled(){
    $.ajax({
        url: 'controller/showDegrees.php?status=i',
        type: 'GET',
        success: function(Result){
            $('#disableDegree').html(Result);
        }
    });
}

//Funcion para mostrar los niveles educativos en select
function getLevels(){
    $.ajax({
        url: 'controller/showLevel.php',
        type: 'GET',
        success: function(Result){
            $('#levelForm').append(Result);
            $('#editLevel').append(Result);
        }
    });
}

//Funcion para agregar nuevos datos
$("#AddDegree").click(function(){
    var codigo = document.getElementById('codeForm').value;
    var nombre = document.getElementById('nameForm').value;
    var seccion = document.getElementById('sectionForm').value;
    var abreviatura = document.getElementById('abbreviationForm').value;
    var estado = document.getElementById('statusForm').value;
    var nivel = document.getElementById('levelForm').value;

    if(validarAddForm()){
        $.ajax({
            url: 'controller/addDegree.php',
            type: 'POST',
            async : false,
            data: {
                code: codigo,
                name: nombre,
                abbreviation: abreviatura,
                section: seccion,
                level: nivel,
                status: estado
            },
            success: function(Result){
                if(Result == "true"){
                    toastr.success('Exito!', 'Se agregó exitosamente');
                    showEnabled();
                    showDisabled();
                }else{
                    toastr.error('Error al agregar.', 'Ocurrió un error al agregar el grado!');
                }
            }
        });
    }else{
        toastr.error('Error al agregar.', 'Tienes errores en los campos solicitados!');
    }

});

//Funcion para editar un grado
$("#editDegree").click(function(){
    var id = document.getElementById('editId').value;
    var codigo = document.getElementById('editCode').value;
    var nombre = document.getElementById('editName').value;
    var seccion = document.getElementById('editSection').value;
    var abreviatura = document.getElementById('editAbbreviation').value;
    var estado = document.getElementById('editStatus').value;
    var nivel = document.getElementById('editLevel').value;

    if(validarForm()){
        $.ajax({
            url: 'controller/editDegree.php',
            type: 'POST',
            data: {
                id: id,
                code: codigo,
                name: nombre,
                abbreviation: abreviatura,
                section: seccion,
                level: nivel,
                status: estado
            },
            success: function(Result){
                if(Result == "true"){
                    $("#edit_degree").modal("hide");
                    toastr.success('Exito!', 'Se modificó exitosamente');
                    showEnabled();
                    showDisabled();
                }else{
                    $("#edit_degree").modal("hide");
                    toastr.error('Error al modificar.', 'Ocurrio un error al modificar el grado!');
                }
            }
        });
    }else{
        toastr.error('Error al modificar.', 'Tienes errores en los campos solicitados!');
    }

});

//Funcion para eliminar un grado
$("#deleteDegree").click(function(){
    var id = document.getElementById('deleteId').value;
    $.ajax({
        url: 'controller/deleteDegree.php',
        type: 'POST',
        data: {
            id: id
        },
        success: function(Result){
            $("#delete_degree").modal("hide");
            toastr.success('Exito!', 'Se eliminó exitosamente');
            showEnabled();
            showDisabled();
        }
    });
});

//Funcion para mostrar datos de grado y mostrar en modal para modificar
function getDegree(code){
    $.ajax({
        url: 'controller/getDegree.php',
        type: 'POST',
        data: {
            id: code
        },
        success: function(Result){
            var info = JSON.parse(Result);
            console.log(info.code);
            $("#editId").val(info.id);
            $("#editCode").val(info.code);
            $("#editName").val(info.name);
            $("#editAbbreviation").val(info.abbr);
            $("#editSection").val(info.section);
            $("#editLevel").val(info.level);
            $("#editStatus").val(info.status);
            $("#edit_degree").modal("show");
        }
    });
}

//Funcion para obtener grado para eliminarlo
function getDegreeToDelete(code){
    $.ajax({
        url: 'controller/getDegree.php',
        type: 'POST',
        data: {
            id: code
        },
        success: function(Result){
            var info = JSON.parse(Result); 
                $("#deleteId").val(info.id);
                $("#deleteText").append("¿Desea eliminar al grado <b>"+info.name+"</b> con código <b>"+info.code+"</b>?");
                $("#delete_degree").modal("show");
        }
    });
}