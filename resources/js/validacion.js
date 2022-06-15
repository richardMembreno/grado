
function validarForm(){
    var id = document.getElementById('editId').value;
    var codigo = document.getElementById('editCode').value;
    var nombre = document.getElementById('editName').value;
    var seccion = document.getElementById('editSection').value;
    var abreviatura = document.getElementById('editAbbreviation').value;
    var estado = document.getElementById('editStatus').value;
    var nivel = document.getElementById('editLevel').value;
    var result = 1;//si es 1 no hay errores, si es != 1 hay errores

    limpiarEdit();

    //Test codigo
    if(codigo == null || codigo.length == 0){
        $('#editCode').addClass('is-invalid');
        $('#errorEditCode').append("Debe ingresar un Código");
        result = 0;
    }else if(!(/^(\d{1,15})$/.test(codigo))){
        $('#editCode').addClass('is-invalid');
        result = 0;
        $('#errorEditCode').append("Código incorrecto. Debe ser numérico.");
    }else{
        $.ajax({
            url: 'controller/getCode.php?id='+id+'&cod='+codigo+'',
            type: 'GET',
            async : false,
            success: function(Result){
                var r = JSON.parse(Result);
                if(r == false){
                    $('#editCode').addClass('is-invalid');
                    $('#errorEditCode').append("El Código ya ha sido asignado a otro grado.");
                    result = 0;
                    console.log(result);
                }
            }
        });
    }

    //Test nombre
    if(nombre == null || nombre.length == 0){
        $('#editName').addClass('is-invalid');
        result = 0;
        $('#errorEditName').append("Debe ingresar un Nombre.");
    }else if(!(/^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,20}$/.test(nombre))){
        $('#editName').addClass('is-invalid');
        result = 0;
        $('#errorEditName').append("Nombre incorrecto. Debe ser alfanumérico");
    }

    //Test seccion
    if(seccion == null || seccion.length == 0){
        $('#editSection').addClass('is-invalid');
        result = 0;
        $('#errorEditSection').append("Debe ingresar una Sección.");
    }else if(!(/^[a-zA-Z]{1}$/.test(seccion))){
        $('#editSection').addClass('is-invalid');
        result = 0;
        $('#errorEditSection').append("Sección incorrecta. Debe ser una letra.");
    }

    //Test abreviatura
    if(abreviatura == null || abreviatura.length == 0){
        $('#editAbbreviation').addClass('is-invalid');
        result = 0;
        $('#errorEditAbbr').append("Debe ingresar una Abreviatura.");
    }else if(!(/^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,20}$/.test(abreviatura))){
        $('#editAbbreviation').addClass('is-invalid');
        result = 0;
        $('#errorEditAbbr').append("Abreviatura incorrecta. Debe ser alfanumérico.");
    }

    //Test estado
    if(estado == null || estado.length == 0){
        $('#editStatus').addClass('is-invalid');
        result = 0;
        $('#errorEditStatus').append("Debe seleccionar un Estado.");
    }else if(!(/^[ai]{1}$/.test(estado))){
        $('#editStatus').addClass('is-invalid');
        result = 0;
        $('#errorEditStatus').append("Estado seleccionado incorrecto.");
    }

    //Test nivel
    if(nivel == null || nivel.length == 0){
        $('#editLevel').addClass('is-invalid');
        result = 0;
        $('#errorEditLevel').append("Debe seleccionar un Nivel.");
    }else if(!(/^[123]{1}$/.test(nivel))){
        $('#editLevel').addClass('is-invalid');
        result = 0;
        $('#errorEditLevel').append("Nivel seleccionado incorrecto.");
    }

    //Comprobamos que no hayan errores y enviamos true o false
    if(result == 1){
        return true;
    }else{
        return false;
    }
}

function limpiarEdit(){
    $('#editCode').removeClass('is-invalid');
    $('#editName').removeClass('is-invalid');
    $('#editSection').removeClass('is-invalid');
    $('#editAbbreviation').removeClass('is-invalid');
    $('#editStatus').removeClass('is-invalid');
    $('#editLevel').removeClass('is-invalid');

    $("#errorEditCode").empty();
    $("#errorEditName").empty();
    $("#errorEditAbbr").empty();
    $("#errorEditSection").empty();
    $("#errorEditLevel").empty();
    $("#errorEditStatus").empty();
}

