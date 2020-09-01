<div class="modal modal-danger fade in" id="modal-del">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Eliminar</h4>
            </div>
            <form class="delete-menu" action= "" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="DELETE">
                <div class="modal-body">
                    <p>Seguro para eliminar<kbd><span id="user-name"></span></kbd>Este usuario?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">apagar</button>
                    <button type="submit" class="btn btn-outline">Eliminar</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


