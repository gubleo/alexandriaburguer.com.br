<?php
// Inclui os arquivos do PHPMailer diretamente da pasta 'PHPMailer'
require 'form/PHPMailer/src/Exception.php';
require 'form/PHPMailer/src/PHPMailer.php';
require 'form/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$chave = "@z5v7FlI1#h3";
$origem = 'gustavo@craos.net';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $capital = $_POST['capital'];
    $utms = $_POST['utmcrm'];

    // Configurações do PHPMailer
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Port = 587; // Porta para envio sem SSL (com SSL, use 465)
    $mail->Username = 'disparo@alexandriaburgerfranquia.com.br'; // E-mail de disparo
    $mail->Password = $chave;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Utilize STARTTLS para 587 e SSL para 465

    try {
        // Configurações do e-mail
        $mail->setFrom('disparo@alexandriaburgerfranquia.com.br', 'Alexandria Burger');
        $mail->addAddress($origem); // Endereço de destino atualizado
        $mail->isHTML(true);
        $mail->Subject = 'Novo Formulário de Contato';
        $mail->Body = "<h2>Novo Formulário de Contato</h2>
                       <p><strong>Nome:</strong> $name</p>
                       <p><strong>Email:</strong> $email</p>
                       <p>Telefone: $telefone <p>
                       <p>Capital: $capital</p>
                       <p>UTMS: $utms </p> ";

        // Envia o e-mail
        $mail->send();

        // Se enviar com sucesso, grava o log e exibe a mensagem
        $logMessage = "Email enviado com sucesso para gustavo@craos.net em " . date("Y-m-d H:i:s") . "\n";
        file_put_contents('email_status_log.txt', $logMessage, FILE_APPEND);
        echo "<script>alert('Email enviado com sucesso!');</script>";
    } catch (Exception $e) {
        // Se houver erro, grava o erro no log e exibe a mensagem de erro
        $logMessage = "Erro ao enviar email para gustavo@craos.net em " . date("Y-m-d H:i:s") . ": {$mail->ErrorInfo}\n";
        file_put_contents('email_status_log.txt', $logMessage, FILE_APPEND);
        echo "<script>alert('Erro no envio do email.');</script>";
    }
}
