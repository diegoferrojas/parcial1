<?php
if(isset($_POST['submit'])) {
	$file = "data.json";
	$json_string = json_encode($_POST, JSON_PRETTY_PRINT);
	file_put_contents($file, $json_string, FILE_APPEND);
	// header('Location: thanks.php'); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login </title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="myRIA.js"></script>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
    <div class="contenedor-form">
        <div class="toggle">
            <span> Crear Cuenta</span>
        </div>
        
        <div class="formulario">
            <h2>Iniciar Sesión</h2>
            <form action="./Tareas.html">
                <input type="text" placeholder="Usuario" required>
                
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>
        
        <div class="formulario">
            <h2>Crea tu Cuenta</h2>
            <form action=# name="myForm" method="post" id="myForm" onsubmit='return onSubmit(this)'>
                <input type="text" placeholder="Usuario" required>   
                
                <input type="submit" type="button" value="Registrarse">
            </form>   
                
        </div>
        
       
        
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>   
    
    <script src="js/main.js"></script>

    <script>  
    function onSubmit( form )
        {
           // var data = JSON.stringify( $(form).serializeArray() ); 
            //console.log( data );
            //return false; 
         
        }   
    </script>
        
      
</body>

</html>