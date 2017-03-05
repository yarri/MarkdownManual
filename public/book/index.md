Markdown
========

Markdown je odlehčený značkovací jazyk, který se snadno zapisuje, snadno se čte a dá se převést na poměrně pěkné HTML.

## Syntaxe

Následuje přehled syntaxe Markdown, kterou můžete použít ve vašem projektu.

### Nadpisy

    ## Toto je nadpis <h2>
    ### Toto je nadpis <h3>
    #### Toto je nadpis <h4>

## Toto je nadpis &lt;h2>
### Toto je nadpis &lt;h3>
#### Toto je nadpis &lt;h4>

<br>
### Odstavce a zalamování řádků

Odstavce jsou odděleny jedním prázdným řádkem (konec odstavce, tzn. jako Enter ve Wordu). Pokud chcete v rámci jednoho odstavce zalomit řádek (jako Shift+Enter ve Wordu), zakončete tento řádek dvěma nebo více mezerami.

    Odstavec 1
    pořád obsah odstavce 1

    Odstavec 2

    Odstavec 3<mezera><mezera>  
    se zalomenou řádkou

Odstavec 1
pořád obsah odstavce 1

Odstavec 2

Odstavec 3  
se zalomenou řádkou

<br>
### Centrování textu

    ### <center>Centrovaný nadpis h3</center>

### <center>Centrovaný nadpis h3</center>

<br>
<br>

    <center>
    
    Centrovaný odstavec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et vestibulum odio, sit amet malesuada leo. Phasellus non vulputate mi. Nulla facilisi. Quisque magna nibh, tristique et ultrices eu, porttitor in turpis. Praesent sapien sem, fringilla sed consequat a, congue eu quam. Proin ultricies purus id erat fringilla blandit vitae ut elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec blandit quam felis, ac sollicitudin nunc ornare vitae.
    
    </center>

<center>
    
Centrovaný odstavec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et vestibulum odio, sit amet malesuada leo. Phasellus non vulputate mi. Nulla facilisi. Quisque magna nibh, tristique et ultrices eu, porttitor in turpis. Praesent sapien sem, fringilla sed consequat a, congue eu quam. Proin ultricies purus id erat fringilla blandit vitae ut elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec blandit quam felis, ac sollicitudin nunc ornare vitae.
    
</center>

<br>
### Zvýrazňování

    *tohle bude italika*  
    _tohle taky italika_

    **Tohle bude "tlustě"**  
    __I tohle bude "tlustě"__
    
    Lze kombinovat: Pozorně čtěte, toto je _**fakt důležité!**_ Něco _**velkého**_ je na obzoru.

*tohle bude italika*  
_tohle taky italika_

**Tohle bude "tlustě"**  
__I tohle bude "tlustě"__

Lze kombinovat: Pozorně čtěte, toto je _**fakt důležité!**_ Něco _**velkého**_ je na obzoru.

<br>
### Seznamy

#### Netříděný

    * Item 1
    * Item 2
      * Item 2a
      * Item 2b

* Item 1
* Item 2
  * Item 2a
  * Item 2b

#### Tříděný

    1. Item 1
    2. Item 2
    3. Item 3
       * Item 3a
       * Item 3b

1. Item 1
2. Item 2
3. Item 3
   * Item 3a
   * Item 3b

<br>
### Odkazy {#odkazy}

Všechny URL adresy, začínající www. nebo http://), nebo e-maily, které do textu zapíšte, budou automaticky převedeny na klikatelný odkaz.

    http://www.ntvage.cz/ - automaticky!  
    [Stránky NTV AGE](http://www.ntvage.cz/)  
    info@ntvage.cz - automaticky  
    [Napište nám](mailto:info@ntvage.cz)  

http://www.ntvage.cz/ - automaticky!  
[Stránky NTV AGE](http://www.ntvage.cz/)  
info@ntvage.cz - automaticky  
[Napište nám](mailto:info@ntvage.cz)  


Odkazy s třídou blank budou otevírány do nového okna.

    [NTV AGE do nového okna](http://www.ntvage.cz/){.blank}
    <a href="http://www.ntvage.cz" class="blank">NTV AGE.cz do nového okna podruhé</a>

[NTV AGE do nového okna](http://www.ntvage.cz/){.blank}  
<a href="http://www.ntvage.cz" class="blank">NTV AGE do nového okna podruhé</a>  

<br>
### Citace

    William Shakespeare:
    
    > Ještě nikdo nebyl takový filozof,
    > aby trpělivě snášel bolení zubů.

William Shakespeare:

> Ještě nikdo nebyl takový filozof,
> aby trpělivě snášel bolení zubů.

<br>
### Tabulky

```
| První hlavička     | Druhá hlavička      |
|--------------------|---------------------|
| Obsah pro 1. buňku | Obsah pro 2. buňku  |
| Obsah v 1. sloupci | Obsah ve 2. sloupci |
| Další obsah        | Další obsah         |
```

bude vykresleno jako:

| První hlavička     | Druhá hlavička      |
|--------------------|---------------------|
| Obsah pro 1. buňku | Obsah pro 2. buňku  |
| Obsah v 1. sloupci | Obsah ve 2. sloupci |
| Další obsah        | Další obsah         |

Více o tabulkách najdete v [samostatné kapitole](/czech/tables/)


<br>
### Další zdroje informací o formátu Markdown

* [Základní dokumentace](https://daringfireball.net/projects/markdown/)
* [Rozšířené vlastnosti Markdown](https://michelf.ca/projects/php-markdown/extra/)
* https://github.com/michelf/php-markdown
