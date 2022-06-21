<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USER</title>
</head>

<body>
    <x-user></x-user>

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

    <br>

    {{-- @if (count($users) === 1) 
        Eu tenho um usuário
    @endif --}}

    @for ($i = 0; $i <= count($users); $i++)
        {{ $i }}
    @endfor

    <br>

    @foreach ($users as $user)
        {{ $user->name }} {{ $user->email }}<br>

        @if ($user->id === 1)
        @break
            
        @endif

    @endforeach

    <br>

    @forelse ($users as $user)
        {{ $user->name }} {{ $user->email }}<br>
    @empty
        Nenhum usuário encontrado
@endforelse

<br>


</body>

</html>
