<?php

class NosotrosController extends Controller
{

    public function index()
    {
        // cargar le modelo
        $modelo = $this->model("Nosotros");

        //usar el modelo
        $mensaje = $modelo->mensaje();


        // mostrar la vista
        $this->view("Nosotros", ["mensaje" => $mensaje]);
    }
}
