<div class="container">
    <div class="row">
        <div class="col-md-12">
            <center><h1>CRUD - TABLA GUIA DE ENVIO - AECO</h1></center>
            <br>            
            <center>
                <button type="button" onclick="ModalRegisterEnvio();" class="btn btn-success">Agregar envío</button>
            </center>
            <br>
            <div id="information">
                <?php
                $admin = new administratorController();
                $admin->table_envios(); // Cambio realizado aquí para reflejar la tabla de envíos
                ?>
            </div>            
        </div>
    </div>
</div>
