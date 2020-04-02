<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color:#327da7;">
<?php
echo '<h3>Simple array list</h3>';
$number_list = array(12, 23, '22', "<h3>Hello world</h3>");
echo $number_list[3];
echo "<br>";

print_r($number_list);
echo "<br>";

$number = array('juanita', 'maria', 'jose');
print_r($number);
echo "<br>";

$names = array('first_name' => 'Edwin', 'last_name' => 'Diaz');
print_r($names);
echo "<br>";

echo $names['first_name'] . ' ' . $names['last_name'];
echo '<br>';

$car = array('Volvo', 'BMW', 'Toyota');
$length = count($car);
echo $length . '<br>';
for ($i = 0; $i < $length; $i++) {
    echo $car[$i] . '<br>';
}


//Array Change key case
echo '<h3>Change key case</h3>';
$name = array(
    'Tomato' => 35,
    'Banana' => 34,
    'Yoga' => 65
);
print("<pre>");
//print_r(array_change_key_case($name,CASE_UPPER));
print_r(array_change_key_case($name, CASE_LOWER));
print("</pre>");


//Array Column
echo '<h3>Array Column</h3>';
$profile = array(
    array(
        'id' => '222',
        'First_name' => 'Apple',
        'last_name' => 'Mia'
    ), array(
        'id' => '223',
        'First_name' => 'Orange',
        'last_name' => 'Off'
    ),
    array(
        'id' => '224',
        //'First_name' => 'Banana',
        'last_name' => 'Door'
    )
);
$last_name = array_column($profile, 'last_name');
$last_name = array_column($profile, 'last_name', 'id');
print ('<pre>');
print_r($last_name);
print ('</pre>');


//Array Combine ;basically key value joint
echo '<h3>Combine</h3>';
$fruits = array('apple', 'banana', 'orange');
$prices = array(20, 34, 55);
$combine = array_combine($fruits, $prices);
print ('<pre>');
print_r($combine);
print ('</pre>');

//Array count values
echo '<h3>count</h3>';
$num = array(12, 121, 323, 121, 11, 1, 11, 22, 22, 11, 1, 1, 1, 1, 33, 33, 5);
print ('<pre>');
print_r(array_count_values($num));
print ('</pre>');


//Array difference
echo '<h3>difference</h3>';
$array_one = array(
    'a' => 'apple',
    'b' => 'ball',
    'c' => 'couple',
    'z' => 'zoo'
);
$array_two = array(
    'd' => 'apple',
    'f' => 'couple'
);
$array_three = array(
    'g' => 'apple',
    'b' => 'ball'
);
$difference = array_diff($array_one, $array_two, $array_three);
print ('<pre>');
print_r($difference);
print ('</pre>');


//Array difference associate
echo '<h3>difference associate</h3>';
$array_one_1 = array(
    'a' => 'apple',
    'b' => 'ball',
    'c' => 'couple'
);
$array_two_1 = array(
    'a' => 'apple',
    'x' => 'ball',
    'c' => 'cat'
);
$array_three_1 = array(
    'a' => 'apple',
    'b' => 'ball'
);
$difference_1 = array_diff_assoc($array_one_1, $array_two_1, $array_three_1);
print ('<pre>');
print_r($difference_1);
print ('</pre>');


//Array differ Key
echo '<h3>differ Key</h3>';
$array_one_2 = array(
    'a' => 'apple',
    'b' => 'ball',
    'c' => 'couple'
);
$array_two_2 = array(
    'a' => 'apple',
    'd' => 'ball',
    'c' => 'couple'
);
$difference_2 = array_diff_key($array_one_2, $array_two_2);
print ('<pre>');
print_r($difference_2);
print ('</pre>');


//Array Intersect ;basically print the same element
echo '<h3>Intersect</h3>';
$array_one_3 = array(
    'a' => 'apple',
    'b' => 'ball',
    'c' => 'couple'
);
$array_two_3 = array(
    'a' => 'apple',
    'd' => 'ball',
    'c' => 'cat'
);
$difference_3 = array_intersect($array_one_3, $array_two_3);
print ('<pre>');
print_r($difference_3);
print ('</pre>');


//Array Intersect Associate
echo '<h3>Intersect Associate</h3>';
$array_one_4 = array(
    'a' => 'apple',
    'b' => 'ball',
    'c' => 'couple'
);
$array_two_4 = array(
    'a' => 'apple',
    'b' => 'bat',
    'c' => 'cat'
);
$difference_4 = array_intersect_assoc($array_one_4, $array_two_4);
print ('<pre>');
print_r($difference_4);
print ('</pre>');


