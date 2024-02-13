$.validator.addMethod(
	"lettersonly",
	function (value, element) {
		return this.optional(element) || /^[a-zA-Z\s]*$/.test(value);
	},
	"Solo se permiten letras en este campo"
);
// Validacion del formulario de registro de Agencias
$(document).ready(function () {
	$("#formAgencias").validate({
		rules: {
			idAgencia: {
				required: true,
				number: true,
				minlength: 1,
				maxlength: 50,
			},
			nombre: {
				required: true,
				lettersonly: true,
				minlength: 3,
				maxlength: 50,
			},
			direccion: {
				required: true,
				minlength: 3,
				maxlength: 50,
			},
			email: {
				required: true,
				email: true,
				minlength: 3,
				maxlength: 50,
			},
			telefono: {
				required: true,
				number: true,
				minlength: 10,
				maxlength: 10,
			},
			ciudad: {
				required: true,
				lettersonly: true,
				minlength: 3,
				maxlength: 50,
			},
			provincia: {
				required: true,
				lettersonly: true,
				minlength: 3,
				maxlength: 50,
			},
			fechaInaguracion: {
				required: true,
			},
			horario: {
				required: true,
				minlength: 3,
				maxlength: 50,
			},
			horarioDiferido: {
				required: true,
				minlength: 3,
				maxlength: 50,
			},
			fotografia: {
				required: true,
				minlength: 3,
				maxlength: 50,
			},
			latitudAgencia: {
				required: true,
				number: true,
				minlength: 3,
				maxlength: 50,
			},
			longitudAgencia: {
				required: true,
				number: true,
				minlength: 3,
				maxlength: 50,
			},
		},
		messages: {
			idAgencia: {
				required: "Por favor, ingrese el id de la agencia",
				number: "Por favor, ingrese un número",
				minlength: "El id debe tener al menos 1 caracter",
				maxlength: "El id debe tener máximo 50 caracteres",
			},
			nombre: {
				required: "Por favor, ingrese el nombre de la agencia",
				lettersonly: "Por favor, ingrese solo letras",
				minlength: "El nombre debe tener al menos 3 caracteres",
				maxlength: "El nombre debe tener máximo 50 caracteres",
			},
			direccion: {
				required: "Por favor, ingrese la dirección de la agencia",
				minlength: "La dirección debe tener al menos 3 caracteres",
				maxlength: "La dirección debe tener máximo 50 caracteres",
			},
			email: {
				required: "Por favor, ingrese el email de la agencia",
				email: "Por favor, ingrese un email válido",
				minlength: "El email debe tener al menos 3 caracteres",
				maxlength: "El email debe tener máximo 50 caracteres",
			},
			telefono: {
				required: "Por favor, ingrese el teléfono de la agencia",
				number: "Por favor, ingrese un número",
				minlength: "El teléfono debe tener 10 caracteres",
				maxlength: "El teléfono debe tener 10 caracteres",
			},
			ciudad: {
				required: "Por favor, ingrese la ciudad de la agencia",
				lettersonly: "Por favor, ingrese solo letras",
				minlength: "La ciudad debe tener al menos 3 caracteres",
				maxlength: "La ciudad debe tener máximo 50 caracteres",
			},
			provincia: {
				required: "Por favor, ingrese la provincia de la agencia",
				lettersonly: "Por favor, ingrese solo letras",
				minlength: "La provincia debe tener al menos 3 caracteres",
				maxlength: "La provincia debe tener máximo 50 caracteres",
			},
			fechaInaguracion: {
				required: "Por favor, ingrese la fecha de inaguración de la agencia",
			},
			horario: {
				required: "Por favor, ingrese el horario de la agencia",
				minlength: "El horario debe tener al menos 3 caracteres",
				maxlength: "El horario debe tener máximo 50 caracteres",
			},
			horarioDiferido: {
				required: "Por favor, ingrese el horario diferido de la agencia",
				minlength: "El horario diferido debe tener al menos 3 caracteres",
				maxlength: "El horario diferido debe tener máximo 50 caracteres",
			},
			fotografia: {
				required: "Por favor, ingrese la fotografia de la agencia",
				minlength: "La fotografia debe tener al menos 3 caracteres",
				maxlength: "La fotografia debe tener máximo 50 caracteres",
			},
			latitudAgencia: {
				required: "Por favor, ingrese la latitud de la agencia",
				number: "Por favor, ingrese un número",
				minlength: "La latitud debe tener al menos 3 caracteres",
				maxlength: "La latitud debe tener máximo 50 caracteres",
			},
			longitudAgencia: {
				required: "Por favor, ingrese la longitud de la agencia",
				number: "Por favor, ingrese un número",
				minlength: "La longitud debe tener al menos 3 caracteres",
				maxlength: "La longitud debe tener máximo 50 caracteres",
			},
		},
	});
});

