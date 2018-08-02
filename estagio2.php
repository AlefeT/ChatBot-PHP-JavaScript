<?php

//include("functions.php");

if ($estagio == '2'){
	
if (!ctype_digit($text)) {
	
	$message = "Mensagem enviada contem caracteres não númericos. Por favor digite um número válido sem pontos ou traços.";

}

if (ctype_digit($text)){
	
	if($text < 1 || $text > 2){
		
		$message = "Número inválido. Por favor digite um número válido (1 ou 2).";
		
	}
	
	if($text == 1){
		
		$message = "Entendido, por favor digite o e-mail no qual você gostaria de receber o boleto.";
		
		$rv = mysqli_query($db, "UPDATE db.tabela SET tipoenvio = 'E', estagio = '3', unixtime = $currentunix WHERE senderid = $userId;");
        
        // Caso ocorra erro ao atualizar o estagio ou conectar com o banco de dados-- 
        if ($rv == false ){
        // Mensagem de erro
        $message = "Erro de conexão com o servidor. Tente novamente.";  
        }
		else {
            
            
            
        }
	}
	
	if($text == 2){
		
		$message = "Entendido, por favor digite o número com (DDD) no qual você gostaria de receber a linha digitável.";
	
		$rv = mysqli_query($db, "UPDATE db.tabela SET tipoenvio = 'S', estagio = '3', unixtime = $currentunix WHERE senderid = $userId;");
        
        // Caso ocorra erro ao atualizar o estagio ou conectar com o banco de dados-- 
        if ($rv == false ){
        // Mensagem de erro
        $message = "Erro de conexão com o servidor. Tente novamente.";  
        }
        
        else {
            
            
            
        }
	}
	
}

}

?>