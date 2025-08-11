Requisitos

Para executar este projeto, você precisa ter as seguintes ferramentas instaladas em sua máquina:

    PHP: Versão 8.1 ou superior.

    Composer: O gerenciador de pacotes do PHP.

    Servidor de Banco de Dados: Ex: MySQL, MariaDB, PostgreSQL ou SQLite.

Como Executar o Projeto

Siga os passos abaixo para configurar e rodar a aplicação em seu ambiente local.

    Clone o Repositório:

    git clone <URL_DO_SEU_REPOSITORIO>

    Acesse a Pasta do Projeto:

    cd nome-do-seu-projeto

    Instale as Dependências do PHP:

    composer install

    Crie o Arquivo de Configuração de Ambiente (.env):

    cp .env.example .env

    Configure o Banco de Dados:
  
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel_calculadora
    DB_USERNAME=root
    DB_PASSWORD=

    Gere a Chave da Aplicação:

    php artisan key:generate

    Execute as Migrations:
    
    php artisan migrate

    Inicie o Servidor Local do Laravel:

    php artisan serve
