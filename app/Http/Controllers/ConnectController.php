<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\User;


class ConnectController extends Controller
{
    public function login()
    {
        return view('connect.login');
    }
    public function register()
    {
        return view('connect.register');
    }

    public function userRegister(Request $request)
    {
        $rules = [
            'name' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            // esta regla nos permite consultar si existe este correo en la base de datos
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            //con el llamado same evaluamos si los dos campos son iguales
            'repeat-password' => 'required|min:8|same:password'
        ];
        $messages = [
            'name.required' => 'Su nombre es requerido.',
            'lastname.required' => 'Su apellido es requerido.',
            'phone.required' => 'Su numero de celular es necesario',
            'email.required' => 'Su correo electrónico es requerido.',
            'email.required' => 'El formato de su correo electrónico es invalido.',
            'email.unique' => 'existe un usuario registrado con este correo electronico.',
            'password.required' => 'Por favor escriba una contraseña.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'repeat-password.required' => 'Es necesario confirmar la contraseña',
            'repeat-password.min' => 'La confirmación de la contraseña debe tener al menos 8 caracteres.',
            'repeat-password.same' => 'Las contraseñas no coinciden'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert', 'danger');
        } else {
            $user = new User;
            //la variable e($request) lo que hace es solo dejar que se ingresen valor de texto y no htmls y archivos malignos
            $user->name = e($request->input('name'));
            $user->lastname = e($request->input('lastname'));
            $user->phone = e($request->input('phone'));
            $user->email = e($request->input('email'));
            //la variable Hash::make lo que hace es encriptar la contraseña.
            $user->password = Hash::make($request->input('password'));
            if ($user->save()) {
                return redirect('/login')->with('message', 'Su usuario se creo con exito,
                ahora puede inciar sesión.')->with('typealert', 'success');
            }
        }
    }

    public function userLogin(Request $request)
    {

        $rules = [
            'email'        => 'required|email',
            'password'     => 'required'
        ];

        $messages = [
            'email.required' => 'Su correo electrónico es requerido.',
            'email.email' => 'El formato de su correo electrónico es invalido.',
            'password.required' => 'Por favor escriba una contraseña.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert', 'danger');
        } else {
            return redirect('/');
        }
    }
}
