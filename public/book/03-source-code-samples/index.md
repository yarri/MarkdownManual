Ukázky zdrojového kódu
======================

Ukázku zdrojového kódu vložíme mezi trojice apostrofů:

    ```
    function helloWorld() {
      alert('Hello, World!');
    }
    ```
výsledek: 

```
function helloWorld() {
  alert('Hello, World!');
}
```

Nebo celou ukázku odsadíme o 4 mezery zleva:


        function helloWorld() {
          alert('Hello, World!');
        }

výsledek je stejný:

    function helloWorld() {
      alert('Hello, World!');
    }

### Zvyrazňování syntaxe

Za otevírací trojici apostrofů lze zapsat programovací jazyk, ve kterém je příslušná ukázka napsána.

Javascriptová ukázka se zvýrazněním syntaxe:

    ```javascript
    function helloWorld() {
      alert('Hello, World!');
    }
    ```

```javascript
function helloWorld() {
  alert('Hello, World!');
}
```

PHP blok se zvýrazněním syntaxe:

    ```php
    $article = Article::FindById(1);
    echo $article->getTitle();
    var_dump($article->toArray());
    ```

```php
$article = Article::FindById(1);
echo $article->getTitle();
var_dump($article->toArray());
```

Pro zvýrazňování syntaxe je použita knihovna [GeSHi - Generic Syntax Highlighter](http://sourceforge.net/projects/geshi/). GeSHi obsahuje pravidla pro zýraznění velkého množství jazyků. Za zmínku stojí:

- php
- javascript
- html
- sql
- xml
- python
- ruby

Pro prozkoumání celkového seznamu jazyků přejděte do zdrojového kódu GeSHi: https://github.com/easybook/geshi/tree/master/geshi
