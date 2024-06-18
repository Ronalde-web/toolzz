# toolzz.com
Este projeto é um exemplo de site de login com alternância de tema. Siga os passos abaixo para configurar e executar o projeto localmente.

Pré-requisitos
PHP: versão 8.1 ou superior
Laravel: versão 9.x
Node.js
Composer
Instalação

1° Clone o repositório e navegue até a pasta do projeto:
   git clone https://github.com/seu-usuario/toolzz.com.git
    cd toolzz.com
    
2° Instale as dependências do backend e frontend:
    composer install
      npm install
      
3° Configure o arquivo .env:
    cp .env.example .env
      php artisan key:generate
4° Configure o banco de dados no arquivo .env e execute as migrações:
    php artisan migrate

# Uso
1° Inicie o servidor de desenvolvimento:
    php artisan serve
    
2° Compile os ativos do frontend:
    npm run dev
    
3° Acesse o site no navegador:
    http://127.0.0.1:8000


## Estrutura do Projeto
  app/ - Código fonte da aplicação Laravel
  public/ - Arquivos públicos
  resources/ - Views e CSS
  routes/ - Definição de rotas

## Personalização
  Substitua o logo em public/assets/all/imgs/Logo.png.
  Substitua as imagens do carrossel em public/assets/all/imgs/.
  Edite estilos em resources/css/login.css.

## Contribuição
  Faça um fork do projeto.
  Crie uma nova branch para sua feature.
  Commit suas mudanças.
  Faça o push para a branch.
  Abra um Pull Request.

