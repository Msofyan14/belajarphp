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
    function print_text($text, $angka) {
        $text = 'gedung ' . $text . " ". $angka;
        echo "------";
        echo  $text;
        echo "------" . "<br>";
    }
    print_text("koding" , 1);
    print_text("juang", 2);
    print_text("Sate", 3);
    
    ?>
</body>
</html>