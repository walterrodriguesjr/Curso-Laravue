<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USER</title>
</head>

<body>
    <h1>Usuários</h1>

    <br>

    <?php
    foreach ($users as $user) {
        echo $user->name . '<br>';
    }
    ?>
    <br>

    @if (count($users) === 1)
        Eu tenho 1 usuário
    @elseif(count($users) > 1)
        Eu tenho vários Usuários
    @else
        Eu não tenho usuários
    @endif

    {{-- @if (count($users) === 1)
        Eu tenho um usuário
    @endif --}}

</body>

</html>
