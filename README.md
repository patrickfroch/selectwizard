# SelectWizard

![PHP >= 8.1](https://img.shields.io/badge/PHP-%20%3E=%208.1.0-%238892BF?logo=PHP)
![Contao >= 4.13](https://img.shields.io/badge/Contao%3A-%3E=%204.13.0-orange?logo=data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAOCAYAAAAmL5yKAAABhGlDQ1BJQ0MgcHJvZmlsZQAAKJF9kT1Iw0AcxV9TS6W0OJhBxCFD7WRBVMRRq1CECqFWaNXBfPQLmjQkKS6OgmvBwY/FqoOLs64OroIg+AHi5uak6CIl/i8ptIjx4Lgf7+497t4BXKumaFbfOKDptplNp4R8YVUIvyKCEGLgkZAUy5gTxQx8x9c9Amy9S7Is/3N/jphatBQgIBDPKoZpE28QT2/aBuN9Yl6pSCrxOfGYSRckfmS67PEb47LLHMvkzVx2npgnFso9LPewUjE14iniuKrplM/lPVYZbzHWag2lc0/2wmhRX1lmOs0RpLGIJYgQIKOBKmqwkaRVJ8VClvZTPv5h1y+SSyZXFQo5FlCHBsn1g/3B726t0uSElxRNAaEXx/kYBcK7QLvpON/HjtM+AYLPwJXe9ddbwMwn6c2uFj8CBraBi+uuJu8BlzvA0JMhmZIrBWlypRLwfkbfVAAGb4HImtdbZx+nD0COusrcAAeHQKJM2es+7+7v7e3fM53+fgBDbnKUJwGIWgAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAAuIwAALiMBeKU/dgAAAAd0SU1FB+UKBQ0ZAGTr8kkAAAAZdEVYdENvbW1lbnQAQ3JlYXRlZCB3aXRoIEdJTVBXgQ4XAAABl0lEQVQoz42SO0scURiGn3NmnGFddJMoGrXxUrmgBATdmIgSbDSSSggKgoWglZDKRoRU+QFJISlC2CpF/oAYFoLiNnFBc0FikQ25iRB3cU28zM45KUZZjiNkvu67vM/3cr4jjpauraGL/e70lrTbu/lfeO/XOHs9AvpMgZWRqOJd+96rSGKAqq4BrM4F0J5EnwzZAE7vqDGk/5Y4zaTReztYyWGc/geACHonf5BtPfgfg1lbts4jqmsMwOnqS/x38wCor8/QxWWQNv6XDfSPFxesAICbCNnUhbyRl7NzlUSYsxJVDgGEW0PUkOr7SrjYnIwO4DiHOvxtFhvbIgNsALX/DVlbVwE0RQA4HaAtJID6+dl0kKhHXL9vCmIp7ME07kSW2KNfxBd3kQ23A4C/ux5aYN2aNPPuKdzhKexkCnnjJgiBOvhw7iD/FH1UNB32jSFbZoKrNDzEuTNu9FVhH443gzcA8D5lcXpHKqeM1xKbfY46fIJM1Icclrffnl9BxnIA3pvH6FLh0ocQV4r9vTxeZgZkPPsPMrF5u+jB/yUAAAAASUVORK5CYII=)
![PHPStan Level 9](https://img.shields.io/badge/PHPStan-%20Level%209-%232563eb?logo=PHP)

Es handelt sich bei dieser Erweiterung für das [Open Source CMS Contao](https://contao.org) um ein Backend Widget, das dem `listWizard` sehr ähnlich ist. Manchmal benötigt man eine Möglichkeit, den Nutzer aus einer bestimmten Anzahl von Optionen beliebig viele auswählen zu lassen. Diese Erweiterung stellt zu diesem Zweck das Widget `selectmenuWizard` zur Verfügung. Es handlet sich hierbei um eine variable Liste an Auswahlfeldern.

Die Erweiterung richtet sich an Entwickler, da die Felder im DCA definiert werden müssen. Es können die gängigen Einstellungen vorgenommen werden, die Contao für das DCA vorsieht.


## Autor

Patrick Froch <hallo@patrick-froch.de>


## Lizenz

Die Software wird unter LGPL-v3 veröffentlicht. Details sind in der Datei `LICENSE` zu finden.


## Voraussetzungen

- php: ~8.1
- contao/core-bundle: ~4.13|^5.0


## Installation

Die Installation geschieht über den ContaoManager. Einfach nach `esit/selectwizard` suchen und installieren.
Aleternativ kann die Erweiterung mit folgendem Befehl über [Composer](https://getcomposer.org/) installiert werden:

```shell
composer require esit/selectwizard
```


## Getestete Versionen

Die Erweiterung wurde erfolgreich mit folgenden Kombinationen aus PHP und Contao getestet:


| Contao                                                                            | ![PHP 8.2](https://img.shields.io/badge/PHP-%20%208.2-%238892BF?logo=PHP) | ![PHP 8.3](https://img.shields.io/badge/PHP-%20%208.3-%238892BF?logo=PHP) | ![PHP 8.4](https://img.shields.io/badge/PHP-%20%208.4-%238892BF?logo=PHP) | ![PHP 8.5](https://img.shields.io/badge/PHP-%20%208.5-%238892BF?logo=PHP) |
|-----------------------------------------------------------------------------------|---------------------------------------------------------------------------|---------------------------------------------------------------------------|---------------------------------------------------------------------------|---------------------------------------------------------------------------|
| ![Contao 4.13](https://img.shields.io/badge/Contao%3A-%204.13-orange?logo=Contao) | &#10003;                                                                  | &#10003;                                                                  | &#10003;                                                                  | &#10003;                                                                  |
| ![Contao 5.0](https://img.shields.io/badge/Contao%3A-%205.0-orange?logo=Contao)   | &#10003;                                                                  | &#10003;                                                                  | &#10003;                                                                  | &#10003;                                                                  |
| ![Contao 5.1](https://img.shields.io/badge/Contao%3A-%205.1-orange?logo=Contao)   | &#10003;                                                                  | &#10003;                                                                  | &#10003;                                                                  | &#10003;                                                                  |
| ![Contao 5.2](https://img.shields.io/badge/Contao%3A-%205.2-orange?logo=Contao)   | &#10003;                                                                  | &#10003;                                                                  | &#10003;                                                                  | &#10003;                                                                  |
| ![Contao 5.3](https://img.shields.io/badge/Contao%3A-%205.3-orange?logo=Contao)   | &#10003;                                                                  | &#10003;                                                                  | &#10003;                                                                  | &#10003;                                                                  |
| ![Contao 5.4](https://img.shields.io/badge/Contao%3A-%205.4-orange?logo=Contao)   | &#10003;                                                                  | &#10003;                                                                  | &#10003;                                                                  | &#10003;                                                                  |
| ![Contao 5.5](https://img.shields.io/badge/Contao%3A-%205.5-orange?logo=Contao)   | &#10003;                                                                  | &#10003;                                                                  | &#10003;                                                                  | &#10003;                                                                  |


## Getting Started

### Beispielkonfiguration

```php
<?php
// YOUR_EXTENSION/Resources/contao/dca/tl_demotable.php

/* set table name */
$table = 'tl_demotable';

/* palettes */
$GLOBALS['TL_DCA'][$table]['palettes']['default'] = '{testfield_legend},testfield;';

/* field */
$GLOBALS['TL_DCA'][$table]['fields']['testfield'] = [
    'label'     => &$GLOBALS['TL_LANG'][$table]['testfield'],
    'inputType' => 'selectmenuWizard',
    'options'   => [1 => 'Test 001', 2 => 'Test 002'],
    'eval'      => ['tl_class'=>'w50', 'includeBlankOption'=>true],
    'sql'       => 'text NOT NULL'
];
```

__Einschränkungen:__

- `submitOnChange` funktioniert nicht, macht aber auch wenig Sinn, da dies hauptsächliche für Subpaletten o.ä. wichtig ist. Diese können hier aber nicht verwendet werden, da es nicht nur einen Wert gibt.

### Ausgabe

![Ausgabe](https://github.com/eS-IT/selectwizard/blob/master/selectboxwizard_output.png?raw=true)


## Running the tests

Im Verzeichnis der Erweiterung folgendes aufrufen:

```bash
$> build/runtest.sh
```
