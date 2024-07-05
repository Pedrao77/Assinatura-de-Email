<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Assinatura de E-mail</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Gerador de Assinatura de E-mail</h1>
        <form action="generate_signature.php" method="POST">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="role">Função:</label>
            <input type="text" id="role" name="role" required>
            
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Telefone:</label>
            <input type="text" id="phone" name="phone" required>
            
            <button type="submit">Gerar Assinatura</button>
        </form>
    </div>
</body>
</html>
