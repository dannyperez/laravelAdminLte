<div class="modal fade in" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #337ab7">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="menu-title modal-title" style="color: white;">Crear menú</h4>
            </div>
            <form class="create_menu menu-form form-horizontal" action="/menu" method="post">
                <div class="modal-body">
                    <!-- /.box-header -->
                    <!-- form start -->
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" class="parentid" name="pid" value="{{$fields['pid']}}">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Menú padre</label>
                            <div class="col-sm-10">
                                <select id="fname" name="pid" class="form-control select2 edit_select2" style="width: 100%;height: 34px;">
                                    <option value="0" >Menu principal</option>
                                    @foreach($pmenus as $pmenu)
                                        <option value="{{$pmenu->id}}">{{$pmenu->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Nombre del menú</label>
                            <div class="col-sm-10">
                                <input id="name" type="text" name="name" class="form-control" placeholder="名称"
                                       value="{{$fields['name']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">icono</label>
                            <div class="col-sm-10">
                                <small> <a target="_blank" href="/icons">Figura Haga clic para ver la biblioteca de iconos</a></small>
                                <input id="icon" type="text" name="icon" class="form-control" placeholder="图标"
                                       value="{{$fields['icon']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">enlace</label>
                            <div class="col-sm-10">
                                <input id="url" type="text" name="url" class="form-control" placeholder="链接"
                                       value="{{$fields['url']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 text-right" >estado</label>
                            <div class="col-sm-10" id="status">
                                Encender:<input type="radio" name="status" class="minimal" value="1" checked>
                                apagar:<input type="radio" name="status" class="minimal" value="0">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Elige rol</label>
                            <div class="col-sm-10">
                                <select id="select2" name="role[]" multiple="multiple" class="form-control"
                                        data-placeholder="Elige rol" style="width: 100%;height: 34px;">
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
