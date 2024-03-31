function roomCondition(){
    // Obtener el elemento del input
    var valorInputHab = document.getElementById('roomNumber');

    // Agregar un event listener para el evento de entrada (input)
    valorInputHab.addEventListener('input', function(event) {
        // Obtener el valor actual del input
        var valor = event.target.value;
        // Reemplazar cualquier carácter no numérico con una cadena vacía
        valor = valor.replace(/[^0-9]/g, '');
        // Limitar la longitud máxima a 3 caracteres
        valor = valor.slice(0, 3);
        // Actualizar el valor del input con solo números
        event.target.value = valor;
    });
};

function payCondition(){
    // Obtener el elemento del input
    var valorInputHab = document.getElementById('montoTarifa');

    // Agregar un event listener para el evento de entrada (input)
    valorInputHab.addEventListener('input', function(event) {
        // Obtener el valor actual del input
        var valor = event.target.value;
        // Reemplazar cualquier carácter no numérico con una cadena vacía
        valor = valor.replace(/[^0-9]/g, '');
        // Limitar la longitud máxima a 3 caracteres
        valor = valor.slice(0, 3);
        // Actualizar el valor del input con solo números
        event.target.value = valor;
    });
};

function dniCondition(){
    // Obtener el elemento del input
    var valorInputdni = document.getElementById('dniNumber');

    // Agregar un event listener para el evento de entrada (input)
    valorInputdni.addEventListener('input', function(event) {
        // Obtener el valor actual del input
        var valor = event.target.value;
        // Reemplazar cualquier carácter no numérico con una cadena vacía
        valor = valor.replace(/[^0-9]/g, '');
        // Limitar la longitud máxima a 13 caracteres
        valor = valor.slice(0, 13);
        // Actualizar el valor del input con solo números
        event.target.value = valor;
    });
};

function actualizarHora() {
    var ahora = new Date();
    var horas = ahora.getHours().toString().padStart(2, '0');
    var minutos = ahora.getMinutes().toString().padStart(2, '0');
    var segundos = ahora.getSeconds().toString().padStart(2, '0');
    var dia = ahora.getDate().toString().padStart(2, '0');
    var mes = (ahora.getMonth()+1).toString().padStart(2, '0'); // Los meses van de 0 a 11, sumamos 1 para obtener el mes correcto
    var anio = ahora.getFullYear().toString().padStart(4, '0');
    var horaActual = horas + ':' + minutos + ':' + segundos+' '+ dia +'-'+ mes +'-'+ anio;
    document.getElementById("hora").value = horaActual;
};