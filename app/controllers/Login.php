<?php   
namespace app\controllers;

class Login {
    public function index(){
        return [
            'view' => 'login.php',
            'title' => 'Login',
            'data' => ['title' => 'Login']
        ];
    }

    public function store()
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS); 

        if (empty($email) || empty($password)) {
            return setErrorMessageAndRedirect('message','Usuário ou senha inválidos','/login');
        }

        $user = findBy('users', 'email', $email);

        if (!$user) {
            return setErrorMessageAndRedirect('message','Usuário ou senha inválidos','/login');
        }

        if (!password_verify($password, $user->password)) {
            return setErrorMessageAndRedirect('message','Usuário ou senha inválidos','/login');
        }

        $_SESSION[LOGGED] = $user;

        return redirect('/');
    }

    public function destroy(){
        unset($_SESSION[LOGGED]);
        return redirect('/');
    }

}