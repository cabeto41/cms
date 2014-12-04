<?php

git clone https://carlosquinonez@bitbucket.org/francisco-naranjo/monssa.git

class AuthController extends BaseController {

    public function showLogin(){
        // Verificamos si hay sesión activa
        if (Auth::check())
        {
            // Si tenemos sesión activa mostrará la página de inicio
            return Redirect::route('CPanel.index');
        }
        // Si no hay sesión activa mostramos el formulario
        return View::make('login');
    }

    public function validateLogin()
    {
        // Obtenemos los datos del formulario
        $data = [
            'username' => Input::get('username'),
            'password' => Input::get('password'),
            'active' => 1
        ];

        // Verificamos los datos
        if (Auth::attempt($data, Input::get('remember'))) // Como segundo parámetro pasámos el checkbox para sabes si queremos recordar la contraseña
        {
            // Si nuestros datos son correctos mostramos la página de inicio
            // Variable de sesion
            Session::put('username', $data['username']);
            return Redirect::route('CPanel.index');
            //return Redirect::intended('/');
        }
        // Si los datos no son los correctos volvemos al login y mostramos un error
        return Redirect::back()->with('error_message', 'Invalid data')->withInput();
    }

    public function logOut()
    {
        // Cerramos la sesión
        Auth::logout();
        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
        return Redirect::to('login');
    }

}