<?php
// JSON string dengan data tambahan
$jsonData = '[ 
    {
        "nama": "Afief Dwi Hidayat",
        "nim": "G.231.22.0075",
        "usia": 21 ,
        "hobi": ["membaca", "bersepeda", "coding"]
    },
    {
        "nama": "Diana Sari",
        "nim": "G.231.21.0076",
        "usia": 22,
        "hobi": ["melukis", "berjalan-jalan", "menulis"]
    },
    {
        "nama": "Budi Santoso",
        "nim": "G.231.20.0017",
        "usia": 23,
        "hobi": ["memasak", "bermain game", "traveling"]
    },
    {
        "nama": "Cynthia Utami",
        "nim": "G.231.23.0070",
        "usia": 20,
        "hobi": ["fotografi", "mendengarkan musik", "bersepeda"]
    }
]'; //penggunaan [] untuk mendukung beberapa entri

// Decode JSON ke array
$arrayData = json_decode($jsonData, true);

// Tampilkan data array
foreach ($arrayData as $data) { //foreach untuk menginterasi setiap entri dalam array,sehingga semua data ditampilkan
    echo "Data dalam format array:";
    echo " nama: " . $data['nama'];
    echo " nim: " . $data['nim'];
    echo " usia: " . $data['usia'];
    echo " hobi: " . implode(", ", $data['hobi'])."</br>"; //implode untuk mengubah array hobi menjadi string yang lebih rapi
}
?>