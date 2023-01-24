<?php

class Home extends Controller
{
    public $userModel;
    public $galleryModel;
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->galleryModel = $this->model('Gallery');
    }
    public function index()
    {
        $this->view('homepage');
    }
    public function gallery()
    {
        $this->view('gallery');
    }
    public function dashboard()
    {
        $galleryarray = $this->galleryModel->getAll();

        // creation array's items data:
        $data=
        [
            'galleryrow'    => $galleryarray
        ];
        $this->view('dashboard',$data);
    }
    public function additem()
    {
        $this->view('additem');
    }

    public function edititem()
    {
        $this->view('edititem');
    }
}