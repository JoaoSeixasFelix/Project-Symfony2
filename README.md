# Project-Symfony2

Um projeto Symfony com uma funcionalidade de login e dashboard.

## Requisitos

- PHP 7.4 ou superior
- Composer
- Banco de dados (MySQL, PostgreSQL, SQLite, etc.)

## Instalação

1. Clone o repositório: `git clone https://github.com/SEU_USUARIO/symfony_dashboard.git`
2. Navegue até o diretório: `cd symfony_dashboard`
3. Instale as dependências: `composer install`
4. Configure a conexão com o banco de dados em `.env`
5. Crie o banco de dados: `bin/console doctrine:database:create`
6. Execute as migrações: `bin/console doctrine:migrations:migrate`
7. Inicie o servidor Symfony: `symfony serve`

## Uso

1. Acesse a página de login: `http://localhost:8000/login`
2. Faça o login com suas credenciais
3. Acesse o dashboard: `http://localhost:8000/dashboard`

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir uma issue ou enviar um pull request.

## Licença

Este projeto está sob a licença MIT.