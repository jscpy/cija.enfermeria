$(document).ready(function() {
    $('#medForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            id_medicina: {
                validators: {
                    notEmpty: {
                        message: 'El folio es requerido'
                    },
                    integer: {
                        message: 'El folio debe ser númerico'
                    }
                }
            }
        }
    });
    $('#delmedForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            id_medicina: {
                validators: {
                    notEmpty: {
                        message: 'El folio es requerido'
                    },
                    integer: {
                        message: 'El folio debe ser númerico'
                    }
                }
            }
        }
    });
    $('#stockForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            id_medicina: {
                validators: {
                    notEmpty: {
                        message: 'El folio es requerido'
                    },
                    integer: {
                        message: 'El folio debe ser númerico'
                    }
                }
            },
            salida :{
                validators: {
                    notEmpty:{
                        message: 'La salida es requerida'
                    },
                    integer: {
                        message: 'La salida debe ser númerica'
                    }
                }
            }
        }
    });
    $('#medicinaForm').formValidation({
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
                        min: 6,
                        max: 30,
                        message: 'El concepto no debe ser menor a 6 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z_ ]+$/,
                        message: 'Escriba correctamente el concepto'
                    }
                }
            },
            unidad_medida: {
                row: '.col-sm-3',
                validators: {
                    notEmpty: {
                        message: 'La unidad de medida es requerida'
                    },
                    stringLength: {
                        min: 3,
                        max: 30,
                        message: 'El concepto no debe ser menor a 3 caracteres'
                    },
                    regexp: {
                        regexp: /^[\d a-zA-Z/.]+$/,
                        message: 'Escriba correctamente la unidad de medida'
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
            },
            fecha_caducidad: {
                row: '.col-sm-3',
                validators: {
                    notEmpty: {
                        message: 'La caducidad es requerida'
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