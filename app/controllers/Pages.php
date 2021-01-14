<?php


class Pages extends Controller
{

    /**
     * Pages constructor.
     */
    public function __construct()
    {
        echo 'Pages class is loaded<br>';
    }

    public function index() {
        echo 'index method is loaded<br>';
        $this->view('index');
    }

    public function about() {
        echo 'about method is loaded<br>';
        $this->view('about');
    }
}