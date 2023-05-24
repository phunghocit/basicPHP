<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trang chủ</h1>
<?php
        require'./Helpers/helper.php';
        require'./Controllers/BaseController.php';
        $controller = $_GET['controller']??'user'; //lấy thông tin từ thanh param và để giá trị mặc định nếu không có giá trị 
        $action = $_GET['action']??'index';
        // var_dump($controller);
        if (str_contains($controller,'_')) {//nếu trong biến controller chứa _  thì biến đổi string thành các mảng phân chia bằng đấu _
            $valueList = array_map(function($v){// dùng array_map để duyệt từng phần tử từ mảng lấy ra đc và in  hoa chữ cái đầu tiên 
                return ucfirst($v);

            },explode('_',$controller));
            $controller=implode('',$valueList);
        }else{
            $controller= ucfirst($controller);
        }
        $url='./Controllers/'.ucfirst($controller).'Controller.php';
        require $url;
        //Lấy ra tên của controller và khởi tạo. Lấy action thì trên param để thực hiện
        $controllerName =$controller.'Controller';
        $controllerObj = new $controllerName;
        $controllerObj->$action();
        // $userController = new UserController;
        // $userController->index();
        // $userController->Create();
        // dd( $controllerObj);
 ?>
     <!-- <a href="index.php?controller=user&action=index">List User</a><br>
    <a href="index.php?controller=user&action=create">Create User</a><br>
    <a href="index.php?controller=product_category&action=index">List Product Category</a><br>
    <a href="index.php?controller=product_category&action=create">Create Product Category</a><br> -->
    <a href="index.php?url=user/index">List User</a><br>
    <a href="index.php?url=user/create">Create User</a><br>
    <a href="index.php?url=product_category/index">List Product Category</a><br>
    <a href="index.php?url=product_category/create">Create Product Category</a><br>
    <a href="index.php?url=product/index">List Product</a><br>
    <a href="index.php?url=product/create">Create Product</a><br>
    <a href="index.php?url=note/index">List Note</a><br>
    <a href="index.php?url=note/create">Create Note</a><br>
</body>
</html>