<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Prueba Técnica</title>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link href="resources/css/hover-min.css" rel="stylesheet" media="all">
        <link href="resources/css/toastr.css" rel="stylesheet"/>
        <script src="resources/js/toastr.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand text-warning" href="#"><i class="fa-solid fa-graduation-cap"></i> AdminWebSchool</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-house"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-folder-open"></i> Calificaciones
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-gear"></i>Configuración
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex justify-content-end">
                        <li class="nav-item m-1">
                            <a class="nav-link" href="#"><i class="fa-solid fa-envelope"></i></a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link" href="#"><i class="fa-solid fa-calendar"></i></a>
                        </li>
                        <li class="nav-item m-1">
                            <button class="btn btn-warning text-light"><i class="fa-solid fa-power-off color-white"></i></button>
                        </li>
                    </ul>        
                </div>
            </div>
        </nav>
        <div class="container-fluid p-3">
            <div class="card">
                <div class="card-header text-bg-info">
                    Registro de grado
                </div>
                <div class="card-body">
                    <form class="needs-validation">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="alertAddDanger" class="alert alert-danger" role="alert" style="display:none;">
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <label for="Form" class="form-label"><i class="fa-solid fa-barcode"></i> Código:</label>
                                    <input type="text" class="form-control" id="codeForm" name="codeForm" required>
                                </div>
                                <div class="col-sm-3">
                                    <label for="Form" class="form-label"><i class="fa-solid fa-chalkboard"></i> Nombre:</label>
                                    <input type="text" class="form-control" id="nameForm" name="nameForm">
                                </div>
                                <div class="col-sm-2">
                                    <label for="Form" class="form-label"><i class="fa-solid fa-down-left-and-up-right-to-center"></i> Abreviatura:</label>
                                    <input type="text" class="form-control" id="abbreviationForm" name="abbreviationForm">
                                </div>
                                <div class="col-sm-1">
                                    <label for="Form" class="form-label"><i class="fa-solid fa-bars"></i> Sección:</label>
                                    <input type="text" class="form-control" id="sectionForm" name="sectionForm">
                                </div>
                                <div class="col-sm-3">
                                    <label for="Form" class="form-label"><i class="fa-solid fa-arrow-down-up-across-line"></i>Nivel:</label>
                                    <select class="form-select" aria-label="Default select example" id="levelForm" name="levelForm">
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <label for="Form" class="form-label"><i class="fa-solid fa-arrow-right-arrow-left"></i> Estado:</label>
                                    <select class="form-select" aria-label="Default select example" id="statusForm" name="statusForm">
                                        <option value="a">Activo</option>
                                        <option value="i">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                <a id="AddDegree" class="btn btn-primary">
                                    <i class="fa-solid fa-hand-point-right"></i> Guardar
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container-fluid p-3">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item col-md-6 d-grid" role="presentation">
                    <button onclick="showEnabled()" class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                        <i class="fa-solid fa-check"></i> ACTIVOS
                    </button>
                </li>
                <li class="nav-item col-md-6 d-grid" role="presentation">
                    <button onclick="showDisabled()" class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                        <i class="fa-solid fa-ban"></i> DESHABILITADOS
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active table-responsive" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <table class="table table-hover text-center mt-4" id="enableDegree">
                    </table>
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <table class="table table-hover text-center mt-4" id="disableDegree">
                    </table>
                </div>
            </div>
        </div>
<?php
require_once("views/viewEdit.php");
require_once("views/viewDelete.php");
?>
    <script src="resources/js/validacion.js"></script>
    <script src="resources/js/crud.js"></script>
    </body>
</html>