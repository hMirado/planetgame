<?php


class User extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array(
            'User_model' => 'user',
        ));
    }

    public function register()
    {
        if (!empty($_POST)) {
            $data = array(
                "lname"=> $_POST['fname'],
                "fname"=> $_POST['lname'],
                "email"=> $_POST['email'],
                "phone"=> $_POST['phone'],
                "password"=> md5($_POST['password']),
                "address"=> $_POST['adress'],
                "city"=> $_POST['city'],
                "country"=> $_POST['country'],
                "zip"=> $_POST['zip']
            );
            $create = $this->user->register($data);

            if ($create) {
                $data = array(
                    'lname'=>$_POST['fname'],
                    'fname'=>$_POST['lname'],
                    'email'=>$_POST['email'],
                    'phone'=>$_POST['phone'],
                    'address'=>$_POST['password'],
                    'city'=>$_POST['adress'],
                    "country"=> $_POST['country'],
                    "zip"=> $_POST['zip'],
                    'logged'=>true
                );
                $this->session->set_userdata($data);
            }
            echo json_encode($create);
        }
        exit();
    }

    public function login()
    {
        if (!empty($_POST)) {
            $emailPhone = $_POST['lemailphone'];
            $password = $_POST['lpassword'];

            $customer = $this->user->checkUser($emailPhone);

            if (!is_object($customer)) {
                $message = "Email ou N° tel. incorrecte";
                echo json_encode(array('status'=> false, 'msg' => $message));
                return;
            }

            if (md5($password) === $customer->password) {
                $data = array(
                    'lname'=>$customer->lname,
                    'fname'=>$customer->fname,
                    'email'=>$customer->email,
                    'phone'=>$customer->phone,
                    'address'=>$customer->address,
                    'city'=>$customer->city,
                    'country'=>$customer->country,
                    'logged'=>true
                );
                $this->session->set_userdata($data);
                $message = "Bienvenu $customer->fname";
                echo json_encode(array('status'=> true, 'msg' => $message));
            } else {
                $message = "Mots de passe incorrect";
                echo json_encode(array('status'=> false, 'msg' => $message));
            }
        }
        exit();
    }

    public function logOut()
    {
        $this->session->sess_destroy();
        redirect('');
    }
}