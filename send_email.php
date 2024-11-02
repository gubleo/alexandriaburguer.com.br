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
        $mail->setFrom('disparo@alexandriaburgerfranquia.com.br', 'Alexandria Burger | Novo Lead');
        $mail->AddAddress('leads@alexandriaburger.com.br', 'Leads Alexandria Burger');
        $mail->addBCC('gustavo@craos.net', 'Dev. ExpandNow');
        $mail->addBCC('fabricio.alexandria@gmail.com', 'Fabricio ExpandNow');
        $mail->isHTML(true);
        $mail->Subject = 'Novo Lead Recebido - Formulário de Contato no Site Alexandria Burger';
        $mail->Body = "
    <div style='font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif; color: #333; max-width: 600px; margin: auto; border: 1px solid #e0e0e0; padding: 20px; border-radius: 12px; background-color: #fafafa;'>
        
        <!-- Cabeçalho com Logotipo -->
        <header style='padding-bottom: 20px; border-bottom: 1px solid #e0e0e0; text-align: left;'>
            <img src='https://static.ifood-static.com.br/image/upload/t_high/logosgde/50aa2b13-8b29-4abf-a328-61427dac0058/202405191537_d0ov_i.jpg' alt='Alexandria Burger' style='width: 100px; height: auto; border-radius: 8px;' />
            <h1 style='margin: 10px 0; font-size: 24px; color: #333;'>Novo Lead Recebido</h1>
            <p style='font-size: 14px; color: #888;'>Alexandria Burger - Formulário de Contato</p>
        </header>
        
        <!-- Introdução -->
        <section style='padding: 20px 0; line-height: 1.8; text-align: left;'>
            <p style='font-size: 16px; color: #333;'>Você recebeu um novo contato pelo formulário do site <strong>alexandriaburguer.com.br</strong>.</p>
            <p style='font-size: 14px; color: #777; margin-top: 10px;'><em>Por favor, entre em contato com o cliente em breve para reforçar nossa excelência no atendimento.</em></p>
        </section>
        
        <!-- Detalhes do Lead -->
        <section style='padding: 20px; background-color: #ffffff; border: 1px solid #e0e0e0; border-radius: 8px;'>
            <h3 style='margin: 0 0 15px; font-size: 18px; color: #333;'>Informações do Cliente</h3>
            <table style='width: 100%; border-collapse: collapse; font-size: 14px; color: #555;'>
                <tr style='border-bottom: 1px solid #e0e0e0;'>
                    <td style='padding: 8px; font-weight: 500;'>Nome Completo:</td>
                    <td style='padding: 8px;'>$name</td>
                </tr>
                <tr style='border-bottom: 1px solid #e0e0e0;'>
                    <td style='padding: 8px; font-weight: 500;'>Telefone de Contato:</td>
                    <td style='padding: 8px;'>$telefone</td>
                </tr>
                <tr style='border-bottom: 1px solid #e0e0e0;'>
                    <td style='padding: 8px; font-weight: 500;'>E-mail:</td>
                    <td style='padding: 8px;'>$email</td>
                </tr>
                <tr style='border-bottom: 1px solid #e0e0e0;'>
                    <td style='padding: 8px; font-weight: 500;'>Cidade:</td>
                    <td style='padding: 8px;'>$cidade</td>
                </tr>
                <tr>
                    <td style='padding: 8px; font-weight: 500;'>Capital Disponível:</td>
                    <td style='padding: 8px;'>$capital</td>
                </tr>
            </table>
        </section>
        
        <!-- Observações e Ações -->
        <section style='margin-top: 20px; padding: 20px; background-color: #f9f9f9; border-radius: 8px; color: #333; text-align: left;'>
            <h4 style='margin: 0 0 10px; font-size: 16px;'>Observações Importantes</h4>
            <p style='font-size: 14px; color: #555;'>
                • Verifique os dados e responda ao cliente em até 24 horas.<br>
                • Registre interações e atualizações no histórico de contatos.<br>
                • Mantenha o alto padrão de atendimento para garantir uma experiência positiva.
            </p>
        </section>
        
        <!-- Rodapé -->
        <footer style='margin-top: 20px; padding: 15px; font-size: 12px; color: #888; border-top: 1px solid #e0e0e0; text-align: left;'>
            <p style='margin: 0;'>Este e-mail foi gerado automaticamente pelo sistema Alexandria Burger.</p>
            <p style='margin: 0;'>Para suporte, entre em contato pelo e-mail de atendimento oficial.</p>
        </footer>
    </div>";

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
