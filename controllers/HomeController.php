<?php

class HomeController extends Controller
{
    public function index()
    {
        $messageModel = $this->model('Message');
        $data = $messageModel->getMessage();
        dep($data, 1);
        $this->view('home', ['message' => $data]);
    }
}
