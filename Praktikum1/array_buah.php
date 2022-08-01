<?php
 $fruits = ["Durian","Mangga","Sirsak","Jeruk","Apel"];

 //cetak buah index ke -2
 echo $fruits[2];

 //cetak jumlah buah
 echo "<br/>Jumlah Buah " . count($fruits);

 // cetak seluruh buah
 echo '<ol>';
    foreach($fruits as $buah){
    echo '<li>'. $buah .'</li>';
 }
 echo '</ol>';

 //tambah buah
 $fruits[]="Pepaya";

 // hapus buah index ke 1
 unset($fruits[1]);

 // ubah buah index ke 2 menjadi Manggis
 $fruits[2]="Manggis";

 // cetak seluruh buah dengan index nya
 echo '<ul>';
 foreach($fruits as $k => $v){

 echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';

 }

 echo '</ul>';

  //mencoba fungsi sort()
  echo "<li>coba fungsi sort()</li>";
$num = [10,2,6,15,8,4];
sort($num);
$arrlength=count($num);
for($x=0;$x<$arrlength;$x++)
  {
  echo $num[$x];
  echo "<br>";
  }

  // mencoba fungsi array_pop()
  echo "<li>coba fungsi array_pop()</li>";
  $colors=["blue","grey","green","black"];
  array_pop($colors);
  var_dump($colors);

//mencoba fungsi Array_push()
echo "<li>coba fungsi array_push()</li>";
array_push($colors,"yellow","red");
echo "<br>";
print_r($colors);

//mencoba fungsi array_shift()
echo "<li>coba fungsi array_shift()</li>";
$meow = ["a"=>"anyong","b" => "gaga","c"=> "tampan"];
echo "<br>" . array_shift($meow)."<br>";
print_r ($meow);
echo "<br>";
array_unshift($meow,"maniez");
print_r($meow);


?>