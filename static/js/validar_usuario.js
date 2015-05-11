$(document).ready(function() {
    $('#id_userForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            id_usuario: {
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
    $('#useridForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            id_usuario: {
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
    $('#userForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                row: '.col-sm-5',
                validators: {
                    notEmpty: {
                        message: 'El nombre es requerido'
                    },
                    stringLength: {
                        min: 10,
                        max: 40,
                        message: 'El nombre no debe ser menor a 4 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z .]+$/,
                        message: 'Escriba correctamente el usuario'
                    }
                }
            },
            username: {
            	row: '.col-sm-2',
                validators: {
                    notEmpty: {
                        message: 'El usuario es requerido'
                    },
                    stringLength: {
                        min: 4,
                        max: 15,
                        message: 'El usuario no debe ser menor a 4 caracteres'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z]+$/,
                        message: 'Escriba correctamente el usuario'
                    }
                }
            },
            password : {
            	row: '.col-sm-2',
                validators: {
                    notEmpty:{
                        message: 'La contraseña es requerida'
                    },
                    stringLength: {
                        min: 6,
                        max: 10,
                        message: 'La contraseña debe estar entre 6 y 10 caracteres'
                    },
                    regexp: {
                        regexp: /^[\da-zA-Z]+$/,
                        message: 'La contraeña solo debe tener letras y números'
                    }
                }
            }
        }
    });
});