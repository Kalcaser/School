<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>

    <h2>¬ходные данные</h2>
    <form name="enterForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
    <table>
        <tbody>
		<tr>
			<td>
				<b>¬ведите N:</b>
			</td>

			<td>
				<b><input type="text" name="N"></b>
			</td>
		</tr>

		<tr>
			<td>
				<b>¬ведите M:</b>
			</td>

			<td>
				<input type="text" name="M">
			</td>
		</tr>
		<tr>
			<td>
				<b><input type="submit"></b>
			</td>
		</tr>
        </tbody>
    </table>
    </form>

	<h2>¬ходное число: </h2>
<?php
$warning = isset($_GET['M']) ? $_GET['M'] : 6;
$error = isset($_GET['N']) ? $_GET['N'] : 4;
$commit = 0;
if((empty($warning)) || (empty($error)) || (!is_numeric($error)) || (!is_numeric($warning)) || ($warning<0) || ($error < 0)){
 echo "¬ведите корректные данные";
}
else{
if($error%2 == 1 && $warning == 0){
echo '-1';
}
else{
$commit = intdiv($warning, 2);
$warning -= $commit*2;
$error += $commit;
if($warning == 1){
$error += 1;
$commit += 2;
$warning = 0;
}
if($error%2 == 0){
 $commit += $error/2;
 $error = 0;
}
else{
	$error +=1;
	$commit += 3 + $error/2;
	$error = 0;
}

echo $commit . " min commits";
}
}

//всЄ отлично, но оператор сравнени€ != работает криво, так же цикл while с двум€ услови€ми не воспринимал условие != если значение было равно 2
// »з-за вышеперечисленного было решено сделать это формулой, а не циклом.
 ?> 
 </body>
</html>