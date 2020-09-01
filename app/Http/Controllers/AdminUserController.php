<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminUserCreateRequest;
use App\Http\Requests\AdminUserUpdateRequest;
use App\Model\Role;
use App\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    protected $fields = [
        'name' => '',
        'email' => '',
        'password' => '',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword','');
        $user = User::where('name','like',"{$keyword}%")->with('role')->paginate(config('admin.pageSize'));
        $fields = $this->fields;
        $roles = Role::all();
        return view('user/index',compact('keyword','user','fields','roles'));
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
     * @param AdminUserCreateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdminUserCreateRequest $request)
    {
        $user = new User;
        foreach($request->only(['name','email','password']) as $field=>$value){
            if ($field == 'password') {
                $user->{$field} = bcrypt($value);
            } else {
                $user->{$field} = $value;
            }
        }
        $res = $user->save();
        $user->role()->attach($request->role);
        if($res){
            return back()->with('success','Administrador creado con éxito');
        }else{
            return back()->withErrors(['Error al crear administrador']);
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
    public function update(AdminUserUpdateRequest $request, $id)
    {
        //
        $user = User::find($id);
        foreach($this->fields as $field => $default){
            if(isset($request->{$field})){
                $user->{$field} = $request->{$field};
            }
        }
        $user->save();
        $res = $user->role()->sync($request->role);
        if($res){
            return back()->with('success','Usuario modificado con éxito');
        }else{
            return back()->withErrors(['Información del usuario modificada correctamente ']);
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
        //
        $user = User::find($id);
        $res =  $user->delete();
        if($res){
            $user->role()->detach();
            return back()->with('success','Usuario eliminado correctamente');
        }else{
            return back()->withErrors(['No se pudo eliminar al usuario']);
        }
    }
}
