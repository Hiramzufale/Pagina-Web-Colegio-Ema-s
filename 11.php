<form id="cargar_datos">
    <div class="card-body border-top">
        <div class="row">
            <div class="card-body border-top">
                <h4 class="card-title">Información Personal</h4>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="control-label col-form-label">Numero Empleado</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="me-2 mdi mdi-account-card-details"></i></span>
                                <input type="text" id="no_empleado" name="no_empleado" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3">
                            <label for="apaterno" class="control-label col-form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" id="apaterno" name="apaterno">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3">
                            <label for="amaterno" class="control-label col-form-label">Apellido Materno</label>
                            <input type="text" class="form-control" id="amaterno" name="amaterno">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="mb-3">
                            <label for="nombre" class="control-label col-form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3">
                            <label class="control-label col-form-label">Fecha Nacimiento</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="mdi mdi-calendar"></i>
                                </span>
                                <input type="date" class="form-control" id="fecha_nac" name="fecha_nac">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3">
                            <label class="control-label col-form-label">CURP</label>
                            <input type="text" id="curp" name="curp" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3">
                            <label class="control-label col-form-label">Celular</label>
                            <input type="text" id="celular" name="celular" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="mb-3">
                            <label class="control-label col-form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="mb-3">
                            <label class="control-label col-form-label">Numero</label>
                            <input type="text" class="form-control" id="no_casa" name="no_casa">
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="mb-3">
                            <label class="control-label col-form-label">C.P.</label>
                            <select class="form-select" id="a_id_cp" name="a_id_cp">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="mb-3">
                            <label class="control-label col-form-label">Colonia</label>
                            <select class="form-select" id="a_id_colonia" name="a_id_colonia">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="control-label col-form-label">Sexo</label>
                            <select class="form-select" id="id_sexo" name="id_sexo">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="control-label col-form-label">Estado Civil</label>
                            <select class="form-select" id="id_estado_civil" name="id_estado_civil">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="mb-3">
                            <label class="control-label col-form-label">Beneficiario</label>
                            <input type="text" class="form-control" id="beneficiario" name="beneficiario">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body border-top">
                <h4 class="card-title">Información de empleado</h4>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3">
                            <label class="control-label col-form-label">NSS</label>
                            <input type="text" class="form-control" id="nss" name="nss">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3">
                            <label class="control-label col-form-label">RFC</label>
                            <input type="text" class="form-control" id="rfc" name="rfc">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="control-label col-form-label">Tipo Pago</label>
                            <select class="form-select" id="id_tipo_pago" name="id_tipo_pago">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3">
                            <label class="control-label col-form-label">Fecha de ingreso</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                <input type="date" class="form-control" id="fecha_alta" name="fecha_alta">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="control-label col-form-label">Sueldo Diario</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="text" id="sueldo_diario" name="sueldo_diario" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="control-label col-form-label">Sueldo Bruto</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="text" id="sueldo_bruto" name="sueldo_bruto" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="control-label col-form-label">Área</label>
                            <select class="form-select" id="id_area" name="id_area">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="control-label col-form-label">Localidad</label>
                            <select class="form-select" id="id_localidad" name="id_localidad">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body border-top">
                <h4 class="card-title">Información de Horario</h4>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3">
                            <label class="control-label col-form-label">Hora de Entrada</label>
                            <input type="time" class="form-control" id="hora_inicio" name="hora_inicio">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3">
                            <label class="control-label col-form-label">Hora de Salida</label>
                            <input type="time" class="form-control" id="hora_fin" name="hora_fin">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="control-label col-form-label">Jornada Laboral</label>
                            <select class="form-select" id="id_jornada" name="id_jornada">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="p-3 border-top">
        <div class="action-form">
            <div class="text-start">
                <button id="agregar" class="btn btn-info rounded-pill px-4 waves-effect waves-light">
                    Agregar
                </button>
                <button type="submit" class="btn btn-dark rounded-pill px-4 waves-effect waves-light">
                    Cancelar
                </button>
            </div>
        </div>
    </div>
</form>
