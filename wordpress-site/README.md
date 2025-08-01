# Site WordPress - Tema Esportes

Este é um site WordPress personalizado com tema focado em esportes, criado conforme as especificações solicitadas.

## Características

### Navegação
- **Navbar fixa** com os menus:
  - HOME
  - QUEM SOMOS
  - PRODUTO
  - PREÇO
  - CONTATO

### Design
- **Imagem de esportes** como hero section no body principal
- **Design responsivo** que funciona em desktop, tablet e mobile
- **Menu hamburger** para dispositivos móveis
- **Animações suaves** e efeitos de hover
- **Cores modernas** com esquema azul e branco

### Funcionalidades
- **Páginas automáticas**: As páginas dos menus são criadas automaticamente
- **Sistema de widgets** para sidebar e rodapé
- **Suporte a imagens destacadas**
- **HTML5 semântico**
- **SEO-friendly** com títulos dinâmicos

## Estrutura do Projeto

```
wordpress-site/
├── index.php                 # Arquivo principal do WordPress
├── wp-config.php            # Configurações do WordPress
├── wp-content/
│   └── themes/
│       └── esportes-theme/
│           ├── style.css     # Estilos principais
│           ├── functions.php # Funcionalidades do tema
│           ├── header.php    # Cabeçalho e navbar
│           ├── footer.php    # Rodapé
│           ├── index.php     # Template principal
│           ├── page.php      # Template para páginas
│           └── js/
│               └── script.js # JavaScript customizado
└── README.md                # Este arquivo
```

## Instalação

### Pré-requisitos
- PHP 7.4+
- MySQL 5.6+ ou MariaDB
- Servidor web (Apache/Nginx)

### Passos de Instalação

1. **Configure o banco de dados**
   - Crie um banco de dados MySQL
   - Atualize as credenciais em `wp-config.php`

2. **Configuração do servidor**
   - Aponte o document root para a pasta `wordpress-site`
   - Configure as permissões adequadas

3. **Instalação do WordPress**
   - Baixe o WordPress core e coloque na pasta
   - Execute a instalação padrão
   - Ative o tema "Esportes Theme"

4. **Configuração final**
   - As páginas dos menus serão criadas automaticamente
   - Configure o menu principal no painel admin
   - Personalize o conteúdo conforme necessário

## Tecnologias Utilizadas

- **WordPress** - CMS
- **PHP** - Backend
- **HTML5** - Estrutura
- **CSS3** - Estilos e animações
- **JavaScript/jQuery** - Interatividade
- **Responsive Design** - Layout adaptativo

## Personalização

### Cores
As cores principais podem ser alteradas no arquivo `style.css`:
- Azul principal: `#007cba`
- Azul escuro: `#005a8a`
- Preto transparente: `rgba(0, 0, 0, 0.9)`

### Imagem de Fundo
A imagem de esportes pode ser alterada modificando a URL no CSS:
```css
.hero-section {
    background: url('nova-imagem-url.jpg');
}
```

### Conteúdo
- Edite as páginas através do painel admin do WordPress
- Modifique os textos no arquivo `index.php`
- Adicione novos estilos no `style.css`

## Suporte

Este tema foi desenvolvido especificamente para este projeto. Para modificações ou suporte adicional, consulte a documentação do WordPress ou um desenvolvedor qualificado.

## Licença

Este projeto foi criado para uso específico e não possui licença de distribuição.