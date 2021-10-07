# CRUD-em-Laravel
CRUD simples em Laravel

## Linguagens e Frameworks utilizadas na criação do projeto
* Laravel (Framework de PHP para Back-End)
* Vuetify (Estilização dos componentes para Front-End)
* PHP
* Javascript

## Execução do projeto
* Criar um database
* Na raiz do projeto no arquivio ENV configurar os seguintes campos com os dados da sua database:
```
DB_CONNECTION=coloque o sistema de banco de dados que irá utilizar(utilizei mysql)
DB_DATABASE=Nome do banco de dados que você criou
DB_USERNAME= usuario de acesso ao banco de dados
DB_PASSWORD= senha de acesso ao banco de dados

```
## Após configurar o arquivo Env
Para execução das migrations e criação automatica das tabelas
```
PHP ARTISAN MIGRATE
```

Para subir o servidor
```
php artisan serve
```
## Como ficou o projeto

### Tela de Cadastro
![1](https://user-images.githubusercontent.com/86434489/136392650-4ad74d50-dc50-41d2-b4dd-865fc83c6e69.png)

### Tela de acesso ao banco com os dados que foram cadastrados
![2](https://user-images.githubusercontent.com/86434489/136392645-59076758-a68c-484b-91ba-c73585288a54.png)

