<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <h2>Entre em Contato</h2>
        <form action="./form.php" method="post">
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="nome" required="required">
                        <span class="text">Nome</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="sobrenome" required="">
                        <span class="text">Sobrenome</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="email" required="required">
                        <span class="text">Email</span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="telefone" required="">
                        <span class="text">Telefone</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row100">
                <div class="col">
                    <div class="inputBox textarea">
                        <textarea name="mensagem" required="required"></textarea>
                        <span class="text">Escreva sua mensagem</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="row100">
                <div class="col">
                    <input type="submit" value="Enviar">
                </div>
            </div>
        </form>
    </div>
</body>

</html>