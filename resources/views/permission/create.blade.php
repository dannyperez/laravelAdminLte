<div class="modal fade in" id="modal-create" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #337ab7">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="menu-title modal-title" style="color: white;">Agregar permisos</h4>
            </div>
            <form class="menu-form form-horizontal" action="" method="post">
                @include('permission.form')
                <div class="modal-footer">
                    <button type="button" class="btn btn-info pull-left" data-dismiss="modal" style="background-color: #337ab7">apagar</button>
                    <button type="submit" class="btn btn-info btn-primary" style="background-color: #337ab7">Salvar</button>
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
