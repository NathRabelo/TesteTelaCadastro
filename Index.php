Index.php
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Sistema Básico de Cadastro</title>
        <link rel="stylesheet" href="css/estilo.css"> 
    </head>
    <body> 
    <div class="container">
        <nav>
            <ul class="menu">
                <a href="index.php"><li>Cadastro</li>
                <a href="consultas.php"><li>Consultas</li>
            </ul>
        </nav>
        <section>
            <h1>Cadastro de Usuarios</h1>
            <hr><br><br>

            <form method="post" action="processa.php">
                <input type="submit" value="SALVAR" class="btn">
                <input type="reset" value="LIMPAR" class="btn">
                <br><br>

                Nome<br>
                <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>

                Email<br>
                <input type="email" name="email" class="campo" maxlength="50"><br>

                Profissão<br>
                <input type="email" name="profissao" class="campo" maxlength="50"><br>
        </section>
    </div>
    </body>
</html>