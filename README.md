Markdown Manual
===============

Toto je příručka pro Markdown psaná v jazyce českém.

Markdown Manual je provozován na adrese <http://markdown.plovarna.cz/>.

Zrojový text příručky byl vyčleněn do samostaného projektu [github.com/yarri/MarkdownManual.MdBook](https://github.com/yarri/MarkdownManual.MdBook/tree/master/src/public/markdown_manual).

Instalace
---------

```bash
git checkout https://github.com/yarri/MarkdownManual.git
cd MarkdownManual
git submodule init
git submodule update
mkdir tmp
chmod 777 tmp
composer install
```

Instalace & kompilace JS + CSS:
```
npm install
bower install
gulp
```

Spuštění lokálního vývojového serveru:

```bash
./scripts/server
```

A nyní byste měli najít Markdown Manual na adrese http://localhost:8000.

Pokud někde narazíte během instalace na problémy, ujistěte se, že splňujete podmínky uvedené na adrese <http://book.atk14.net/czech/installation%3Arequirements/>
