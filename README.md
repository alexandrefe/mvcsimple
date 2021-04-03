## MVCSIMPLE

> MVCSIMPLE é uma estrutura básica de arquitetura MVC em PHP vanilla.

## Estrutura básica do framework

Na raiz, temos as pastas: app, public, vendor (criado através do composer)
Temos também os arquivos: bootstrap.php, composer.json, composer.lock

A pasta app é a principal da nossa estrutura. Ela contém as subpastas:

    - classes - Guardamos as classes, exemplo, Uri.php
    - controllers - Guardamos os controllers, exemplo, CustomerController.php
    - core - Onde deixamos as classes que faz toda logica dos controllers, action e parameters.
    - exceptions - Criamos aqui nossas própias exceptions
    - functions - Destinada a nossas functions
    - models - Nossos modelos, exemplo, CustomerModel.php
    - settings - Arquivos para configuracoes de banco de dados e outros
    - traits - Nossas traits para reutilizarmos no projeto, exemplo, Read.php
    - views - Para guardar nossas páginas de views

A pasta public fica na raiz do projeto e contém a subpasta, assets, onde guardamos
nossos arquivos javascript, css e etc...
E também temos o index.php que inicializa o nosso projeto. O mesmo, depende do bootstrap.php,
que faz um "require" e "use" em outros arquivos necessários.

## Agradecimentos e Créditos

Deixo aqui meus agradecimentos e créditos ao professor Alexandre Cardoso,
que ensina como criar essa estrutura em seu curso "Clube FullStack".
Link -> https://www.youtube.com/xandecar
