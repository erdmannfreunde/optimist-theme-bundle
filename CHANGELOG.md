# CHANGELOG:

## 3.0.2 (15.10.2024)

- Anweisungen für Text mit Bild für Contao 5 optimiert (Danke Christina)
- Demo-Daten um Text mit Bild ergänzt

## 3.0.1 (07.10.2024)

- Kurs [Bessere Websites mit OPTIMIST](https://erdmann-freunde.de/optimist-kurs) ergänzt
- Theme-Version ergänzt

## 3.0.0 (27.09.2024)

- Theme für Contao 5.3 LTS optimiert

## 2.0.4 (09.05.2023)

- URL zum Theme im Dateikopf angepasst

## 2.0.3 (27.02.2023)

- Contao Version auf 4.13 angehoben, da der MySQL-Dump in V2 nur noch für 4.13 zur Verfügung steht

## 2.0.2 (19.01.2023)

- Fix: Hilfsklassen für Artikel werden nun korrekt berücksichtigt

## 2.0.1 (19.01.2023)

- Überschriften-Klassen heading--1 bis 6 aus Theme entfernt, da sie nun aus dem Nutshell Framework kommen
- MySQL-Dump um Theme-Toolbox-Anweisungen ergänzt

## 2.0.0 (11.01.2023)

- OPTIMIST verwendet nun das Nutshell Framework V2
  - Variablen folgen nun einer einheitlichen Benennung
  - alle CSS-Variablen sind nun in der \_variables.scss zu finden
  - alle Sass-Variablen sind nun in der \_config.scss zu finden
- `.card` und `.fact` Elemente werden nun per Flexbox gestaltet
- CSS-Klassen können nun über die Theme Toolbox vergeben werden
- kleinere Grid-Optimierungen

## 1.3.0 (16.02.2022)

- OPTIMIST für Contao 4.13 optimiert
- Contao 4.12 Support eingestellt

## 1.2.0 (20.09.2021)

- OPTIMIST für Contao 4.12 optimiert
- SVG-Blasen-Animation entfernt, da sie zu viel Ressourcen verbraucht
- ungenutzte Dateien und Anweisungen entfernt

## 1.1.10 (29.08.2021)

- fix: localconfig-Einstellungen aus der config.yml werden nun übernommen (#10)

_Danke katgirl und fritzmg_

## 1.1.9 (14.04.2021)

- Übersicht für im Theme verwendete CSS-Klassen in `README.md` ergänzt

## 1.1.8 (13.04.2021)

- PHP 8 Support. Bei Fragen und Problemen mit PHP 8 bitte Tickets erstellen

## 1.1.7 (25.03.2021)

- OPTIMIST für Contao 4.11 optimiert
- Fehlerbehebung bei der Hilfsklassen-Erstellung (Danke Marcel)

## 1.1.6 (09.03.2021)

- Fehlerhafte Darstellung der News auf kleinen Bildschirmen behoben (Danke FinalTestMan)

## 1.1.5 (12.02.2021)

- Der Contao Manager üerprüft bei einem Update nun, ob bereits ein entsprechender Ordner `theme` existiert und überschreibt diesen nicht

## 1.1.4 (10.02.2021)

- Support für Composer 2.X bzw. Contao Manager 1.4

## 1.1.3 (15.11.2020)

- Fehlerhafte Darstellung für alle Slider behoben, siehe #5. Danke @alwinvollmer

## 1.1.2 (08.11.2020)

- Das Template be_tinyMCE.html5 ist nun mit dem TinyMCE 5 kompatibel (Standard in Contao 4.10)

## 1.1.1 (08.11.2020)

- Fehler bei animiertem SVG im Firefox behoben
- Fehlerhafte Darstellung des Contao Sliders behoben, siehe #5

## 1.1.0 (18.09.2020)

- OPTIMIST für Contao 4.10 optimiert
- Fehler bei animiertem SVG im Firefox behoben
- Verwendung des neuen Grid-Bundles

## 1.0.3 (15.07.2020)

- Fehlerhafte Darstellung der Navigation bei Veränderung des Viewports behoben, s. [#2](https://github.com/ErdmannFreunde/optimist-theme-bundle/issues/2)
- Browser-Support Hinweis wird nun per JS eingefügt (`js_supportmsg.html5`), s.a. [#3](https://github.com/ErdmannFreunde/optimist-theme-bundle/issues/3)

_Danke rflx und rabauss_

## 1.0.2 (11.05.2020)

- Verlauf für btn--primary lässt sich nun über die `_variables.scss` anpassen

## 1.0.1 (08.05.2020)

- Contao 4.9 in composer.json vorausgesetzt
- 404 Fehlerseite in Demo ergänzt
- Kommentare (Tests) entfernt, SCSS optimiert
- Changelog eingeführt
