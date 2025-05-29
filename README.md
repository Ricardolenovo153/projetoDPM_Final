# projetoDPM_Final

# 🚗 Projeto: Catálogo de Carros (Versão Sem Backend)

Este projeto consiste na readaptação de um site inicialmente desenvolvido com backend para uma versão **estática**, funcionando apenas com **HTML, CSS e JavaScript**, sem necessidade de servidor ou base de dados.

O principal objetivo foi simular o funcionamento de um site dinâmico usando **dados armazenados num ficheiro `.json`**, eliminando a dependência do backend. Esta abordagem permite que o projeto funcione apenas no lado do cliente, mantendo ainda assim a capacidade de gerar conteúdos dinâmicos.

---

## 📝 O que foi feito

- **Conversão dos dados SQL para JSON:**  
  Os dados originalmente guardados numa base de dados SQL foram exportados para um ficheiro `carros.json`. Este ficheiro serve agora como a fonte de dados para o site.

- **Leitura de dados via JavaScript:**  
  Utilizou-se a função `fetch()` para realizar um pedido HTTP ao ficheiro `carros.json`, permitindo ler os dados de forma assíncrona.

- **Criação dinâmica de HTML:**  
  Com base nos dados lidos do JSON, foi criado dinamicamente o HTML correspondente a cada carro através do **DOM (Document Object Model)** em JavaScript. Isso inclui a imagem, marca, modelo, ano e preço de cada carro.

- **Trabalho com o DOM:**  
  A construção do HTML foi feita programaticamente, com o auxílio do professor, utilizando métodos como `document.createElement()` e `appendChild()` para inserir os elementos na página.

---
Realizado por: Ricardo Estêvão e Patricia Luis

