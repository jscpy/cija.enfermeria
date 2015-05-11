$(document).ready(function() {
    $('#inventarioForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            fecha_inicio: {
                row: '.col-sm-3',
                validators: {
                    notEmpty: {
                        message: 'La fecha de inicio es requerida'
                    },
                    date: {
                        format: 'YYYY/MM/DD',
                        message: 'Ingrese una fecha valida'
                    }
                }
            },
            fecha_final: {
                row: '.col-sm-3',
                validators: {
                    notEmpty: {
                        message: 'La fecha del final es requerida'
                    },
                    date: {
                        format: 'YYYY/MM/DD',
                        message: 'Ingrese una fecha valida'
                    }
                }
            }
        }
    });
});