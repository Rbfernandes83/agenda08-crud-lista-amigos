# Projeto Lista de Amigos - CRUD com Sistema de Login

## Sobre o projeto

Este projeto foi desenvolvido na disciplina de Programação Web II, com o objetivo de aplicar na prática os conhecimentos adquiridos sobre PHP, MySQL, CRUD, autenticação e controle de sessão.

O sistema permite realizar o login e gerenciar uma lista de amigos através das operações de cadastro, consulta, edição e exclusão.

## Funcionalidades

- Sistema de login
- Controle de acesso através de SESSION
- Proteção contra acesso não autorizado
- Logout do sistema
- Cadastro de amigos
- Listagem dos amigos cadastrados
- Edição dos dados
- Exclusão com confirmação

## CRUD

O projeto utiliza as quatro operações básicas de um CRUD:

- CREATE - Cadastro de novos amigos
- READ - Consulta e listagem dos registros
- UPDATE - Alteração dos dados cadastrados
- DELETE - Exclusão de registros

## Tecnologias utilizadas

- HTML
- PHP
- MySQL
- MySQLi
- XAMPP
- W3.CSS
- Font Awesome
- Visual Studio Code
- MySQL Workbench

## Banco de dados

O banco utilizado no projeto é:

`pwii`

As principais tabelas utilizadas são:

`usuario` - responsável pelos dados utilizados no login.

`amigo` - responsável pelos dados dos amigos cadastrados.

O arquivo `banco.sql` contém os comandos necessários para criação das tabelas.

## Login para teste

Usuário:

`gabi`

Senha:

`gabi123`

## Segurança e controle de acesso

O projeto utiliza SESSION para identificar o usuário autenticado.

Caso uma pessoa tente acessar diretamente uma página protegida sem realizar o login, o sistema direciona para a página de acesso negado.

O logout encerra a sessão e exige uma nova autenticação para acessar novamente o sistema.

## Autor

Projeto desenvolvido para fins acadêmicos na disciplina de Programação Web II.

Curso: Desenvolvimento de Sistemas