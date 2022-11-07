<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Highgarden</title>
    <link rel="stylesheet" href="/login_admin/style.css" />
</head>

<body>
    <form action="{{ route('admin.login.do') }}" method="post">
        @csrf
        <label for="cpf" class="">Endereço de cpf</label>
        <input type="cpf" name="cpf" id="cpf" value="" placeholder="Seu cpf" required>

        <label for="password" class="">Password</label>
        <input type="Password" name="Password" id="Password" placeholder="Password" required>

        <button class="button" type="submit"> Login</button>
        <a href="{{ route('admin.logout') }}"> logout </a>

    </form>


</body>

</html>
