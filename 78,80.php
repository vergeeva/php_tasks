<hr>
<p>
	Задача 79
</p>
<?php
//78 -----------------------------------------------------------------
// Создать прямоугольную матрицу A, имеющую N строк и M
// столбцов со случайными элементами. Разделить элементы
// каждой строки на элемент этой строки с наибольшим
// значением.
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
$m=6;
$n=4;
$matrix = [];
$max_value_in_row = array();
echo "Старая матрица:"."<p></p>";
for ($i = 0; $i < $m; $i++) 
{
    for ($j = 0; $j < $n; $j++) 
    {
        $matrix[$i][$j] = rand(9, 20);
        echo $matrix[$i][$j]."\t";
    }
    echo "<p></p>";
    $max_value_in_row[$i] = max($matrix[$i]);
}

for ($i = 0; $i < $m; $i++)
{
    for ($j = 0; $j < $n; $j++)
    {
        $matrix[$i][$j] /= $max_value_in_row[$i];
        $matrix[$i][$j] = round($matrix[$i][$j], 2);
    }
}
echo "<p></p>"."Новая матрица:"."<p></p>";
print_matrix($matrix, $m, $n);
?>
<hr>
<p>
	Задача 80
</p>
<?php
//80 -----------------------------------------------------------------
// Создать прямоугольную матрицу A, имеющую N строк и M
// столбцов со случайными элементами. Разделить элементы
// матрицы на элемент матрицы с наибольшим значением.
$m=6;
$n=4;
$matrix;
$max_value_in_row = array();
//Заполняем, попутно ищем макс. в каждой строке
for ($i = 0; $i < $m; $i++) 
{
    for ($j = 0; $j < $n; $j++) 
    {
        $matrix[$i][$j] = rand(10, 25);
    }
    $max_value_in_row[$i] = max($matrix[$i]);
}
echo "<p></p>"."Старая матрица:"."<p></p>";
print_matrix($matrix, $m, $n);
//макс. в массиве максимальных
$max_value_in_matrix = max($max_value_in_row);
for ($i = 0; $i < $m; $i++)
{
    for ($j = 0; $j < $n; $j++)
    {
        $matrix[$i][$j] /= $max_value_in_matrix;
        $matrix[$i][$j] = round($matrix[$i][$j], 2);
    }
}
echo "<p></p>"."Новая матрица:"."<p></p>";
print_matrix($matrix, $m, $n);
?>