// Validacion del formulario de registro de Cajeros
$(document).ready(function () {
	$("#formCajeros").validate({
		rules: {
			idCajero: {
				required: true,
				number: true,
				minlength: 1,
				maxlength: 50,
			},
			estado: {
				required: true,
				minlength: 3,
				maxlength: 50,
			},
			tipo: {
				required: true,
				minlength: 3,
				maxlength: 50,
			},
			provincia: {
				required: true,
				lettersonly: true,
				minlength: 3,
				maxlength: 50,
			},
			ciudad: {
				required: true,
				lettersonly: true,
				minlength: 3,
				maxlength: 50,
			},
			fotografia: {
				required: true,
				minlength: 3,
				maxlength: 50,
			},
			latitudCajero: {
				required: true,
				number: true,
				minlength: 3,
				maxlength: 50,
			},
			longitudCajero: {
				required: true,
				number: true,
				minlength: 3,
				maxlength: 50,
			},
			idAgencia: {
				required: true,
				number: true,
				minlength: 1,
				maxlength: 50,
			},
			nombreAgencia: {
				required: true,
				lettersonly: true,
				minlength: 3,
				maxlength: 50,
			},
		},
		messages: {
			idCajero: {
				required: "Por favor, ingrese el id de la agencia",
				number: "Por favor, ingrese un número",
				minlength: "El id debe tener al menos 1 caracter",
				maxlength: "El id debe tener máximo 50 caracteres",
			},
			estado: {
				required: "Por favor, ingrese el estado del cajero",
				minlength: "El estado debe tener al menos 3 caracteres",
				maxlength: "El estado debe tener máximo 50 caracteres",
			},
			tipo: {
				required: "Por favor, ingrese el tipo de cajero",
				minlength: "El tipo debe tener al menos 3 caracteres",
				maxlength: "El tipo debe tener máximo 50 caracteres",
			},
			provincia: {
				required: "Por favor, ingrese la provincia del cajero",
				lettersonly: "Por favor, ingrese solo letras",
				minlength: "La provincia debe tener al menos 3 caracteres",
				maxlength: "La provincia debe tener máximo 50 caracteres",
			},
			ciudad: {
				required: "Por favor, ingrese la ciudad del cajero",
				lettersonly: "Por favor, ingrese solo letras",
				minlength: "La ciudad debe tener al menos 3 caracteres",
				maxlength: "La ciudad debe tener máximo 50 caracteres",
			},
			fotografia: {
				required: "Por favor, ingrese la fotografia del cajero",
				minlength: "La fotografia debe tener al menos 3 caracteres",
				maxlength: "La fotografia debe tener máximo 50 caracteres",
			},
			latitudCajero: {
				required: "Por favor, ingrese la latitud del cajero",
				number: "Por favor, ingrese un número",
				minlength: "La latitud debe tener al menos 3 caracteres",
				maxlength: "La latitud debe tener máximo 50 caracteres",
			},
			longitudCajero: {
				required: "Por favor, ingrese la longitud del cajero",
				number: "Por favor, ingrese un número",
				minlength: "La longitud debe tener al menos 3 caracteres",
				maxlength: "La longitud debe tener máximo 50 caracteres",
			},
			idAgencia: {
				required: "Por favor, ingrese el id de la agencia",
				number: "Por favor, ingrese un número",
				minlength: "El id debe tener al menos 1 caracter",
				maxlength: "El id debe tener máximo 50 caracteres",
			},
			nombreAgencia: {
				required: "Por favor, ingrese el nombre de la agencia",
				lettersonly: "Por favor, ingrese solo letras",
				minlength: "El nombre debe tener al menos 3 caracteres",
				maxlength: "El nombre debe tener máximo 50 caracteres",
			},
		},
	});
});

