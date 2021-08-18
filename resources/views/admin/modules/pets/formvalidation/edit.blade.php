<script>
    $(document).ready(function() {
        $('#formValidation').formValidation({
            locale: '{{ \App::getLocale() == 'es' ? 'es_ES' : 'en_US' }}',
            fields: {
                microchip: {
                    validators: {
                        notEmpty: {},
                        stringLength: {
                            min: 15,
                            max: 15,
                            message: "Por favor introduce un valor con una longitud de 15 números",
                        },

                    }
                },
            }
        });

        @if ($edit)
            resetVaccines();
        @endif
    });

    $("#species_id").change(function(event) {
        species_id = $(this).val();

        $(".vaccine_dog").hide('fast');
        $(".vaccine_cat").hide('fast');
        $(".vaccine_dog_cat").hide('fast');

        $.get(direction + '/get-breeds/' + species_id, function(data) {
            console.log(data);
            options = "<option selected disabled>Selecciona una opción</option>";
            $.each(data, function(index, val) {
                console.log(val);
                options += "<option value='" + val.id + "'>" + val.name + "</option>";
            });
            console.log(options);
            $("#breed_id").html(options);
            // $("#breed_id").selectpicker('refresh');
        });

        if(species_id == 1){
            $(".vaccine_dog").show('fast');
            $(".vaccine_dog_cat").show('fast');
        }
        if(species_id == 2){
            $(".vaccine_cat").show('fast');
            $(".vaccine_dog_cat").show('fast');
        }
    });

    function resetVaccines() {
        species_id = $("#species_id").val();
        $(".vaccine_dog").hide('fast');
        $(".vaccine_cat").hide('fast');
        $(".vaccine_dog_cat").hide('fast');

        if(species_id == 1){
            $(".vaccine_dog").show('fast');
            $(".vaccine_dog_cat").show('fast');
        }
        if(species_id == 2){
            $(".vaccine_cat").show('fast');
            $(".vaccine_dog_cat").show('fast');
        }
    }

    $('input[type=radio][name=allergies]').change(function(){
        if($(this).val() == 1){
            $("#allergies_text").show('fast');
            $("#allergies_text").removeAttr('disabled');
        }
        else{
            $("#allergies_text").hide('fast');
            $("#allergies_text").attr('disabled');
        }
    });

    $('input[type=radio][name=surgeries]').change(function(){
        if($(this).val() == 1){
            $("#surgeries_text").show('fast');
            $("#surgeries_text").removeAttr('disabled');
        }
        else{
            $("#surgeries_text").hide('fast');
            $("#surgeries_text").attr('disabled');
        }
    });

    $('input[type=radio][name=previous_illnesses]').change(function(){
        if($(this).val() == 1){
            $("#previous_illnesses_text").show('fast');
            $("#previous_illnesses_text").removeAttr('disabled');
        }
        else{
            $("#previous_illnesses_text").hide('fast');
            $("#previous_illnesses_text").attr('disabled');
        }
    });

</script>
