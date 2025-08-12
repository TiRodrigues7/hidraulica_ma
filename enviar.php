<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar dados do formulário
$nome       = htmlspecialchars($_POST['nome']);
$sobrenome  = htmlspecialchars($_POST['sobrenome']);
$email      = htmlspecialchars($_POST['email']);
$mensagem   = htmlspecialchars($_POST['mensagem']);
    
    // Criar uma instância do PHPMailer    
$mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'mail.cadbit.com.br';
    $mail->SMTPAuth = true;
    $mail->Username = 'cadbit@cadbit.com.br';
    $mail->Password = 'Bit191820@CadtdN@';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;    // Habilitar TLS/SSL
    $mail->Port       = 465;                            // Porta TCP para SSL (SMTP seguro)


    // Recipiente
    $mail->setFrom('cadbit@cadbit.com.br', 'Hidráulica M.A.');
    $mail->addAddress('tirodrigues7@hotmail.com', 'Hidráulica M.A.');

    // Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->Subject = "Mensagem de contato: $nome $sobrenome";
    $mail->Body    = "<b>$mensagem <br><br> Email para contato: $email";
    $mail->AltBody = 'Texto alternativo para e-mail sem suporte a HTML';


        // Enviar e-mail
        $mail->send();

        // Redirecionar para página de agradecimento
        header('Location: obrigado.php');
        exit();
    } catch (Exception $e) {
        echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
    }
} else {
    // Se o método não for POST, redirecionar para a página do formulário
    header('Location: contato.php');
    exit();
}
?>