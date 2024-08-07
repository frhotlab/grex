<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(auth()->loggedIn()): 
        echo "Olá ";
        echo auth()->user()->username;
        ?><a href="logout"> Logout</a>
    <?php
    else:
        echo "Sem user logado";
    endif; ?>
</body>
</html>