/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */





function obtenerDistrito2(){ 
   	 
    //alert("llega a obtnerwwwwwwwwwwwwwwwww  distrito");
 
   
        
   	
    var selectBox = document.getElementById("selDistrito");
      // alert("-------------");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
   // alert(selectedValue);
   Distrito=selectedValue;
   alert(Distrito);
}

function obtenerDistritoBusqueda(){ 
   	 
   // alert("llega a obtner distrito");
 
   
        
   	
    var selectBox = document.getElementById("selDistritoBusqueda");
      // alert("-------------");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
   // alert(selectedValue);
   Distrito=selectedValue;
  // alert("distrito Busqueda " + Distrito);
}
function PasarValores2()
{
    
    
 
    var selectAutores1 = document.getElementById('opcionesCategorias1');
    var selectAutores2 = document.getElementById('opcionesCategorias2');

    //var elementos_autor1 = document.getElementsByName("opciones1");
    var elementos_autor2 = document.getElementsByName('opciones2');

    var nombres_array = new Array();
    var id_autores_array = new Array();

    var j;
    var i;
    var count = 0;
    //var texto="";


    for (i = 0; i < selectAutores1.options.length; i++) {
        if (selectAutores1.options[i].selected) {
            nombres_array[count] = selectAutores1.options[i];

            id_autores_array[count] = selectAutores1.options[i].value;
            count++;
        }
    }

    // txtSelectedValuesObj.value = selectedArray;
    for (j = 0; j < nombres_array.length; j++) {

        selectAutores2.add(nombres_array[j]);
        elementos_autor2.value = id_autores_array[j];

    }
    //alert("Set nombre \n " + nombres_array[j].text);
   // alert(" Set Value \n " + id_autores_array[j]);
}

function DevolverValores2()
{
    var selectAutores1 = document.getElementById('opcionesCategorias1');
    var selectAutores2 = document.getElementById('opcionesCategorias2');

    //var elementos_autor1 = document.getElementsByName("opciones1");
    var elementos_autor1 = document.getElementsByName('opciones1');

    var nombres_array = new Array();
    var id_autores_array = new Array();

    var j;
    var i;
    var count = 0;
    //var texto="";


    for (i = 0; i < selectAutores2.options.length; i++) {
        if (selectAutores2.options[i].selected) {
            nombres_array[count] = selectAutores2.options[i];

            id_autores_array[count] = selectAutores2.options[i].value;
            count++;
        }
    }

    // txtSelectedValuesObj.value = selectedArray;
    for (j = 0; j < nombres_array.length; j++) {

        selectAutores1.add(nombres_array[j]);
        elementos_autor1.value = id_autores_array[j];
       // alert("Devolver nombre \n " + nombres_array[j].text);
        //alert(" Devolver Value \n " + id_autores_array[j]);
    }
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


function EnviarValores2() {

    obtenerDistrito2();
  //  alert("Llega  optener valores libro action ");
    var text = "hola Llega  optener valoresssssssssssssss ";
    var ajax = new nuevoAjax();
    
    var list_autores = document.getElementById('opcionesCategorias2');
    var lista_editoriales = document.getElementById("opcionesCategorias1");
    
    var nombre=document.getElementById("nombre").value;
    var ubicacion=document.getElementById("ubicacion").value;
    var precioEntrada=document.getElementById("precioEntrada").value;
    var descripcion=document.getElementById("descripcion").value;
    var correo=document.getElementById("correo").value;
    var telefonos=document.getElementById("telefonos").value;
    
    var text = "";
    var id_editorial = "";
    var lista_id;
    var i;
    
    var ajax = new nuevoAjax();
    
    for (i = 0; i < lista_editoriales.options.length; i++) {

        if (lista_editoriales.options[i].selected) {

            id_editorial += lista_editoriales.options[i].value;
            i = lista_editoriales.options.length;
        }

    }
    i = 0;


    for (i = 1; i < list_autores.options.length; i++) {
        text = text + list_autores.options[i].value;
        if ((i + 1) < list_autores.options.length) {

            text += ",";
        }
    }
    
    
   // alert("texto " + text);

    ajax.open("GET", "./negocioaction.do?method=guardarNegocio" + "&nombre=" + nombre + "&ubicacion=" + ubicacion+"&precioEntrada="+precioEntrada+"&descripcion="+descripcion+"&distrito="+Distrito+ "&texto=" + text + "&correo="+correo+"&telefonos="+telefonos, true);

    ajax.onreadystatechange = function () {

        if (ajax.readyState == 4) {
            capa.innerHTML = ajax.responseText;

        }

    }
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send(null);

}

function llamar2()
{ 
   // alert("Llega qqqqqqq  a lamarrrrrrrrrrrr ");
}
