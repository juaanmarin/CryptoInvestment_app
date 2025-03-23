//para que el input solo resiva letras mayusculas
const input = document.getElementById("searchimp");
input.addEventListener("input", function () {
    this.value = this.value.toUpperCase();
});

// para cuando alla infrmacion en la bd de favoritos se cargue la grafica
document.addEventListener("DOMContentLoaded", function () {
    if (typeof criptosData !== 'undefined') {

        const ctx = document.getElementById('cryptoChart');
        const dataArray = Object.values(criptosData); // Convierte un objeto en array
        
        datasetsArr = [];

        dataArray.forEach(cripto => {

            price = cripto.quote.USD.price;
            h1 = calcularPrecioAnterior(price, cripto.quote.USD.percent_change_1h).toFixed(3);
            h24 = calcularPrecioAnterior(price, cripto.quote.USD.percent_change_24h).toFixed(3); 
            d7 = calcularPrecioAnterior(price, cripto.quote.USD.percent_change_7d).toFixed(3); 
            d30 = calcularPrecioAnterior(price, cripto.quote.USD.percent_change_30d).toFixed(3); 
            
            arrCripto = {
                label: cripto.name,
                data: [d30, d7, h24, h1, price],
                borderColor: generarColorAleatorio(),
                fill: false,
                tension: 0.1
            };

            datasetsArr.push(arrCripto);
        });


        new Chart(ctx, {
            type: 'line',
            data: {
              labels: ['30D', '7d', '24H', '1H', 'ACT',],
              datasets: datasetsArr
            },options: {
                plugins: {
                    legend: {
                        position: 'left'
                    }
                },
                scales: {
                    y: {
                        position: 'right' // Mueve los números del eje Y a la derecha
                    }
                },
            }
        });


    } else {
        console.error("No hay datos disponibles para graficar.");
    }
});


// para calcular el precio aproximado de la criptomoneda
function calcularPrecioAnterior(precioActual, cambioPorcentual) {
    return precioActual / (1 + (cambioPorcentual / 100));
}

// para generar colores aleatorios en la grafaca
function generarColorAleatorio() {
    const r = Math.floor(Math.random() * 256);
    const g = Math.floor(Math.random() * 256);
    const b = Math.floor(Math.random() * 256);
    return `rgba(${r}, ${g}, ${b}, 0.8)`;
}