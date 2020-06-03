<html>
<head>
<title> Вывод значений по годам</title>
<body>
<h1> Вывод значений по годам</h1>
<?php
echo "За 1 год Вы получите:  ";
echo $s=$_POST['summ']*(1+$_POST['procent']/100).'<br>';
echo "За 2 года Вы получите:  ";
echo $ss=$s*(1+$_POST["procent"]/100).'<br>';
echo "За 3 года Вы получите:  ";
echo $sss=$ss*(1+$_POST["procent"]/100).'<br>';
echo "За 4 года Вы получите:  ";
echo $ssss=$sss*(1+$_POST["procent"]/100).'<br>';
echo "За 5 лет Вы получите:  ";
echo $sssss=$ssss*(1+$_POST["procent"]/100).'<br>';
?>

</body>
</head>
</html>   