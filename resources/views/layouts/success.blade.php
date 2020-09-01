@if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> éxito</h4>
        {{Session::get('success')}}
    </div>
@endif
