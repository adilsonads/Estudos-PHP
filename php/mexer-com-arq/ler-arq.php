<?php
// lê o conteúdo do arquivo para uma string

// Define o caminho completo do arquivo que será lido
$filename = "meu_arquivo.txt";

// Abre o arquivo no modo de leitura
$handle = fopen($filename, "r");

// Verifica se o arquivo foi aberto com sucesso
if ($handle) {
    // Obtém o tamanho do arquivo
    $filesize = filesize($filename);
    
    // Lê o conteúdo do arquivo usando o identificador de arquivo e o tamanho do arquivo
    $conteudo = fread($handle, $filesize);
    
    // Fecha o arquivo
    fclose($handle);
    
    // Exibe o conteúdo do arquivo
    echo $conteudo;
} else {
    // Exibe uma mensagem de erro se não foi possível abrir o arquivo
    echo "Não foi possível abrir o arquivo.";
}
?>
