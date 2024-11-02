<?php
// Inclui os arquivos do PHPMailer diretamente da pasta 'PHPMailer'
require 'form/PHPMailer/src/Exception.php';
require 'form/PHPMailer/src/PHPMailer.php';
require 'form/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obter os dados do formulário
    $name = $_POST['NOME'];
    $telefone = $_POST['TELEFONE'];
    $capital = $_POST['CAPITAL'];
    $cidade = $_POST['CIDADE'];
    $email = $_POST['EMAIL'];

    // Configurações do PHPMailer
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();

    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Port = 587; // Porta para envio sem SSL (com SSL, use 465)
    $mail->Username = 'disparo@alexandriaburgerfranquia.com.br'; // E-mail de disparo
    $mail->Password = '@z5v7FlI1#h3';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Utilize STARTTLS para 587 e SSL para 465

    try {
        // Configurações do e-mail
        $mail->setFrom('disparo@alexandriaburgerfranquia.com.br', 'Alexandria Burger');
        $mail->addAddress('gustavo@craos.net'); // Endereço de destino atualizado
        $mail->isHTML(true);
        $mail->Subject = 'Novo Formulário de Contato através do Site';
        $mail->Body = "<h2>Novo Formulário de Contato</h2>
                       <p><strong>Nome:</strong> $name</p>
                       <p><strong>Telefone:</strong> $telefone</p>
                       <p><strong>Email:</strong> $email</p>
                       <p><strong>Cidade:</strong> $cidade</p>
                       <p><strong>Capital:</strong> $capital</p>";

        // Envia o e-mail
        $mail->send();

        // Se enviar com sucesso, grava o log e redireciona para a página de agradecimento
        $logMessage = "Email enviado com sucesso para gustavo@craos.net em " . date("Y-m-d H:i:s") . "\n";
        file_put_contents('email_status_log.txt', $logMessage, FILE_APPEND);
        echo "<script>
                alert('Email enviado com sucesso! Em breve retornaremos.');
                window.location.href = 'obrigado.php';
              </script>";
    } catch (Exception $e) {
        // Em caso de erro, grava o erro no log e exibe um alerta
        $logMessage = "Erro ao enviar email para gustavo@craos.net em " . date("Y-m-d H:i:s") . ": {$mail->ErrorInfo}\n";
        file_put_contents('email_status_log.txt', $logMessage, FILE_APPEND);
        echo "<script>alert('Erro no envio do email. Por favor, tente novamente.');</script>";
    }
}
