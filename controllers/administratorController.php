<?php
/*
    CRUD creado por Oscar Amado
    Contacto: oscarfamado@gmail.com
*/
class administratorController extends Administrator{

    function index(){
        require_once('views/all/header.php');
        require_once('views/all/nav.php');
        require_once('views/index/index.php');
        require_once('views/index/modals.php');
        require_once('views/all/footer.php');
    }

    function table_envios(){
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>#</th>
                <th>ID Producto</th>
                <th>Número de Teléfono</th>
                <th>Dirección</th>
                <th>Correo</th>
                <th>Nombres</th>
                <th>ID Usuario</th>
                <th>Precio de Envío</th>
                <th>Opciones</th>
                </tr>
            </thead>
            <tbody >      
        <?php
        foreach (parent::get_view_envios() as $data) {
        ?>
        <tr>
            <td><?php echo $data->id_envio; ?> </td>
            <td><?php echo $data->id_producto; ?> </td>
            <td><?php echo $data->n_telefono; ?> </td>
            <td><?php echo $data->direccion; ?> </td>
            <td><?php echo $data->correo; ?> </td>
            <td><?php echo $data->nombres; ?> </td>
            <td><?php echo $data->id_usuario; ?> </td>
            <td><?php echo $data->precio_de_envio; ?> </td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Seleccionar <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#" onclick="ModalUpdate('<?php echo $data->id_envio; ?>','<?php echo $data->id_producto; ?>','<?php echo $data->n_telefono; ?>','<?php echo $data->direccion; ?>', '<?php echo $data->correo; ?>', '<?php echo $data->nombres; ?>', '<?php echo $data->id_usuario; ?>', '<?php echo $data->precio_de_envio; ?>');">Actualizar</a></li>
                  <li><a href="#" onclick="deleteEnvio('<?php echo $data->id_envio; ?>');">Borrar</a></li>
                </ul>
              </div>
            </td>
        </tr>
        <?php
        }
        ?>
            </tbody>
        </table>    
    <?php   
    }
    
    function deleteenvio(){       
            parent::set_delete_envio($_REQUEST['id']);      
    }

    function registerenvio(){
        $data = array(
                    'id_producto' => $_REQUEST['id_producto'],
                    'n_telefono' => $_REQUEST['n_telefono'],
                    'direccion' => $_REQUEST['direccion'],
                    'correo' => $_REQUEST['correo'],
                    'nombres' => $_REQUEST['nombres'],
                    'id_usuario' => $_REQUEST['id_usuario'],
                    'precio_de_envio' => $_REQUEST['precio_de_envio']
                    );      
                    parent::set_register_envio($data);      
    }    
    
    function updateenvio(){
        $data = array(
                    'id_envio' => $_REQUEST['id_envio'],
                    'id_producto' => $_REQUEST['id_producto'],
                    'n_telefono' => $_REQUEST['n_telefono'],
                    'direccion' => $_REQUEST['direccion'],
                    'correo' => $_REQUEST['correo'],
                    'nombres' => $_REQUEST['nombres'],
                    'id_usuario' => $_REQUEST['id_usuario'],
                    'precio_de_envio' => $_REQUEST['precio_de_envio']
                    );      
            parent::set_update_envio($data);      
    }    
    
}
?>
