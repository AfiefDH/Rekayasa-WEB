<?php
//membuat variabel array
$arrayData=[
    "nama"=>"Afief",
    "usia"=> 21,
    "pekerjaan"=>"mahasiswa",
    "hobi"=>["membaca","bersepeda","coding"]
];

//encode array ke format JSON
$jsonData = json_encode($arrayData);
echo "Data dalam format JSON : ",$jsonData;

?>