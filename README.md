# VãoFazer!
Aplicação web para gerenciamento de tarefas.

Desenvolvido utilizando [CakePHP 3][cake3] com [Bootstrap 3][bs3].

## Requisitos
* PHP 5.6.x ou superior
* Extensões do PHP **_mbstring_** e **_intl_** habilitadas (ver [Instalção do CakePHP][cakereq])
* Extensões do PHP **_sqlite3_** e **_pdo_sqlite_** habilitadas ([SQLite 3][sqlite])

## Configuração
Esta é uma aplicação autocontida e tudo o que é necessário fazer é apenas inicializar o servidor através do console do _cake_ à partir do diretório raiz da aplicação:
```
bin/cake server -p 8000
```

## Permissões
É importante lembrar que é necessário garantir permissão de execução para o comando **_bin/cake_**, seja em ambientes Windows (**.bat**) ou Linux.

É necessário também garantir permissão de escrita para os diretórios **tmp** e **logs** e todos os seus subdiretórios, uma vez que o CakePHP utiliza esses diretórios para armazenar informações de cache, logs, sessões etc.

#### Armazenamento
A persistência de dados é feita no arquivo **vao_fazer.db** localizado no diretório **db**, logo se faz necessário garantir permissões de leitura e escrita para esse aquivo.

## Acessando a aplicação
Acessar no browser a URL:
```
http://localhost:8000
```

[cake3]:http://cakephp.org
[bs3]:http://getbootstrap.com
[cakereq]:http://book.cakephp.org/3.0/en/installation.html#requirements
[sqlite]:http://sqlite.org
