<?php
  //Variáveis
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$mensagem</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "arcanjolevi@gmail.com";
  $assunto = "Contato pelo Site";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "From:arcanjolevi@gmail.com"."\r\n".
              "Reply-To:".$email."\r\n".
              "X-Mailer: PHP/".phpversion();

  //Enviar
  if(mail($destino, $assunto, $arquivo, $headers)){
    echo("<script>alert('E-mail enviado com sucesso!');</script>");
  }else{
    echo("<script>alert('Falha ao enviar o e-mail!');</script>");
  }
  
  // echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";
?>