<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="../js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/notify.min.js" type="text/javascript"></script>
        <script src="../js/notify.js" type="text/javascript"></script>
        <script src="../js/jquery.maskedinput-1.2.2.js" type="text/javascript"></script>
        <script src="../js/jquery-ui.js" type="text/javascript"></script>
        
        
    </head>
    <body>
        
        
         
        <?php
        
        if (isset($_GET['request'])) {


    if ($_GET['request'] == 'success') {
        ?> 
                                <script type="text/javascript">// < ![CDATA[ 
                                    $.notify("Asociación insertada correctamente ", "success");
        // ]]>
                                </script>
        <?php
    }
    
    if ($_GET['request'] == 'error') {
        ?> 
                                <script type="text/javascript">// < ![CDATA[ 
                                    $.notify("Error al insertar asociacion ", "error");
        // ]]>
                                </script>
                                
                               <?php
       
 }

    }
    ?>
       
       
    </body>
</html>
