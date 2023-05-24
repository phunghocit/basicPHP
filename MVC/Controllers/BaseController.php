<?php 
//Ham require cho các file
    class BaseController{
        const VIEW_FOLDER = 'Views';
        const VIEW_MODEL = 'Models';
        public function view($path,$datas= []){
            $path = str_replace('.','/',$path);
            $path .='.php'; // nối thêm đuôi php 
            $path ='./'.self::VIEW_FOLDER.'/'.$path; 

            foreach ($datas as $key => $data) {  
                $$key = $data;  //$key đang là string lên $$key sẽ bằng $string
            }
            return require $path;
        }
        protected function loadModel($path){
            return require './'.self::VIEW_MODEL.'/'.$path;
        }
    }
?>