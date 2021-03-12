<?php

include_once('conexao.php');

if (
    isset($_POST['nome']) && isset($_POST['sobrenome'])
    && isset($_POST['email']) && isset($_POST['telefone'])
    && isset($_POST['mensagem'])
) {
    $nome =      $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email =     $_POST['email'];
    $telefone =  $_POST['telefone'];
    $mensagem =  $_POST['mensagem'];

    $sql = "insert into contact (nome, sobrenome, email, telefone, mensagem) values ('$nome','$sobrenome', '$email', '$telefone', '$mensagem')";
    $result = $conn->query($sql);

    if ($result) {
?>
        <div style=" margin: 0;
                     padding: 0;
                     box-sizing: border-box;
                     display: flex;
                     font-size: 30px;
                     justify-content: center;
                     align-items: center;
                     min-height: 100vh;
                     background: #131516;
                     color: #9774fa;">
            <h2>
                Mensagem enviada com sucesso!
                <h2>
        </div>

<?php

        header("Refresh:3;index.php");
    } else {
        echo "Houve um erro";
    }
}
?>