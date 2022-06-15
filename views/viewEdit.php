<div class="modal fade" id="edit_degree" tabindex="-1" role="dialog" aria-labelledby="edit_degreeLabel">
    <div class="modal-dialog modal-lg">    
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class='fa-solid fa-pencil'></i> Modificar grado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editDegreeForm">
                    <div class="container-fluid">
                        <input type="hidden" id="editId">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="Form" class="form-label"><i class="fa-solid fa-barcode"></i> Código:</label>
                                <input type="text" class="form-control" id="editCode">
                                <div id="errorEditCode" class="invalid-feedback">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="Form" class="form-label"><i class="fa-solid fa-chalkboard"></i> Nombre:</label>
                                <input type="text" class="form-control" id="editName">
                                <div id="errorEditName" class="invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="Form" class="form-label"><i class="fa-solid fa-down-left-and-up-right-to-center"></i> Abreviatura:</label>
                                <input type="text" class="form-control" id="editAbbreviation">
                                <div id="errorEditAbbr" class="invalid-feedback">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="Form" class="form-label"><i class="fa-solid fa-bars"></i> Sección:</label>
                                <input type="text" class="form-control" id="editSection">
                                <div id="errorEditSection" class="invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="Form" class="form-label"><i class="fa-solid fa-arrow-down-up-across-line"></i>Nivel:</label>
                                <select class="form-select" aria-label="Default select example" id="editLevel">
                                </select>
                                <div id="errorEditLevel" class="invalid-feedback">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="Form" class="form-label"><i class="fa-solid fa-arrow-right-arrow-left"></i> Estado:</label>
                                <select class="form-select" aria-label="Default select example" id="editStatus">
                                    <option value="a">Activo</option>
                                    <option value="i">Inactivo</option>
                                </select>
                                <div id="errorEditStatus" class="invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <a id="editDegree" class="btn btn-warning">
                                <i class='fa-solid fa-pencil'></i> Modificar
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>