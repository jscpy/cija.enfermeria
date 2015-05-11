$(document).ready(function() {
    $('#curacionForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            concepto: {
                row: '.col-sm-4',
                validators: {
                    notEmpty: {
                        message: 'El concepto es requerido'
                    },
                    stringLength: {
                        min: 4,
                        max: 30,
                        message: 'El concepto no debe ser menor a 4 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z_ ]+$/,
                        message: 'Escriba correctamente el concepto'
                    }
                }
            },
            presentacion: {
                row: '.col-sm-3',
                validators: {
                    notEmpty: {
                        message: 'La presentacion es requerida'
                    },
                    stringLength: {
                        min: 4,
                        max: 30,
                        message: 'La presentacion no debe ser menor a 4 caracteres'
                    },
                    regexp: {
                        regexp: /^[\d a-zA-Z/.]+$/,
                        message: 'Escriba correctamente la presentacion'
                    }
                }
            },
            cantidad: {
                row: '.col-sm-2',
                validators: {
                    notEmpty: {
                        message: 'La cantidad es requerida'
                    },
                    between:{
                        min: 1,
                        max: 500,
                        message: 'La cantidad debe ser mayor a 1 y menor a 500'
                    },
                    integer: {
                        message: 'La cantidad debe ser númerica'
                    }
                }
            },
            lote: {
                row: '.col-sm-3',
                validators: {
                    notEmpty:{
                        message: 'El lote es requerido'
                    },
                    stringLength: {
                        min: 4,
                        max: 8,
                        message: 'Escriba correctamente el lote'
                    },
                    regexp: {
                        regexp: /^[\da-zA-Z]+$/,
                        message: 'El lote solo debe contener letras y números'
                    }
                }
            }
        }
    });
});