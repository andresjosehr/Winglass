 <?php 
 
 
 if(isset($_POST['enviar_mensaje'])){
     
     $destino="info@winglass.com.ve";
    $asunto="Nuevo contacto";
    $mensaje="Nombre: ".$_POST['name']." / Email: ".$_POST['email']." / Direccion: ".$_POST['direccion']." / Telefono: ".$_POST['telefono']." / Mensaje: ".$_POST['mensaje'];
    mail($destino, $asunto, $mensaje);

header("Location:index.php?notice=1");

     
     
 }
 else {
     header("Location:index.php");
 }






?>