<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar na Padaria dos Sonhos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class='d-flex justify-content-center align-items-center vh-100 bg-dark text-light' >
    <main class='container'>
        <div class='row justify-content-center'>
            <div class='col-md-4 card shadow-sm p-4'>
                <div class='text-center'>
                    <h1 class='h1'>Login</h1>
                </div>
                <form action='verificar.php' method='post'>
                    <div class='mb-3'>
                        <label class='form-label'>Usuário</label>
                        <input class='form-control'type="text" placeholder="Insira seu nome de usuário" name='user'>
                    </div>
                    <div class='mb-3'>
                        <label class='form-label'>Senha</label>
                        <input class='form-control' type="pass" placeholder="Insira sua senha"
                        name='pass'>
                    </div>
                    <div class='d-grid'>
                        <button type='submit' class="btn btn-outline-secondary">Log In</button>
                        <a href="cadastrar.php" class="btn btn-outline-secondary">Criar conta</button>
                    </div>
                    </div>
                </form>
        </div>
    </main>
</body>
</html>