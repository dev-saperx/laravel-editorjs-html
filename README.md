Editorjs-html you can convert the output object of EditorJs to HTML using editor-js/editorjs-php validation  
Note: The components work with Tailwind classes

## Support Blocks

  - Header
  - Paragraph
  - Table
  - List
  - Delimiter
  - Code
  - Quote
  - Embed
  - Image
  - Checklist
  - Link
  - Raw

## Installation
```sh
composer require saperx/laravel-editorjs-html
php artisan vendor:publish --provider="SaperX\LaravelEditorjsHtml\EditorJSHtmlProvider"
```

## Usage
```php
use SaperX\LaravelEditorjsHtml\EditorJSHtml;

//[...]

$convertToHtml = new EditorJSHtml($request->input('editorjs_data'));
$convertToHtml->render(); //return html view
```
