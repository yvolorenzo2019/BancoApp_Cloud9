    
<?php
    try{
        $conexao = mysqli_connect("localhost","yvolorenzo","","Mayarao");
                                 //servidor    usuario  senha  banco
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $query="insert into tb_pessoa values (null,'$nome','$email')";
        
        mysqli_query($conexao,$query);
        
        echo "Cadastro Realizado com Sucesso!";
        
    }catch (Exception $e){
        
        echo "Erro ao conectar: ".$e;
        
    }