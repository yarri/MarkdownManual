Tabulky
=======

V tabulce lze používat základní  zvýrazňování textu, odkazy a inline html značkování.

```
| První hlavička                 | Druhá hlavička    |
|--------------------------------|-------------------|
| Obsah                          | Další obsah       |
| Obsah **3. buňky**             | Obsah _4. buňky_  |
| [Odkaz](http://www.atk14.net/) | <del>hotovo</del> |
```

bude zobrazeno jako:

| První hlavička                 | Druhá hlavička    |
|--------------------------------|-------------------|
| Obsah                          | Další obsah       |
| Obsah **3. buňky**             | Obsah _4. buňky_  |
| [Odkaz](http://www.atk14.net/) | <del>hotovo</del> |

### Tabulka bez záhlaví

V Markdown musí každá tabulka obsahovat záhlaví. Nicméně pokud nebude v záhlaví vyplněna ani jedna hodnota, nebude výsledná tabulka záhlaví obsahovat.

```
|           |           |           |
|-----------|-----------|-----------|
| hodnota 1 | hodnota 2 | hodnota 3 |
| hodnota 4 | hodnota 5 | hodnota 6 |
```

bude zobrazeno jako:

|           |           |           |
|-----------|-----------|-----------|
| hodnota 1 | hodnota 2 | hodnota 3 |
| hodnota 4 | hodnota 5 | hodnota 6 |

### Zarovnání hodnot doprava

Zarovnání textu doprava lze dosáhnout zapsáním dvojtečky k pravému okraji oddělovače záhlaví.
To je vhodné nejen pro ceníky.

```
| Úkon               | Cena                |
|--------------------|--------------------:|
| Česání             | 90 Kč               |
| Stříhání vsedě     | 120 Kč              |
| Stříhání vestoje   | 130 Kč              |
| Vysoušení          | _dle objemu_        |
```

bude zobrazeno jako:

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

bude zobrazeno jako:

| Den         | Barva        |
|:-----------:|:------------:|
| Pondělí     | Modrá        |
| Úterý       | Šedivá       |
| Středa      | Škaredá      |

### Zápis tabulky v HTML

Tabulky se složitější strukturou lze zapisovat přímo v HTML. V tomto případě však nelze používat Markdown zvyrazňování textu.

    <table>
      <thead>
        <tr>
          <th colspan="3" align="center">Hlavička ukázkové tabulky</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td colspan="3" align="center">Patička ukázkové tabulky</td>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <th align="right" width="33%">Datum</th>
          <td>30.4.2017</td>
          <td>neděle</td>
        </tr>
        <tr>
          <th align="right">Čas</th>
          <td>13:23</td>
          <td>SELČ</td>
        </tr>
        <tr>
          <th align="right">Situace</th>
          <td colspan="2">jasno, teplo, slabý větřík od severozápadu</td>
        </tr>
      </tbody>
    </table>

bude zobrazeno jako:

<table>
  <thead>
    <tr>
      <th colspan="3" align="center">Hlavička ukázkové tabulky</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <td colspan="3" align="center">Patička ukázkové tabulky</td>
    </tr>
  </tfoot>
  <tbody>
    <tr>
      <th align="right" width="33%">Datum</th>
      <td>30.4.2017</td>
      <td>neděle</td>
    </tr>
    <tr>
      <th align="right">Čas</th>
      <td>13:23</td>
      <td>SELČ</td>
    </tr>
    <tr>
      <th align="right">Situace</th>
      <td colspan="2">jasno, teplo, slabý větřík od severozápadu</td>
    </tr>
  </tbody>
</table>
