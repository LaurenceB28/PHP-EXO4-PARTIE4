<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function identite ($nom, $prenom, $age){

    return $nom .''. $prenom .''. $age ;
}

$réponse = identite('Bridoux','laurence','39' );
echo 'Bonjour' . $nom . $prenom . 'tu as'. $age .'ans';

?>
</body>
</html>