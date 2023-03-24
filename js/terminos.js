const btnAceptar = document.getElementById('btn-aceptar');

btnAceptar.addEventListener('click', () => {
	// Aquí se pueden colocar las acciones que se deseen al aceptar los términos y condiciones
	alert('¡Gracias por aceptar los términos y condiciones!');
    window.location.href = 'inicio.php';
});
