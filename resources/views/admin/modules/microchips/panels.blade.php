<div class="tab-pane fade show active" id="tab1">
    <h2 class="hidden">&nbsp;</h2>

    <div class="row mb-5">
        <div class="col-md-6">
            <div class="form-group {{ $errors->first('user_id') ? 'has-error' : '' }}">
                <label for="user_id" class="control-label">Usuario</label>  
                <select name="user_id" id="user_id" class="form-control selectpicker" data-live-search="true">
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
        <div class="col-md-6">
            <div class="form-group {{ $errors->first('microchip') ? 'has-error' : '' }}">
                <label for="microchip" class="control-label">Microchip</label>  
                <input type="number" name="microchip" class="form-control" step="1" value="{{ isset($item) ? $item->microchip : '' }}" required>
                <span class="help-block">{{ $errors->first('microchip', ':message') }}</span>
            </div>
        </div>
    </div>
</div>
