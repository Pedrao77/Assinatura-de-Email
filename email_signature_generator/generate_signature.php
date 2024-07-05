<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $role = $_POST['role'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    // Carregar a imagem de fundo
    $background = imagecreatefrompng('assets/background.png');
    
    // Definir a cor do texto (preto)
    $textColor = imagecolorallocate($background, 0, 0, 0);
    
    // Definir o caminho da fonte
    $fontPath = 'assets/fonts/Roboto-Regular.ttf';
    
    // Adicionar texto à imagem
    imagettftext($background, 24, 0, 200, 100, $textColor, $fontPath, $name);
    imagettftext($background, 20, 0, 200, 150, $textColor, $fontPath, $role);
    imagettftext($background, 20, 0, 200, 200, $textColor, $fontPath, $email);
    imagettftext($background, 20, 0, 200, 250, $textColor, $fontPath, $phone);
    
    // Definir o nome do arquivo de saída
    $outputFile = 'assinatura.png';
    
    // Salvar a imagem
    imagepng($background, $outputFile);
    
    // Liberar a memória
    imagedestroy($background);
    
    // Forçar o download da imagem
    header('Content-Type: image/png');
    header('Content-Disposition: attachment; filename="assinatura.png"');
    readfile($outputFile);
    
    // Deletar o arquivo temporário
    unlink($outputFile);
    exit;
}
?>
