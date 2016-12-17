

function registrarAcontecimiento(){
        
        var fecha=document.getElementById("fecha").value;
        var nombreEvento=document.getElementById("nomEvento").value;
        var descripEvento=document.getElementById("descripEvento").value;
        var sitioEvento=document.getElementById("sitioEvento").value;
        
         if ((sitioEvento.length == 0)||(nombreEvento.length == 0)||(descripEvento.length == 0)||(fecha.length == 0)) { 
       alert("Llene todos los espacios");
     
        return;
    } else {
         
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            //var jsonObj = JSON.parse( xmlhttp.responseText );
             //alert("recibe");
          $.notify("Acontecimiento insertado correctamente ", "success");
            //document.getElementById("acontecimiento").innerHTML = this.responseText;
          // var jsonObj = JSON.parse( xmlhttp.responseText );
           //alert(jsonObj);
            }
        };
       // alert("total="+total+"codigo="+fecha+"  "+monto);
         var metodo="registrarEvento";
          xmlhttp.open("GET", "Acontecimientos.php?metodo=" +metodo +"&fecha="+fecha +"&nombreEvento="+nombreEvento+"&descripEvento="+descripEvento+"&sitioEvento="+sitioEvento, true);
           
               xmlhttp.send();
          alert("Manda");
              }
        
        
    }
    
    function abrirModalFoto(id){
 $(function() {                  
                $("#FotoAcontecimiento").dialog({
                    autoOpen: false,
                    height: 600,
                    width: 700,
                    modal: true
                });
                   
                        $( "#FotoAcontecimiento" ).dialog( "open" );
                    });
                    
                    document.getElementById("idAcontecimiento").setAttribute("value",id);
                    
                    
    
}

function guardarFoto(){
    alert ("llega");
    
     var ruta=document.getElementById("foto").value;
        var id =document.getElementById("idAcontecimiento").value;
         var fil =document.getElementById("fil").value;
        alert(fil);
        var nombre = ruta.substring(12, ruta.length);
          alert(nombre);
         if ((ruta.length == 0)) { 
       alert("Seleccione la foto");
     
        return;
    } else {
         
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
           
          alert("exito");
           document.getElementById("fotoAcon").innerHTML = this.responseText;
        
         
            }
        };
      
         var metodo="guardarFoto";
          xmlhttp.open("GET", "Acontecimientos.php?metodo=" +metodo +"&ruta="+nombre+"&id="+id +"&fil="+fil , true);
           
               xmlhttp.send();
          alert("Manda");
              }
    
    
}
