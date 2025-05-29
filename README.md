# 🚗 Projeto: Catálogo de Carros (Versão Sem Backend)

Este projeto consiste na readaptação de um site inicialmente desenvolvido com recurso a backend, para uma versão estática, que funciona apenas com **HTML, CSS e JavaScript**, sem necessidade de servidor ou base de dados.

O principal objetivo foi simular o funcionamento de um site dinâmico utilizando dados armazenados num ficheiro `.json`, eliminando a dependência do backend. Esta abordagem permite que o projeto funcione inteiramente do lado do cliente, mantendo a capacidade de gerar conteúdos de forma dinâmica.

---

## 📝 O que foi realizado

**Conversão dos dados de SQL para JSON:**  
Os dados que estavam originalmente guardados numa base de dados SQL foram exportados para um ficheiro `carros.json`. Este ficheiro passou a ser a fonte de dados utilizada pelo site.

**Leitura dos dados com JavaScript:**  
Utilizou-se a função `fetch()` para efetuar um pedido HTTP ao ficheiro `carros.json`, permitindo aceder aos dados de forma assíncrona.

**Criação dinâmica de HTML:**  
Com base nos dados lidos a partir do JSON, foi gerado dinamicamente o HTML correspondente a cada carro, utilizando o DOM (Document Object Model) em JavaScript. Foram incluídos elementos como a imagem, marca, modelo, ano e preço de cada veículo.

**Manipulação do DOM:**  
A criação do conteúdo HTML foi feita de forma programática, com o apoio do professor, através de métodos como `document.createElement()` e `appendChild()` para adicionar os elementos à página.

---
Realizado por: Ricardo Estêvão e Patricia Luis

