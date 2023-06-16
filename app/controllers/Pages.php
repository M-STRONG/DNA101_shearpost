<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('posts');
      }

      $data = [
        'title' => 'DNA101',
        'description' => 'website for Bioinformatcs'
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'App to share information bioinformatcs with other users'
      ];

      $this->view('pages/about', $data);
    }
  }