  <?php
require_once("../model/gestionBienestar.php");

echo"El plato se creo correctamente";

$platos=new gestionBienestar();

$nombre=$_GET["nombre"];

$precio=$_GET["precio"];

$tipo=$_GET["tipo"];



$listaplatos=$platos->insertarPlatos($nombre, $precio, $tipo);


?>
    
    
  </tbody>
</table>