function validarAddForm(){
    var codigo = document.getElementById('codeForm').value;
    var nombre = document.getElementById('nameForm').value;
    var seccion = document.getElementById('sectionForm').value;
    var abreviatura = document.getElementById('abbreviationForm').value;
    var estado = document.getElementById('statusForm').value;
    var nivel = document.getElementById('levelForm').value;
    var result = 1;//si es 1 no hay errores, si es != 1 hay errores
    var errores = [];//almacenaremos los errores concretos para mostrarlos despues

    limpiarAlertasAdd();//Limpiamos las alertas que se muestran si hay errores

    //Test codigo
    if(codigo == null || codigo.length == 0){
        $('#codeForm').addClass('is-invalid');
        errores.push('Debe ingresar un Código');
        result = 0;
    }else if(!(/^(\d{1,15})$/.test(codigo))){
        $('#codeForm').addClass('is-invalid');
        errores.push('Código incorrecto. Debe ser numérico.');
        result = 0;     
    }else{
        $.ajax({
            url: 'controller/getCode.php?id=0&cod='+codigo+'',
            type: 'GET',
            async : false,
            success: function(Result){
                var r = JSON.parse(Result);
                if(r == false){
                    $('#codeForm').addClass('is-invalid');
                    errores.push('El Código ya ha sido asignado a otro grado.');
                    result = 0;
                    console.log(result);
                }
            }
        });
    }

    //Test nombre
    if(nombre == null || nombre.length == 0){
        $('#nameForm').addClass('is-invalid');
        errores.push('Debe ingresar un Nombre.');
        result = 0;      
    }else if(!(/^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,20}$/.test(nombre))){
        $('#nameForm').addClass('is-invalid');
        errores.push('Nombre incorrecto. Debe ser alfanumérico');
        result = 0;
    }

    //Test seccion
    if(seccion == null || seccion.length == 0){
        $('#sectionForm').addClass('is-invalid');
        errores.push('Debe ingresar una Sección.');
        result = 0;        
    }else if(!(/^[a-zA-Z]{1}$/.test(seccion))){
        $('#sectionForm').addClass('is-invalid');
        errores.push('Sección incorrecta. Debe ser una letra.');
        result = 0; 
    }

    //Test abreviatura
    if(abreviatura == null || abreviatura.length == 0){
        $('#abbreviationForm').addClass('is-invalid');
        errores.push('Debe ingresar una Abreviatura.');
        result = 0;
    }else if(!(/^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,20}$/.test(abreviatura))){
        $('#abbreviationForm').addClass('is-invalid');
        errores.push('Abreviatura incorrecta. Debe ser alfanumérico.');
        result = 0;
    }

    //Test estado
    if(estado == null || estado.length == 0){
        $('#statusForm').addClass('is-invalid');
        errores.push('Debe seleccionar un Estado.');
        result = 0;    
    }else if(!(/^[ai]{1}$/.test(estado))){
        $('#statusForm').addClass('is-invalid');
        errores.push('Estado seleccionado incorrecto.');
        result = 0;
    }

    //Test nivel
    if(nivel == null || nivel.length == 0){
        $('#levelForm').addClass('is-invalid');
        errores.push('Debe seleccionar un Nivel.');
        result = 0;
    }else if(!(/^[123]{1}$/.test(nivel))){
        $('#levelForm').addClass('is-invalid');
        errores.push('Nivel seleccionado incorrecto.');
        result = 0;
    }

    //Comprobamos que no hayan errores y enviamos true o false
    if(result == 1){
        limpiarAlertasAdd();
        limpiarInputAdd()
        return true;
    }else{
        $("#alertAddDanger").css("display","block");
        for(var i = 0; i < errores.length; i++){
            $("#alertAddDanger").append("<p>"+errores[i]+"</p>");
        }  
        return false;
    }
}

function limpiarAlertasAdd(){
    $('#codeForm').removeClass('is-invalid');
    $('#nameForm').removeClass('is-invalid');
    $('#sectionForm').removeClass('is-invalid');
    $('#abbreviationForm').removeClass('is-invalid');
    $('#statusForm').removeClass('is-invalid');
    $('#levelForm').removeClass('is-invalid');
    $("#alertAddDanger").css("display","none");
    $("#alertAddDanger").empty();
}

function limpiarInputAdd(){
    $('#codeForm').val("");
    $('#nameForm').val("");
    $('#sectionForm').val("");
    $('#abbreviationForm').val("");
    $('#statusForm').val("a");
    $('#levelForm').val(1);
}