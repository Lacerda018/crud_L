# CRUD de Usuários com Laravel 11
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Descrição
Este projeto é uma aplicação web para a gestão de usuários utilizando o framework Laravel 11. Ele permite realizar operações CRUD (Create, Read, Update, Delete) em usuários. A aplicação inclui autenticação de usuários e validação de formulários.

### Requisitos
PHP 8.1 ou superior
Composer
Banco de dados MySQL ou SQLite
Node.js e NPM (opcional, para compilar ativos front-end)
Instalação

### Clone o repositório

<ul>
    <li>git clone https://github.com/seu-usuario/seu-repositorio.git</li>
    <li>cd seu-repositorio</li>
</ul>
        
    
### Instale as dependências do PHP com o Composer

<ul>
    <li>composer install</li>
</ul>

### Crie um arquivo .env a partir do exemplo

<ul>
    <li>cp .env.example .env</li>
</ul>

### Gere a chave da aplicação

<ul>
    <li>php artisan key:generate</li>
</ul>

### Configure o arquivo .env com suas credenciais de banco de dados

### Abra o arquivo .env e configure as seguintes variáveis:

<p>DB_CONNECTION=mysql
<p>DB_HOST=127.0.0.1
<p>DB_PORT=3306
<p>DB_DATABASE=nome_do_banco_de_dados
<p>DB_USERNAME=seu_usuario
<p>DB_PASSWORD=sua_senha

### Execute as migrações para criar as tabelas no banco de dados

<ul>
    <li>php artisan migrate</li>
</ul>

### Instale as dependências do Node.js e compile os ativos (opcional)

<ul>
    <li>npm install</li>
    <li>npm run dev</li>
</ul>

## Uso

### Inicie o servidor de desenvolvimento

<ul>
    <li>php artisan serve</li>
</ul>

### Acesse a aplicação no navegador

Abra o navegador e vá para http://localhost:8000.

## Registro e autenticação

<ul>
    <li>Registre-se como um novo usuário.</li>
    <li>Faça login com suas credenciais.</li>
</ul>

## Gestão de usuários

<ul>
    <li>Após o login, você pode criar, visualizar, editar e excluir usuários.</li>
    <li>Acesse o painel de usuários através do menu de navegação.</li>
</ul>

### Estrutura de Diretórios

<ul>
    <li>app/Models - Contém os modelos Eloquent (User.php).</li>
    <li>app/Http/Controllers - Contém os controladores (UserController.php).</li>
    <li>resources/views - Contém as views Blade (usuários, autenticação, etc).</li>
    <li>routes/web.php - Contém as rotas web.</li>
    <li>database/migrations - Contém as migrações de banco de dados.</li>
</ul>

## Funcionalidades
Criação de Usuários: Permite a criação de novos usuários com nome, email e senha.

### Leitura de Usuários: 

<ul>
    <li>Exibe uma lista de usuários cadastrados.</li>
    <li>Atualização de Usuários: Permite a edição das informações dos usuários.</li>
    <li>Exclusão de Usuários: Permite a exclusão de usuários cadastrados.</li>
    <li>Autenticação: Sistema de login e registro com validação de dados.</li>
</ul>

## Contribuição
<p>Se você deseja contribuir para este projeto, por favor, siga as diretrizes abaixo:

<p>Faça um fork do projeto.
<p>Crie um branch para sua feature (git checkout -b feature/nova-feature).
<p>Commit suas mudanças (git commit -am 'Adiciona nova feature').
<p>Faça um push para o branch (git push origin feature/nova-feature).
<p>Crie um Pull Request.
