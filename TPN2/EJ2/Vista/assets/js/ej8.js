function Validar() {
    let isValid = true;
   if( $("#edad").val() === "" || isNaN( $("#edad").val())){
        isValid= false;
   }
   if(!$('input[name="estudios"]:checked').val()){
    isValid = false;
        alert('Por favor, seleccione si es o no estudiante.');
   }

return isValid;
}