<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
var formulario = document.getElementsByTagName("form")

window.onload = iniciar; 


function iniciar () {
	document.getElementsByClassName("submit-button").addEventListener('click',validar,false);
	
}


function validarNombre() {
	var elemento = document.getElementById("acff-post-field_62be026bd1064");
	if(elemento.value.length <4) {
		console.log("Nombre Inválido");
		return false;
	}
	
	return true;
}
	
	
	function validaTelefono(){
		var elemento = document.getElementById("acff-post-field_62be03c1d1067");
		if(isNaN(elemento.value)){
			alert("El campo Teléfono tiene que ser numérico");
			return false;
		}
		
		return true;
	}
	
	
	function validaDireccion(){
		var elemento = document.getElementById("acff-post-field_62be0351d1066");
		if(elemento.value == "") {
		alert ("El campo Dirección no puede estar vacío");
		return false;
	}
		return true;
}
		
		function validadRut(){
			var elemento = document.getElementById("acff-post-field_62be0326d1065");
			if(elemento.value.length > 9) {
				alert("El campo Rut no es válido");
				return false;
			}
			
			return true;
		}</script>
<!-- end Simple Custom CSS and JS -->
