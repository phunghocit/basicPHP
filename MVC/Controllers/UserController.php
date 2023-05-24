<h1>User controller</h1>
<?php
    
    class UserController extends BaseController{
        public function index(){
            return $this->view('user.list_user');
        }
        public function Create(){
            return $this->view('user.create_user');
        }
    }
?>