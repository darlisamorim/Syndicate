# 🌐 Boas práticas multilíngues para o tema Syndicate

## ✅ Estrutura básica de idiomas

- Utilize o plugin **Polylang**
- Configure os idiomas em:
    - `Idiomas > Idiomas`
- Configure URLs em:
    - `Idiomas > Configurações > Modificações de URL`
        - [x] O idioma é definido pelo nome de diretório nos links permanentes
        - [x] Não exibir informação de idioma no URL para o idioma padrão
        - [x] Remova `/language/` em links bonitos

---

## ✅ Menus multilíngues

- Use menus separados:
    - `main_menu_pt` → Português
    - `main_menu_en` → English
- Em `Aparência > Menus`, crie menus distintos e associe à localização correta

---

## ✅ Widgets multilíngues

- Registre sidebars por idioma:

```php
register_sidebar([
  'name' => __('Rodapé (Português)', 'syndicate'),
  'id'   => 'footer_pt',
]);

register_sidebar([
  'name' => __('Footer (English)', 'syndicate'),
  'id'   => 'footer_en',
]);
```

- No `footer.php`, exiba o conteúdo condicionalmente:

```php
$locale = get_locale();
if ($locale === 'pt_BR') {
    dynamic_sidebar('footer_pt');
} elseif ($locale === 'en_US') {
    dynamic_sidebar('footer_en');
} else {
    echo '<p>' . esc_html__('Nenhum widget disponível.', 'syndicate') . '</p>';
}
```

---

## ✅ Textos do tema (i18n)

- Para temas que usam `.po/.mo`, use:

```php
echo esc_html__('Texto traduzível', 'syndicate');
```

---

## ✅ Boas práticas com Polylang

- Para imprimir direto (sem escape):

```php
echo pll__('Siga nas redes');
```

- Para comparar idioma atual:

```php
if (pll_current_language() === 'en') {
    // Inglês
}
```

---

## ✅ Padrão de escrita (com fallback)

- Para traduções dinâmicas internas, com suporte tanto para Polylang quanto para temas sem o plugin ativo:

```php
echo \Syndicate\Helpers\GeneralHelpers::translate('Texto');
```

---

## ✅ Hreflang automático (SEO)

- Para SEO multilíngue, use:

```php
GeneralHelpers::print_hreflang_tags();
```

Isso gera automaticamente:

```html
<link rel="alternate" hreflang="pt-BR" href="https://seudominio.com/sobre" />
<link rel="alternate" hreflang="en-US" href="https://seudominio.com/en/about" />
```

---

## ✅ Recomendação final

- Evite duplicar conteúdo entre idiomas
- Sempre teste páginas acessando:
    - `/pt/sobre-mim/`
    - `/en/about/`
- Evite strings fixas sem `__()`, `pll__()` ou `GeneralHelpers::translate()`
