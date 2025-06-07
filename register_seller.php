<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $name = $_POST["nome_vendedor"];
    $cpf = $_POST["cpf_vendedor"];
    $adress = $_POST["endereco_vendedor"];
    $celfone = $_POST["telefone_vendedor"];
    $email = $_POST["email_vendedor"];
    $password = $_POST["senha_vendedor"];
    $bank = $_POST["banco"];
    $branch = $_POST["agencia"];
    $account = $_POST["conta"];

    // Define o nome do arquivo CSV
    $archive = "bd/cadastros_vendedor.csv";

    // Abre o arquivo para escrita (se não existir, cria)
    $fp = fopen($archive, "a");

    // Escreve os dados no CSV
    fputcsv($fp, [$name, $cpf, $adress, $celfone, $email, $password], ",", '"', "\\");

    // Fecha o arquivo
    fclose($fp);

    echo "Cadastro salvo com sucesso!";
    <p><a href="index.html">Voltar para o início</a></p>
}
?>