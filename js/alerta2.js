(async () => {

  const { value: accept } = await Swal.fire({
    title: 'Políticas de privacidad',
    input: 'checkbox',
    inputValue: 1,
    allowOutsideClick:false,
    inputPlaceholder:
      'Estoy de acuerdo con las <a href ="politicapriv.php">políticas de privacidad.</a>',

    confirmButtonText:
      'Continuar<i class="fa fa-arrow-right"></i>',
    inputValidator: (result) => {
      return !result && 'Necesitas aceptar las políticas para poder registrarte.'
      

    }
  })
  
  if (accept) {
    Swal.fire('Has aceptado las políticas.')
  }
  
  })()