<?php
$frase = "Meu nome é Adilson" . PHP_EOL;

// Define o nome do arquivo de texto
$nomeArquivo = "meu_arquivo.txt";

// Abre o arquivo em modo de escrita (se não existir, ele será criado)
$arquivo = fopen($nomeArquivo, "a");

// Verifica se o arquivo foi aberto com sucesso
if ($arquivo) {
    // Escreve a frase no arquivo
    fwrite($arquivo, $frase);

    // Fecha o arquivo
    fclose($arquivo);

    echo "Arquivo criado com sucesso!";
} else {
    echo "Não foi possível abrir o arquivo.";
}
?>
