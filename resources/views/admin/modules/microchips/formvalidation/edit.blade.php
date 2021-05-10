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
    });
</script>
