<div class="tab-pane fade show active" id="tab1">
    <h2 class="hidden">&nbsp;</h2>

    <div class="row mb-5">
        <div class="col-md-6">
            <div class="form-group {{ $errors->first('user_id') ? 'has-error' : '' }}">
                <label for="user_id" class="control-label">Usuario</label>  
                <input type="text" value="{{ $user_name }}" class="form-control" readonly disabled>
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
        @if ($user = Sentinel::getUser()->role_id == 1)
            <div class="col-md-6">
                <div class="form-group {{ $errors->first('active') ? 'has-error' : '' }}">
                    <label for="active" class="control-label">Activo</label>  
                    @php
                        $selected_1 = '';
                        $selected_0 = 'selected';
                        if(isset($item)){
                            if ($item->active == 1) {
                                $selected_1 = 'selected';
                                $selected_0 = '';
                            }
                        }
                    @endphp
                    <select name="active" class="form-control">
                        <option value="1" {{ $selected_1 }}>Si</option>
                        <option value="0" {{ $selected_0 }}>No</option>
                    </select>
                    <span class="help-block">{{ $errors->first('active', ':message') }}</span>
                </div>
            </div>
        @endif
    </div>
</div>
