<?php
require_once __DIR__ . '/../core/Model.php';

class Message extends Model
{
    public function getMessage()
    {
        $respuesta = $this->db->prepare("SELECT * FROM empresas");
        $respuesta->execute();
        $datos = $respuesta->fetchAll(PDO::FETCH_ASSOC);
        return $datos;
    }
}
