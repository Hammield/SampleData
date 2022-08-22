<?php 
      if (isset($_POST['nome']) && isset($_POST['idade'])){
        limpaPost($nome= $_POST['nome']);
        limpaPost($idade = $_POST['idade']);
        echo "<h2>$nome tem $idade anos</h2>";
      }
      
      function limpaPost($valor){
        $valor = trim($valor);
        $valor = stripslashes($valor);
        $valor = htmlspecialchars($valor);
        return $valor;
      };
    ?>