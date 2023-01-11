---
👉 **[Am 20.01.2023 startet der nächste OPTIMIST TRAINING CLUB! Lerne, wie du OPTIMIST optimal einsetzt.](https://erdmann-freunde.de/contao-themes/optimist/otc)**

---

# CONTAO THEME OPTIMIST
OPTIMIST ist ein kostenloses Contao Theme für einfache Websites. 

- [Weitere Infos](https://erdmann-freunde.de/contao-themes/optimist)
- [Demo](http://optimist.contao-theme.de/)

## 1. Voraussetzungen und Abhängigkeiten
- Contao 4.13
- [nutshell-framework/assets](https://github.com/nutshell-framework/assets) & [contao-grid-bundle](https://github.com/erdmannfreunde/contao-grid-bundle) (werden mit dem Theme installiert)

## 2. Download & Installation
Wie du das Theme installierst, erfährst du in dieser [Video-Anleitung](https://erdmann-freunde.de/produkte/contao-themes/optimist/installation).

## 3. Tipps für Einsteiger
Für Einsteiger haben wir [Tipps zum Einstieg in OPTIMIST](https://erdmann-freunde.de/contao-themes/optimist/installation#einstieg) zusammengestellt.

## 4. CSS-Klassen Übersicht
| Gruppe            | CSS-Klasse                        | Erklärung                                                                                                                                                                                                                                                                                            | zugehörige Datei                 |
|-------------------|-----------------------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|----------------------------------|
| **Abstände**      | `m-t-1` bis `m-t-5`               | Einfacher bis Fünffacher Außenbstand nach oben (m-t = margin-top). Als Basis dient `--base-spacing-unit`                                                                                                                                                                                             | trumps/_helper                   |
|                   | `m-b-1` bis `m-b-5`               | Einfacher bis Fünffacher Außenabstand nach unten                                                                                                                                                                                                                                                     | trumps/_helper                   |
|                   | `p-t-1` bis `p-t-5`               | Einfacher bis Fünffacher Innenabstand nach oben                                                                                                                                                                                                                                                      | trumps/_helper                   |
|                   | `p-b-1` bis `p-b-5`               | Einfacher bis Fünffacher Innenabstand nach unten                                                                                                                                                                                                                                                     | trumps/_helper                   |
| **Überschriften** | `heading--1` bis `heading--6`     | Überträgt die Größe und Abstände einer Überschrift auf das verwendete Element. Beispiel: Um eine Überschrift H2 wie eine H1 aussehen zu lassen, gibt man der Überschrift die CSS-Klasse heading--1                                                                                                        | base/_type                       |
|                   | `headling--left`                  | Überschrift linksbündig                                                                                                                                                                                                                                                                              | base/_type                       |
|                   | `heading--center`                 | Überschrift zentriert                                                                                                                                                                                                                                                                                | base/_type                       |
|                   | `heading--right`                  | Überschrift rechtsbündig                                                                                                                                                                                                                                                                             | base/_type                       |
| Texte             | `text--left`                      | Text linksbündig                                                                                                                                                                                                                                                                                     | base/_type                       |
|                   | `text--center`                    | Text zentriert                                                                                                                                                                                                                                                                                       | base/_type                       |
|                   | `text--right`                     | Text rechtsbündig                                                                                                                                                                                                                                                                                    | base/_type                       |
|                   | `text--attention`                 | Stellt den Text größer und mit 75% Deckkraft dar. Die Klasse kann auch direkt im TinyMCE-Editor ausgewählt werden                                                                                                                                                                                    | base/_type                       |
|                   | `text--alert`                     | Gibt dem Text einen 2px Rahmen und Innenabstand                                                                                                                                                                                                                                                      | base/_type                       |
|                   | `text--narrow`                    | Begrenzt die maximale Breite des Textes auf 9/12 bzw. 7/12 (je nach Viewport) und richtet ihn mittig aus                                                                                                                                                                                             | base/_type                       |
|                   | `checklist`                       | Fügt einer ungeordneten Liste ein Häckchen-Icon hinzu                                                                                                                                                                                                                                                | base/_type                       |
|                   | `card`                            | Fügt dem Text einen Rahmen und Schatten bei Hover hinzu. Ändert außerdem die Reihenfolge von Bild und Überschrift (sofern vorhanden)                                                                                                                                                                 | components/_card mixins/_general |
|                   | `fact`                            | Ändert die Reihenfolge von Bild und Überschrift (sofern vorhanden) und richtet das Bild linksbündig aus                                                                                                                                                                                              | components/_facts                |
| **Bilder**        |                                   | Bilder werden standardmäßig mittig ausgerichtet, sofern sie kleiner als der übergeordnete Container sind                                                                                                                                                                                             |                                  |
|                   | `image--left`                     | richtet das Bild linksbündig im Container aus                                                                                                                                                                                                                                                        | components/_media (Nutshell)     |
|                   | `image--center`                   | richtet das Bild mittig im Container aus                                                                                                                                                                                                                                                             | components/_media (Nutshell)     |
|                   | `image--right`                    | richtet das Bild rechts im Container aus                                                                                                                                                                                                                                                             | components/_media (Nutshell)     |
|                   | `image--border`                   | Fügt dem Bild einen Rahmen hinzu                                                                                                                                                                                                                                                                     | components/_media                |
| **Links**         | `btn--primary`                    | Macht aus dem Link einen Button in der Primärfarbe. Die Klasse kann auch direkt im TinyMCE-Editor ausgewählt werden                                                                                                                                                                                  | components/_links                |
|                   | `btn--secondary`                  | Macht aus dem Link einen Button in der Sekundärfarbe. Die Klasse kann auch direkt im TinyMCE-Editor ausgewählt werden                                                                                                                                                                                | components/_links                |
| **Artikel**       | `article--bubble-left`            | Fügt dem Artikel auf der linken Seite eine Blase als Hintergrundbild hinzu                                                                                                                                                                                                                           | base/_layout                     |
|                   | `article--bubble-right`           | Fügt dem Artikel auf der rechten Seite eine Blase als Hintergrundbild hinzu                                                                                                                                                                                                                          | base/_layout                     |
|                   | `article--tint`                   | Fügt dem Artikel eine getönte Hintergrundfarbe hinzu, festgelegt in `--color-band-tint-background`                                                                                                                                                                                                   | base/_layout                     |
|                   | `article--highlight`              | Fügt dem Artikel eine kräftige Hintergrundfarbe hinzu, festgelegt in `--color-band-highlight-background`                                                                                                                                                                                             | base/_layout                     |
|                   | `article--dark`                   | Fügt dem Artikel eine dunkle Hintergrundfarbe hinzu, festgelegt in `--color-band-dark-background`                                                                                                                                                                                                    | base/_layout                     |
|                   | `article-[viewport]-[cols]`       | Gibt dem Artikel ab dem genannten Viewport eine maximale Breite auf Basis des zwölfspaltigen Grid. Beispiel: article-lg-10 bedeutet, dass der Inhalt des Artikels auf 10/12 Breite reduziert wird.                                                                                                   | trumps/_helper                   |
|                   | `article-start-[viewport]-[cols]` | Wird in Verbindung mit article-[viewport]-[cols] genutzt. Legt fest, ab welcher Spalte das Element ab dem genannten Viewport in einem zwölfspaltigen Layout beginnen soll. Bsp.: article-start-lg-2 bedeutet, dass der Inhalt des Artikels ab dem LG-Viewport in der zweiten Spalte starten soll.    | trumps/_helper                   |
| **Hilfsklassen**  | `text--inverted`                  | Invertiert die Textfarbe, basierend auf der Variable `--color-text--inverted`                                                                                                                                                                                                                        | trumps/_helper                   |
|                   | `border-top`                      | Fügt dem Element/Artikel einen Rahmen oben hinzu                                                                                                                                                                                                                                                     | trumps/_helper                   |
|                   | `border-bottom`                   | Fügt dem Element/Artikel einen Rahmen unte hinzu                                                                                                                                                                                                                                                     | trumps/_helper                   |
|                   | `block--center`                   | Platziert das Element mittig (margin-left/-right: auto)                                                                                                                                                                                                                                              | trumps/_helper                   |

## 5. Optimist über Composer aktualisieren
Ein Upload über den Contao Manager führt dazu, dass sich Contao nicht mehr ohne weitere Vorkehrungen über Composer aktualisieren lässt. Dies lässt sich erreichen, indem man in der composer.json im Projektverzeichnis folgende Angaben ergänzt:

```
"repositories": {
  "erdmannfreunde/optimist-theme-bundle": {
    "type": "artifact",
    "url": "contao-manager/packages/"
  }
}
```
**Erklärung:** Bei dem Upload über den CM handelt es sich um ein sogenanntes Artefakt. Dieses lässt sich als Repository über Composer laden. (Danke [Christian](https://github.com/contaoacademy))


## Development notes:

Code style:

```shell
vendor/bin/ecs check src --fix
```

