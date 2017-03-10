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

```
# Toto je nadpis H1
## Toto je nadpis H2
### Toto je nadpis H3
#### Toto je nadpis H4

Alternativní zápis pro nadpisy H1 a H2:

Toto je nadpis H1
=================

Toto je nadpis H2
-----------------
```

# Toto je nadpis H1
## Toto je nadpis H2
### Toto je nadpis H3
#### Toto je nadpis H4

Alternativní zápis pro nadpisy H1 a H2:

Toto je nadpis H1
=================

Toto je nadpis H2
-----------------


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

Pravidla pro zápis odkazu jsou následující:

    Přímý zápis adresy

    [Text odkazu](http://adresa/)
    [Text odkazu](http://adresa/ "titulek")

    Reference

    [Text odkazu][1]
    [Text jiného odkazu][2]
    [Text odkazu s pojmenovanou referencí][zajimavy odkaz]

    Seznam referencí lze umístit např. na konci textu.

    [1]: http://adresa/
    [2]: http://jina.adresa/ "Volitelný titulek" 
    [zajimavy odkaz]:  http://zajimava.adresa/ (Jinak zapsaný titulek)

Všechny volně zapsané adresy začínající _www._, _http://_, _https://_, nebo _e-maily_ jsou automaticky převedeny na klikatelný odkaz.

    Odkazy na stránky:

    http://www.atk14.net/ - automaticky!  
    [Stránky frameworku ATK14](http://www.atk14.net/)  
    [Odkaz s titulkem](https://duckduckgo.com/ "Vyhledávač bez šmírování")  
    Reference: [Kostra základní aplikace][1]  
    Pojmenovaná Reference: [Embryo][embryo] toho zatím moc neumí

    E-maily:  

    info@example.com - automaticky  
    [Napište nám](mailto:info@example.com)

    Seznam referencí:

    [1]: http://skelet.atk14.net/ "ATK14 Skelet"
    [embryo]: http://embryo.atk14.net/ (ATK14 Embryo)

Odkazy na stránky:

http://www.atk14.net/ - automaticky!  
[Stránky frameworku ATK14](http://www.atk14.net/)  
[Odkaz s titulkem](https://duckduckgo.com/ "Vyhledávač bez šmírování")  
Reference: [Kostra základní aplikace][1]  
Pojmenovaná Reference: [Embryo][embryo] toho zatím moc neumí

E-maily:  

info@example.com - automaticky  
[Napište nám](mailto:info@example.com)

Seznam referencí:

[1]: http://skelet.atk14.net/ "ATK14 Skelet"
[embryo]: http://embryo.atk14.net/ (ATK14 Embryo)

**Upozornění:**  
Jistě jste si všimli, že _Seznam referencí_ není ve výsledném textu zobrazen. To je proto, že při transformaci Markdownu do HTML je účelnější
reference nahradit zpět do míst, která na ně odkazují. Při převodu do tiskového formátu (např. PDF) může být zase vhodnější seznam referencí
zachovat viditelný.

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
    * _prověřené nástroje_ (www.atk14.net, [GitHub](https://github.com/))
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

Zapis tabulky je následující.

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

Není potřeba dodržovat šířku políček ve stejném sloupci. Mezery se doplňují pouze pro zvýšení čitelnosti tabulky ve zdrojovém textu. Tabulku tak lze zapsat třeba i takto:

```
|První hlavička|2. hlavička|třetí...|Hlavička D|Hlavička E|
|-|-|-|-|-|
|alfa|beta|gama|delta|epsilon|
```

|První hlavička|2. hlavička|třetí...|Hlavička D|Hlavička E|
|-|-|-|-|-|
|alfa|beta|gama|delta|epsilon|

Více o tabulkách najdete v [samostatné kapitole.](/czech/tables/)


___________________________________________________________________________________________________________________________________________
### Obrázky {#obrazky}

Pravidlo pro zápis obrázku je následující:

    ![Alt text](ImageUrl "Title text")

Tedy konkrétní příklad:

    ![Obrázek s kocourem](http://www.cutestpaw.com/wp-content/uploads/2012/06/Like-a-BOSS.jpg "Dnes se cítím jako šéf")

![Obrázek s kocourem](http://www.cutestpaw.com/wp-content/uploads/2012/06/Like-a-BOSS.jpg "Dnes se cítím jako šéf")
