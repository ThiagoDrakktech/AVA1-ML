<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $name = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $adress = $_POST["endereco"];
    $celfone = $_POST["telefone"];
    $email = $_POST["email"];
    $password = $_POST["senha"];

    // Define o nome do arquivo CSV
    $archive = "bd/cadastros.csv";

    // Abre o arquivo para escrita (se não existir, cria)
    $fp = fopen($archive, "a");

    // Escreve os dados no CSV
    fputcsv($fp, [$name, $cpf, $adress, $celfone, $email, $password], ",", '"', "\\");

    // Fecha o arquivo
    fclose($fp);

    echo "Cadastro salvo com sucesso!";
}
?>