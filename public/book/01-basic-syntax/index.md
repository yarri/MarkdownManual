Základní syntaxe Markdown
=========================

Následuje rychlý přehled základního formátování textu v Markdown.
Pro rychlou navigaci použijte kotvičky.

* [Nadpisy](#nadpisy)
* [Odstavce](#odstavce)
* [Zvýrazňování textu](#zvyraznovani-textu)
* [Odkazy](#odkazy)
* [Seznamy](#seznamy)
* [Tabulky](#tabulky)
* [Obrázky](#obrazky)

### Nadpisy {#nadpisy}

    ## Toto je nadpis <h2>
    ### Toto je nadpis <h3>
    #### Toto je nadpis <h4>

## Toto je nadpis &lt;h2>
### Toto je nadpis &lt;h3>
#### Toto je nadpis &lt;h4>


___________________________________________________________________________________________________________________________________________
### Odstavce {#odstavce}

Odstavce se oddělují jedním nebo více prázdnými řádky.
V rámci textu jednoho odstavce nemají případné konce řádků význam pro výsledné formátování.

    Toto je první odstavec. Text pokračuje. Text stále pokračuje. Text stále pokračuje. A pokračuje. A konec.

    Toto je druhý odstavec. Toto je rovněž součást druhého odstavce.
    A toto je stále částí druhého odstavce.
    A ješte toto.
    Konec druhého odstavce.

Toto je první odstavec. Text pokračuje. Text stále pokračuje. Text stále pokračuje. A pokračuje. A konec.
                                                                                                          
Toto je druhý odstavec. Toto je rovněž součást druhého odstavce.
A toto je stále částí druhého odstavce.
A ješte toto.
Konec druhého odstavce.

#### Zalamování řádků

Pro zalomení řádku v rámci jednoho odstavce (jako Shift+Enter ve Wordu), je potřeba tento řádek zakončit dvěmi nebo více mezerami.

    Odstavec 1
    pořád obsah odstavce 1

    Odstavec 2<mezera><mezera>  
    se zalomenou řádkou

Odstavec 1
pořád obsah odstavce 1

Odstavec 2  
se zalomenou řádkou


___________________________________________________________________________________________________________________________________________
### Zvýrazňování textu {#zvyraznovani-textu}

    *tohle bude italika*  
    _tohle taky italika_

    **Tohle bude "tlustě"**  
    __I tohle bude "tlustě"__
    
    Lze kombinovat: Pozorně čtěte, toto je _**fakt důležité!**_ Něco _**velkého** je na obzoru_.

*tohle bude italika*  
_tohle taky italika_

**Tohle bude "tlustě"**  
__I tohle bude "tlustě"__

Lze kombinovat: Pozorně čtěte, toto je _**fakt důležité!**_ Něco _**velkého** je na obzoru_.


___________________________________________________________________________________________________________________________________________
### Odkazy {#odkazy}

Všechny URL adresy, začínající www. nebo http://), nebo e-maily, které do textu zapíšte, budou automaticky převedeny na klikatelný odkaz.

    http://www.atk14.net/ - automaticky!  
    [Stránky frameworku ATK14](http://www.atk14.net/)  
    [Odkaz s titulkem](https://duckduckgo.com/ "Vyhledávač bez šmírování")  
    E-maily:  
    info@atk14.net - automaticky  
    [Napište nám](mailto:info@atk14.net)

http://www.atk14.net/ - automaticky!  
[Stránky frameworku ATK14](http://www.atk14.net/)  
[Odkaz s titulkem](https://duckduckgo.com/ "Vyhledávač bez šmírování")  
E-maily:  
info@example.com - automaticky  
[Napište nám](mailto:info@example.com)


    Odkazy označené CSS třídou blank budou otevírány do nového okna.

    [Odkaz do nového okna](http://www.atk14.net/){.blank}

Odkazy s třídou blank budou otevírány do nového okna.

[Odkaz do nového okna](http://www.atk14.net/){.blank}  


___________________________________________________________________________________________________________________________________________
### Seznamy {#seznamy}

#### Netříděné seznamy

    Pro zápis seznamu použijeme pomlčky...

    - jablko
    - hruška
    - hrášek

    ... nebo hvězdičky.

    * broskev
    * nektarinka
    * okurka

    V položkách seznamu pohodlně značkujeme.

    * mise, **vize**
    * _prověřené nástroje_ (www.atk14.net, [GitHub](https://github.com/)
    * ... a další

    Je to jednoduché.

Pro zápis seznamu použijeme pomlčky...

- jablko
- hruška
- hrášek

... nebo hvězdičky.

* broskev
* nektarinka
* okurka

V položkách seznamu pohodlně značkujeme.

* mise, **vize**
* _prověřené nástroje_ (www.atk14.net, [GitHub](https://github.com/))
* ... a další

Je to jednoduché.

#### Tříděné seznamy

    Jednotlivé položky tříděného seznamu očíslujeme.

    1. Peter Venkman
    2. Ray Stantz
    3. Egon Spengler
    4. Winston Zeddemore

    To je celé.

Jednotlivé položky tříděného seznamu očíslujeme.

1. Peter Venkman
2. Ray Stantz
3. Egon Spengler
4. Winston Zeddemore

To je celé.

#### Vnořené seznamy

    Položky vnořeného seznamu jsou odsazeny dvěmi mezerami.

    * Item 1
      * Item 1a
      * Item 1a
    * Item 2
      * Item 2a
      * Item 2b

    Tříděné a netříděné seznamy lze kombinovat.

    1. Item 1
      * Item 1a
      * Item 1a
    2. Item 2
      * Item 2a
      * Item 2b

Položky vnořeného seznamu jsou odsazeny dvěmi mezerami.

* Item 1
  * Item 1a
  * Item 1a
* Item 2
  * Item 2a
  * Item 2b

Tříděné a netříděné seznamy lze kombinovat.

1. Item 1
  * Item 1a
  * Item 1a
2. Item 2
  * Item 2a
  * Item 2b


___________________________________________________________________________________________________________________________________________
### Tabulky {#tabulky}

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

Více o tabulkách najdete v [samostatné kapitole.](/czech/tables/)


___________________________________________________________________________________________________________________________________________
### Obrázky {#obrazky}

Pravidlo pro zápis obrázku je následující:

    ![Alt text](ImageUrl "Title text")

Tedy konkrétní příklad:

    ![Obrázek s kocourem](http://www.cutestpaw.com/wp-content/uploads/2012/06/Like-a-BOSS.jpg "Cítím se dnes jako šéf")

![Obrázek s kocourem](http://www.cutestpaw.com/wp-content/uploads/2012/06/Like-a-BOSS.jpg "Cítím se dnes jako šéf")
