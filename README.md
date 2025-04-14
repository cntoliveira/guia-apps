# Guia de Aplicativos para Celular

Catálogo dinâmico de apps desenvolvido em PHP. Inclui sistema de busca, filtros por categoria e área administrativa.

**Como executar:**  
1. Com XAMPP: Coloque a pasta na raiz do `htdocs` e acesse `http://localhost/guia-apps`  
2. Com PHP embutido: Execute `php -S localhost:8000` no terminal e acesse `http://localhost:8000`

**Acesso administrativo:**  
Usuário: `admin` | Senha: `12345` *(altere no código antes de publicar!)*

**Principais arquivos:**  
- `index.php` - Página inicial  
- `detalhes.php` - Detalhes dos aplicativos  
- `filtrar.php` - Busca avançada  
- `login.php` - Área de acesso  
- `includes/apps.php` - Lista de aplicativos (edite para adicionar novos)  
- `assets/css/estilo.css` - Personalize o visual  

**Dica rápida:** Para adicionar um app novo, edite o array em `includes/apps.php` ou use o formulário em `protegido.php` após fazer login.
