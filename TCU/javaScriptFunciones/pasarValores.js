


var Distrito="null";
function obtenerDistritoBusqueda(){ 
   	 
     //alert("11   llega a obtner distrito");
      
   	
    var selectBox = document.getElementById("selDistritoBusqueda");
      // alert("-------------");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
   // alert(selectedValue);
   Distrito=selectedValue;
  // alert("distrito Busqueda " + Distrito);
}
function llamado(){
    
   // alert ("  llamado !!!!!!!!!!!!!!!!!!!!!!!   ");
    
}





function nuevoAjax() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {

        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function EnviarValoresBuscarNegocioEditar() {

    obtenerDistritoBusqueda();
 // alert(" buscar negocio editar  33333333333333333333333333333333    ");
    var text = "hola Llega  optener valore ";
    var ajax = new nuevoAjax();
    

    
    var nombre=document.getElementById("nombre").value;
   
    
    var text = "";
    var id_editorial = "";
    var lista_id;
    var i;
    
    var ajax = new nuevoAjax();
    
    
   // alert("distrito ................................................ " + Distrito);

    ajax.open("GET", "./negocioaction.do?method=obtenerNegocioParaInsertarImagen" + "&nombre=" + nombre + "&texto=" + Distrito, true);

    ajax.onreadystatechange = function () {

        if (ajax.readyState == 4) {
            capa.innerHTML = ajax.responseText;

        }

    }
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send(null);

}