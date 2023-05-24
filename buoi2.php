<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $number1 = 10;
        $number2 = '10';

        // if($number1 == $number2){
        //     echo '2 so bang nhau';
        // }else{
        //     echo '2 so khong bang nhau';
        // }

        if($number1 === $number2){
            echo '2 so bang nhau va CUNG kieu du lieu';
        }else{
            echo '2 so bang nhau va KHACH kieu du lieu';
        }
        echo "<br>";
        echo $number1 + $number2;
        echo "<br>";
        $number3 = 5;
        if($number3 % 2 ===0){
            echo "so chan";
        }
        else{
            echo "so le";
        }
        echo "<br>";
        $number4 = 2**3;
        echo $number4;

        echo "<br>";
        $number5 = 99;
        $number5 = $number5 +1;
        $number5 +=1;
        $number5++;

        echo '<br>'.$number5;
        ++$number5;
        echo '<br>'.$number5;

        echo "<br>";
        $number6 = 99;
        echo ++$number6;

        echo "<br>";
        $number7 = 99;
        echo $number7++;
        echo "<br>";
        echo $number7;

        $string1 = '<br>Ho ten: ';
        $string1 .= 'Nguyen van A';
        echo $string1;

        echo "<br>";
        $nguyenvana = NULL;
        echo $nguyenvana ?? 'default';//if $nguyenvana is defined => $nguyenvana value/ $nguyenvana is defined => 'default'

        $employees = array(
            array("name" => "John", "age" => 25, "position" => "Manager"),
            array("name" => "Mary", "age" => 28, "position" => "Developer"),
            array("name" => "David", "age" => 32, "position" => "Designer"),
        );

        echo '<pre>';
        print_r($employees);
        echo '</pre>';

        echo $employees[0]["name"];
        echo "<br>";
        echo $employees[1]["position"];


        $arrayNumber = [32,27,12,49,48];
        
        $totalItem = count($arrayNumber);
        echo "<br>";
        echo $totalItem;

        sort($arrayNumber);
        echo '<pre>';
        print_r($arrayNumber);
        echo '</pre>';

        rsort($arrayNumber);
        echo '<pre>';
        print_r($arrayNumber);
        echo '</pre>';

        array_push($arrayNumber,1); //Them cuoi mang
        $arrayNumber[] = 1; //them cuoi mang
        echo '<pre>';
        print_r($arrayNumber);
        echo '</pre>';

        array_unshift($arrayNumber,2); //Them dau mang
        echo '<pre>';
        print_r($arrayNumber);
        echo '</pre>';

        $lastItem = array_pop($arrayNumber); //Xoa phan tu cuoi cua mang
        echo 'last item: '.$lastItem;
        echo '<pre>';
        print_r($arrayNumber);
        echo '</pre>';

        $firstItem = array_shift($arrayNumber); //Xoa phan tu dau mang
        echo 'first item: '.$firstItem;
        echo '<pre>';
        print_r($arrayNumber);
        echo '</pre>';

        // unset($arrayNumber[2]); //Xoa phan tu o vi tri 3
        // unset($arrayNumber); //Xoa ca mang
        echo '<pre>';
        print_r($arrayNumber);
        echo '</pre>';

        $fruits1 = ["apple", "banana", "orange"];
        $fruits2 = ["grape", "pineapple", "watemelon"];
        $all_fruits = array_merge($fruits1,$fruits2);
        echo '<pre>';
        print_r($all_fruits);
        echo '</pre>';

        $arrayNumber = [32,27,12,49,48];

        $sum = 0;
        for($i = 0; $i < count($arrayNumber); $i++){
            echo $arrayNumber[$i].'<br>';
            $sum += $arrayNumber[$i];
        }
        echo 'sum: '.$sum."<br>";

        $sum2 = 0;
        for($i = 0; $i < count($arrayNumber); $i++){
            if($i % 2 == 0){
                echo $arrayNumber[$i].'<br>';
                $sum2 += $arrayNumber[$i];
            }
        }
        echo 'sum: '.$sum2."<br>";

        $firstOdd = 'khong co so le';
        for($i = 0; $i < count($arrayNumber); $i++){
            if($arrayNumber[$i] % 2 != 0){
                $firstOdd = $arrayNumber[$i];
                break;
            }
        }
        echo 'so le dau tien: '.$firstOdd."<br>";


        $sumEven = 0;
        foreach($arrayNumber as $key => $value){
            if($key % 2 === 0){
                $sumEven += $value;
            }
        }
        echo "Tong index chan: ".$sumEven;

        $arrayKeys = array_keys($arrayNumber);
        $arrayValues = array_values($arrayNumber);
    ?>
</body>
</html>