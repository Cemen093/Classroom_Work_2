<?php

echo '<link href="style.css" rel="stylesheet"/>';

$fruits = array('Абрикос','Авокадо','Алыча','Ананас','Аннона','Апельсин',
    'Банан','Бергамот','Грейфрут','Груша');

//foreach($fruits as $item => $item_count) {
//    echo "<div class='card'>" . $item_count . "</br></div>";
//}

if (empty($_GET["start"])){
    $start=0;
}else{
    $start = $_GET["start"];
}

if (empty($_GET["end"])){
    $end=5;
}else{
    $end = $_GET["end"];
}

if (empty($_GET["shift"])){
    $shift=0;
}else{
    $shift = $_GET["shift"];
}

if (empty($_GET["range"])){
    $range=0;
}else{
    $range = $_GET["range"];
}

$range = $end - $start;

if ($start + $shift > -1 and $end + $shift <= count($fruits)) {
    $start += $shift;
    $end += $shift;
}
$count_arr = count($fruits);

for ($i = $start; $i < $end; $i++){
    echo "<div class='card'>" . $fruits[$i] . "</br></div>";
}

//echo "<p>5/10</br></p>";
echo "<p>" . $range . "/" . $count_arr . "</br></p>";
echo '<form action="php.php" method="GET">';
echo '<input style="display: none" type="number" value="' . $start . '" name="start">';
echo '<input style="display: none" type="number" value="' . $end . '" name="end">';
//echo '<input style="display: none" type="number" value="5" name="range">';
echo "<button type='submit' name='shift' value='-1'>Pref</button>";
echo "<button type='submit' name='shift' value='1'>Next</button>";
echo "</br>";
echo "</form>";
