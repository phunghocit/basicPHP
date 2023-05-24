<a href="?lang=en">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/1200px-Flag_of_the_United_Kingdom_%281-2%29.svg.png" width="50" height="30"/>
</a>
<a href="?lang=vi">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Vietnam.svg/1024px-Flag_of_Vietnam.svg.png" width="50" height="30"/>
</a>
<?php
    $string = "";
    match($_COOKIE['lang']){
        'en'=> $string = 'Welcome',
        'vi'=> $string = 'Xin chao',
        default => $string = 'Xin chao'
    };
    echo $string." ".$_SESSION['username'];
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">

<button name="logout">Log out</button>
</form>