<?php

//include("functions.php");

if ($estagio == '1'){
	
if (!ctype_digit($text)) {
	
	$message = "Mensagem enviada contem caracteres não númericos. Por favor digite um CPF sem traços e pontos para iniciar o atendimento.";

}

if (ctype_digit($text)){
	
	$resultado = getDadosdevedor($text);
	
    // Caso ocorra erro ao conectar ao webservice
    if ($resultado != 1) {
        
	$nomecliente = $resultado[1];
	$datavenc = $resultado[4];
	$principal = $resultado[5];
    $principal = floatval ($principal);
    
    if($nomecliente != ''){
	
        // Gravar Cliente entrando no bot
        date_default_timezone_set('America/Sao_Paulo');

        $horario = date("y-m-d H:i:s");

        $db2 = mysqli_connect("db.db.db.db", "db", "db", "db"); 

        mysqli_query($db2, "INSERT INTO CANAL_LOG (canal, horario, contratante, cpfcliente) VALUES ('CHAT','$horario','abc','$text');"); 
     
    // Atualiza estagio
	$rv = mysqli_query($db, "UPDATE db.tabela SET estagio = '2', cpf = '$text', datapagto = '$resultado[4]', numcredor = '$resultado[2]', numdivida = '$resultado[3]', unixtime = $currentunix WHERE senderid = $userId;");
	
    // Caso ocorra erro ao atualizar o estagio ou conectar com o banco de dados-- 
    if ($rv == false ){
        // Mensagem de erro
        $message = "Erro de conexão com o servidor. Tente novamente.";  
    }
        
    else {
        
        $message = "Olá, $nomecliente. Você possui uma fatura em atraso que venceu no dia $datavenc com o valor de ".number_format($principal, 2, ',', '.').".<br>Digite a opção desejada para receber sua fatura<br><br>1. E-MAIL<br>2. SMS";
        
    }
}
    else {
    
    $message = "O CPF não foi encontrado em nosso sistema. Tente novamente com outro CPF";
        
    }

}
    
    else {
        
        $message = "Serviço temporariamente indisponível. Tente novamente mais tarde.";
        
    }
}
}
?>