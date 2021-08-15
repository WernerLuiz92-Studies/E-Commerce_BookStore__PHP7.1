# E-Commerce_BookStore__V2

## Como executar o projeto?

 - Faça clone do repositório e em seguida no seu terminal acesse a pasta raíz do projeto e certifique-se de estar na branch master.
 - Certifique-se de que o Docker e docker-compose estão instalados.
 - Copie o arquivo `sample.env` e renomeie-o para `.env` e ajuste-o conforme as instruções contidas nele.
   - Caso possua outros containers, ou serviços como apache2, nginx, mySql ou outros instalados. Pode ser necessário alterar algumas dessas configurações no  `.env` para evitar conflitos, mas, você pode optar por interromper os serviços temporariamente enquanto testa a aplicação.
 - Através do terminal siga os passos a seguir:

## Fazendo build dos containers

No seu terminal, dentro da pasta raiz do projeto.

Execute:

```sh
docker-compose build
```

Isso irá fazer build das imagens necessárias para o projeto.

## À todo vapor

Agora vamos dar start nos motores e fazer a contagem regressiva para o lançamento.

Execute:

```sh
docker-compose up
```

Isso irá iniciar os containers e mostrará em tempo real os logs dos mesmos no seu terminal.

Mas se quiser deixar eles rodando em segundo plano pode executar dessa forma:
```sh
docker-compose up -d
```

## Parem as máquinas

Para parar de executar os container do projeto é só fazer o seguinte.

Execute:

```sh
docker-compose down
```