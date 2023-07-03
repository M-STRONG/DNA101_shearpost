<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('posts');
      }
    
      $data = [
        
       
      ];
    
      $this->view('pages/home', $data);
    }
    

    public function about(){
      $data = [
       
      ];

      $this->view('pages/about', $data);
    }
    public function home(){
      $data = [
        
      ];

      $this->view('pages/home', $data);
    }
    public function posts(){
      $data = [
        
      ];

      $this->view('shear/posts', $data);
  }
 
  }