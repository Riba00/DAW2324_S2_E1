
function consultaProductes () {
fetch('productes.php?controller=productControl&action=llistarProductes')
    .then(response => {
        if (!response.ok) {
            throw new Error('Error de red');
        }
        return response.json();
    })
    .then(data => {
        console.log(data);
        // Puedes trabajar con los datos aquí
    })
    .catch(error => {
        console.error('Error:', error);
    });
}