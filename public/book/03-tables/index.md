Tabulky
=======

### Tabulka se záhlavím

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

### Tabulka bez záhlaví

```
|                    |                     |
|--------------------|---------------------|
| Obsah pro 1. buňku | Obsah pro 2. buňku  |
| Obsah v 1. sloupci | Obsah ve 2. sloupci |
| Další obsah        | Další obsah         |
```

bude vykresleno jako:

|                    |                     |
|--------------------|---------------------|
| Obsah pro 1. buňku | Obsah pro 2. buňku  |
| Obsah v 1. sloupci | Obsah ve 2. sloupci |
| Další obsah        | Další obsah         |

### Zarovnání hodnot doprava

Zarovnání textu doprava dosáhneme zapsáním dvojtečky k pravému okraji oddělovače záhlaví.
Je to vhodné nejen pro ceníky.

```
| Úkon               | Cena                |
|--------------------|--------------------:|
| Česání             | 90 Kč               |
| Stříhání vsedě     | 120 Kč              |
| Stříhání vestoje   | 130 Kč              |
| Vysoušení          | _dle objemu_        |
```

| Úkon               | Cena                |
|--------------------|--------------------:|
| Česání             | 90 Kč               |
| Stříhání vsedě     | 120 Kč              |
| Stříhání vestoje   | 130 Kč              |
| Vysoušení          | _dle objemu_        |

### Zarovnání hodnot na střed

Zarovnání hodnot na střed docílíme zapsáním dvojteček na každou stranu oddělovače záhlaví.

```
| Den         | Barva        |
|:-----------:|:------------:|
| Pondělí     | Modrá        |
| Úterý       | Šedivá       |
| Středa      | Škaredá      |
```

| Den         | Barva        |
|:-----------:|:------------:|
| Pondělí     | Modrá        |
| Úterý       | Šedivá       |
| Středa      | Škaredá      |

### Zápis tabulky v HTML

Složitější tabulku lze vždycky zapsat pomocí HTML

    <table>
      <thead>
        <tr>
          <th colspan="2" align="center">Hlavička ukázkové tabulky</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <th align="right" width="33%">Datum</th>
          <td>30.4.2017</td>
        </tr>
        <tr>
          <th align="right">Čas</th>
          <td>13:23</td>
        </tr>
        <tr>
          <th align="right">Sitace</th>
          <td>jasno, teplo, slabý větřík od severozápadu</td>
        </tr>
      </tbody>

      <tfoot>
        <tr>
          <td colspan="2" align="center">Patička ukázkové tabulky</td>
        </tr>
      </tfoot>
    </table>

<table>
  <thead>
    <tr>
      <th colspan="2" align="center">Hlavička ukázkové tabulky</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th align="right" width="33%">Datum</th>
      <td>30.4.2017</td>
    </tr>
    <tr>
      <th align="right">Čas</th>
      <td>13:23</td>
    </tr>
    <tr>
      <th align="right">Sitace</th>
      <td>jasno, teplo, slabý větřík od severozápadu</td>
    </tr>
  </tbody>

  <tfoot>
    <tr>
      <td colspan="2" align="center">Patička ukázkové tabulky</td>
    </tr>
  </tfoot>
</table>
