<?php

namespace Controllers;

use Sj\Controller;

Class Main extends Controller {

    public function index() {

        $this->render("test", array("title" => $this->data->message, "name" => "Home"));
    }

    public function test($title) {

        $this->render("test", array("title" => $title, "name" => "Test"));
    }

    public function notFound() {

        $this->render('error', array(), 404);
    }
}