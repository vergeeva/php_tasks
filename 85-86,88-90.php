<p>
	Задача 85
</p>

<?php
//85 -----------------------------------------------------------------
// Создать квадратную матрицу A, имеющую N строк и N
// столбцов со случайными элементами. Определить сумму
// элементов, расположенных параллельно главной диагонали
// (ближайшие к главной). Элементы главной диагонали имеют
// индексы от [0,0] до [N,N]
$matrix=[];
function set_matrix_random($M, $N)
{//лучше поздно, чем никогда
    for ($i = 0; $i < $M; $i++) 
    {
        for ($j = 0; $j < $N; $j++) 
        {
            $matrix[$i][$j] = rand(10, 30);
        }
    }
    return $matrix;
}
function print_matrix($matrix, $M, $N) //Чтобы красиво печатало
{ //дальше используется эта функция
    for ($i = 0; $i < $M; $i++)
    {
        for ($j = 0; $j < $N; $j++)
        {
            echo $matrix[$i][$j]."\t";
        }
        echo "<p></p>";
    }
}
$m=3;
$n=3;

$matrix = set_matrix_random($n, $m);
$sum_up = 0;
$sum_down = 0;
for ($i = 0; $i < $n; $i++) 
{
    for ($j = 0; $j < $m; $j++) 
    {
        if ($i == $j /*and $j+1 != $m and $j-1 != -1*/)
        {
            try {
                $sum_up += $matrix[$i][($j+1)];
                $sum_down += $matrix[$i][($j-1)];
            }
            catch (Error)
            {
                continue;
            }

        }
    }
}
echo "Матрица:"."<p></p>";
print_matrix($matrix, $n, $m);
echo "<p></p>"."Сумма для верхней паралельной: ".$sum_up."<p></p>";
echo "Сумма для нижней паралельной: ".$sum_down."<p></p>";
?>
<hr>
<p>
	Задача 86
</p>
<?php
//86 -----------------------------------------------------------------
// Создать квадратную матрицу A, имеющую N строк и N
// столбцов со случайными элементами. Определить
// произведение элементов, расположенных параллельно
// побочной диагонали (ближайшие к побочной). Элементы
// побочной диагонали имеют индексы от [N,0] до [0,N].
$m=3;
$n=3;

$matrix = set_matrix_random($n, $m);
$sum_up = 0;
$sum_down = 0;
for ($i = 0; $i < $n; $i++) 
{
    for ($j = 0; $j < $m; $j++) 
    {
        if ($j == ($m - 1 - $i))
        {
            $sum_up += $matrix[$i][($j-1)];
            $sum_down += $matrix[$i][($j+1)];
        }
    }
}
echo "Матрица:"."<p></p>";
print_matrix($matrix, $n, $m);
echo "<p></p>"."Сумма для верхней паралельной: ".$sum_up."<p></p>";
echo "Сумма для нижней паралельной: ".$sum_down."<p></p>";

?>

<hr>
<p>
	Задача 88
</p>

<?php
//88 -----------------------------------------------------------------
// Создать прямоугольную матрицу A, имеющую N строк и M
// столбцов со случайными элементами. Исходная матрица
// состоит из нулей и единиц. Добавить к матрице еще один
// столбец, каждый элемент которого делает количество
// единиц в каждой строке чётным.
function set_matrix_zeros_and_ones($M, $N)
{//лучше поздно, чем никогда
    for ($i = 0; $i < $M; $i++) 
    {
        for ($j = 0; $j < $N; $j++) 
        {
            $matrix[$i][$j] = random_int(0, 1);
        }
    }
    return $matrix;
}

$m=5;
$n=3;

$matrix = set_matrix_zeros_and_ones($n, $m);
$additional_column = array();

//считаем сумму единиц и в зависимости от этого заполняем доп. столбец
for ($i = 0; $i < $n; $i++) 
{
    $sum_of_ones = 0;
    for ($j = 0; $j < $m; $j++) 
    {
        if ($matrix[$i][$j] == 1)
        {
            $sum_of_ones ++;
        }
    }
    if ($sum_of_ones % 2 == 0)
    {
        $additional_column[$i] = 0;
    }
    else 
    {
        $additional_column[$i] = 1;
    }
}

