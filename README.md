# Donuz API
Biblioteca para PHP

## Requisitos

* PHP 5.3.9+

## Instalação

Faça o download da biblioteca:

~~~
git clone https://github.com/donuz/donuz-php.git
~~~

Após o download, via terminal, navegue até a pasta donuz-php e rode o seguinte comando: 

~~~
$ composer update
~~~

O autoload do composer irá cuidar do resto.

### Configurando variáveis da API

Abra o arquivo .env.exemplo e adicione o seu Token e o ID do seu estabelecimento:

~~~
TOKEN=
ESTABELECIMENTO_ID=
~~~

Após a inclusão das informações, renomeie o arquivo .env.exemplo, removendo o **.exemplo** deixando apenas .env

## Exemplo de Uso

Inclua a biblioteca em seu arquivo PHP:

~~~
require_once("donuz-php/Donuz.php");
~~~

Após o require a biblioteca já estará disponível para ser utilizada, como no exemplo abaixo:

~~~
Donuz::reward()->getRewards();
~~~

## Documentação da API

Acesse [donuz.co/api](http://donuz.co/api) para referência.

## Observação

Caso você não possua as informações do Token ou ID do seu estabelecimento, entre em contato com o suporte da [Donuz](http://www.donuz.co/).
