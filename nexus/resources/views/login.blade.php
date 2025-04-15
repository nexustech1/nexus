<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Savor Bistró</title>
    @vite(['resources/css/login.css', 'resources/js/login.js'])
</head>
<body>
    <main>
        <section class="login">
            <h1 class="titulo">Bem-Vindo ao</h1>
            <h1 class="titulo">Savor Bistró</h1>
            <p class="paragrafo">Faça o login para acessar sua conta</p>
            <form action="/site" method="POST">
                <input type="email" name="email" id="email" placeholder="E-mail">
                <input type="password" name="senha" id="email" placeholder="Senha">
                <div class="botoes">
                    <button type="submit" class="botao cadastro">Cadastrar</button>
                    <button type="submit" class="botao entrar">Entrar</button>
                </div>
            </form>
        </section>
    </main>
    <script>
        document.getElementById('entrarBtn').addEventListener('click', function() {
            window.location.href = './site.blade.php'; // Or the correct path to your index file
        });
    </script>
</body>
</html>
