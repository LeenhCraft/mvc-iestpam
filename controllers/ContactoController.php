<?php

class ContactoController extends Controller
{

    public function index()
    {
        // cargar le modelo
        $modelo = $this->model("Contacto");

        //usar el modelo
        $mensaje = $modelo->mensaje();


        // mostrar la vista
        $this->view("Contacto", ["mensaje" => $mensaje]);
    }
}
