<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login EZ's Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class='container'>
        <div>
            <div>
                <div>
                    <h1 class='h1'>Login EZ's Store</h1>
                </div>
                <form action='../db/verificar.php' method='post'>
                    <div>
                        <label>Usuário</label>
                        <input type="text" placeholder="Insira seu nome de usuário" name='email'>
                    </div>
                    <div>
                        <label>Senha</label>
                        <input type="pass" placeholder="Insira sua senha" name='pass'>
                    </div>
                    <div>
                        <button type='submit'>Log In</button>
                        <a href="cadastrar.php">Criar conta</button>
                    </div>
                    </div>
                </form>
        </div>
    </main>
</body>
</html>