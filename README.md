# Api de ingressos
## Laravel Framework versão 5.8,pacote de autenticação Laravel/Passport versão 7.0 e banco de dados MySQL

#### Descrição:

###### a Api é responsável por gerenciar um contexto de venda de ingressos para jogos de futebol, eventos e shows que podem ser requisitados por diferentes clientes em diferentes localidades para diferentes atrações, oferecendo assim um ótimo ambiente para gerenciar seu uso e suas demandas.
##### Parâmetros de entrada: requisições http no formato JSON. Parâmetros de saída : objeto de data no formato JSON

#### Instruções: 
1) Dar clone no projeto.
2) Instalar as dependências: php composer install
3) Configurar acesso ao banco de dados no arquivo de configuração .env e criar o DATABASE api no banco de dados local.
4) Rodar os comandos para limpar e popular o banco de dados: php artisan migrate:fresh , php artisan db:seed.
5) Iniciar o serviço de autenticação do passport : php artisan passport:install.
6) Iniciar o serviço da api : php artisan serve.
7) Usar o POSTMAN ou qualquer outro  serviço de requisições as API's.

#### Estrutura:
    
    Há no total quatro grupos de rotas, rotas auth, rotas de evento, rotas de cliente e rotas de ingresso.
    
#### Rotas Auth: 
   ###### POST localhost:8000/auth/registrar. Parâmetros: 'name','email','password', 'password_confirmation'. Objetivo: criar um novo registro na tabela clientes com as credenciais informadas nos parâmetros.
   ###### POST localhost:8000/auth/login. Parâmetros: 'email','password'. Objetivo: usar as credenciais informadas para ter acesso ao token de acesso gerado pelo passport.
    Caso não se queira registrar um cliente próprio para usar o serviço da API pode-se usar qualquer um dos três usuários já cadastrados no banco de dados: 
        name: cliente01, email: cliente01@gmail.com , password : cliente123;
        name: cliente02, email: cliente02@gmail.com , password : cliente123;
        name: cliente03, email: cliente03@gmail.com , password : cliente123;
   ###### POST localhost:8000/auth/logout. Parâmetros:'token'. Objetivo: revogar o token informado por parâmetro
   
#### Rotas Evento:
   ###### GET localhost:8000/evento. Parâmetros: nenhum. Objetivo: ter acesso a lista de todos os eventos cadastrados no DATABASE
   ###### GET localhost:8000/evento-por-id/{id?}. Parâmetros: id(opcional) Objetivo: ter acesso ao evento cadastrado no DATABASE que possui este id
   ###### POST localhost:8000/novo-evento. Parâmetros:'name', 'descricao', 'categoria_id','data_evento','cidade_id' . Objetivo: salvar um novo evento no DATABASE com os parâmetros informados.
   ###### PUT localhost:8000/editar-evento. Parâmetros:'name', 'descricao', 'categoria_id','data_evento','cidade_id' . Objetivo: salvar um  evento já existente no DATABASE com os parâmetros informados.
   ###### DELETE localhost:8000/deletar-evento Parâmetros: 'id'. Objetivo: deletar o evento de id informado por parâmetro
   ###### GET localhost:8000/evento-da-cidade/{cidade_id?} Parâmetros: 'cidade_id'. Objetivo: exibir lista de todos os objetos eventos que estejam cadastrados para esta cidade_id.
   
  #### Rotas Cliente:
   ###### GET localhost:8000/cliente. Parâmetros: nenhum. Objetivo: ter acesso a lista de todos os clientes cadastrados no DATABASE
   ###### GET localhost:8000/cliente-por-id/{id?}. Parâmetros: id(opcional) Objetivo: ter acesso ao cliente cadastrado no DATABASE que possui este id
   ###### PUT localhost:8000/editar-cliente Parâmetros:'cliente_id', 'name', 'email','password'. Objetivo: salvar um  cliente já existente no DATABASE com os parâmetros informados.
   ###### DELETE localhost:8000/deletar-cliente Parâmetros: 'id'. Objetivo: deletar o cliente de id informado por parâmetro

  #### Rotas Ingresso:
   ###### GET localhost:8000/ingresso. Parâmetros: nenhum. Objetivo: ter acesso a lista de todos os ingressos cadastrados no DATABASE
   ###### POST localhost:8000/novo-ingresso. Parâmetros:'evento_id','zona_id','tipo_id','preco' Objetivo: cadastrar um novo ingresso no DATABASE
   ###### PUT localhost:8000/editar-ingresso Parâmetros:'evento_id', 'zona_id', 'tipo_id','preco'. Objetivo: salvar um  ingresso já existente no DATABASE com os parâmetros informados.
   ###### DELETE localhost:8000/deletar-ingresso Parâmetros: 'id'. Objetivo: deletar o ingresso de id informado por parâmetro

        
    
    

