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
    echo "<br>1. In 1 den 10<br>";
    for($i = 1; $i<=10;$i++){
        echo $i." ";
    }

    echo "<br><br>2. Tinh tong tu 1 den 100<br>";
    $sum = 0;
    $count = 1;
    for($count;$count <= 100; $count++){
        $sum+=$count;
    }
    echo "Tong la: ".$sum;

    echo "<br><br>3. In bang cuu chuong<br>";
    // $bang_cuu_chuong = 1;
    // $thua_so = 1;
    echo "<table style='border: 1px solid;'>";
    for($bang_cuu_chuong = 0; $bang_cuu_chuong<=10;$bang_cuu_chuong++){
        echo "<tr>";
        for($thua_so =1; $thua_so<=10;$thua_so++){
            $result = $bang_cuu_chuong*$thua_so;
            if($bang_cuu_chuong === 0){
                echo "<td style='border: 1px solid;'>Bang cuu chuong $thua_so</td>";
            }else{
                echo "<td style='border: 1px solid;'>$thua_so x $bang_cuu_chuong = $result</td>"; 
            } 
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<br><br>4. Tim so chan tu 1 den 20<br>";
    for($i = 0; $i<=20; $i+=2){
        echo $i." ";
    }

    echo "<br><br>5. Tim so nguyen to<br>";
    
    for($i = 2; $i<=100; $i++){
        $check = true;
        for($j = 2; $j < $i;$j++){
            if($i % $j === 0){
                $check = false;
                break;
            }
        }
        // echo $count." ";
        if($check === true){
            echo $i." ";
        }
    }
?>

<table>
    <?php
        $column_array = ["a","b","c","e","f","g","h","j"];
        for($i = 0; $i<=9;$i++){
            echo "<tr>";
            for($j = 0; $j<=9;$j++){
                if($i === 0){
                    echo '<td style="background: white; width:100px;height: 100px;text-align: center">'.$column_array[$j-1].'</td>';
                }
                else if($i === 9){
                    echo '<td style="background: white; width:100px;height: 100px;text-align: center">'.$column_array[8 - ($j)].'</td>';
                }
                else if($j === 0){
                    echo '<td style="background: white; width:100px;height: 100px;text-align: center">'.$i.'</td>';
                }
                else if($j === 9){
                    echo '<td style="background: white; width:100px;height: 100px;text-align: center">'.(8 - ($i-1)).'</td>';
                }
                else if($i % 2 != 0){
                    if($j % 2 != 0){
                        echo "<td style='background: white; width:100px;height: 100px'></td>";
                    }
                    else{
                        echo "<td style='background: black; width:100px;height: 100px'></td>";
                    }
                }
                else{
                    if($j % 2 != 0){
                        echo "<td style='background: black; width:100px;height: 100px'></td>";
                    }
                    else{
                        echo "<td style='background: white; width:100px;height: 100px'></td>";
                    }
                }
            }
            echo "</tr>";
        }
    ?>
</table>

<?php 
    $strArr = ["asd","asdasdad","chuoi nay dai nhat adsasdasdasd","a","asd","dsgafbf"];
    $strMax = 0;
    $result = "";
    for($i = 0; $i< count($strArr);$i++){
        if(strlen($strArr[$i]) > $strMax){
            $strMax = strlen($strArr[$i]);
            $result = $strArr[$i];
        }
    }
    echo "Chuoi dai nhat: ".$result;
?>

<?php 
    $numArr = [1,3,4,6,2,7];
    echo "<br>So lon nhat: ".max($numArr);
    $numMax = 0;
    for($i = 0; $i< count($numArr);$i++){
        if($numArr[$i] > $numMax){
            $numMax = $numArr[$i];
        }
    }
    echo "<br>So lon nhat: ".$numMax;
?>

<?php 
    $numArr2 = [5,7,4,6,2,7,123,345,56,878,878,9];
    $new_array = array_unique($numArr2);
    rsort($new_array);
    echo '<br>Phan tu lon thu 2 trong mang: '.$new_array[1];
    echo '<br>Phan tu LON NHAT trong mang: '.$new_array[0];
    echo '<br>Phan tu NHO NHAT trong mang: '.$new_array[count($new_array)-1];
?>

<?php 
    $min = min($numArr2);
    $max = max($numArr2);
    $minIndex = array_search($min, $numArr2);
    $maxIndex = array_search($max, $numArr2);
    echo '<br>Phan tu LON NHAT trong mang: '.$max.' tai vi tri '.$maxIndex;
    echo '<br>Phan tu NHO NHAT trong mang: '.$min.' tai vi tri '.$minIndex;
?>

<?php 
    echo "<pre>";
    print_r($numArr2);
    echo "</pre>";
    foreach ($numArr2 as $item) {
        $item += 5;
    }
    for($i = 0; $i< count($numArr2);$i++){
        $numArr2[$i] += 5;
    }
    $array = array_map(function ($item){
        return $item + 5;
    },$numArr2);
    
    echo "<pre>";
    print_r($numArr2);
    echo "</pre>";

    echo "<pre>";
    print_r($array);
    echo "</pre>";
?>

<?php 
    echo "<br><br>Tra ve mang so chan";
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    
    $arrayEven = array_filter($numArr2,function ($item){
        return $item % 2 == 0;
    });
    
    echo "<pre>";
    print_r($arrayEven);
    echo "</pre>";
?>

<?php 
    $nameStr = " Quan ao tre em ";
    $nameArr = implode("-",explode(" ",trim($nameStr," "))) ;

    var_dump($nameArr);
?>

</body>
</html>