// Validacion del formulario de registro de Cajeros
$(document).ready(function () {
	$("#formCorresponsales").validate({
		rules: {
			idCorresponsal: {
				required: true,
				number: true,
				minlength: 1,
				maxlength: 50,
			},
			nombre: {
				required: true,
				lettersonly: true,
				minlength: 3,
				maxlength: 50,
			},
			direccion: {
				required: true,
				minlength: 3,
				maxlength: 50,
			},
			telefono: {
				required: true,
				number: true,
				minlength: 10,
				maxlength: 10,
			},
			descripcion: {
				required: true,
				minlength: 3,
				maxlength: 50,
			},
			horario: {
				required: true,
				minlength: 3,
				maxlength: 50,
			},
			fotografia: {
				required: true,
				minlength: 3,
				maxlength: 50,
			},
			latitudCorresponsal: {
				required: true,
				number: true,
				minlength: 3,
				maxlength: 50,
			},
			longitudCorresponsal: {
				required: true,
				number: true,
				minlength: 3,
				maxlength: 50,
			},
		},
		messages: {
			idCorresponsal: {
				required: "Por favor, ingrese el id de la agencia",
				number: "Por favor, ingrese un número",
				minlength: "El id debe tener al menos 1 caracter",
				maxlength: "El id debe tener máximo 50 caracteres",
			},
			nombre: {
				required: "Por favor, ingrese el nombre del corresponsal",
				lettersonly: "Por favor, ingrese solo letras",
				minlength: "El nombre debe tener al menos 3 caracteres",
				maxlength: "El nombre debe tener máximo 50 caracteres",
			},
			direccion: {
				required: "Por favor, ingrese la dirección del corresponsal",
				minlength: "La dirección debe tener al menos 3 caracteres",
				maxlength: "La dirección debe tener máximo 50 caracteres",
			},
			telefono: {
				required: "Por favor, ingrese el teléfono del corresponsal",
				number: "Por favor, ingrese un número",
				minlength: "El teléfono debe tener 10 caracteres",
				maxlength: "El teléfono debe tener 10 caracteres",
			},
			descripcion: {
				required: "Por favor, ingrese la descripción del corresponsal",
				minlength: "La descripción debe tener al menos 3 caracteres",
				maxlength: "La descripción debe tener máximo 50 caracteres",
			},
			horario: {
				required: "Por favor, ingrese el horario del corresponsal",
				minlength: "El horario debe tener al menos 3 caracteres",
				maxlength: "El horario debe tener máximo 50 caracteres",
			},
			fotografia: {
				required: "Por favor, ingrese la fotografia del corresponsal",
				minlength: "La fotografia debe tener al menos 3 caracteres",
				maxlength: "La fotografia debe tener máximo 50 caracteres",
			},
			latitudCorresponsal: {
				required: "Por favor, ingrese la latitud del corresponsal",
				number: "Por favor, ingrese un número",
				minlength: "La latitud debe tener al menos 3 caracteres",
				maxlength: "La latitud debe tener máximo 50 caracteres",
			},
			longitudCorresponsal: {
				required: "Por favor, ingrese la longitud del corresponsal",
				number: "Por favor, ingrese un número",
				minlength: "La longitud debe tener al menos 3 caracteres",
				maxlength: "La longitud debe tener máximo 50 caracteres",
			},
		},
	});
});
