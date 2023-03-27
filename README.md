<h1> Meu projeto CRUD </h1> 

<h3><strong>O que é CRUD?</strong></h3>

<p>CRUD é a composição da primeira letra de 4 funções básicas de um sistema que trabalha com banco de dados.<p>

✅ C: Create (criar) - criar um novo registro.<br>
👁 R: Read (ler) - ler (exibir) as informações de um registro.<br>
♻️ U: Update (atualizar) - atualizar os dados do registro.<br>
❌ D: Delete (apagar) - apagar um registro.<br>

 <h1>Comandos básicos de MySQL</h1>
<p> Depois de aprender a se conectar com um banco de dados MySQL, vamos agora testar algumas interações na prática. As 4 operações básicas utilizadas em bancos de dados são conhecidas como CRUD (Create, Read, Update e Delete) que são: Criar, Ler, Atualizar e Apagar respectivamente. Para começar vamos criar uma tabela em nosso banco chamada "usuarios", podemos inserir o comando SQL abaixo um algum gerenciador de banco como o phpMyAdmin por exemplo: </p>

![crud](https://user-images.githubusercontent.com/126523914/228089993-55455e2b-be76-4600-b950-411f3e75df19.png)

<p> Nesta tabela temos 4 campos sendo que o primeiro deles (id_usuario) é do tipo inteiro, é a Chave Primária da tabela, não pode ter valor nulo e irá ter um incremento automático (primeiro registro começa com 1, segundo 2, etc). Os outros três campos são do tipo varchar e aceitam até 30 caracteres. Com nossa tabela criada, vamos usar nosso exemplo de Conexão com banco MySQL anterior e inserir (Create) alguns valores em nosso banco, para isso crie um arquivo chamado crud.php (ou outro nome de sua preferência) e insira o código: </p>
