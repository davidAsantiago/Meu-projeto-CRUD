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

![crud1](https://user-images.githubusercontent.com/126523914/228090152-869fcaf5-4a85-4057-a473-077e3aaa07b8.png)

<p>Após inserir o arquivo de conexão com o banco criamos a variável $cmd que recebeu nosso comando SQL, nele expecificamos os 3 campos e seus respectivos valores. Lembre-se que o campo "id_usuario" é de incremento automático e por isso não precisa de um valor. Depois executamos o comando SQL usando a função mysql_query() e o retorno dessa função foi atribuido à variável $sql, isso pode ser útil para fazermos alguma validação posterior para saber se o comando foi executado com sucesso ou se houve algum erro. Agora que já inserimos um registro no banco, vamos ler (Read) o conteúdo da tabela usuários. Para isso podemos usar o seguinte comando:</p>

![crud2](https://user-images.githubusercontent.com/126523914/228090488-951c09d7-743c-4197-b6b6-654fe24d53a9.png)

<p>Este comando é bem simples e irá retornar todos os campos da tabela usuários. No nosso exemplo, como só temos um registro na tabela, será retornado algo como:</p>

![crud3](https://user-images.githubusercontent.com/126523914/228090946-b53b1812-1846-4be4-8d06-d47c751d960c.png)

<p>Poderíamos também escolher quais campos seriam exibidos, para isto bataria alterar o sinal * (asterísco) que se refere a "todos os campos" para os campos desejados como por exemplo:</p>

![crud4](https://user-images.githubusercontent.com/126523914/228091232-bd0ea4a4-f86f-4422-9f4b-dc32a2bbb735.png)

<p>Vamos agora atualizar (Update) nossa tabela, em nosso exemplo vamos alterar apenas o campo "senha":</p>

![crud5](https://user-images.githubusercontent.com/126523914/228091258-70e812eb-014c-40b0-93c8-e58db58c5e21.png)

<p>Note que colocamos uma cláusula where expecificando que queremos alterar apenas o registro que tiver o id = 1, esta parte é muito importante porque senão todos os possíveis registros da tabela teriam a senha alterada. Por fim vamos excluir (Delete) este registro, para isto vamos usar de novo a cláusula where, para não apagarmos outros registros. Desta vez para variar um pouco vou selecionar o registro que tiver o login igual a "joca":</p>

![crud6](https://user-images.githubusercontent.com/126523914/228091279-742d4190-8dce-4460-badb-b6401f23082e.png)
