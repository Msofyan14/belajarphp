<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php 
    // function print_text($text, $angka) {
    //     $text = 'gedung ' . $text . " ". $angka;
    //     echo "------";
    //     echo  $text;
    //     echo "------" . "<br>";
    // }
    // print_text("koding" , 1);
    // print_text("juang", 2);
    // print_text("Sate", 3);
    
    // return fungsi
        // function menghitung($x, $y) {
        //     $z = $x + $y;
        //     return $z;
        // }

        // $hasil = menghitung(2,5) * 10;
        // echo "hasil dari penjumlahan " . $hasil;

    // scope
    $a = 200;
    $b = 300;

    function menghitung() {
        global $a, $b;

        // $c = $GLOBALS['a] + $GLOBALS['b];
        $c = $a + $b;
        return $c;
    }
    // echo menghitung();

    // anonymous funtion
    $ngetik = function ($text){
    echo $text;
    };

    $ngetik('test');

    ?>
</body>
</html>