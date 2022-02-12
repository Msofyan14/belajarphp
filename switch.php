<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php 

    $nama = "sofyan";
    switch ($nama) {
        case 'bally':
            echo 'Namanya bally';
            break;
        case 'sofyan':
            echo 'Namanya sofyan';
                break; 
        case 'apip':
            echo 'Namanya apip';
            break;
        default:
            echo 'tidak ada yang sama';
            break;
    }
    
    
    ?>
</body>
</html>