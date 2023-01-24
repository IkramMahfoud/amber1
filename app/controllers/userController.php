<?php

class userController extends Controller
{
    public $userModel;
    
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }
    
    public function login()
    {
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $_POST= filter_input_array(INPUT_POST);

            // creation array's data:
            $data=
            [
                'email'    => $_POST['Email'],
                'password' => $_POST['Password']
            ];

            $user = $this->userModel->login($data['email']);
            if($user){
                if($user->pass === $data['password'])
                {
                    // Set The sessions
                    $_SESSION['user_id'] = $user->id;
                    $_SESSION['user_email'] = $user->email;

                    // Go to home:
                    header('location:'.URLROOT.'home');
                }
                
                }
                    // Return login:
                    $this->view('login',[]);
        }else
        {
            $this->view('login',[]);
        }
    }




    public function logout()
    {
        
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        session_destroy();
        $this->view('homepage');

    }

    // public function confirmLogout()
    // {
    //     $this->view('logout');
    // }
    
}
