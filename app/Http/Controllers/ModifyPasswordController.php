<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ModifyPasswordController extends Controller
{
    //

    public function index() {
        $id = Auth::id();
        return view('modifyPassword',['id'=>$id]);
    }

    public function update(Request $request,$id)
    {

        $old_pw = $request->old_pw;
        $new_pw = $request->new_pw;
        $new_pw_again = $request->new_pw_again;

        $user = User::find($id);
        if (!Hash::check($old_pw,$user->password)){
            return back()->withErrors(['Error de contraseña anterior']);
        }

        if ($new_pw != $new_pw_again) {
            return back()->withErrors(['Las dos contraseñas son inconsistentes']);
        }

        $res = User::where('id',$id)->update(['password'=>Hash::make($new_pw)]);
        if($res){
            return back()->with('success','contraseña cambiada correctamente');
        }else{
            return back()->withErrors(['Falló cambio de contraseña']);
        }
    }
}
