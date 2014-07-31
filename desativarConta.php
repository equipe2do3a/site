<?php
  require_once ("conexao/conecta.inc");
  $sql = "SELECT ID_USUARIO FROM usuarios";
  $result = mysql_query($sql);
  
  if ($result === TRUE){
      
  }
  /*
  if($num_regs === 0){
  echo 'Não foram encontrados usuarios com esse nome';
  }else{
  echo '<ul>';
  while ($dados = mysql_fetch_assoc($result)){
  $nome = $dados['NOME_USUARIO'];
  $link = "http://localhost/back/tcc/usuariosDesativados.php?id=".$dados['COD_USUARIO'];
  echo '<li>';
  echo '<a href = "'.$link.'"title = "'.$nome.'">'.$nome.'</a></br>';
  }
  }
   */