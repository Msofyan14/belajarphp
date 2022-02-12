<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decision</title>
</head>
<body>
    <h1>Logika di PHP</h1>
    <?php 
    
    // if dan else
    // operator logika == === > >= < <= !=
    
    // $password = 1234;
    // $password2 = 1234;
    // if($password >= $password2 ) {
    //     echo 'anda berhasil masuk !';
    // } else {
    //     echo ' gagal ! password anda salah !';
    // }
    
    $uang_programmer    = 10000;
    $uang_designer      = 5000;
    $keyboard           = 2000;
    // if ($uang_programmer > $keyboard) {
    //     echo "berhasil di beli";
    // } else if($uang_designer > $keyboard) {
    //     echo "berhasil di beli ";
    // if ($uang_designer >= $keyboard * 4 )  {
    //     echo "di beli dua kali oleh designer";
    // }
    // } else {
    //     echo "gagal di beli uang anda tidak cukup";
    // }


    // && atau ||
        if ($uang_programmer > $keyboard 
        && $uang_designer > $keyboard) {
            echo "boleh beli keyboard";
        } else {
            echo "uang tidak cukup";
        }

    
    ?>
</body>
</html>