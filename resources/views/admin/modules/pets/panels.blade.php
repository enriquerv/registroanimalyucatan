<div class="tab-pane fade show active mb-5" id="tab1">
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="form-group {{ $errors->first('microchip_id') ? 'has-error' : '' }}">
                <label for="microchip_id" class="control-label label-pet">Microchip</label>  
                <select name="microchip_id" id="microchip_id" class="form-control selectpicker" data-live-search="true">
                    <option selected disabled>Selecciona una opción</option>
                    @foreach ($microchips as $microchip)
                        @php
                            $selected = '';
                            if(isset($item))
                                if($item->microchip_id == $microchip->id){
                                    $selected = 'selected';
                                }
                        @endphp                        
                        <option value="{{ $microchip->id }}" {{ $selected }}>{{ $microchip->microchip }}</option>
                    @endforeach
                </select>
                <span class="help-block">{{ $errors->first('microchip_id', ':message') }}</span>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="form-group {{ $errors->first('pet_name') ? 'has-error' : '' }}">
                <label for="pet_name" class="control-label label-pet">Nombre mascota</label>  
                <input type="text" name="pet_name" class="form-control" value="{{ isset($item) ? $item->pet_name : '' }}" required>
                <span class="help-block">{{ $errors->first('pet_name', ':message') }}</span>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="form-group {{ $errors->first('birthdate') ? 'has-error' : '' }}">
                <label for="birthdate" class="control-label label-pet">Fecha de nacimiento</label>  
                <input type="date" name="birthdate" class="form-control" value="{{ isset($item) ? $item->birthdate : '' }}" required>
                <span class="help-block">{{ $errors->first('birthdate', ':message') }}</span>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="form-group {{ $errors->first('gender') ? 'has-error' : '' }}">
                <label for="gender" class="control-label label-pet">Sexo</label>  
                <select name="gender" id="gender" class="form-control">
                    <option selected disabled>Selecciona una opción</option>                      
                    <option value="1" {{ isset($item) ? ($item->gender == 1 ? 'selected' : '') : '' }}>Macho</option>
                    <option value="2" {{ isset($item) ? ($item->gender == 2 ? 'selected' : '') : '' }}>Hembra</option>
                </select>
                <span class="help-block">{{ $errors->first('gender', ':message') }}</span>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="form-group {{ $errors->first('species_id') ? 'has-error' : '' }}">
                <label for="species_id" class="control-label label-pet">Especie</label>  
                <select name="species_id" id="species_id" class="form-control">
                    <option selected disabled>Selecciona una opción</option>
                    @foreach ($species as $specie)
                        @php
                            $selected = '';
                            if(isset($item))
                                if($item->species_id == $specie->id)
                                    $selected = 'selected';
                        @endphp                        
                        <option value="{{ $specie->id }}" {{ $selected }}>{{ $specie->name }}</option>
                    @endforeach
                </select>
                <span class="help-block">{{ $errors->first('species_id', ':message') }}</span>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="form-group {{ $errors->first('breed_id') ? 'has-error' : '' }}">
                <label for="breed_id" class="control-label label-pet">Raza</label> 
                @if (!$edit)
                    <select name="breed_id" id="breed_id" class="form-control">
                        <option selected disabled>Selecciona una opción</option>
                    </select>
                @else
                    <select name="breed_id" id="breed_id" class="form-control">
                        <option selected disabled>Selecciona una opción</option>
                        @foreach ($breeds as $breed)
                            <option value="{{ $breed->id }}" {{ $breed->id == $item->breed_id ? 'selected' : '' }}>{{ $breed->name }}</option>
                        @endforeach
                     </select>
                @endif 
                
                <span class="help-block">{{ $errors->first('breed_id', ':message') }}</span>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="form-group {{ $errors->first('color') ? 'has-error' : '' }}">
                <label for="color" class="control-label label-pet">Colores</label>  
                <input type="text" name="color" class="form-control" value="{{ isset($item) ? $item->color : '' }}" required>
                <span class="help-block">{{ $errors->first('color', ':message') }}</span>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="form-group {{ $errors->first('traits') ? 'has-error' : '' }}">
                <label for="traits" class="control-label label-pet">Rasgos / Características</label>  
                <input type="text" name="traits" class="form-control" value="{{ isset($item) ? $item->traits : '' }}">
                <span class="help-block">{{ $errors->first('traits', ':message') }}</span>
            </div>
        </div>

        <div class="col-md-6 mb-4 dnone vaccine_dog" >
            <div class="form-group {{ $errors->first('vaccine_polivalente') ? 'has-error' : '' }}">
                <label for="vaccine_polivalente" class="control-label label-pet">Última Vacunación Polivalente</label>  
                <input type="date" name="vaccine_polivalente" class="form-control" value="{{ isset($item) ? $item->vaccine_polivalente : '' }}" required>
                <span class="help-block">{{ $errors->first('vaccine_polivalente', ':message') }}</span>
            </div>
        </div>

        <div class="col-md-6 mb-4 dnone vaccine_cat">
            <div class="form-group {{ $errors->first('vaccine_triple') ? 'has-error' : '' }}">
                <label for="vaccine_triple" class="control-label label-pet">Última Vacunación Triple</label>  
                <input type="date" name="vaccine_triple" class="form-control" value="{{ isset($item) ? $item->vaccine_triple : '' }}" required>
                <span class="help-block">{{ $errors->first('vaccine_triple', ':message') }}</span>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="form-group {{ $errors->first('vaccine_rabies') ? 'has-error' : '' }}">
                <label for="vaccine_rabies" class="control-label label-pet">Última Vacunación Antirrábica</label>  
                <input type="date" name="vaccine_rabies" class="form-control" value="{{ isset($item) ? $item->vaccine_rabies : '' }}" required>
                <span class="help-block">{{ $errors->first('vaccine_rabies', ':message') }}</span>
            </div>
        </div>

        <div class="col-md-6 mb-4 dnone vaccine_dog">
            <div class="form-group {{ $errors->first('vaccine_leptospira') ? 'has-error' : '' }}">
                <label for="vaccine_leptospira" class="control-label label-pet">Última Vacunación Leptospira</label>  
                <input type="date" name="vaccine_leptospira" class="form-control" value="{{ isset($item) ? $item->vaccine_leptospira : '' }}" required>
                <span class="help-block">{{ $errors->first('vaccine_leptospira', ':message') }}</span>
            </div>
        </div>

        <div class="col-md-6 mb-4 dnone vaccine_dog_cat">
            <div class="form-group {{ $errors->first('deworming') ? 'has-error' : '' }}">
                <label for="deworming" class="control-label label-pet">Última Desparasitación con Prazicuantel</label>  
                <input type="date" name="deworming" class="form-control" value="{{ isset($item) ? $item->deworming : '' }}" required>
                <span class="help-block">{{ $errors->first('deworming', ':message') }}</span>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="form-group {{ $errors->first('is_sterilized') ? 'has-error' : '' }}">
                <label for="is_sterilized" class="control-label label-pet">Tu mascota esta esterilizada?</label><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="is_sterilized" id="is_sterilized1" value="1" {{ isset($item) ? (!is_null($item->is_sterilized) ? 'checked' : '') : '' }}>
                  <label class="form-check-label" for="is_sterilized1">SI</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="is_sterilized" id="is_sterilized2" value="0" {{ isset($item) ? (is_null($item->is_sterilized) ? 'checked' : '') : '' }}>
                  <label class="form-check-label" for="is_sterilized2">NO</label>
                </div>

                <span class="help-block">{{ $errors->first('is_sterilized', ':message') }}</span>
            </div>
        </div>

        <div class="col-md-6 mt-4">
            <div class="form-group {{ $errors->first('allergies') ? 'has-error' : '' }}">
                <label for="allergies" class="control-label label-pet">Alergias</label><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="allergies" id="allergies1" value="1" {{ isset($item) ? (!is_null($item->allergies) ? 'checked' : '') : '' }}>
                  <label class="form-check-label" for="allergies1">SI</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="allergies" id="allergies2" value="0" {{ isset($item) ? (is_null($item->allergies) ? 'checked' : '') : '' }}>
                  <label class="form-check-label" for="allergies2">NO</label>
                </div>
                <input type="text" name="allergies_text" class="form-control input-inline {{ isset($item) ? (!is_null($item->allergies) ? '' : 'dnone') : 'dnone' }}" value="{{ isset($item) ? $item->allergies : '' }}" id="allergies_text" placeholder="Ingresa las alergias" {{ isset($item) ? (!is_null($item->allergies) ? '' : 'disabled') : 'disabled' }} required>
                <span class="help-block">{{ $errors->first('allergies', ':message') }}</span>
            </div>
        </div>

        <div class="col-md-6 mt-4">
            <div class="form-group {{ $errors->first('previous_illnesses') ? 'has-error' : '' }}">
                <label for="previous_illnesses" class="control-label label-pet">Enfermedades anteriores</label><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="previous_illnesses" id="previous_illnesses1" value="1" {{ isset($item) ? (!is_null($item->previous_illnesses) ? 'checked' : '') : '' }}>
                  <label class="form-check-label" for="previous_illnesses1">SI</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="previous_illnesses" id="previous_illnesses2" value="0" {{ isset($item) ? (is_null($item->previous_illnesses) ? 'checked' : '') : '' }}>
                  <label class="form-check-label" for="previous_illnesses2">NO</label>
                </div>
                <input type="text" name="previous_illnesses_text" class="form-control input-inline {{ isset($item) ? (!is_null($item->previous_illnesses) ? '' : 'dnone') : 'dnone' }}" value="{{ isset($item) ? $item->previous_illnesses : '' }}" id="previous_illnesses_text" placeholder="Ingresa las enfermedades anteriores" {{ isset($item) ? (!is_null($item->previous_illnesses) ? '' : 'disabled') : 'disabled' }} required>
                <span class="help-block">{{ $errors->first('previous_illnesses', ':message') }}</span>
            </div>
        </div>

        <div class="col-md-6 mt-4">
            <div class="form-group {{ $errors->first('surgeries') ? 'has-error' : '' }}">
                <label for="surgeries" class="control-label label-pet">Cirugías</label><br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="surgeries" id="surgeries1" value="1" {{ isset($item) ? (!is_null($item->surgeries) ? 'checked' : '') : '' }}>
                  <label class="form-check-label" for="surgeries1">SI</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="surgeries" id="surgeries2" value="0" {{ isset($item) ? (is_null($item->surgeries) ? 'checked' : '') : '' }}>
                  <label class="form-check-label" for="surgeries2">NO</label>
                </div>
                <input type="text" name="surgeries_text" class="form-control input-inline {{ isset($item) ? (!is_null($item->surgeries) ? '' : 'dnone') : 'dnone' }}" value="{{ isset($item) ? $item->surgeries : '' }}" id="surgeries_text" placeholder="Ingresa las cirugías" {{ isset($item) ? (!is_null($item->surgeries) ? '' : 'disabled') : 'disabled' }} required>
                <span class="help-block">{{ $errors->first('surgeries', ':message') }}</span>
            </div>
        </div>

    </div>
