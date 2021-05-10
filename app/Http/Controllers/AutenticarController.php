<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegistroRequest;
use App\Http\Requests\AccesoController;
use Illuminate\Validation\ValidationException;


class AutenticarController extends Controller
{
   public function registro(RegistroRequest $request)
   {
        $user= new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();

        return response()->json([
            'res'=>true,
            'msg'=>'Usuario registrado correctamente'
        ],200);
   }

   public function acceso(AccesoController $request)
   {
    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'msg' => ['Las credenciales son incorrecta!.'],
        ]);
    }

    $token=$user->createToken($request->email)->plainTextToken;
    return response()->json([
        'res'=>true,
        'token'=>$token
    ]);
   }

   public function CerrarSesion(Request $request)
   {
     $request->user()->currentAccessToken()->delete();
     return response()->json([
        'res'=>true,
        'msg'=>'Token eliminado correctamente'
    ]);
   }
}
