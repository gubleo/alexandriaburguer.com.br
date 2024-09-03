<?php

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

date_default_timezone_set('America/Sao_Paulo');

if ($_POST['nome'] == "" || $_POST['email'] == "" || $_POST['telefone'] == "") {
} else {
  $nome = $_POST['nome'];

  $email = $_POST['email'];

  $telefone = $_POST['telefone'];

  $capital = $_POST['capital'];

  $utms = $_POST['utmcrm'];

  //die(var_dump($_POST));

  require_once("phpmailer/PHPMailerAutoload.php");

  $mail = new PHPMailer(true);

  $mail->IsSMTP();

  $charset   = 'UTF-8';

  $host       = 'smtp.hostinger.com';

  $smtpauth   = true;

  // PORTA 587 - SEM SSL
  $port       = 587;

  // PORTA 465 - COM SSL
  //$port       = 465;

  $username   = 'disparo@alexandriaburgerfranquia.com.br';

  $password   = '@z5v7FlI1#h3';

  $debug      = 0;



  // MENSAGEM
  $mensagem = "";

  $mensagem .= "Nome: {$nome} <br/> ";

  $mensagem .= "Email: {$email} <br/> ";

  $mensagem .= "Telefone: {$telefone} <br/> ";

  $mensagem .= "Capital: {$capital} <br/> ";

  $mensagem .= "UTMS: {$utms} <br/> ";

  // CONFIGURAÇÕES ENVIO
  $mail->CharSet     = $charset;

  $mail->Host        = $host;

  $mail->SMTPAuth    = $smtpauth;

  $mail->Port       = $port;

  $mail->Username    = $username;

  $mail->Password    = $password;

  $mail->SMTPDebug  = $debug;

  $mail->SetFrom('disparo@alexandriaburgerfranquia.com.br', 'Leads Alexandria Burger');

  $mail->AddReplyTo('disparo@alexandriaburgerfranquia.com.br', 'Leads Alexandria Burger');

  $mail->AddAddress('leads@alexandriaburger.com.br', 'Leads Alexandria Burger');

  //$mail->AddAddress('administrativo@alexandriaburger.com.br', 'Leads Alexandria Burger');

  //$mail->AddAddress('keyla@agenciad3b.com.br', 'Leads Alexandria Burger');

  $mail->Subject = 'Leads Alexandria Burger';

  $mail->MsgHTML($mensagem);

  $mail->Send();

  //die(var_dump($mail));

  // if (!$mail->Send()) {
  //     echo "Message was not sent";
  //     echo "Mailer Error: " . $mailer->ErrorInfo;
  //     exit;
  // } else {

  //     header("location: ../obrigado.php");
  //     echo 'email enviado';
  // }


  // FAVOR NAO MEXER NOS CODIGOS ABAIXOS
  require_once('connection.php');

  $id_cliente = 10397;
  $nome_cliente = "Leads Alexandria Burger";
  $email_lead = $_POST['email'];
  $telefone_lead = $_POST['telefone'];


  $utm_medium = $_POST['utmmedium'];
  $utm_campaign = $_POST['utmcampaign'];
  $utm_content = $_POST['utmcontent'];
  $data = date("d/m/Y");

  try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare('INSERT INTO tb_Leads (cl_idClientes, cl_Nome, cl_Email, cl_Telefone, cl_Cidade, cl_UF, cl_HorarioContato, cl_DataCadastro, cl_CapitalInvestimento, cl_InicioNegocio, cl_UTM_Medio, cl_UTM_Campaign, cl_UTM_Content, cl_UTM_Source) VALUES(:cl_idClientes, :cl_Nome, :cl_Email, :cl_Telefone, :cl_Cidade, :cl_UF, :cl_HorarioContato, :cl_DataCadastro, :cl_CapitalInvestimento, :cl_InicioNegocio, :cl_UTM_Medio, :cl_UTM_Campaign, :cl_UTM_Content, :cl_UTM_Source)');
    $stmt->execute(array(
      ':cl_idClientes' => $id_cliente,
      ':cl_Nome' => '',
      ':cl_Email' => '',
      ':cl_Telefone' => '',
      ':cl_Cidade' => '',
      ':cl_UF' => '',
      ':cl_HorarioContato' => '',
      ':cl_DataCadastro' => $data,
      ':cl_CapitalInvestimento' => $capital,
      ':cl_InicioNegocio' => '',
      ':cl_UTM_Medio' => $utm_medium,
      ':cl_UTM_Campaign' => $utm_campaign,
      ':cl_UTM_Content' => $utm_content,
      ':cl_UTM_Source' => ''
    ));

    $contagem = $stmt->rowCount();

    if ($contagem >= 1) {

      header('Location: ../obrigado.php');
    } else {

      echo "Algo deu errado!";
    }
  } catch (PDOException $e) {

    echo 'Error: ' . $e->getMessage();
    return false;
  }

  // INTEGRAÇÃO RD CRM Alexandria
  $urlOportunidade = "https://crm.rdstation.com/api/v1/deals?token=63c1bc816e8f5a002c59cccb";
  $token = "63c1bc816e8f5a002c59cccb";
  $organizacao = "63c970ea8eeddc000c3fc44c";
  $deal_stage_id = "63c1bcc28c4bd30010e3ba11";
  $user_id = "63d7f6ea7dc02a000c2f3438";
  $idcapitalinvestimento = "63ef82c1df3a720017a1f1db";

  $data = '
{
    "token": "' . $token . '",
    "deal": {
      "name": "' . $nome . '",
          "user_id": "' . $user_id . '",
      "rating": 1,
      "deal_stage_id": "' . $deal_stage_id . '",
      "deal_custom_fields": [
        {
          "custom_field_id": "' . $idcapitalinvestimento . '",
          "value": "' . $capital . '"
        }
      ]
    },
    "contacts": [
      {
        "name":  "' . $nome . '",
              "title":  "' . $nome . '",
              "notes": "lead",
        "skype":  "' . $email . '",
        "emails": [
          {
             "email":  "' . $email . '"
                  }
        ],
        "phones": [
          {
            "phone":  "' . $telefone . '",
                      "type": "cellphone"
          }
        ]
      }
    ],
      "organization": {
              "_id": "' . $organizacao . '"
    }
  }';

  $ws = curl_init($urlOportunidade);
  curl_setopt($ws, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ws, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ws, CURLOPT_POST, 1);
  // curl_setopt($ws, CURLOPT_POSTFIELDS, $postdata);
  curl_setopt($ws, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ws, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ws, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ws, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
  $resultPerson = curl_exec($ws);

  // var_dump($teste);
  // var_dump($resultPerson);

}
