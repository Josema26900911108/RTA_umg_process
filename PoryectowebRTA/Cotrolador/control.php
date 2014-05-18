<?php 
             session_start(); 
               if (!isset( $_POST['Usuario'] )) { 
                    header("Location: conexion.php"); 
                            
               }
                    
                   else { 
                        
                           $id = mysql_connect("localhost", "rta", "abc"); 
                           mysql_select_db("prueba", $id); 
                           $consulta = "SELECT * FROM loguer WHERE Usuario = '{$_POST['Usuario']}' AND password = '{$_POST['password']}'"; 
                           $datos = mysql_query($consulta, $id); 
                           $numDatos = @mysql_num_rows($datos); 

       
                 if ($numDatos <= 0) { 

                                     header("Location:conexion.php?");                  

                                    
                                      
                                      } 





                      else { 




                                     $id = mysql_connect("localhost", "rta", "abc"); 
                                       mysql_select_db("prueba", $id); 

                                               $pri="SELECT Privilegios_idPrivilegios FROM loguer "; 

                                              $datos = mysql_query($pri, $id); 
                                               $numDatos = @mysql_num_rows($datos);
                               
                                        if($pri==1){

                                              header("Location:Usuario.php");
                      
                                                    } else{


                                                      header("Location:Usuario.php");
                      ; 
                                                 }
                         













     } 
}
?> 

