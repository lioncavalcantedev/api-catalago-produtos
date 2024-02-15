# API de Produtos com Laravel

Esta é uma API simples de produtos desenvolvida com o framework Laravel. A API permite a manipulação de produtos, incluindo operações como listar, visualizar, adicionar, atualizar e excluir produtos.

## Rotas da API

- **Listar Todos os Produtos:**
  - Endpoint: `/products`
  - Método: GET
  - Descrição: Retorna todos os produtos disponíveis.

- **Visualizar Produto por ID:**
  - Endpoint: `/products/{id}`
  - Método: GET
  - Descrição: Retorna detalhes de um produto específico com base no ID fornecido.

- **Adicionar Novo Produto:**
  - Endpoint: `/products`
  - Método: POST
  - Descrição: Adiciona um novo produto ao sistema. Parâmetros obrigatórios: `name`, `description`, `price`.

- **Atualizar Produto por ID:**
  - Endpoint: `/products/{id}`
  - Método: PUT
  - Descrição: Atualiza as informações de um produto específ

## Controlador

O controlador `ProductController` gerencia as operações relacionadas aos produtos, como listagem, visualização, adição, atualização e exclusão.

## Instalação

Certifique-se de ter o ambiente Laravel configurado e, em seguida, siga estas etapas:

1. Clone o repositório:
```
git clone https://github.com/seu-usuario/seu-projeto.git
```

2. Instale as dependências: 
```
composer install
```

3. Inicie um servidor local:
```
php artisan server
```

## Uso

Para usar a API, inicie o servidor Laravel e faça solicitações HTTP para os endpoints mencionados acima.