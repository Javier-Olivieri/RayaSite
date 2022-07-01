<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("acf-form").addEventListener('submit', validarFormulario); 
});

function validarFormulario(evento) {
  evento.preventDefault();
  var Nombre = document.getElementById('acf-field_62bc60dade428').value;
  if(Nombre.length < 6) {
    alert('El nombre no es válido, Revisar');
    return;
  }
  var Tel = document.getElementById('acf-field_62bc61dede42b').value;
  if (Tel.length < 6) {
    alert('El Número Telefónico no es válido, Revisar');
    return;
  }
	var direccion = document.getElementById('acf-field_62bc6174de42a').value;
  if (direccion.length <8) {
    alert('La Dirección no es válida, Revisar');
    return;
  }
	
	var rut = document.getElementById('acf-field_62bc611ede429').value;
	 if (rut.length <12) {
		 alert('El Rut no es válido, Revisar')
		 return;
	 }
	  
  this.submit();
}





</script>
<!-- end Simple Custom CSS and JS -->
