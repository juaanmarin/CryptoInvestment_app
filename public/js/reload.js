function actualizarTabla() {
    $.ajax({
        url: 'actualizar_datos.php', // Archivo que devuelve los datos
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            let tabla = $('#miTabla tbody');
            tabla.empty(); // Limpiar la tabla
            data.forEach(function(item) {
                tabla.append(`
                    <tr>
                        <td>${item.id}</td>
                        <td>${item.nombre}</td>
                        <td>${item.precio}</td>
                    </tr>
                `);
            });
        },
        error: function() {
            console.log("Error al obtener los datos");
        }
    });
}


// console.log('holiii');
// setTimeout(() => {
//     location.reload();
// }, 10000);
// Llamar a la función cada 30 segundos
// setInterval(actualizarTabla, 30000);

// // Cargar la tabla al iniciar
// actualizarTabla();

