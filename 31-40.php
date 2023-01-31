<p>
	31 задание
</p>
<?php
//31 -----------------------------------------------------------------
//алгоритм сортировки массива «методом пузырька».
$data = [1, 2, 3, 4, 15, 6, 7, 8, 9, 6];
$count_elements = count($data); 
$iterations = $count_elements - 1;

for ($i=0; $i < $count_elements; $i++) {
    $changes = false;
    for ($j=0; $j < $iterations; $j++) {
        if ($data[$j] > $data[($j + 1)]) {
            $changes = true;
            list($data[$j], $data[($j + 1)]) = array($data[($j + 1)], $data[$j]);
        }
    }
    $iterations--;
    if (!$changes) {
        break;
    }
}        
print_r($data);
/*Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 6
    [5] => 6
    [6] => 7
    [7] => 8
    [8] => 9
    [9] => 15
)*/
?>
<hr>
<p>
	32 задание
</p>
<?php
//32 -----------------------------------------------------------------
//Дан одномерный массив числовых значений, насчитывающий N элементов. 
//Поменять местами элементы, стоящие на чётных и нечётных местах:
// A[1] ↔ A[2]; A[3] ↔ A[4] …
    $a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    for ($i = 1; $i < count($a); $i+=2) {
        $temp= $a[$i];
        $a[$i] = $a[$i - 1];
        $a[$i - 1] = $temp;
    }
    print_r($a);
/*    Array
(
    [0] => 2
    [1] => 1
    [2] => 4
    [3] => 3
    [4] => 6
    [5] => 5
    [6] => 8
    [7] => 7
    [8] => 10
    [9] => 9
)*/
?>
<hr>
<p>
	33 задание
</p>
<?php
//33 -----------------------------------------------------------------
//Дан одномерный массив числовых значений, насчитывающий N элементов. 
//Выполнить перемещение элементов массива по кругу вправо, 
//т. е. A[1] → A[2]; A[2] → A[3]; … A[n] → A[1].
    $a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $length = count($a);
    $first = $a[0];
    for ($i = 0; $i < $length - 1; $i++) {
        $a[$i] = $a[$i+1];
        if ($a == $length) {
            $temp = $a[0];
            $a[0] = $a[$i];
            $a[$i] = $temp;    
        }   
    }
    $a[9] = $first;
    print_r($a);
/*    Array
(
    [0] => 2
    [1] => 3
    [2] => 4
    [3] => 5
    [4] => 6
    [5] => 7
    [6] => 8
    [7] => 9
    [8] => 10
    [9] => 1
)*/
?>
<hr>
<p>
	34 задание
</p>
<?php
//34 -----------------------------------------------------------------
//Дан одномерный массив числовых значений, насчитывающий N элементов. 
//Поменять местами первую и вторую половины массива.

$a=[1,2,3,4,5,6];
for ($i = 0; $i < count($a)/2; $i++)
{
		$t=$a[$i];
        $a[$i]=$a[count($a)/2+$i];
        $a[count($a)/2+$i]=$t;
}

print_r($a);
/*Array
(
    [0] => 4
    [1] => 5
    [2] => 6
    [3] => 1
    [4] => 2
    [5] => 3
)*/
?>
<hr>
<p>
	35 задание
</p>
<?php
//35 -----------------------------------------------------------------
//Дан одномерный массив числовых значений, насчитывающий N элементов. 
//Поменять местами группу из M элементов, начинающихся с позиции 
//K с группой из M элементов, начинающихся с позиции P.
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $length = count($array);
    
    $M = 2; 
    $K = 0; 
    $P = 8;

    for ($i = 0; $i < $M; $i++) {
        $array_1[$i] = $array[$K];
        $K = $K + 1;
    } 

    for ($i = 0; $i < $M; $i++) {
        $array_2[$i] = $array[$i];
        $P = $P + 1;
    }

    print_r($array);
    print_r($array_1);
    print_r($array_2);
?>
<hr>
<p>
	36 задание
</p>
<?php
//36 -----------------------------------------------------------------
//Дан одномерный массив числовых значений, насчитывающий N элементов. 
//Вставить группу из M новых элементов, начиная с позиции K.
$arr_old = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr_new = [];
$length = count($arr_old);
$M = 4; 
$K = 5; 
//Прилепили первый кусок до К
for ($i = 0; $i < $K; $i++) {
    $arr_new[$i] = $arr_old[$i];
}
//прилепили М значений
for ($i = $K; $i < $K + $M; $i++) {
    $arr_new[$i] = rand(1, 15);
}
$j = $K;
//Прилепили оставшийся кусок после К
for ($i = $K + $M; $i < $length + $M = 4; $i++) {
    $arr_new[$i] = $arr_old[$j];
    $j++;
}
print_r($arr_new);
/*Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 14
    [6] => 8
    [7] => 9
    [8] => 15
    [9] => 6
    [10] => 7
    [11] => 8
    [12] => 9
    [13] => 10
)*/
?>
<hr>
<p>
	37 задание
</p>
<?php
//37 -----------------------------------------------------------------
//Дан одномерный массив числовых значений, насчитывающий N элементов. 
//Сумму элементов массива и количество положительных элементов 
//поставить на первое и второе место.
$myarr= [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$n=6;
$k=3;
$s = array_sum($myarr);
	for($i = 0, $sum = 0; $i < 10; $i++)
	{ 
        if($myarr[$i] > 0)
	    { 
            $sum += $myarr[$i];
        }
    }
$arr2 = array($s,$sum);
$allarr = array_merge($arr2,$myarr);
print_r($allarr);
?>
<hr>
<p>
	38 задание
</p>
<?php
//38 -----------------------------------------------------------------
//Дан одномерный массив числовых значений, насчитывающий N элементов. 
//Исключить из него M элементов, начиная с позиции K.
$myarr= [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$n = 6;
$k=3;
$m = 2;

$newarr = array_splice($myarr, $k-1);
$newarr2 = array_splice($newarr,$m);
$newarr3 = array_splice($myarr, -($n-$m));
$r= array_merge($newarr3,$newarr2);

print_r($r);
?>
<hr>
<p>
	39 задание
</p>
<?php
//39 -----------------------------------------------------------------
//Дан одномерный массив числовых значений, насчитывающий N элементов.
// Исключить все нулевые элементы.
$myarr= [1, 2, 0, 4, 5, 0, 7, 8, 0, 10];
$new_arr = array_diff($myarr, array('0'));
print_r($new_arr);
?>
<hr>
<p>
	40 задание
</p>
<?php
//40 -----------------------------------------------------------------
//дан одномерный массив числовых значений, насчитывающий N элементов. 
//После каждого отрицательного элемента вставить новый элемент, 
//равный квадрату этого отрицательного элемента.
$new_arr = [];
$arr = [1,-6,7,24,6,9,-2,1,-9,0,1,-34];
$length = count($arr);
for ($i = 0; $i < $length; $i++)
{
    array_push($new_arr, $arr[$i]);
    if ($arr[$i] < 0)
    {
        array_push($new_arr, pow($arr[$i],2));
    }
}
print_r($new_arr);
// Array
// (
//     [0] => 1
//     [1] => -6
//     [2] => 36
//     [3] => 7
//     [4] => 24
//     [5] => 6
//     [6] => 9
//     [7] => -2
//     [8] => 4
//     [9] => 1
//     [10] => -9
//     [11] => 81
//     [12] => 0
//     [13] => 1
//     [14] => -34
//     [15] => 1156
// )
?>