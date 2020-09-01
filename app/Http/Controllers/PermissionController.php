<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionCreateRequest;
use App\Http\Requests\PermissionUpdateRequest;
use App\Services\PermissionService;
use Illuminate\Http\Request;
use App\Model\Permission;

class PermissionController extends Controller
{
    protected $service;
    protected $fields = [
        'name' => '',
        'routes' => ''
    ];

    public function __construct(PermissionService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = $this->service->InitRoutes();
        $permission = Permission::all();
        $fields = $this->fields;
        return view('permission/index',compact('permission','fields','routes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionCreateRequest $request)
    {
        //
        $data = $request->input();
        $permission = new Permission();
        foreach($this->fields as $field=>$default){
            if($field == 'routes'){
                $permission->routes = implode(',',$data['routes']);
            }else{
                $permission->{$field} = $data[$field];
            }
        }
        $res = $permission->save();
        if($res){
            return back()->with('success','Permiso agregado con éxito');
        }else{
            return back()->withErrors(['No se pudo agregar permiso']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PermissionUpdateRequest $request, $id)
    {
        $data = $request->input();
        $permission =Permission::find($id);
        foreach($this->fields as $field=>$default){
            if($field == 'routes'){
                $permission->routes = implode(',',$data['routes']);
            }else{
                $permission->{$field} = $data[$field];
            }
        }
        $res = $permission->save();
        if($res){
            return back()->with('success','Permisos modificados con éxito');
        }else{
            return back()->withErrors(['No se pudieron modificar los permisos']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Permission::destroy($id);
        if($res){
            return back()->with('success','Permisos eliminados con éxito');
        }else{
            return back()->withErrors(['No se pudieron eliminar los permisos']);
        }
    }
}
