<html>
<body>
  
<h2>Cadastro de pessoa</h2>

<form method="post">

<p>Nome: <input type="text" name="nome"/></p><br>
<p>Parte do corpo: <input type="text" name="parte"/></p><br>
<p><input type="submit" name="btnCadastro"/>
</form>

<?php

// aqui adicionamos o arquivo que contém a classe
include ("pessoa.php");

// verifica-se se foi clicado no botão para enviar o formulário com os dados
if (isset($_POST{'btnCadastro'} )) {

// aqui estamos criando um objeto, ou seja, instanciando a classe
pessoa e
22 // passando um parametro para o construtor
23 // nesse caso o nome da pessoa
24 $pessoa = new Pessoa($_POST['nome']);
25
26 // chamamos o método criar_corpo e passamos o valor do campo do
formulário
27 $pessoa->criar_corpo($_POST['parte']);
28
29 // chamamos o método que irá escrever o corpo
30 $pessoa->mostra_corpo();
31
32 // aqui destruimos o objeto para executar o destrutor
33 unset($pessoa);
34 }
35 ?>
36 </body>
37 </html>    
