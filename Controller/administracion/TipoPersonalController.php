<?php 
  require_once '../../Model/TipoPersonalDAO.php';
  require_once '../../Model/administracion/TipoPersonal.php';
  $tipoPersonalDAO= new TipoPersonalDAO();
  $tipoPersonal=new TipoPersonal();
  $lista=  $tipoPersonalDAO->ListarTipoPersonal();
  $option=1;
  if (isset($_POST['option'])) {
    $option = $_POST['option'];
  }
  
  switch ($option)
  {
    case 2:
          $nom = $_POST['nombreTipo'];
          $detalle = $_POST['detalleTipo'];
          $tipo = $_POST['tipo'];
          $tipoPersonal->setNombre($nom);
          $tipoPersonal->setDetalle($detalle);
          $tipoPersonal->setTipo($tipo);
          $tipoPersonalDAO->RegistrarTipo($tipoPersonal);
          //var_dump($tipoPersonal);
         //header("Location:../../View/Dashboard/tipoPersonal.php");
      break;
    case 3:
          $id=$_POST['id'];
          $tipoPersonal->setCodigo($id);
          $tipoPersonalDAO->EliminarTipo($tipoPersonal);

      break;
    default:
      # code...
      break;
  }
  foreach ($lista as $value){
      ?>
        <tr class="odd">
            <td class="dtr-control sorting_1" tabindex="0">
                <?php echo $value["ID"]?>
            </td>
            <td>  <?php echo $value["NOMTIPO"]?></td>
            <td style="">  <?php echo $value["DETALLE"]?></td>
            <td style="">
                <a href="" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                <a href="#" onclick="EliminarTipo('<?php echo $value['ID']?>')" class="btn btn-primary"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>

<?php
  }
?>