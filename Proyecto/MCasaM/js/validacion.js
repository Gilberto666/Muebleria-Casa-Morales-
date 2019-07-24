function validar_comentario(){
 var nombre;

 nombre = document.getElementById('nombre').value;

 if(nombre == ""){
  alert("no sirve");
  return false;
 }

}