echo "<p></p>"."Старая матрица:"."<p></p>";
print_matrix($matrix, $n, $m);

//Добавим дополнительный столбец
for ($i = 0; $i < $n; $i++) 
{
    $matrix[$i][$m] = $additional_column[$i];
}

echo "<p></p>"."Новая матрица:"."<p></p>";
print_matrix($matrix, $n, ($m + 1));
?>

<hr>
<p>
	Задача 89
</p>
<?php
//89 -----------------------------------------------------------------
// Создать квадратную матрицу A, имеющую N строк и N
// столбцов со случайными элементами. Найти сумму
// элементов, расположенных выше главной диагонали, и
// произведение элементов, расположенных выше побочной
// диагонали (элементы главной диагонали имеют индексы от
// [0,0] до [N,N], а элементы побочной диагонали — от [N,0]
// до [0,N])
$m=3;
$n=3;

$matrix = set_matrix_random($n, $m);

$com_up_secondary = 1;
$sum_up_key = 0;
for ($i = 0; $i < $n; $i++) 
{
    for ($j = 0; $j < $m; $j++) 
    {
        if ($i == $j)
        {//Главная диагональ
            $sum_up_key += $matrix[$i][($j+1)];
        }
        
        if ($j == ($m - 1 - $i))
        {//побочная диагональ
            if (($j != 0) && ($i != ($m -1)))
            {
                $com_up_secondary *= $matrix[$i][($j-1)];
            }
        }
    }
}
echo "<p></p>"."произведение элементов, расположенных выше побочной диагонали: ".$com_up_secondary."<p></p>";
echo "<p></p>"."сумма элементов, расположенных выше главной диагонали: ".$sum_up_key."<p></p>";
echo "<p></p>"."Матрица:"."<p></p>";
print_matrix($matrix, $n, $m);

?>
<hr>
<p>
	Задача 90
</p>
<?php
//90 -----------------------------------------------------------------
// Создать прямоугольную матрицу A, имеющую N строк и M
// столбцов со случайными элементами. Дан номер строки L и
// номер столбца K, при помощи которых исходная матрица
// разбивается на четыре части. Найти сумму элементов
// каждой части
$m=6;
$n=7;
$L = 2;//Номер строки
$K = 3; //Номер столбца
$matrix = set_matrix_random($n, $m);
echo "Матрица:"."<p></p>";
print_matrix($matrix, $n, $m);

//первый кусок: левый верхний
echo "<p></p>"."Первая часть:"."<p></p>";
$sum_part_one = 0;
for ($i = 0; $i < $L; $i++) 
{
    for ($j = 0; $j < $K; $j++) 
    {
        $sum_part_one +=$matrix[$i][$j];
        echo $matrix[$i][$j]."\t";
    }
    echo "<p></p>";
}
echo "сумма первой части: ".$sum_part_one."<p></p>"."Вторая:"."<p></p>";

//второй кусок: правый верхний
$sum_part_two= 0;
for ($i = 0; $i < $L; $i++) 
{
    for ($j = ($K + 1); $j < $m; $j++) 
    {
        $sum_part_two +=$matrix[$i][$j];
        echo $matrix[$i][$j]."\t";
    }
    echo "<p></p>";
}
echo "сумма второй части: ".$sum_part_two."<p></p>"."Третья:"."<p></p>";

//третий кусок: левый нижний
$sum_part_three = 0;
for ($i = ($L + 1); $i < $n; $i++) 
{
    for ($j = 0; $j < $K; $j++) 
    {
        $sum_part_three +=$matrix[$i][$j];
        echo $matrix[$i][$j]."\t";
    }
    echo "<p></p>";
}
echo "сумма третьей части: ".$sum_part_three."<p></p>"."Четвертая:"."<p></p>";

//четвертый кусок: правый нижний
$sum_part_four = 0;
for ($i = ($L + 1); $i < $n; $i++) 
{
    for ($j = ($K + 1); $j < $m; $j++) 
    {
        $sum_part_four +=$matrix[$i][$j];
        echo $matrix[$i][$j]."\t";
    }
    echo "<p></p>";
}
echo "сумма четвертой части: ".$sum_part_four."<p></p>";

?>

