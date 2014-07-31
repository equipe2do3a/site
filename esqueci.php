<?php
$email = $_POST['email'];
$senha = "oláusuario";

$hash = '$2a$08$Cf1f11ePArKlBJomM0F6a.EyvTNh6W2huyQi5UZst5qsHVyi3w5x.';
if (crypt($senha, $hash) === $hash) {
echo 'Senha OK!';
} else {
echo 'Senha incorreta!';
}