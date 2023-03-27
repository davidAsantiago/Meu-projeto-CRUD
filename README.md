<h1> Meu projeto CRUD </h1> 

<h3><strong>O que é CRUD?</strong></h3>

<p>CRUD é a composição da primeira letra de 4 funções básicas de um sistema que trabalha com banco de dados.<p>

✅ C: Create (criar) - criar um novo registro.<br>
👁 R: Read (ler) - ler (exibir) as informações de um registro.<br>
♻️ U: Update (atualizar) - atualizar os dados do registro.<br>
❌ D: Delete (apagar) - apagar um registro.<br>

 <h1>Comandos básicos de MySQL</h1>
<p> Depois de aprender a se conectar com um banco de dados MySQL, vamos agora testar algumas interações na prática. As 4 operações básicas utilizadas em bancos de dados são conhecidas como CRUD (Create, Read, Update e Delete) que são: Criar, Ler, Atualizar e Apagar respectivamente. Para começar vamos criar uma tabela em nosso banco chamada "usuarios", podemos inserir o comando SQL abaixo um algum gerenciador de banco como o phpMyAdmin por exemplo: </p><br>

CREATE TABLE usuarios ( <br>
    id_usuario INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY, <br>
    nome VARCHAR(30), <br>
    login VARCHAR(30), <br>
    senha VARCHAR(30) <br>
); <br>
