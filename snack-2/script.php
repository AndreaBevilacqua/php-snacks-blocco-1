<?php
$name = $_GET['name'] ?? '';
$mail = $_GET['mail'] ?? '';
$age = $_GET['age'] ?? '';

// Verifico lughezza 
if(strlen($name) > 3){

    // Verifica formato dell'email
    if (filter_var($mail, FILTER_VALIDATE_EMAIL) && strpos($mail, '.') !== false && strpos($mail, '@') !== false) {

        // Verifica se 'age' è un numero
        if (is_numeric($age)) {
            echo "Accesso riuscito";
        }
    }
} else {
    echo "Accesso negato";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
    
