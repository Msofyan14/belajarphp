<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Array PHP</h1>

    <?php 
        // Tipe data array
        // tipe penulisan array
        // $kotak = array('anjing', 'kurakura', 'koala');
        // $nama = ['sofyan', 'bally', 'dede'];

        //  print_r($kotak);
        // echo $nama[0];

        //--------Assosiative array----------\\
        //  $data = array( "nama" => "hilman" ,
        //                "umur" => 21 ,
        //                "kerja" => "pengacara"
        //              );
        // $data2 = array( "istri" => "belum ada" ,
        //              "laptop" => "mackbbok Pro"
        //            );

        // //             // print_r($data);
        // //             echo "namanya adalah " . $data['nama'];
        
        //  //--------methode Assosiative array----------\\
        //  // array_values, array_keys, array_merge
        // print_r(array_merge($data, $data2));


    // ---------------multi dimensi array ------------------
        $data = array(
            array("programer", "22", "males"),
            array("designer", "24", "rajin"),
            array("manager", "34", "males banget")
        );
        
        
        echo $data[0][0]. " yang berusia ".$data[0][1]. " memiliki sifat ".$data[0][2]. "<br>";
        echo $data[1][0]. " yang berusia ".$data[1][1]. " memiliki sifat ".$data[1][2]. "<br>";
        echo $data[2][0]. " yang berusia ".$data[2][1]. " memiliki sifat ".$data[2][2]. "<br>";
        echo $data[0][0]. " yang berusia ".$data[2][1]. " memiliki sifat ".$data[1][2]. "<br>";
    ?>
</body>

</html>