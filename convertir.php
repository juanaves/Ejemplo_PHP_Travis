<?php
if( iset($_POST['convertir']) ) 
  {
    $temperatura   = $_POST['temperatura'];
    $tipo =  $_POST['tipo'];
    if ($temperatura >=10000)
    {
        $error=true;
    }
    elseif ($tipo=="celsius" &&
            $temperatura <= -273.15)
         {
           $error=true;
         }
         elseif ($tipo=="fahrenheit" &&
            $temperatura <= -459.67)
         {
           $error=true;
         }
         else
              $error=false;
         
  if($error==true)
  {
      //header("Location: index.php");
      echo "ERROR a la hora de introducir los datos";
  }else {
      //hago todos los calculos
      if ($tipo=="celsius")
      {
          $conversion=32+(1.8*$temperatura);
          echo $temperatura." grados Celsius son : ".$conversion. " Fahrenheid";
      }
      else
       {
          $conversion=($temperatura-32)/1.8;
          echo $temperatura." grados Fahrenheid son : ".$conversion. " Celsius";
      }
      
  
          
   
  }
  print"<p class='centrado'>
       <a href='index.php'>
          <img alt='' src='Imagenes/icon_home.gif' /><br />Regresar
       </a>
    </p>";
  }else {
      header("Location: index.php");
  } 
     
       

