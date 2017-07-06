# Equipamento with START FWK

## Introdução

Start é um micro framework de aplicação web. Acreditamos que o desenvolvimento deve ser uma experiência agradável e eficiente.
O Start tenta facilitar a vida do desenvolvedor iniciante, disponibilizando os seguintes recursos:

    Banco de dados ORM expressivo e intuitivo 
    Vários back-ends para armazenamento de sessão e cache
    Motor de renderização simples e rápido
    Sistemas de autenticação
    Sistemas de rotas
    Envio de email
    Sistema de upload
    
## Instalação

#### 1 - Dependências do Projeto

    php 5.3+
    composer
    mysql

Instalação

#### 2 - Instalação do Projeto

Para instalar as dependências do projeto, execute os seguintes comando:

    composer create codeandcode/start
    ou
    git clone https://github.com/code-and-code/start.git

    cd start

    composer install

#### 3 - Inicializando do Projeto

Para iniciar a aplicação, siga as instruções:

    php -S servidor:porta -t ./pasta_de_inicialização
Exemplo:

    php -S 127.0.0.1:8080 -t ./public

Banco de dados: As configurações de comunicação com o Banco de Dados está localizada em : [App/config/app]

    'database' => [            
       'host'     => '127.0.0.1',
       'dbname'   => 'equipamentos',
       'username' => 'root',
       'password' =>  ''
      ],
