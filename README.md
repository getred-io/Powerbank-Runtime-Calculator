# Powerbank Runtime Calculator

Eine mehrsprachige PHP-Anwendung zur Berechnung der Betriebsdauer von Powerbanks.

## Funktionalitäten

- **Mehrsprachigkeit**: Unterstützung für Deutsch, Englisch und Japanisch
- **Automatische Spracherkennung**: Basierend auf Browser-Einstellungen
- **Persistente Sprachauswahl**: Speichert die Spracheinstellung in Cookies
- **Responsive Design**: Optimiert für Desktop und mobile Geräte
- **Präzise Berechnung**: Berücksichtigt Kapazität, Spannung und Effizienz

## Installation

1. Kopieren Sie alle Dateien auf einen Webserver mit PHP-Unterstützung
2. Stellen Sie sicher, dass das Verzeichnis `lang` existiert und beschreibbar ist
3. Die Anwendung ist sofort einsatzbereit

### Verzeichnisstruktur

```
/
├── index.php            # Hauptseite
├── styles.css           # CSS-Stile
├── .htaccess            # Server-Konfiguration (optional)
├── lang/                # Sprachdateien
│   ├── de.php           # Deutsch
│   ├── en.php           # Englisch
│   └── ja.php           # Japanisch
└── README.md            # Diese Datei
```

## Verwendung

Öffnen Sie einfach die `index.php` in Ihrem Browser. Die Anwendung bietet ein Formular zur Eingabe folgender Werte:

- **Powerbank Kapazität** (in mAh)
- **Ausgangsspannung** (in Volt, standardmäßig 5V)
- **Geräteleistung** (in Watt)
- **Effizienz** (in Prozent, standardmäßig 85%)

Nach Klick auf "Berechnen" wird die voraussichtliche Betriebsdauer angezeigt.

## Erweiterung

Um eine neue Sprache hinzuzufügen:

1. Erstellen Sie eine neue Datei `lang/[SPRACHCODE].php` (z.B. `fr.php` für Französisch)
2. Kopieren Sie den Inhalt einer bestehenden Sprachdatei und übersetzen Sie alle Werte
3. Fügen Sie die neue Sprache zur Sprachauswahl in `index.php` hinzu:

```php
// In index.php
$availableLangs = ['de', 'en', 'ja', 'fr']; // Neue Sprache hinzufügen

// In der Sprachauswahl
<a href="?lang=fr" class="lang-btn <?php echo ($lang == 'fr') ? 'active' : ''; ?>">Français</a>
```

## Technische Details

Die Berechnung basiert auf folgender Formel:

```
Energie (Wh) = (Kapazität (mAh) / 1000) × Spannung (V) × Effizienz
Betriebsdauer (h) = Energie (Wh) / Geräteleistung (W)
```

## Lizenz

Frei zur Verwendung und Bearbeitung.
