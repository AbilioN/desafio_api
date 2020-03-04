# Api de ingressos
## Laravel Framework vers�o 5.8,pacote de autentica��o Laravel/Passport vers�o 7.0 e banco de dados MySQL

#### Descri��o:

###### a Api � respons�vel por gerenciar um contexto de venda de ingressos para jogos de futebol, eventos e shows que podem ser requisitados por diferentes clientes em diferentes localidades para diferentes atra��es, oferecendo assim um �timo ambiente para gerenciar seu uso e suas demandas.
##### Par�metros de entrada: requisi��es http no formato JSON. Par�metros de sa�da : objeto de data no formato JSON

#### Instru��es: 
1) Dar clone no projeto.
2) Instalar as depend�ncias: php composer install
3) Configurar acesso ao banco de dados no arquivo de configura��o .env e criar o DATABASE api no banco de dados local.
4) Rodar os comandos para limpar e popular o banco de dados: php artisan migrate:fresh , php artisan db:seed.
5) Iniciar o servi�o de autentica��o do passport : php artisan passport:install.
6) Iniciar o servi�o da api : php artisan serve.
7) Usar o POSTMAN ou qualquer outro  servi�o de requisi��es as API's.

#### Estrutura:
    
    H� no total quatro grupos de rotas, rotas auth, rotas de evento, rotas de cliente e rotas de ingresso.
    
#### Rotas Auth: 
   ###### POST localhost:8000/auth/registrar. Par�metros: 'name','email','password', 'password_confirmation'. Objetivo: criar um novo registro na tabela clientes com as credenciais informadas nos par�metros.
   ###### POST localhost:8000/auth/login. Par�metros: 'email','password'. Objetivo: usar as credenciais informadas para ter acesso ao token de acesso gerado pelo passport.
    Caso n�o se queira registrar um cliente pr�prio para usar o servi�o da API pode-se usar qualquer um dos tr�s usu�rios j� cadastrados no banco de dados: 
        name: cliente01, email: cliente01@gmail.com , password : cliente123;
        name: cliente02, email: cliente02@gmail.com , password : cliente123;
        name: cliente03, email: cliente03@gmail.com , password : cliente123;
   ###### POST localhost:8000/auth/logout. Par�metros:'token'. Objetivo: revogar o token informado por par�metro
   
#### Rotas Evento:
   ###### GET localhost:8000/evento. Par�metros: nenhum. Objetivo: ter acesso a lista de todos os eventos cadastrados no DATABASE
   ###### GET localhost:8000/evento-por-id/{id?}. Par�metros: id(opcional) Objetivo: ter acesso ao evento cadastrado no DATABASE que possui este id
   ###### POST localhost:8000/novo-evento. Par�metros:'name', 'descricao', 'categoria_id','data_evento','cidade_id' . Objetivo: salvar um novo evento no DATABASE com os par�metros informados.
   ###### PUT localhost:8000/editar-evento. Par�metros:'name', 'descricao', 'categoria_id','data_evento','cidade_id' . Objetivo: salvar um  evento j� existente no DATABASE com os par�metros informados.
   ###### DELETE localhost:8000/deletar-evento Par�metros: 'id'. Objetivo: deletar o evento de id informado por par�metro
   ###### GET localhost:8000/evento-da-cidade/{cidade_id?} Par�metros: 'cidade_id'. Objetivo: exibir lista de todos os objetos eventos que estejam cadastrados para esta cidade_id.
   
  #### Rotas Cliente:
   ###### GET localhost:8000/cliente. Par�metros: nenhum. Objetivo: ter acesso a lista de todos os clientes cadastrados no DATABASE
   ###### GET localhost:8000/cliente-por-id/{id?}. Par�metros: id(opcional) Objetivo: ter acesso ao cliente cadastrado no DATABASE que possui este id
   ###### PUT localhost:8000/editar-cliente Par�metros:'cliente_id', 'name', 'email','password'. Objetivo: salvar um  cliente j� existente no DATABASE com os par�metros informados.
   ###### DELETE localhost:8000/deletar-cliente Par�metros: 'id'. Objetivo: deletar o cliente de id informado por par�metro

  #### Rotas Ingresso:
   ###### GET localhost:8000/ingresso. Par�metros: nenhum. Objetivo: ter acesso a lista de todos os ingressos cadastrados no DATABASE
   ###### POST localhost:8000/novo-ingresso. Par�metros:'evento_id','zona_id','tipo_id','preco' Objetivo: cadastrar um novo ingresso no DATABASE
   ###### PUT localhost:8000/editar-ingresso Par�metros:'evento_id', 'zona_id', 'tipo_id','preco'. Objetivo: salvar um  ingresso j� existente no DATABASE com os par�metros informados.
   ###### DELETE localhost:8000/deletar-ingresso Par�metros: 'id'. Objetivo: deletar o ingresso de id informado por par�metro

        
    
    