<?php
//91 -----------------------------------------------------------------
// Создать прямоугольную матрицу A, имеющую N строк и M
// столбцов со случайными элементами. Определить, сколько
// нулевых элементов содержится в каждом столбце и в каждой
// строке матрицы. Результат оформить в виде матрицы из
// N + 1 строк и M + 1 столбцов.
$m=3;
$n=5;
$matrix = [];

$nulls_row = array(); 
for ($i = 0; $i < $m; $i++) //заполняем по строкам
{
    $nulls_row[$i] = 0;
    for ($j = 0; $j < $n; $j++) 
    {
        $matrix[$i][$j] = rand(-20, 20);
        if ($matrix[$i][$j] == 0) $nulls_row [$i]++;
    }
}

$nulls_column = array();  //по столбцам
for ($j = 0; $j < $n; $j++) //заполняем по столбцам 
{
    $nulls_column[$j] = 0;
    for ($i = 0; $i < $m; $i++) 
    {
        if ($matrix[$i][$j] == 0) $nulls_column[$j]++;
    }
}

for ($i = 0; $i < $m; $i++) //добавим столбец
{
    $matrix[$i][$n] = $nulls_row[$i];
}

for ($j = 0; $j < $n; $j++) //добавим строку
{
    $matrix[$m][$j] = $nulls_column[$j];
}

$matrix[$m][$n] = '×';//заполним пустую дыру пустотой
echo "\n"."старая матрица:"."\n";
print_matrix($matrix, $m, $n);
echo "\n"."новая матрица:"."\n";
print_matrix($matrix, ($m + 1), ($n + 1));
?>

<?php
//92 -----------------------------------------------------------------
// Создать прямоугольную матрицу A, имеющую N строк и M
// столбцов со случайными элементами. Дан номер строки L и
// номер столбца K, при помощи которых исходная матрица
// разбивается на четыре части. Найти среднее
// арифметическое элементов каждой части.

$m=6;
$n=7;
$L = 2;//Номер строки
$K = 3; //Номер столбца
$matrix = set_matrix_random($n, $m);
echo "Матрица:"."<p></p>";
print_matrix($matrix, $n, $m);
$count = 0;
//первый кусок: левый верхний
echo "<p></p>"."Первая часть:"."<p></p>";
$sum_part_one = 0;
for ($i = 0; $i < $L; $i++) 
{
    for ($j = 0; $j < $K; $j++) 
    {
        $sum_part_one +=$matrix[$i][$j];
        $count++;
        echo $matrix[$i][$j]."\t";
    }
    echo "<p></p>";
}
echo "среднее арифметическое первой части: ".(round(($sum_part_one/$count),2))."<p></p>"."Вторая:"."<p></p>";

//второй кусок: правый верхний
$sum_part_two= 0;
$count = 0;
for ($i = 0; $i < $L; $i++) 
{
    for ($j = ($K + 1); $j < $m; $j++) 
    {
        $sum_part_two +=$matrix[$i][$j];
        $count++;
        echo $matrix[$i][$j]."\t";
    }
    echo "<p></p>";
}
echo "среднее арифметическое второй части: ".(round(($sum_part_two/$count),2))."<p></p>"."Третья:"."<p></p>";

//третий кусок: левый нижний
$sum_part_three = 0;
$count = 0;
for ($i = ($L + 1); $i < $n; $i++) 
{
    for ($j = 0; $j < $K; $j++) 
    {
        $sum_part_three +=$matrix[$i][$j];
        $count++;
        echo $matrix[$i][$j]."\t";
    }
    echo "<p></p>";
}
echo "среднее арифметическое третьей части: ".(round(($sum_part_three/$count),2))."<p></p>"."Четвертая:"."<p></p>";

//четвертый кусок: правый нижний
$sum_part_four = 0;
$count = 0;
for ($i = ($L + 1); $i < $n; $i++) 
{
    for ($j = ($K + 1); $j < $m; $j++) 
    {
        $sum_part_four +=$matrix[$i][$j];
        $count++;
        echo $matrix[$i][$j]."\t";
    }
    echo "<p></p>";
}
echo "среднее арифметическое четвертой части: ".(round(($sum_part_four/$count),2))."<p></p>";

?>