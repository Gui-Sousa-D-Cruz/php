<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
<?php
//Caminho do Certificado
$pfxCertPrivado = 'IOX_certificado.pfx';
$cert_password  = '726726';

if (!file_exists($pfxCertPrivado)) {
   echo "Certificado não encontrado!! " . $pfxCertPrivado;
}

$pfxContent = file_get_contents($pfxCertPrivado);

if (!openssl_pkcs12_read($pfxContent, $x509certdata, $cert_password)) {
   echo "O certificado não pode ser lido!!";
} else {

   $CertPriv   = array();
   $CertPriv   = openssl_x509_parse(openssl_x509_read($x509certdata['cert']));

   $PrivateKey = $x509certdata['pkey'];

   $pub_key = openssl_pkey_get_public($x509certdata['cert']);
   $keyData = openssl_pkey_get_details($pub_key);

   $PublicKey  = $keyData['key'];
  
   echo '--- Dados que vamos usar ---'.'<br>'.'<br>';
   //echo $CertPriv['subject']['CN'].'<br>';   //Razão Social e CNPJ / CPF
   echo('CNPJ: ');                  
   echo substr($CertPriv['subject']['CN'], -14).'<br>';
   echo('Validade: ');
   echo date('d/m/Y', $CertPriv['validTo_time_t'] ).'<br>'; //Validade
  
}
?>
</body>
</html>