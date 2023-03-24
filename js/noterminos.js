const btnAceptar = document.getElementById('btn-rechazar');

 btnAceptar.addEventListener('click', () => {
	// Aquí se pueden colocar las acciones que se deseen al aceptar los términos y condiciones
	alert('¡Es necesario aceptar los terminos y condiciones para ingresar!');
    window.location.href = 'index.php';
});