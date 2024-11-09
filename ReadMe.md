# Projeto ONG - Site de Adoção de Pets

Este projeto consiste em um site desenvolvido para uma ONG de adoção de animais, permitindo a visualização dos pets disponíveis e a gestão dos dados por administradores.

## Integrantes do Projeto

- Thiago Ribeiro (Leader / Developer Back-End)
- Caio Antonio (Developer Front-End)
- Marcelo Santiago (Developer Front-End)
- Manuella Melo (designer UI/UX)
- Clara Costa (Scrum Master)

## Tecnologias Utilizadas

- **HTML/CSS/JavaScript**: Para estrutura e estilização do site.
- **Firebase**: Utilizado para o CRUD de pets, possibilitando o armazenamento e gerenciamento das informações.
- **package.json**: Gerenciamento de dependências do projeto.

## Estrutura do Projeto

1. **index.html**: Página inicial com informações gerais sobre a ONG.
2. **Quem Somos**: Página que apresenta a equipe da ONG e sua missão.
3. **Catálogo de Pets**: Exibe todos os pets disponíveis para adoção.
4. **Login de Administradores**: Tela exclusiva para administradores, exigindo login e senha.
5. **CRUD de Pets**: Área restrita onde administradores podem adicionar, editar e remover informações dos pets.

## Como Usar

1. **Configuração**: Certifique-se de que as dependências listadas no `package.json` estão instaladas.
2. **Deploy**: O site foi implantado na Vercel, disponível para acesso público no seguinte link: [Acessar o Site da ONG na](https://projeto-recomeco.vercel.app/)
3. **Autenticação de Admin**: Acessível apenas com login e senha cadastrados para os administradores gerenciarem o conteúdo de pets.

## Estrutura de Navegação do Projeto

```mermaid
graph TD
    A[Home - index.html] --> B[Quem Somos]
    A --> C[Catálogo de Pets]
    
    D[Login - Admin]
    D --> E[CRUD de Pets]
    F[Firebase]
    
    E --> F

```
## Instalação

1. Clone o repositório ou abra-o em uma pasta zipada.

   ```bash
   git clone https://github.com/your-username/ProjetoONG.git
   ```

2. Instale as dependências:

   ```bash
   npm install
   ```
   
## Contribuição

1. Caso queira fazer alguma alteração, faça um fork do repositório original e clone o repositório forkado para o seu ambiente local:

   ```bash
   git clone https://github.com/your-username/ProjetoONG.git
   ```

2. Crie uma nova branch para a sua contribuição:

   ```bash
   git checkout -b nome-da-branch
   ```

3. Faça as alterações necessárias e commite suas alterações:

   ```bash
   git add .
   git commit -m "Adiciona descrição da alteração"
   ```

4. Envie suas alterações para o seu repositório remoto:

   ```bash
   git push origin nome-da-branch
   ```

[Link para o repositório original](https://github.com/ThiagoRAlmeida2/ProjetoONG)

Configure o Firebase e as credenciais de admin conforme necessário no arquivo de configuração.