<?php

class ServiciosController extends Controller
{

    public function index()
    {
        // cargar le modelo
        $modelo = $this->model("Servicios");

        //usar el modelo
        $mensaje = $modelo->mensaje();


        // mostrar la vista
        $this->view("Servicios", ["mensaje" => $mensaje]);
    }
}
