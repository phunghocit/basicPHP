<h1>note controller</h1>
<?php
    class NoteController extends BaseController{
        public function index(){
            return $this->view('note.list_note');
        }
        public function Create(){
            return $this->view('note/create_note');
        }
    }
?>