//Array Intersect Key
echo '<h3>Intersect Key</h3>';
$array_one_5 = array(
    'a' => 'apple',
    'b' => 'ball',
    'c' => 'couple'
);
$array_two_5 = array(
    'a' => 'apple',
    'b' => 'ball',
    'e' => 'couple'
);
$difference_5 = array_intersect_key($array_one_5, $array_two_5);
print ('<pre>');
print_r($difference_5);
print ('</pre>');


//Array Key exists
echo '<h3>Key exists</h3>';
$arr = array(
    'name' => 'Apple',
    'age' => 23
);
if (array_key_exists('age', $arr)) {
    echo 'key already exists';
} else {
    echo 'key does not exists';
}
print '<br>';
$arr_1 = array('name', 'age');
if (array_key_exists(2, $arr_1)) {
    echo 'key already exists';
} else {
    echo 'key does not exists';
}


//Array keys
echo '<h3>keys</h3>';
$arr_keys = array(
    'Volvo' => 90,
    'BMW' => 34,
    'Toyota' => 22
);
//$keys = array_keys($arr_keys);
$keys = array_keys($arr_keys, 34);
print ('<pre>');
print_r($keys);
print ('</pre>');


//Array Map
echo '<h3>Map</h3>';
function MyFunction($values)
{
    return ($values);
}

$arr_num = [1, 1, 2, 3, 4, 4, 4];
$result = array_map('MyFunction', $arr_num);
print ('<pre>');
print_r($result);
print ('</pre>');

function MyFunction_1($values)
{
    $str = strtoupper($values);
    return $str;
}

$arr_num_1 = [
    'animal' => 'cow',
    'type' => 'mammal'
];
$result = array_map('MyFunction_1', $arr_num_1);
print ('<pre>');
print_r($result);
print ('</pre>');


//Array merge
echo '<h3>merge</h3>';
$arr1 = array(
    'a' => 'red',
    'b' => 'green'
);
$arr2 = array(
    'c' => 'blue',
    'b' => 'yellow'
);
$res = array_merge($arr1, $arr2);
print ('<pre>');
print_r($res);
print ('</pre>');


//Array MultiSort
echo '<h3>MultiSort</h3>';
$animal = ['dog', 'cat', 'horse'];
$animal1 = ['dear', 'bear'];
array_multisort($animal, SORT_ASC);
array_multisort($animal1, SORT_DESC);
print ('<pre>');
print_r($animal);
print ('</pre>');

print ('<pre>');
print_r($animal1);
print ('</pre>');


//Array Pad
echo '<h3>Pad</h3>';
$color = ['red', 'green'];
$color_result = array_pad($color, -5, 'blue');
//$color_result = array_pad($color,5,'blue');
print ('<pre>');
print_r($color_result);
print ('</pre>');


//Array pop
echo '<h3>pop</h3>';
$arr_pop = [1, 2, 3, 4];
array_pop($arr_pop);
print ('<pre>');
print_r($arr_pop);
print ('</pre>');


//Array push
echo '<h3>push</h3>';
$arr_push = ['apple', 'dog', 'red'];
array_push($arr_push, 'blue', 'green');
print ('<pre>');
print_r($arr_push);
print ('</pre>');


//Array Product
echo '<h3>Product</h3>';
$arr_product = [1, 2, 3];
echo array_product($arr_product);


//Array Replace
echo '<h3>Replace</h3>';
/*
$color_one = ['red','green'];
$color_two = ['blue','yellow'];
*/
/*
$color_one = ['a' => 'red','b' =>'green'];
$color_two = ['a' => 'blue','yellow'];
*/
$color_one = ['red', 'green'];
$color_two = ['blue', 'yellow'];
$color_three = ['black', 'orange'];
$replace_result = array_replace($color_one, $color_two, $color_three);
print ('<pre>');
print_r($replace_result);
print ('</pre>');


//Array reverse
echo '<h3>reverse</h3>';
//$rev_arr  = ['red','green','as'];
$rev_arr = ['a' => 'red', 'c' => 'green', 's' => 'as'];
//$rev_result = array_reverse($rev_arr,true);
$rev_result = array_reverse($rev_arr);
print ('<pre>');
print_r($rev_result);
print ('</pre>');


//Array Search
echo '<h3>Search</h3>';

if (isset($_POST['text'])) {
    global $txt;
    $txt = $_POST['text'];
    $res_search = array_search($txt, $rev_arr);
    echo "You have searched by -> $txt and your key is -> $res_search";

}


//Array Shift ;delete the first value
echo '<h3>Shift</h3>';
$color_one = [
    'a' => 'red',
    'b' => 'ball',
    'g' => 'green',
    'y' => 'yellow'
];
array_shift($color_one);
print ('<pre>');
print_r($color_one);
print ('</pre>');


