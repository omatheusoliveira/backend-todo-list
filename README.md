# Backend - To do List

## Descrição:
```
Parte Backend do projeto To do List que foi feito em Laravel 
```

## Tecnologias usadas: 
```
PHP | Laravel | Composer 
```

## Itens obrigatórios: 
```
PHP: ^7.4 | Laravel: 10.1.5 | Composer: 2.5.4 | MySQL Workbench
```

## Funções - Usuário:

- [x] Cadastro de usuário
- [x] Listar usuário
- [x] Excluir usuário

## Funções - Task:

- [x] Cadastro de task
- [x] Listar task
- [x] Excluir task
- [x] Alterar status da task


## Inicializando o projeto


**Passo 1:**

Abra o arquivo .env e coloque as informações referentes ao seu db.

```
DB_CONNECTION=mysql 
DB_HOST=your_host
DB_PORT=your_port
DB_DATABASE=your_db
DB_USERNAME=your_username
DB_PASSWORD=your_password 
```

**Passo 2:**

Execute este comando para criar as tabelas no db:

```
php artisan migrate
```

**Passo 3:**

Para rodar o projeto, execute o seguinte comando:

```
php artisan serve
```

## Rotas:

Referente as tasks:

```
[POST] /api/task/create <para criar uma task>
[PUT] /api/task/id <editar uma task(usa id como parametro)>
[DELETE] /api/task/id <excluir uma task(usa id como parametro)>
[GET] /api/tasks <lista todas as tasks>

```

Referente ao usuário:

```
[POST] /api/user/create <para criar um usuário>
[DELETE] api/user/id <excluir um usuário(usa id como parametro)>
[GET] api/users <lista todos os usuários>

```


