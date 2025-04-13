<?php
// Spracheinstellung ermitteln
$lang = 'de'; // Standardsprache
$availableLangs = ['de', 'en', 'ja'];

// Überprüfen, ob eine Sprache in der URL übergeben wurde
if (isset($_GET['lang']) && in_array($_GET['lang'], $availableLangs)) {
    $lang = $_GET['lang'];
    // Sprache in Cookie speichern für spätere Besuche (1 Monat gültig)
    setcookie('powerbank_lang', $lang, time() + (30 * 24 * 60 * 60), '/');
} 
// Alternativ aus Cookie lesen, falls vorhanden
else if (isset($_COOKIE['powerbank_lang']) && in_array($_COOKIE['powerbank_lang'], $availableLangs)) {
    $lang = $_COOKIE['powerbank_lang'];
}
// Alternativ Browser-Sprache erkennen
else if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if (in_array($browserLang, $availableLangs)) {
        $lang = $browserLang;
    }
}

// Sprachdatei einbinden
include "lang/$lang.php";
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['title']; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1 id="main-title"><?php echo $translations['title']; ?></h1>
            <div class="language-selector">
                <a href="?lang=de" class="lang-btn <?php echo ($lang == 'de') ? 'active' : ''; ?>">Deutsch</a>
                <a href="?lang=en" class="lang-btn <?php echo ($lang == 'en') ? 'active' : ''; ?>">English</a>
                <a href="?lang=ja" class="lang-btn <?php echo ($lang == 'ja') ? 'active' : ''; ?>">日本語</a>
            </div>
        </header>
        
        <div class="calculator">
            <div class="form-group">
                <label for="powerbank-capacity"><?php echo $translations['labels']['capacity']; ?></label>
                <input type="number" id="powerbank-capacity" placeholder="<?php echo $translations['placeholders']['capacity']; ?>">
            </div>
            
            <div class="form-group">
                <label for="powerbank-voltage"><?php echo $translations['labels']['voltage']; ?></label>
                <input type="number" id="powerbank-voltage" placeholder="<?php echo $translations['placeholders']['voltage']; ?>" value="5">
            </div>
            
            <div class="form-group">
                <label for="device-power"><?php echo $translations['labels']['power']; ?></label>
                <input type="number" id="device-power" placeholder="<?php echo $translations['placeholders']['power']; ?>">
            </div>
            
            <div class="form-group">
                <label for="efficiency"><?php echo $translations['labels']['efficiency']; ?></label>
                <input type="number" id="efficiency" placeholder="<?php echo $translations['placeholders']['efficiency']; ?>" value="85">
            </div>
            
            <button id="calculate-btn" onclick="calculateRuntime()"><?php echo $translations['calculateButton']; ?></button>
        </div>
        
        <div id="result" class="result">
            <h3><?php echo $translations['resultHeading']; ?></h3>
            <p id="runtime-result"></p>
            <p id="runtime-hours"></p>
            <p id="energy-content"></p>
        </div>
        
        <div class="info-box">
            <h3><?php echo $translations['infoHeading']; ?></h3>
            <ul>
                <li><?php echo $translations['infoItems'][0]; ?></li>
                <li><?php echo $translations['infoItems'][1]; ?></li>
                <li><?php echo $translations['infoItems'][2]; ?></li>
            </ul>
        </div>
    </div>

    <script>
        // Übersetzungen für JavaScript-Nutzung verfügbar machen
        const translations = <?php echo json_encode($translations); ?>;
        const currentLanguage = '<?php echo $lang; ?>';
        
        // Laufzeit berechnen
        function calculateRuntime() {
            // Eingabewerte abrufen
            const capacityMah = parseFloat(document.getElementById('powerbank-capacity').value);
            const devicePowerWatts = parseFloat(document.getElementById('device-power').value);
            const voltageV = parseFloat(document.getElementById('powerbank-voltage').value);
            const efficiency = parseFloat(document.getElementById('efficiency').value) / 100;
            
            // Überprüfen, ob gültige Zahlen eingegeben wurden
            if (isNaN(capacityMah) || isNaN(devicePowerWatts) || isNaN(voltageV) || isNaN(efficiency)) {
                alert(translations.errorMessage);
                return;
            }
            
            // Energieinhalt der Powerbank in Wattstunden (Wh) berechnen
            const energyWh = (capacityMah / 1000) * voltageV * efficiency;
            
            // Laufzeit in Stunden berechnen
            const runtimeHours = energyWh / devicePowerWatts;
            
            // Laufzeit in Stunden und Minuten formatieren
            const hours = Math.floor(runtimeHours);
            const minutes = Math.round((runtimeHours - hours) * 60);
            
            // Texte mit den richtigen Einheiten und Formatierungen
            document.getElementById('runtime-result').textContent = translations.resultTexts.runtime
                .replace('{capacity}', capacityMah)
                .replace('{power}', devicePowerWatts)
                .replace('{hours}', hours)
                .replace('{minutes}', minutes);
            
            document.getElementById('runtime-hours').textContent = translations.resultTexts.totalHours
                .replace('{hours}', runtimeHours.toFixed(2));
                
            document.getElementById('energy-content').textContent = translations.resultTexts.energyContent
                .replace('{energy}', energyWh.toFixed(2));
            
            // Ergebnisbereich anzeigen
            document.getElementById('result').style.display = 'block';
        }
    </script>
</body>
</html>