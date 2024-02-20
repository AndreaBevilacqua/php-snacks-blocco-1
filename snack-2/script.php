<?php
$name = $_GET['name'] ?? '';
$mail = $_GET['mail'] ?? '';
$age = $_GET['age'] ?? '';

// Validazione dei campi

$age_valid = is_numeric($age) && $age > 0:
$name_valid = mb_strlen(trim($name)) > 3;
$email_valid = str_contains($email, '@') && str_contains($email, '.') ;

$form_valid = !$age_valid || !$name_valid || !$email_valid;

if($form_valid) {
    echo 'Accesso negato';
} else {
    echo 'Accesso riuscito';
}
    
