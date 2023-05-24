<?php
    //Convetion class - menthod 
    class MyString{
        //static properties
        public static $Pi=3.14;        
        
        //Phương thức tính - static menthod
        public static function callengthString($string){
            return strlen($string);
        }
        // public function callengthString($string){
        //     return strlen($string);
        // }
        public static function getPi(){
            return self::$Pi;
        }
    }
    // $mystring = new MyString;
    // $length= $mystring->callengthString('Phung dai hoc');
    // echo $length
    $length= MyString::callengthString('Phung dai hoc');
    echo $length;
    echo MyString::$Pi;
    echo MyString::getPi();
?>