</div>

@if(!$edit)
<div class="tab-pane fade mb-5" id="tab2">

    <div class="col-md-6 mt-4">
        <div class="form-group {{ $errors->first('new_user') ? 'has-error' : '' }}">
            <label for="new_user" class="control-label label-pet">¿Nuevo usuario?</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="new_user" id="new_user1" value="1" {{ isset($item) ? ($item->new_user == 1 ? 'checked' : '') : '' }}>
              <label class="form-check-label" for="new_user1">SI</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="new_user" id="new_user2" value="0" {{ isset($item) ? ($item->new_user == 0 ? 'checked' : '') : '' }}>
              <label class="form-check-label" for="new_user2">NO</label>
            </div>
            <span class="help-block">{{ $errors->first('new_user', ':message') }}</span>
        </div>
    </div>

    <div class="col-12 dnone" id="div-user">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('user_id') ? 'has-error' : '' }}">
                    <label for="user_id" class="control-label label-pet">Selecciona al usuario</label>  
                    <select name="user_id" id="user_id" class="form-control selectpicker" data-live-search="true" required>
                       <option selected disabled>Selecciona una opción</option>
                       @foreach ($users as $user)
                           @php
                               $selected = '';
                               if(isset($item))
                                   if($item->user_id == $user->id)
                                       $selected = 'selected';
                           @endphp                        
                           <option value="{{ $user->id }}" {{ $selected }}>{{ $user->first_name }} {{ $user->last_name }}</option>
                       @endforeach
                    </select>
                    <span class="help-block">{{ $errors->first('user_id', ':message') }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="dnone" id="div-new-user">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('first_name') ? 'has-error' : '' }}">
                    <label for="first_name" class="control-label label-pet">Nombre(s)</label>  
                    <input type="text" name="first_name" class="form-control" value="{{ isset($item) ? $item->first_name : '' }}" required>
                    <span class="help-block">{{ $errors->first('first_name', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('last_name') ? 'has-error' : '' }}">
                    <label for="last_name" class="control-label label-pet">Apellido Paterno</label>  
                    <input type="text" name="last_name" class="form-control" value="{{ isset($item) ? $item->last_name : '' }}" required>
                    <span class="help-block">{{ $errors->first('last_name', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('second_last_name') ? 'has-error' : '' }}">
                    <label for="second_last_name" class="control-label label-pet">Apellido Materno</label>  
                    <input type="text" name="second_last_name" class="form-control" value="{{ isset($item) ? $item->second_last_name : '' }}" required>
                    <span class="help-block">{{ $errors->first('second_last_name', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('curp') ? 'has-error' : '' }}">
                    <label for="curp" class="control-label label-pet">CURP</label>  
                    <input type="text" name="curp" class="form-control" value="{{ isset($item) ? $item->curp : '' }}" required>
                    <span class="help-block">{{ $errors->first('curp', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('street') ? 'has-error' : '' }}">
                    <label for="street" class="control-label label-pet">Calle</label>  
                    <input type="text" name="street" class="form-control" value="{{ isset($item) ? $item->street : '' }}" required>
                    <span class="help-block">{{ $errors->first('street', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('no_ext') ? 'has-error' : '' }}">
                    <label for="no_ext" class="control-label label-pet">No Exterior</label>  
                    <input type="text" name="no_ext" class="form-control" value="{{ isset($item) ? $item->no_ext : '' }}" required>
                    <span class="help-block">{{ $errors->first('no_ext', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('no_int') ? 'has-error' : '' }}">
                    <label for="no_int" class="control-label label-pet">No Interior</label>  
                    <input type="text" name="no_int" class="form-control" value="{{ isset($item) ? $item->no_int : '' }}">
                    <span class="help-block">{{ $errors->first('no_int', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('state_id') ? 'has-error' : '' }}">
                    <label for="state_id" class="control-label label-pet">Estado</label>  
                    <select name="state_id" id="state_id" class="form-control selectpicker" data-live-search="true" required>
                        <option selected disabled>Selecciona una opción</option>
                        @foreach ($states as $state)
                            @php
                                $selected = '';
                                if(isset($item))
                                    if($item->state_id == $state->id)
                                        $selected = 'selected';
                            @endphp                        
                            <option value="{{ $state->id }}" {{ $selected }}>{{ $state->name }}</option>
                        @endforeach
                    </select>
                    <span class="help-block">{{ $errors->first('state_id', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('city_id') ? 'has-error' : '' }}">
                    <label for="city_id" class="control-label label-pet">Ciudad</label>  
                    <select name="city_id" id="city_id" class="form-control selectpicker" data-live-search="true" required>
                        <option selected disabled>Selecciona una opción</option>
                        @foreach ($cities as $city)
                            @php
                                $selected = '';
                                if(isset($item))
                                    if($item->city_id == $city->id)
                                        $selected = 'selected';
                            @endphp                        
                            <option value="{{ $city->id }}" {{ $selected }}>{{ $city->name }}</option>
                        @endforeach
                    </select>
                    <span class="help-block">{{ $errors->first('city_id', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('colony') ? 'has-error' : '' }}">
                    <label for="colony" class="control-label label-pet">Colonia</label>  
                    <input type="text" name="colony" class="form-control" value="{{ isset($item) ? $item->colony : '' }}" required>
                    <span class="help-block">{{ $errors->first('colony', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('postal_code') ? 'has-error' : '' }}">
                    <label for="postal_code" class="control-label label-pet">Código Postal</label>  
                    <input type="text" name="postal_code" class="form-control" value="{{ isset($item) ? $item->postal_code : '' }}" required>
                    <span class="help-block">{{ $errors->first('postal_code', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('email') ? 'has-error' : '' }}">
                    <label for="email" class="control-label label-pet">Email</label>  
                    <input type="email" name="email" class="form-control" value="{{ isset($item) ? $item->email : '' }}" required>
                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('social_media') ? 'has-error' : '' }}">
                    <label for="social_media" class="control-label label-pet">Red Social</label>  
                    <input type="text" name="social_media" class="form-control" value="{{ isset($item) ? $item->social_media : '' }}">
                    <span class="help-block">{{ $errors->first('social_media', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('phone') ? 'has-error' : '' }}">
                    <label for="phone" class="control-label label-pet">Teléfono local</label>  
                    <input type="text" name="phone" class="form-control" value="{{ isset($item) ? $item->phone : '' }}" required>
                    <span class="help-block">{{ $errors->first('phone', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('cellphone') ? 'has-error' : '' }}">
                    <label for="cellphone" class="control-label label-pet">Teléfono celular</label>  
                    <input type="text" name="cellphone" class="form-control" value="{{ isset($item) ? $item->cellphone : '' }}" required>
                    <span class="help-block">{{ $errors->first('cellphone', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('birthdate') ? 'has-error' : '' }}">
                    <label for="birthdate" class="control-label label-pet">Fecha de nacimiento</label>  
                    <input type="date" name="birthdate_user" class="form-control" value="{{ isset($item) ? $item->birthdate : '' }}" required>
                    <span class="help-block">{{ $errors->first('birthdate', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('certificate_folio') ? 'has-error' : '' }}">
                    <label for="certificate_folio" class="control-label label-pet">Folio del certificado de propiedad</label>  
                    <input type="text" name="certificate_folio" class="form-control" value="{{ isset($item) ? $item->certificate_folio : '' }}" required>
                    <span class="help-block">{{ $errors->first('certificate_folio', ':message') }}</span>
                </div>
            </div>

            <div class="col-12 mt-2 mb-5"><h4>Segundo propietario</h4></div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('second_owner_first_name') ? 'has-error' : '' }}">
                    <label for="second_owner_first_name" class="control-label label-pet">Nombre(s)</label>  
                    <input type="text" name="second_owner_first_name" class="form-control" value="{{ isset($item) ? $item->second_owner_first_name : '' }}">
                    <span class="help-block">{{ $errors->first('second_owner_first_name', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('second_owner_last_name') ? 'has-error' : '' }}">
                    <label for="second_owner_last_name" class="control-label label-pet">Apellidos</label>  
                    <input type="text" name="second_owner_last_name" class="form-control" value="{{ isset($item) ? $item->second_owner_last_name : '' }}">
                    <span class="help-block">{{ $errors->first('second_owner_last_name', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('second_owner_phone') ? 'has-error' : '' }}">
                    <label for="second_owner_phone" class="control-label label-pet">Teléfono</label>  
                    <input type="text" name="second_owner_phone" class="form-control" value="{{ isset($item) ? $item->second_owner_phone : '' }}">
                    <span class="help-block">{{ $errors->first('second_owner_phone', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('second_owner_cellphone') ? 'has-error' : '' }}">
                    <label for="second_owner_cellphone" class="control-label label-pet">Celular</label>  
                    <input type="text" name="second_owner_cellphone" class="form-control" value="{{ isset($item) ? $item->second_owner_cellphone : '' }}">
                    <span class="help-block">{{ $errors->first('second_owner_cellphone', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('second_owner_email') ? 'has-error' : '' }}">
                    <label for="second_owner_email" class="control-label label-pet">Email</label>  
                    <input type="text" name="second_owner_email" class="form-control" value="{{ isset($item) ? $item->second_owner_email : '' }}">
                    <span class="help-block">{{ $errors->first('second_owner_email', ':message') }}</span>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="form-group {{ $errors->first('second_owner_social_media') ? 'has-error' : '' }}">
                    <label for="second_owner_social_media" class="control-label label-pet">Red social</label>  
                    <input type="text" name="second_owner_social_media" class="form-control" value="{{ isset($item) ? $item->second_owner_social_media : '' }}">
                    <span class="help-block">{{ $errors->first('second_owner_social_media', ':message') }}</span>
                </div>
            </div>

        </div>
    </div>
</div>
@endif


<style>
    .label-pet{
        font-size: 14px;
        font-weight: 600;
    }
    .dnone { display: none; }
</style>