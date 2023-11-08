<div id="addEnvio" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar nuevo envío</h4>
      </div>
      <div class="modal-body">
        <form name="formEnvio" onsubmit="registerEnvio(); return false">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
            <input id="id_producto" type="text" class="form-control" name="id_producto" placeholder="ID Producto" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input id="n_telefono" type="text" class="form-control" name="n_telefono" placeholder="Número de Teléfono" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input id="direccion" type="text" class="form-control" name="direccion" placeholder="Dirección" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input id="correo" type="email" class="form-control" name="correo" placeholder="Correo electrónico" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="nombres" type="text" class="form-control" name="nombres" placeholder="Nombres" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="id_usuario" type="text" class="form-control" name="id_usuario" placeholder="ID Usuario" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
            <input id="precio_de_envio" type="text" class="form-control" name="precio_de_envio" placeholder="Precio de Envío" required autocomplete="off">
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Registrar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
        </form>
      </div>
    </div>
  </div>
</div>


<div id="updateEnvio" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar información de envío</h4>
      </div>
      <div class="modal-body">
        <form name="formEnvioUpdate" onsubmit="updateEnvio(); return false">
          <input type="text" name="id_envio" id="id_envio" style="display: none;">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
            <input id="id_producto" type="text" class="form-control" name="id_producto" placeholder="ID Producto" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input id="n_telefono" type="text" class="form-control" name="n_telefono" placeholder="Número de Teléfono" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input id="direccion" type="text" class="form-control" name="direccion" placeholder="Dirección" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input id="correo" type="email" class="form-control" name="correo" placeholder="Correo electrónico" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="nombres" type="text" class="form-control" name="nombres" placeholder="Nombres" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="id_usuario" type="text" class="form-control" name="id_usuario" placeholder="ID Usuario" required autocomplete="off">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
            <input id="precio_de_envio" type="text" class="form-control" name="precio_de_envio" placeholder="Precio de Envío" required autocomplete="off">
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Actualizar</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
        </form>
      </div>
    </div>
  </div>
</div>