//Array Slice : its indicate which index is the starting point of the array
echo '<h3>Slice</h3>';
$color_2 = ['red', 'green', 'blue', 'yellow', 'skyblue'];
//$res_2 = array_slice($color_2,1,2);
$res_2 = array_slice($color_2, -3, 2);
//negative index start form right and starting index is -1
print ('<pre>');
print_r($res_2);
print ('</pre>');


//Array Sum
//$arr_num = [10,20,30,'n'];
echo '<h3>Sum</h3>';
$arr_num = [
    'a' => 10,
    'b' => 20,
    'c' => 30
];
$sum_res = array_sum($arr_num);
echo 'result : ' . $sum_res;


//Array Unique
echo '<h3>Unique</h3>';
$arr_un = [
    'a' => 'apple',
    'b' => 'green',
    'c' => 'green',
    'd' => 'apple',
    'e' => 'good',
    'f' => 'banana'
];
$un_result = array_unique($arr_un);
print ('<pre>');
print_r($un_result);
print ('</pre>');


//Array unshift ;delete the first value
echo '<h3>unshift</h3>';
$arr_uns = [
    'a' => 'apple',
    'b' => 'green',
    'c' => 'green',
];
print ('<pre>');
print_r($arr_uns);
print ('</pre>');
array_unshift($arr_uns, 'blue');
print ('<pre>');
print_r($arr_uns);
print ('</pre>');


//Array values
echo '<h3>values</h3>';
$arr_val = [
    'a' => 'apple',
    'b' => 'green',
    'c' => 'green',
];
$res_val = array_values($arr_val);
print ('<pre>');
print_r($res_val);
print ('</pre>');


//Array walks
echo '<h3>walks</h3>';
function my_Function($department, $name)
{
    echo $name . ' comes from ' . $department . ' department<br>';
}

$p_name = [
    'Akbar' => 'Biology',
    'Apple' => 'Mathematics',
    'Orange' => 'Physics'
];
array_walk($p_name, 'my_Function');


echo '<br>';
//Array arsort and asort ;sort the array with ascending or descending
echo '<h3>arsort and asort</h3>';
$arr_s = [
    'Akbar' => 23,
    'Apple' => 34,
    'Orange' => 20,
    'Mango' => 50
];
//arsort($arr_s);
asort($arr_s);
foreach ($arr_s as $name => $age) {
    echo 'Name : ' . $name . ' -- Age : ' . $age . '<br>';
}


//Compact ; basically create more variables to associative array
echo '<h3>Compact</h3>';
$name_c = 'Orange';
$dep = 'Physics';
$coder = 'Java';
$res_c = compact('name_c', 'dep', 'coder');
print ('<pre>');
print_r($res_c);
print ('</pre>');


//Array current end next position value
echo '<h3>current end next prev</h3>';
$color_c = ['red', 'green', 'blue', 'yellow', 'skyblue'];
print ('<pre>');
print_r($color_c);
print ('</pre>');
echo 'Current value : ' . current($color_c) . '<br>';
echo 'Next value : ' . next($color_c) . '<br>';
echo 'Current value : ' . current($color_c) . '<br>';
echo 'Previous value : ' . prev($color_c) . '<br>';
echo 'End value : ' . end($color_c) . '<br>';


//Array in_array ; works on check a value exist or not in the array
echo '<h3>in_array method</h3>';
$coder_boy = ['apple', 'Akbar', 'orange'];
if (isset($_POST['username'])) {
    $text = $_POST['username'];
    if (in_array($text, $coder_boy)) {
        echo '<h4>' . $text . '</h4>' . ' value exit';
    } else {
        echo '<h4>' . $text . '</h4>' . ' value does not exit';
    }
}


//Array key,krsort,lsort ;basically key sort ascending or descending
echo '<h3>key ksort krsort</h3>' . '<br>';
$coder_girl = ['apple', 'Akbar', 'orange'];
next($coder_girl);
echo 'The current position key is : ' . key($coder_girl). '<br>';
$coder_man = [
    'Orange' => 23,
    'Banana' => 12,
    'Apple' => 33
];
//krsort($coder_man);
ksort($coder_man);
foreach ($coder_man as $key => $value) {
    echo 'Name ' . $key . ', ' . 'Age ' . $value . '<br>';
}



//Array shuffle ;basically work randomly sorting
echo '<h3>shuffle</h3>' . '<br>';
$coder_shuffle = ['apple', 'Akbar', 'orange','blue','black'];
print ('<pre>');
print_r($coder_shuffle);
print ('</pre>');
shuffle($coder_shuffle);
print ('<pre>');
print_r($coder_shuffle);
print ('</pre>');
?>
<form action="Array.php" method="post">
    <input type="text" name="username"/>
    <input type="submit" name="Submit"/>
</form>
</body>
</html>