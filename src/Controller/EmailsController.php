<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Mailer\Email;

class EmailsController extends AppController{
    public function index(){
        $email = new Email('default');
        $email->to('pascalraymd@gmail.com')->subject('Vérification')->send($confirmation_link = "http://" . $_SERVER['HTTP_HOST'] . $this->request->webroot . "users/confirm/");
        $this->Flash->success(__('Email envoyé'));
    }


}
?>
