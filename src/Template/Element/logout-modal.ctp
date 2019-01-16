<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Listo para irse?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Seleccione "Salir" abajo si está listo para cerrar sesión.</div>
      <div class="modal-footer d-flex justify-content-center">
        <a class="btn btn-block btn-primary" href="<?php echo $this->Url->build('/', true) ?>logout">Salir</a>
    </div>
  </div>
</div>