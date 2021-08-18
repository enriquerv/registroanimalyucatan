<div id="tab1" class="tab-pane fade show active">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Microchip</strong>
                                        </label>
                                        <p>{{ $item->microchip_id }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Nombre mascota</strong>
                                        </label>
                                        <p>{{ $item->pet_name }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Fecha de nacimiento</strong>
                                        </label>
                                        <p>{{ $item->birthdate }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Sexo</strong>
                                        </label>
                                        <p>{{ $item->gender }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Especie</strong>
                                        </label>
                                        <p>{{ $item->species_id }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Raza</strong>
                                        </label>
                                        <p>{{ $item->breed_id }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Colores</strong>
                                        </label>
                                        <p>{{ $item->color }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Rasgos / Características</strong>
                                        </label>
                                        <p>{{ $item->traits }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Última Vacunación Polivalente</strong>
                                        </label>
                                        <p>{{ is_null($item->vaccine_polivalente) ? 'N/A' : $item->vaccine_polivalente }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Última Vacunación Triple</strong>
                                        </label>
                                        <p>{{ is_null($item->vaccine_triple) ? 'N/A' : $item->vaccine_triple }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Última Vacunación Antirrábica</strong>
                                        </label>
                                        <p>{{ is_null($item->vaccine_rabies) ? 'N/A' : $item->vaccine_rabies }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Última Vacunación Leptospira</strong>
                                        </label>
                                        <p>{{ is_null($item->vaccine_leptospira) ? 'N/A' : $item->vaccine_leptospira }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Última Desparasitación con Prazicuantel</strong>
                                        </label>
                                        <p>{{ is_null($item->deworming) ? 'N/A' : $item->deworming }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Tu mascota esta esterilizada?</strong>
                                        </label>
                                        <p>{{ $item->is_sterilized }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Alergias</strong>
                                        </label>
                                        <p>{{ is_null($item->allergies) ? 'No' : $item->allergies }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Enfermedades anteriores</strong>
                                        </label>
                                        <p>{{ is_null($item->previous_illnesses) ? 'No' : $item->previous_illnesses }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Cirugías</strong>
                                        </label>
                                        <p>{{ is_null($item->surgeries) ? 'No' : $item->surgeries }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tab2" class="tab-pane fade show">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Nombre(s)</strong>
                                        </label>
                                        <p>{{ $user->first_name }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Apellido Paterno</strong>
                                        </label>
                                        <p>{{ $user->last_name }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Apellido Materno</strong>
                                        </label>
                                        <p>{{ $user->second_last_name }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>CURP</strong>
                                        </label>
                                        <p>{{ $user->curp }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Calle</strong>
                                        </label>
                                        <p>{{ $user->street }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>No Exterior</strong>
                                        </label>
                                        <p>{{ $user->no_ext }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>No Interior</strong>
                                        </label>
                                        <p>{{ $user->no_int }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Estado</strong>
                                        </label>
                                        <p>{{ $user->state_id }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Ciudad</strong>
                                        </label>
                                        <p>{{ $user->city_id }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Colonia</strong>
                                        </label>
                                        <p>{{ $user->colony }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Código postal</strong>
                                        </label>
                                        <p>{{ $user->postal_code }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Email</strong>
                                        </label>
                                        <p>{{ $user->email }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Red Social</strong>
                                        </label>
                                        <p>{{ $user->social_media }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Teléfono Local</strong>
                                        </label>
                                        <p>{{ $user->phone }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Teléfono Celular</strong>
                                        </label>
                                        <p>{{ $user->cellphone }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Fecha de nacimiento</strong>
                                        </label>
                                        <p>{{ $user->birthdate }}</p>
                                    </div>
                                </div>

                                <div class="col-12 mb-4"><h3>Segundo propietario</h3></div>
                                

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Nombre</strong>
                                        </label>
                                        <p>{{ $user->second_owner_first_name }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Apellidos</strong>
                                        </label>
                                        <p>{{ $user->second_owner_last_name }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Teléfono</strong>
                                        </label>
                                        <p>{{ $user->second_owner_phone }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Celular</strong>
                                        </label>
                                        <p>{{ $user->second_owner_cellphone }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Email</strong>
                                        </label>
                                        <p>{{ $user->second_owner_email }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <div class="form-group">
                                        <label class="control-label label-pet">
                                            <strong>Red Social</strong>
                                        </label>
                                        <p>{{ $user->second_owner_social_media }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
