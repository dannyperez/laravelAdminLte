<div class="modal fade in" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #337ab7">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="menu-title modal-title" style="color: white;">Nuevo administrador</h4>
            </div>
            <form class="menu-form form-horizontal" action="/adminuser" method="post">
                <div class="modal-body">
                    <!-- /.box-header -->
                    <!-- form start -->
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">nombre de usuario</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" placeholder="nombre de usuario"
                                       value="{{$fields['name']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">buzón</label>
                            <div class="col-sm-10">
                                <input  type="text" name="email" class="form-control" placeholder="buzón"
                                        value="{{$fields['email']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">contraseña</label>
                            <div class="col-sm-10">
                                <input id="password"  type="text" name="password" class="form-control" placeholder="contraseña"
                                        value="{{$fields['password']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Elige rol</label>
                            <div class="col-sm-10">
                                <select id="select2" name="role[]" multiple="multiple" class="form-control"
                                        data-placeholder="Elige rol" style="width: 100%">
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                </div>
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

