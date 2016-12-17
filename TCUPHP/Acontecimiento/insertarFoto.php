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
    </head>
    <body>
           
             <form method="Post" action="Acontecimientos.php" name="form">
                 <input type="hidden" name="metodo" value="guardarFoto">
                   <input type="text" name="idAcontecimiento"  value="4" />
                   <input type="text" value="xxx" name="dd" id="dd">
                 <table border="1"> 
                    
                    <tr bgcolor="skyblue">       


                    </tr> 
                    <tr bgcolor="skyblue">
                       
                        <td colspan="2" align="center" bgcolor="skyblue">
                            <input type="file" name="foto" id="foto">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" bgcolor="skyblue">
                
                            <input type="submit" value="Insertar " />
                        </td>
                    </tr>
                   
                  
                </table>
                
         </form>
              
    </body>
</html>
