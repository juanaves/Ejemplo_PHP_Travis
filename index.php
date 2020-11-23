<?php
   echo'<!DOCTYPE html>
<html>
<head>
    
   <title>Convertidor de Temperaturas</title>
   <meta charset="utf-8" />
   <link href="default.css" rel="stylesheet" type="text/css" />
 
</head>
<body>
<form action="convertir.php" method="post" >
       <fieldset>
         <legend>Convertidor de Temperatura Celsius/Fahrenheit</legend>
         <p>
            <label for="temperatura">Temperatura</label>
            <input type="text" name="temperatura" value="" size="5" />
            

            <select name="tipo">
                <option value="celsius"</option>Celsius
                <option value ="fahrenheit"</option>Fahrenheit
            </select>
           
         </p>
         <p>
         <input type="submit" value="Convertir" name="convertir" />
         </p>
       </fieldset>
       </form>
 
</body>
</html>';     
