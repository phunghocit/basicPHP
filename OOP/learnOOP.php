<?php 

    Class Cat{
        //Attributes
        public $name;
        public $color;
        public $foot;
        //Phương thức khởi tạo Construct
        // public function __construct($name){
        //     $this->name =$name;
        //     echo "Khoi tao <br> ".$name;
        // }

        //menthod
        public function eat(){
            echo "<br>Con mèo đang ăn thịt chó";
        }
        public function run(){
            echo "<br>Con mèo đang đuổi con chó";
            
        }
        //Setter
        public function setName($name){
            $this->name=$name;
        }
        //Getter
        public function getName(){
            return $this->name;
        }
        public function setColor($color){
            $this->color= $color;
        }
        public function getColor(){
            return $this->color;
        }
        public function setFoot($foot){
            $this->foot= $foot;

        }
        public function getFoot(){
            return $this->foot;
            
        }
        //
        public function _destruct(){
            echo "Khoi tao <br>";
        }
    }
    Class Person{
        private $name;
        private $age;
        private $gender;
        public function setName($name){
            $this->name=$name;
        }
        public function getName(){
            return $this->name;
        }
        public function setAge($age){
            if ($age >=0) {
                $this->age=$age;
            }else{
                throw new \Exception('Tuổi phải lớn hơn 0');
            }
        }
        public function getAge(){
            return $this->age;
        }public function setGender($gender){
            $this->gender=$gender;
        }
        public function getGender(){
            return $this->gender;
        }
        public function __construct($name,$age,$gender){
            $this->name=$name;
            $this->age=$age;
            $this->gender=$gender;
        }
    }
    //cat instance of class Cat
    // $cat = new Cat;
    // $cat->name='Cho';
    // $cat->color="red";
    // $cat->foot=3;

    // echo "Cat name: $cat->name 0<br>Color: $cat->color <br>Foot: $cat->foot";
    // $cat->run();
    // $cat->eat();
    // $cat->setName("Meo");
    // $cat ->setColor("blue");
    // $cat->setFoot(4);
    // echo "<br>Name: ".$cat->getName()."<br>Color: ".$cat->getColor()."<br>Foot:".$cat->getFoot();

//bài 1
    // $cat = new Cat("MEO NGU");
    // // $cat->name='Cho';
    // // $cat->color="red";
    // // $cat->foot=3;
    // $person =new Person('Phùng Học',23,'Nam');
    // // $person->setName('Phùng Học');
    // // $person->setAge(23);
    // // $person->setGender('Nam');
    // echo "<br>Name:".$person->getName()."<br>Age:".$person->getAge()."<br>Gender:".$person->getGender();

    class Rectangle{
        private $width;
        private $height;
        public function __construct($width,$height)
        {
            $this->width=$width;
            $this->height=$height;
        }
        public function getArea(){
            return $this->width*$this->height;
        }
        
        public function getCircumference(){
            return ($this->width+$this->height)*2;
        }
    }
    // $rectangle =new Rectangle(4,6);
    // echo "Diện tích hình chữ nhật:".$rectangle->getArea()."<br>";
    // echo "Chu vi hình chữ nhật:".$rectangle->getCircumference()."<br>";

    class Circle{
        const PI=3.14;
        private $radius;

        public function __construct($radius)
        {
            $this->radius=$radius;
        }
        public function getArea(){
            // return pi()*pow($this->radius,2) ;
            return self::PI*pow($this->radius,2) ;
        }
    
    }
    // $circle =new Circle(8);
    // echo "Diện tích hình tròn:".$circle->getArea()."<br>";



    Class Student{
        private $id;
        private $name;
        private $age;
        private $gender;
        public function setId($id){
            $this->id=$id;
        }
        public function getId(){
            return $this->id;
        }
        public function setName($name){
            $this->name=$name;
        }
        public function getName(){
            return $this->name;
        }
        public function setAge($age){
            if ($age >=0) {
                $this->age=$age;
            }else{
                throw new \Exception('Tuổi phải lớn hơn 0');
            }
        }
        public function getAge(){
            return $this->age;
        }public function setGender($gender){
            $this->gender=$gender;
        }
        public function getGender(){
            return $this->gender;
        }
        public function __construct($id,$name,$age,$gender){
            $this->id=$id;
            $this->name=$name;
            $this->age=$age;
            $this->gender=$gender;
        }
    }
    class Teacher extends student{
        //Override
        //muôn chống override dùng: parent::makeSound(); 
        //xong muốn thêm sau đó thêm j thì thêm
        //Thằng cho dùng hàng  abstract public function  ... thì bắt buộc hàm còn phải định nghĩa lại cái function đó
    }
    class Course{
        private string $name;
        private Teacher $teacher;
        private array $students;
        
        public function __construct($name,$teacher,$students){
            $this->name=$name;
            $this->teacher=$teacher;
            $this->students=$students;
        }
        public function setName($name){
            $this->name=$name;
        }
        public function getName(){
            return $this->name;
        }
        public function getTeacher(){
            return $this->teacher;
        }
        public function getStudents(){
            return $this->students;
        }
    }

    // $teacher =new Teacher(12,'Phùng Học',23,'Nam');
    // $student1 =new Student(1,'Nguyen A',12,'Nam');
    // $student2 =new Student(2,'Nguyen B',14,'Nu');
    // $student3 =new Student(2,'Nguyen C',14,'Nam');
    // $course = new Course('Fullstack',$teacher,[$student1,$student2,$student3]);
    // echo "Tên khoá học: ".$course->getName()."Giáo viên chủ nhiệm: ".$course->getTeacher()->getName()."<br>";
    // echo "Học sinh gồm:<br>";
    // for ($i=0; $i < count($course->getStudents()); $i++) { 
    //     echo $course->getStudents()[$i]->getName()."<br>";
    // }
    // foreach ($course->getStudents() as $student) {
    //     echo $student->getName()."<br>";

    // }
    // final class Mouse extends Cat{
    //     // final là hàm cuối cùng và không thể extends hay bị ghi đè (override)
    // }
    // class WhiteMouse extends Mouse{} //Báo lỗi do không thể extends hay ghi đè

    interface canSwim{
        public function canSwin();
    }
    interface canRun{
        public function canRun();
    }
    interface canFly{
        public function canFly();
    }
    class whiteCat extends Cat implements canSwim,canRun{ // phải khải báo 2 attributes canSwim va canRun
        public function canSwin(){

        }
        public function canRun(){

        }


    }

    /////////////////////

    $catA = new Cat;
    $catA->setName('MeoA');
    echo $catA->getName(); //MeoA

    $catB = clone $catA; //dùng clone để catB không override lại vùng nhớ của catA
    $catB->setName('MeoB');
    echo $catB->getName();//MeoB
    echo $catA->getName();//MeoA
?>