<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="color:red;width: 100%;text-align:right">
        <?php
        //variables
        $name = "Nguyen Van A";
        $age = 30;
        $center = 'Green';
        $adress = "HCM";
        $point = 8;

        //Noi chuoi
        //Cach 1
        echo 'hello ' . $name;
        echo "<br>";

        //Cach 2
        echo "Tuoi: $age";

        //Cach 3
        echo '<br>';
        echo sprintf('Study : %s, Location : %s', $center, $adress);
        echo '<br>';
        echo "Point: $point";
        echo '<br>';
        //IF-ELSE
        if ($age > 30) {
            echo "men";
        } else {
            echo "boy";
        }
        echo '<br>';

        $color = "green";
        $type = "gioi";
        if ($point < 6.5) {
            $type = "trung binh";
            $color = "red";
        } else if ($point < 8.0) {
            $type = "kha";
            $color = "yellow";
        }
        echo sprintf('<p style="color: %s">%s</p>', $color, $type);
        echo "<p style='color: $color'>$type</p>";
            ?>
        <p style="color: <?php echo $color ?>"><?= $type ?></p>


        <?php if ($age > 30) { ?>
            <p>men</p>
        <?php } else { ?>
            <p>boy</p>
        <?php }
        ?>

        <?php 
            //Cach 1
            $arrayPoint = [7,8,9];

            //Cach 2
            $arrayPoint2 = array(1,2,3);

            print_r($arrayPoint);

            echo '<br>'.$arrayPoint[1];

            $arrayNamePoint = ['test' => 8, 'nguyenthib' => 9, 'nguyenvand' => 10];

            print_r($arrayNamePoint);
            echo '<br>'.$arrayNamePoint['test'];
        ?>
    </h1>


</body>

</html>