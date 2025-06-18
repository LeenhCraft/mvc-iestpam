<?php

class LoginController extends Controller
{
    public function index()
    {
        $modelo = $this->model("Login");
        $data = $modelo->keyla();
        //vista
        $this->view("login", ["walter" => $data]);
    }
}
