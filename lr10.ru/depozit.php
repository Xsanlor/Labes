<html>
<body>
<?php

//Обработка формы
//1. Проверяем, есть ли переменная summ
if (isset($_POST['summ']))
{
 //Выполняем проверку полей на заполнение
 if ($_POST['summ'] == ""){
 echo "! Введите сумму";
 exit();
 }
 elseif ($_POST['period'] == ""){
 echo "! Укажите период";
 exit();
 }
 elseif ($_POST['replenishment'] == ""){
 echo "! Укажите условия";
 exit();
 }
 elseif ($_POST['withdrawal'] == ""){
 echo "! Укажите условия";
 exit();
 }
//2. Записываем значения переменных из формы 
$summ = $_POST['summ'];
$period = $_POST['period'];
//3. Указываем базовую процентную ставку по вкладу (4.5%)
$percent = 4.5;
//4. Увеличиваем базовый процент, если не будет пополнения счета и частичного снятия средств (проверка radiobutton)
if ($_POST['replenishment'] == "no"){$percent += 0.4;}
if ($_POST['withdrawal'] == "no"){$percent += 1.2;}

echo '<br><b>Доход:</b>';
//5. Высчитаваем процент по вкладу в месяц
$month_percent = $percent / 12;
//6. Запускаем цикл по количеству месяцев
for ($i=1; $i<$period+1; $i++){
 //на каждом шаге цикла выводим месячный доход
 $month_summ = ($summ/100)*$month_percent;
 echo '<br>'.$i."-й месяц, доход: ";
 echo round($month_summ, 2);
 //прибавляем месячный доход к общей сумме
 $summ= $summ + $month_summ;
 echo ". Остаток на счете: ";
 echo round($summ, 2);
 }
//7. Выводим итоговый результат
$result = round($summ, 2);
echo '<br><b>Результат:</b>';
echo '<br>'."Годовая процентная ставка: "."$percent"."%";
echo '<br>'."Сумма на конец периода: "."$result"." руб.";
}
?>
</body>
</html>