<h1 align='center'> CryptoInvestment_app 🛵⚙️ </h1>

**CryptoInvestment**  es un grupo de inversores en criptomonedas. Ellos necesitan
una aplicación web simple que les permita seguir el rendimiento de un conjunto
personalizado de criptomonedas a selección dándole a conocer precios
actualizados, cambios porcentuales y volumen del mercado en tiempo real.
Actualmente, utilizan hojas de cálculo y sitios web dispersos, lo cual es ineficiente y no les proporciona una visión consolidada del historial de precios, los socios consideran de vital importancia la persistencia de datos en el tiempo con la posibilidad de verificaciones de líneas de tiempo en un rango de tiempo con visualización desde diferentes dispositivos.
Diferentes desarrolladores han propuesto soluciones muy complejas lo que ha
llevado a los socios a requerir que el sistema sea de una sola hoja con cambios
dinámicos sin recarga de la misma..

## 📊 Estado del proyecto

**Estado:** En desarrollo

### 🔜 características

- Busqueda y seleccion de criptomonedas
- Visualizacion de datos en tiempo real
- Seguimiento de precio por medio de graficos
- Integracion con la api de coinmarketcap
- Integración con una base de datos para almacenar información de criptomonedas.
- Intefaz web simple

### 🛠 Tecnologías utilizadas

- **PHP**: Lenguaje de programación principal.
- **JavaScript**: lenguje de programcion para interacciones con el usuario.
- **MySQL**: Base de datos relacional.
- **Git hub**: Repoitorio para almacenar el codigo fuente.
- **API coinmarketcap**: Api para obtener los datos de las criptomonedas
- **Chart.js**: libreria para mostrar graficos

## 🧑‍💻Author
*Juan David Marin Velasquez*, [@juaanmarin](https://github.com/juaanmarin)

## 🧩Guia de Inicio rpido

## reuisitos
1. Tener XAMMP o largon instaldo
2. Tener una key de la Api coinmarketcap

## paso a paso
1. Clonar el proyecto en la carpeta base ya sea htdocs en xammp o www de laragon
2. Crear la base de dato utilizando phpmyadmin o una herramineta com workbench
    > **Script:**
        los comando para crear la bd se encuentran en la carpeta db del proyecto 
3. Ajute globales del pryecto
    > ingrese el archivo de cofig.php alli debera colocar su key de la api coinmarketcap
    > en cnfig.php debera poner las credenciales para su base de datos


## 🤝 Cómo contribuir

¡Las contribuciones son bienvenidas! Si deseas mejorar **CryptoInvestment_app**, sigue estos pasos:

1. Haz un **fork** del repositorio.
2. Crea una rama para tu funcionalidad o corrección de errores:
   ```bash 
   git checkout -b feat/yourname_dev
3. Realiza tus cambios y asegúrate de seguir las guías de estilo.
4. Haz un commit de los cambios usando las siguientes convenciones para mensajes:
    > **Usa los siguientes prefijos para los mensajes de commit:**
    
    - feat: para nuevas características.

        > **Ejemplo:**
        feat: Agregada función de búsqueda de usuarios

    - fix: para correcciones de errores.
        > **Ejemplo:**
        fix: Solucionado problema de autenticación en la API

    - docs: para cambios en la documentación.
        > **Ejemplo:**
        docs: Actualizada la documentación de la API REST

    - style: para mejoras en el formato/código sin afectar la lógica.
        > **Ejemplo:**
        style: Alineación y formato mejorados en el archivo de configuración

    - chore: para tareas de mantenimiento, como actualizar dependencias.
        > **Ejemplo:**
        chore: Actualizadas dependencias del proyecto

5. Sube tu rama al repositorio

    ``` bash
    git push origin feature/nueva-funcionalidad

6. Abre un pull request desde GitHub.

### Reporte de fallos 🐛
Si encuentras algún problema o error, por favor crea un issue aquí e incluye una descripción detallada del problema, cómo reproducirlo y cualquier información adicional que pueda ser útil (como capturas de pantalla o mensajes de error).

### Mejora del código 💡
Si tienes ideas para mejorar el código o agregar nuevas características, siéntete libre de crear un issue para discutirlas antes de implementar cambios significativos. Algunas áreas en las que siempre se pueden hacer mejoras:
- Optimización de rutas y validaciones.
- Mejora de la estructura de la base de datos.
- Implementación de nuevas funcionalidades.
- Documentación adicional o correcciones.
### Guía de estilo ✍️
Para mantener el código limpio y consistente, por favor asegúrate de seguir estas guías:

- Sigue las convenciones de estilo de código de PSR-12 para PHP.
- Usa nombres de variables y funciones descriptivos.
- Escribe comentarios cuando sea necesario, especialmente para partes complejas del código.