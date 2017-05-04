Speciální formátování
=====================

Tato kapitola pojednává o formátování v Markdown, která nejsou tak často používána.

* [Odkazy otevírané do nového okna](#odkazy-otevirane-do-noveho-okna)
* [Citace](#citace)
* [Centrování textu](#centrovani-textu)
* [Vkládané HTML](#vkladane-html)
* [Horizontální oddělovač](#horizontalni-oddelovac)

### Odkazy otevírané do nového okna {#odkazy-otevirane-do-noveho-okna}


    Odkazy označené CSS třídou blank budou otevírány do nového okna.

    [Odkaz do nového okna](http://www.atk14.net/){.blank}

Odkazy s třídou blank budou otevírány do nového okna.

[Odkaz do nového okna](http://www.atk14.net/){.blank}  


___________________________________________________________________________________________________________________________________________
### Citace {#citace}

    William Shakespeare:
    
    > Ještě nikdo nebyl takový filozof,
    > aby trpělivě snášel bolení zubů.

William Shakespeare:

> Ještě nikdo nebyl takový filozof,
> aby trpělivě snášel bolení zubů.

___________________________________________________________________________________________________________________________________________
### Centrování textu {#centrovani-textu}

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
### Vkládané HTML {#vkladane-html}

HTML formátování lze použít v Markdown dokumentu a ve většině případů to zafunguje velmi dobře.

    <dl>
      <dt>Definition list</dt>
      <dd>Is something people use sometimes.</dd>

      <dt>Markdown in HTML</dt>
      <dd>Does *not* work **very** well. Use HTML <em>tags</em>.</dd>
    </dl>

<dl>
  <dt>Definition list</dt>
  <dd>Is something people use sometimes.</dd>

  <dt>Markdown in HTML</dt>
  <dd>Does *not* work **very** well. Use HTML <em>tags</em>.</dd>
</dl>

___________________________________________________________________________________________________________________________________________
### Horizontální oddělovač {#horizontalni-oddelovac}

```
Tři nebo více pomlček,

---

... hvězdiček nebo

***

... podtržítek

___

```

Tři nebo více pomlček,

---

... hvězdiček nebo

***

... podtržítek

___

