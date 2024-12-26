<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Controllers\BaseController;

class LoginController extends BaseController{

    protected $userModel;

    public function __construct(){
        $this->userModel = new UserModel();
    }

    public function index(){
        return view('loginPage');
    }

    public function register(){
        return view('registerPage');
    }

    public function forgetPassword(){
        return view('forgetPassword');
    }

    public function validateUser(){
        $json = $this->request->getJSON();

        $email = $json->email;
        $password = $json->password;

        $result = $this->userModel->validateUser($email);
        if($result){
            if($result['password'] == $password){
                return $this->response->setJSON([
                    'status' => true,
                    'message' => 'Login Success'
                ]);
            }
            else{
                return $this->response->setJSON([
                    'status' => false,
                    'message' => 'Invalid Password'
                ]);
            }
        }
        else{
            return $this->response->setJSON([
                'status' => false,
                'message' => 'Invalid Email'
            ]);
        }

        // var_dump($email,$password);
        // die();
    }

    public function dashboard(){
        return view("dashboard");
    }
}
