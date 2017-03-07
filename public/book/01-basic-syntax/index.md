Základní syntaxe Markdown
=========================

Následuje rychlý přehled základního formátování textu v Markdown.

### Nadpisy

    ## Toto je nadpis <h2>
    ### Toto je nadpis <h3>
    #### Toto je nadpis <h4>

## Toto je nadpis &lt;h2>
### Toto je nadpis &lt;h3>
#### Toto je nadpis &lt;h4>

___________________________________________________________________________________________________________________________________________
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

___________________________________________________________________________________________________________________________________________
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

___________________________________________________________________________________________________________________________________________
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


    Odkazy označené CSS třídou blank budou otevírány do nového okna.

    [Odkaz do nového okna](http://www.atk14.net/){.blank}

Odkazy s třídou blank budou otevírány do nového okna.

[Odkaz do nového okna](http://www.atk14.net/){.blank}  

___________________________________________________________________________________________________________________________________________
### Seznamy

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
* _prověřené nástroje_ (www.atk14.net, [GitHub](https://github.com/)
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

Více o tabulkách najdete v [samostatné kapitole.](/czech/tables/)

___________________________________________________________________________________________________________________________________________
### Centrování textu

    #### <center>Centrovaný nadpis h4</center>

#### <center>Centrovaný nadpis h4</center>

<br>
<br>

    <center>
    
    Centrovaný odstavec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Curabitur et vestibulum odio, sit amet malesuada leo. Phasellus non vulputate mi.
    Nulla facilisi. Quisque magna nibh, tristique et ultrices eu, porttitor in
    turpis. Praesent sapien sem, fringilla sed consequat a, congue eu quam. Proin
    ultricies purus id erat fringilla blandit vitae ut elit. Interdum et malesuada
    fames ac ante ipsum primis in faucibus. Donec blandit quam felis, ac sollicitudin
    nunc ornare vitae.
    
    </center>

<center>

Centrovaný odstavec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Curabitur et vestibulum odio, sit amet malesuada leo. Phasellus non vulputate mi.
Nulla facilisi. Quisque magna nibh, tristique et ultrices eu, porttitor in
turpis. Praesent sapien sem, fringilla sed consequat a, congue eu quam. Proin
ultricies purus id erat fringilla blandit vitae ut elit. Interdum et malesuada
fames ac ante ipsum primis in faucibus. Donec blandit quam felis, ac sollicitudin    
nunc ornare vitae.

</center>

___________________________________________________________________________________________________________________________________________
### Citace

    William Shakespeare:
    
    > Ještě nikdo nebyl takový filozof,
    > aby trpělivě snášel bolení zubů.

William Shakespeare:

> Ještě nikdo nebyl takový filozof,
> aby trpělivě snášel bolení zubů.
