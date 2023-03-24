(async () => {

  const { value: accept } = await Swal.fire({
    title: 'Términos y condiciones',
    input: 'checkbox',
    inputValue: 1,
    allowOutsideClick:false,
    inputPlaceholder:
      'Estoy de acuerdo con los <a href ="terminos.php">términos y condiciones.</a>',

    confirmButtonText:
      'Continuar<i class="fa fa-arrow-right"></i>',
    inputValidator: (result) => {
      return !result && 'Necesitas aceptar los términos para navegar en esta página.'
      

    }
  })
  
  if (accept) {
    Swal.fire('Bienvenido, puedes continuar')
  }
  
  })()