# emails-repository

Emails Repository


## Compatibilidade
PHP => >=5.5.9 <br>
Laravel => 5.x


## Instalação
Via composer: <br>
    `composer require gugasobrinho/emails-repository`


## Configurando ServiceProvider
Abra o arquivo `app/config.php` e adicione em `providers` esta linha: <br>
    `GugaSobrinho\EmailsRepository\Providers\EmailsRepositoryServiceProvider::class,`


## Publicando migration
Execute o comando abaixo para publicar a migration no seu projeto: <br>
    `php artisan vendor:publish`


## Criando a tabela emails no banco de dados
Execute o comando abaixo para criar a tabela `emails` no banco de dados: <br>
    `php artisan migrate`

## Configurando relacionamento
Após executar a migration, basta configurar o relacionamento do model `Email` com o seu model, através da `TraitRelacionamento`. <br>
Adicione as seguintes linha no seu model: <br>

fora do class:`use GugaSobrinho\EmailsRepository\Traits\TraitRelacionamento;` <br>

dentro do class: `use TraitRelacionamento;`
