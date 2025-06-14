# Syndicate News - Tema WordPress Moderno com TailwindCSS

**Versão:** 1.0.0  
**Compatibilidade:** WordPress 6+ | PHP 8.0+

Syndicate News é um tema WordPress leve, moderno e modular, desenvolvido com Tailwind CSS. Ideal para portais de notícias, blogs ou revistas digitais, combina performance com uma estrutura altamente personalizável e limpa.

## 📁 Estrutura do Projeto

```bash
📁 Syndicate-news/
├── 📄 README.md                   # Documentação do tema
├── 📄 footer.php                  # Rodapé global
├── 📄 functions.php               # Inicialização, includes e funções principais
├── 📄 header.php                  # Cabeçalho global
├── 📄 index.php                   # Fallback de template principal
├── 📁 resources/
│   ├── 📁 css/
│   │   ├── 📄 main.css            # Estilos customizados
│   │   ├── 📄 queries.css         # Ajustes de responsividade
│   │   └── 📄 tailwind.css        # Framework base Tailwind compilado
│   ├── 📁 fonts/                  # Fontes utilizadas no tema
│   ├── 📁 images/
│   │   ├── 📄 favicon.png         # Ícone do site
│   │   ├── 📄 logo.png            # Logotipo do site
│   │   └── 📄 notfound.png        # Imagem padrão para posts sem thumbnail
│   └── 📁 js/
│       ├── 📄 jquery.min.js       # jQuery (caso necessário)
│       └── 📄 main.js             # Scripts gerais (interações, menus, etc.)
├── screenshot.png              # Imagem de visualização do tema no painel WP
├── sidebar.php                 # Estrutura da sidebar
├── 📁 src/
│   ├── 📁 Admin/
│   │   └── 📄 Settings.php        # Configurações do tema no admin
│   ├── 📁 Core/
│   │   └── 📄 TemplateLoader.php  # Carregamento de templates dinamicamente
│   ├── 📁 Customizer/
│   │   ├── 📄 CustomStyle.php     # Estilos customizados pelo usuário
│   │   └── 📄 ThemeCustomizer.php # Opções do WP Customizer
│   ├── 📁 Enqueue/
│   │   └── 📄 Assets.php          # Registro e enfileiramento de assets
│   ├── 📁 Helpers/
│   │   └── 📄 GeneralHelpers.php  # Funções utilitárias globais
│   ├── 📁 Setup/
│   │   └── 📄 ThemeSetup.php      # Setup inicial do tema (suportes, menus, etc.)
│   └── 📁 Widgets/
│       └── 📄 TrendingWidget.php  # Widget customizado de posts em alta
├── style.css                   # Metainformações do tema para o WordPress
├── 📁 templates/
│   ├── 📄 404.php                 # Página de erro 404
│   ├── 📄 archive.php             # Arquivo de posts por tipo
│   ├── 📄 author.php              # Template de autor
│   ├── 📄 category.php            # Template de categorias
│   ├── 📄 comments.php            # Estrutura dos comentários
│   ├── 📄 index.php               # Template padrão (fallback)
│   ├── 📄 page.php                # Template de páginas estáticas
│   ├── 📄 search.php              # Página de resultados de busca
│   ├── 📄 single.php              # Template de post único
│   └── 📄 tag.php                 # Template de tags
└── 📁 views/
    ├── 📁 components/
    │   └── 📄 ad-block.php        # Bloco de anúncio reutilizável
    ├── 📁 pages/
    │   ├── 📄 front-page.php      # Página inicial customizada
    │   └── 📄 sobre.php           # Página institucional "Sobre"
    ├── 📁 partials/
    │   ├── 📄 navigation.php      # Navegação principal
    │   └── 📄 toolbars.php        # Barra de ferramentas adicionais
    └── 📁 posts/
        └── 📄 content.php         # Estrutura de conteúdo de post
```

## 🎨 Customização

Você pode modificar facilmente:

- **Cores** via **Aparência > Personalizar > Cores do Tema**
- **Tipografia** via **Aparência > Personalizar > Tipografia**
- **Imagens de fallback/publicidade** na pasta `/resources/images/`
- **Menus e navegação** via painel ou em `functions.php` e `views/components/nav.php`
- **Conteúdo e layout da página inicial** no `front-page.php` (em breve)
- **Texto do rodapé** em **Aparência > Configurações do Tema**

## 🔧 Tecnologias utilizadas

- **WordPress** com arquitetura baseada em pastas modulares
- **TailwindCSS** para estilização
- **HTML5 + PHP8** com boas práticas
- Estrutura MVC-like adaptada para temas WordPress

## 🛠️ Requisitos

- PHP 8.0 ou superior
- WordPress 6 ou superior
- Tailwind já compilado (disponível em `/resources/css/`)

## 📦 Releases

- **v1.0.0** – Estrutura base com layout moderno, suporte a Customizer, widgets, fallback de imagem e navegação entre posts.

📌 Planejamento de futuras versões incluirão suporte completo a:
- 🧩 Suporte Dark Mode
- 🔎 Pesquisa AJAX
- 📝 Modo Escritor para artigos longos
- 📱 Otimizações AMP e PWA
- 🌍 Tradução multilíngue e suporte RTL
- ⚙️ Blocos dinâmicos
- ⚙️ Templates de página personalizada

---

## 📜 Licença

Este projeto está licenciado sob a [Licença MIT](LICENSE).


**Sinta-se à vontade para sugerir funcionalidades para este projeto! 🚀**

---


## 👤 Author

**Darlis A. Amorim**  
*Software Engineer and Full Stack Developer of São Paulo/SP*
