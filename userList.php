<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .table-custom {
            width: 70%;
            margin: 0 auto;
        }

        table td img {
            width: 5rem;
            height: 5rem;
        }
    </style>
</head>
<body>
<?php
    define("URL","http://localhost/basicPHP/");
    require('database.php');
    if(isset($_GET['action']) && $_GET['action'] === "UserDelete" && isset($_GET['id'])){
        $sqlSelect = "SELECT image_url FROM user WHERE id=".$_GET['id'];
        $resultSelect = $conn->query($sqlSelect);
        $row = mysqli_fetch_assoc($resultSelect);
        $imageUrl = $row['image_url'];
        
        $sqlDelete = "DELETE FROM user where id =".$_GET['id'];
        $resultDelete = $conn->query($sqlDelete);
    
        if($resultDelete){  
            unlink('uploads/'.$imageUrl);
            echo 'Delete thanh cong';
        }
        else{
            echo 'Delete that bai';
        }
    }
?>

<table class="table table-striped table-hover table-dark table-custom">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Image</th>
                <th scope="col">Create At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $getUsers = "select * from user";
            $getNewest10Users = "select * from user order by create_at DESC limit 10";
            $usersList = $conn->query($getNewest10Users);

            if (mysqli_num_rows($usersList) > 0){
                while ($row = mysqli_fetch_assoc($usersList)) {
                    
                    echo "<tr>";
                    echo "<th scope='row'>".$row['id']."</th>";
                    echo "<td>".$row['username']."</td>";
                    echo "<td>".$row['password']."</td>";
                    echo "<td><img src='uploads/".$row['image_url']."'/></td>";
                    echo "<td>".gmdate($row['create_at'])."</td>";?>
                    <td>
                        <a href="?action=UserDelete&id=<?= $row['id'];?>">Delete</a>
                        <a href="<?=URL?>detail.php?action=UserDetail&id=<?= $row['id'];?>">Detail</a>
                    </td>
                    <?php echo "</tr>";
                }
            }else{
                echo "No result";
            }
            mysqli_data_seek($usersList,0);
            ?>
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>





