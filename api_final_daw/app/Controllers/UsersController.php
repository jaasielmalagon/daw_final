<?php

namespace App\Controllers;

class UsersController extends Controller {

    function insertContact($request, $response) {        
        $contact = $request->getParsedBody(); 
//        var_dump($contact);
//        die();
        $message = $this->users->insertContact($contact);
        return json_encode($message);
    }

    function selectUser($request, $response) {
        $username = $request->getAttribute('username');
        $password = $request->getAttribute('password');
        return "<h1>Hola $username</h1>";
    }

    function selectEmployees($request, $response) {
        //var_dump('Funcona hasta el controller'); die();
        $message = $this->employees->selectEmployees();
        return json_encode($message);
    }

    function selectEmployeesById($request, $response) {
        $id = $request->getAttribute('id');
//        var_dump($id);//die();
        $message = $this->employees->selectEmployeesById($id);
        return json_encode($message);
    }

}
