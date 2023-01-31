<p>
	21 задание
</p>
<?php
//21 -----------------------------------------------------------------
//Определить значение функции Z = 1/(XY ) при произвольных X и Y .
	$x = 3;
	$y = 8;

if (($x != 0) and ($y != 0))
{
    echo 1 / ($x * $y);
}
else echo "Ошибка деления на ноль";
?>
<hr>
<p>
	22 задание
</p>
<?php
//22 -----------------------------------------------------------------
//Даны вещественные числа: A, B, C. Определить, выполняются ли 
//неравенства A < B B > C и какое именно неравенство выполняется.
$a = 1;
$b = 5;
$c = 3;
if ($a<$b and $b>$c) {echo "Неравенство выполняется";}
else echo "Неравенство не выполняется";
?>
<hr>
<p>
	23 задание
</p>
<?php
//23 -----------------------------------------------------------------
//Даны вещественные числа X и Y . Вычислить Z. 
//Z = √(X x Y) при X > Y, Z = ln(X + Y ) в противном случае.
$x=2;
$y=3;
if ($x>$y)
{
    $z =sqrt($x*$y);
	echo "x > y \n";
}
else 
{
	$z = log10($x + $y);
	echo "x < y \n";
}
echo $z;
?>
<hr>
<p>
	24 задание
</p>

<?php
//24 -----------------------------------------------------------------
//Даны вещественные положительные числа a, b, c, d. Выясните, может 
//ли прямоугольник со сторонами a, b уместиться внутри прямоугольника 
//со сторонами c, d так, чтобы каждая сторона внутреннего прямоугольника 
//была параллельна или перпендикулярна стороне внешнего прямоугольника.
    $a = 3;
    $b = 4;
    $c = 10;
    $d = 5;
    if ($a < $c) {
        if ($b < $d) {
            printf("Влезет");
        }
    }
    else printf("Не влезет");
?>
<hr>
<p>
	25 задание
</p>
<?php 
//25 -----------------------------------------------------------------
//Дано вещественное число A. Вычислить f(A), если f(x) = x2 + 4x + 5, 
//при x ≤ 2; в противном случае f(x) = 1/ (x2 + 4x + 5).
$x = rand(1,20); echo 'x='.$x."\n";
if ($x <= 2) {
    $f = pow($x,2) + 4*$x + 5;
    printf("x <= 2; f = "); printf($f);
}
else 
{
    $f = pow($x,2) + 4*$x + 5;
    printf("противный случай f= "); printf($f);
}
?>
<hr>
<p>
	26 задание
</p>
<?php
//26 -----------------------------------------------------------------
//Дано вещественное число A. Вычислить f(A), если f(x) = 0, 
//f(x) = x2 + 4x + 5
//при x ≤ 0; f(x) = x при 0 <x <1, в противном случае f(x) = x4.
$a = rand(1,20); //echo $a;
$x = rand(-1,1); //echo $x;
if ($x <= 0)
{
    if (pow($x,2) + 4*$x + 5 == 0) echo "f(a) = ".pow($a,2) + 4*$a + 5;
    else echo "f(x) при x<=0 не равно нулю";
}
else
{
    if ($x>0 && $x<1) echo "f(x) = ".$x;
    else echo "противный случай: f(x) = ".rand(21,34);
}
?>
<hr>
<p>
	27 задание
</p>
<?php
//27 -----------------------------------------------------------------
//Дано вещественное число A. Вычислить f(A), если f(x) = 0
//f(x) = x2 + 4x + 5
//при x ≤ 0; f(x) = x2-x при 0 < x < 1, в противном случае f(x) = 
//x2-sin(πx2).
$a = rand(1,20); //echo $a;
$x = rand(-10,10); //echo $x;
$x2 = rand(15,34);
if ($x <= 0)
{
    if (pow($x,2) + 4*$x + 5 == 0) echo "x <= 0; f(a) = ".pow($a,2) + 4*$a + 5;
    else echo "f(x) при x<=0 не равно нулю";
}
else
{
    if ($x>0 && $x<1) echo "x>0 && x<1; f(x) = ".$x2 -$x;
    else echo "противный случай: f(x) = ".$x2 - sin(3.14*$x2);
    //пи лучше заменить на 3.14
}
?>
<hr>
<p>
	28 задание
</p>
<?php
//28 -----------------------------------------------------------------
//Составить алгоритм и программу для реализации 
//логических операций «И» и «ИЛИ» для двух переменных.
function AND_ ($arg1,$arg2)
{
    if ($arg1 == 1)
    {
        if ($arg2 == 1) return "true";
    }
    return "false";
}
$a = true;
$b = false;
printf(AND_($a,$b)); //false
printf(" | ");
function OR_ ($arg1,$arg2)
{
    if ($arg1 == 0)
    {
        if ($arg2 == 0) return "false";
    }
    return "true";
}
$a = true;
$b = false;
printf(OR_($a,$b)); //true

?>
<hr>
<p>
	29 задание
</p>
<?php
//29 -----------------------------------------------------------------
//Известен ГОД. Определить, будет ли этот год високосным,
// и к какому веку этот год относится
$year = date ( 'Y' ) ;
$days_count = date('z', mktime(0, 0, 0, 12, 31, $year)) + 1;

if ($days_count == 365) {echo "Это високосный год";}
else {echo "Год не високосный";}
?>
<hr>
<p>
	30 задание
</p>
<?php
//30 -----------------------------------------------------------------
//поиск максимального элемента в одномерном массиве.
$a = [1, 2, 3, 4, 15, 6, 7, 8, 9, 6];
$max = -100000;
for ($i = 1; $i < count($a); $i++) 
{
    if ($a[$i]>$max) $max = $a[$i];
}
echo "Максимальный элемент в массивчике = ";
print_r($max);
?>