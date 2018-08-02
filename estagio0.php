<?php
if ($counter==0){
    
	$rv = mysqli_query($db, "INSERT INTO db.tabela(senderid, estagio, unixtime) VALUES ('$userId','1', $currentunix);");
    
    // Caso ocorra erro ao atualizar o estagio ou conectar com o banco de dados-- 
    if ($rv == false ){
        // Mensagem de erro
        $message = "Erro de conexão com o servidor. Tente novamente.";  
    }
    
    else {
        
        $message = "Olá, sou Carol sua agente digital abc. Para que possamos começar seu atendimento, por favor digite seu CPF/CNPJ, sem pontos ou traços.";
        
    }
}

?>