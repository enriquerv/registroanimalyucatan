<script>
    $(document).ready(function() {
        $('#formValidation').formValidation({
            locale: '{{ \App::getLocale() == 'es' ? 'es_ES' : 'en_US' }}',
            fields: {
                // microchip_id: {
                //     validators: {
                //         notEmpty: {},
                //         // stringLength: {
                //         //     min: 15,
                //         //     max: 15,
                //         //     message: "Por favor introduce un valor con una longitud de 15 números",
                //         // },

                //     }
                // },
                microchip_id: { validators: { notEmpty: {}, } },
                pet_name: { validators: { notEmpty: {}, } },
                birthdate: { validators: { notEmpty: {}, } },
                gender: { validators: { notEmpty: {}, } },
                species_id: { validators: { notEmpty: {}, } },
                breed_id: { validators: { notEmpty: {}, } },
                color: { validators: { notEmpty: {}, } },
                vaccine_polivalente: { validators: { notEmpty: {}, } },
                vaccine_triple: { validators: { notEmpty: {}, } },
                vaccine_rabies: { validators: { notEmpty: {}, } },
                vaccine_leptospira: { validators: { notEmpty: {}, } },
                deworming: { validators: { notEmpty: {}, } },
                is_sterilized: { validators: { notEmpty: {}, } },
                allergies: { validators: { notEmpty: {}, } },
                allergies_text: { validators: { notEmpty: {}, } },
                previous_illnesses: { validators: { notEmpty: {}, } },
                previous_illnesses_text: { validators: { notEmpty: {}, } },
                surgeries: { validators: { notEmpty: {}, } },
                surgeries_text: { validators: { notEmpty: {}, } },
                new_user: { validators: { notEmpty: {}, } },
                user_id: { validators: { notEmpty: {}, } },
                first_name: { validators: { notEmpty: {}, } },
                last_name: { validators: { notEmpty: {}, } },
                second_last_name: { validators: { notEmpty: {}, } },
                curp: { validators: { notEmpty: {}, } },
                street: { validators: { notEmpty: {}, } },
                no_ext: { validators: { notEmpty: {}, } },
                state_id: { validators: { notEmpty: {}, } },
                city_id: { validators: { notEmpty: {}, } },
                colony: { validators: { notEmpty: {}, } },
                zip_code: { validators: { notEmpty: {}, } },
                email: { validators: { notEmpty: {}, } },
                phone: { validators: { notEmpty: {}, } },
                cellphone: { validators: { notEmpty: {}, } },
                birthdate: { validators: { notEmpty: {}, } },
                certificate_folio: { validators: { notEmpty: {}, } },


            }
        });
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

    $('input[type=radio][name=new_user]').change(function(){
        if($(this).val() == 1){
            $("#div-new-user").slideDown('400');
            $("#div-user").slideUp('400');
        }
        else{
            $("#div-new-user").slideUp('400');
            $("#div-user").slideDown('400');
        }
    });


    $("#state_id").change(function(event) {
        $.get(direction + '/getCities/'+$(this).val(), function(data) {
            cities = '<option selected disabled>Selecciona una opción</option>';
            $.each(data, function(index, val) {
                 cities += '<option value="'+val.id+'">'+val.name+'</option>';
            });
            $("#city_id").html(cities);
            $("#city_id").selectpicker('refresh');
        });
    });
    

</script>
