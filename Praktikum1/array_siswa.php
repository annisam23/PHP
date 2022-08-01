<?php 
 $nm1 = ["id"=>1,"nama"=>"ahmad","nim"=>"01102210","uas"=>90,"uts"=>76,"tugas"=>90];
 $nm2 = ["id"=>2,"nama"=>"mamat","nim"=>"01102211","uas"=>99,"uts"=>98,"tugas"=>60];
 $nm3 = ["id"=>3,"nama"=>"cicoy","nim"=>"01102212","uas"=>60,"uts"=>70,"tugas"=>98];
 $nm4 = ["id"=>4,"nama"=>"ipang","nim"=>"01102213","uas"=>90,"uts"=>76,"tugas"=>90];
 $nm5 = ["id"=>5,"nama"=>"nisa","nim"=>"01102214","uas"=>90,"uts"=>90,"tugas"=>90];
 
 $kump_nm = [$nm1,$nm2,$nm3,$nm4,$nm5];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<style>
    body{
        border: 2px solid black;
    }
   th,td{
        border: 1px solid black;
        align: center;
    }
    th{
        background-color:grey;
    }
    h3{
        text-align:center;
    }
</style>
<body>
    <h3>Data Nilai Mahasiswa</h3>
    <table>
        <thead>
            <th>No</th><th>Nama</th><th>Nim</th><th>Uas</th>
            <th>Uts</th><th>Tugas</th><th>Nilai Akhir</th>
        </thead>
        <tbody>
        <?php
        $nomor = 1;
        foreach ($kump_nm as $nmhs){
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td>'.$nmhs['nama'].'</td>';
            echo '<td>'.$nmhs['nim'].'</td>';
            echo '<td>'.$nmhs['uas'].'</td>';
            echo '<td>'.$nmhs['uts'].'</td>';
            echo '<td>'.$nmhs['tugas'].'</td>';
            $nilai_akhir = ($nmhs['uts'] + $nmhs['uas']+$nmhs['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '<tr/>';
            $nomor++;
        }
        ?>
        </tbody>
    </table>
</body>
</html>