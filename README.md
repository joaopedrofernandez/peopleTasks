<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Para usar a api PeopleTasks
**Links** da documentação feita com o **postman**

Segue o passo a passo abaixo ⬇️⬇️⬇️
##

**CRUD para Pessoas (Person)**
- Criar, listar, editar e excluir pessoas.

**CRUD para Tarefas (Task)**
- Criar, listar, editar e excluir tarefas.

**Documentação do CRUD completo de People e Tasks**

<a href="https://documenter.getpostman.com/view/54299457/2sBXwqsAyq" target="_blank">Link documentação postman</a>

##

**Relacionamento Pessoas ↔ Tarefas**

- Atribuir uma ou mais tarefas a uma pessoa.
- Remover uma ou mais tarefas de uma pessoa.
- Listar todas as tarefas de uma pessoa.
- Listar todas as pessoas atribuídas a uma tarefa.

**Documentação completa das ações da tabela pivot**

<a href="https://documenter.getpostman.com/view/54299457/2sBXwsLqAJ" target="_blank">Link documentação postman</a>

##

**Instalação**

```bash
git clone https://github.com/joaopedrofernandez/peopleTasks.git

cp .env.example .env

composer install

php artisan migrate
```

**Indicação⬇️⬇️⬇️**
```bash
php artisan serve --host=0.0.0.0 --port=9090
```

##

**Licença**

O framework Laravel é um software de código aberto licenciado sob a licença Creative Commons Attribution-NonCommercial ...Output-College License. [Licença MIT](https://opensource.org/licenses/MIT).
