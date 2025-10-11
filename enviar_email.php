<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $to = "contato@ecommx.com.br";
    $subject = "Novo cadastro de e-mail";
    $message = "Um novo visitante se inscreveu com o e-mail: " . $email;
    $headers = "From: no-reply@seudominio.com\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: obrigado.html");
        exit();
    } else {
        header("Location: erro.html");
        exit();
    }
}
?>

