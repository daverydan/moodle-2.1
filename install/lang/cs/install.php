<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle 2.1 installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/en/Development:Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['admindirname'] = 'Adresář se soubory pro správu serveru';
$string['availablelangs'] = 'Dostupné jazykové balíčky';
$string['chooselanguagehead'] = 'Vyberte jazyk';
$string['chooselanguagesub'] = 'Zvolte si jazyk tohoto průvodce instalací. Vybraný jazyk bude též nastaven jako výchozí jazyk stránek, ale to půjde případně později změnit.';
$string['clialreadyinstalled'] = 'Soubor config.php již existuje. Spusťte admin/cli/upgrade.php, pokud chcete provést upgrade vašich stránek.';
$string['cliinstallheader'] = 'Moodle {$a} - průvodce instalací z příkazové řádky';
$string['databasehost'] = 'Databázový server';
$string['databasename'] = 'Název databáze';
$string['databasetypehead'] = 'Vyberte databázový ovladač';
$string['dataroot'] = 'Datový adresář';
$string['dbprefix'] = 'Předpona tabulek';
$string['dirroot'] = 'Adresář Moodlu';
$string['environmenthead'] = 'Kontrola programového prostředí...';
$string['environmentsub2'] = 'Každé vydání Moodle vyžaduje určitou minimální verzi PHP a několik povinných rozšíření PHP. Plná kontrola prostředí se provádí před každým instalací a upgrade. Prosím, kontaktujte správce serveru, pokud nevíte, jak nainstalovat novou verzi, nebo povolit rozšíření PHP.';
$string['errorsinenvironment'] = 'Kontrola serverového prostředí selhala!';
$string['installation'] = 'Instalace';
$string['langdownloaderror'] = 'Bohužel, jazyk "{$a}" se nepodařilo nainstalovat. Instalace bude pokračovat v angličtine.';
$string['memorylimithelp'] = '<p>Limit paměti pro PHP skripty je na vašem serveru momentálně nastaven na hodnotu {$a}.</p>

<p>To může později způsobovat Moodlu problémy, zvláště při větším množství modulů a/nebo uživatelů.</p>

<p>Je-li to možné, doporučujeme vám nastavit v PHP vyšší limit, např. 40M. Můžete to provést několika způsoby:
<ol>
<li>Můžete-li, překompilujte PHP s volbou <i>--enable-memory-limit</i>.
Moodle si tak bude sám moci nastavit potřebný limit.</li>
<li>Máte-li přístup k souboru php.ini, změňte nastavení <b>memory_limit</b>
na hodnotu blízkou 40M. Nemáte-li taková práva, požádejte správce vašeho webového serveru, aby toto nastavení provedl on.</li>
<li>Na některých serverech můžete v kořenovém adresáři Moodlu vytvořit soubor .htaccess s následujícím řádkem:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Bohužel, v některých případech tím vyřadíte z provozu <b>všechny</b> PHP stránky (při jejich prohlížení uvidíte chybová hlášení), takže budete muset soubor .htaccess zase odstranit.</li>
</ol>';
$string['paths'] = 'Cesty';
$string['pathserrcreatedataroot'] = 'Datový adresář ({$a->dataroot}) nemůže být tímto průvodcem instalací vytvořen.';
$string['pathshead'] = 'Potvrdit cesty';
$string['pathsrodataroot'] = 'Do datového adresáře nelze zapisovat.';
$string['pathsroparentdataroot'] = 'Do nadřazeného adresáře ({$a->parent}) nelze zapisovat. Datový adresář ({$a->dataroot}) nemůže být tímto průvodcem instalací vytvořen.';
$string['pathssubdirroot'] = 'Absolutní cesta k adresáři s instalací Moodle';
$string['pathsunsecuredataroot'] = 'Umístění datového adresáře není bezpečné';
$string['pathswrongadmindir'] = 'Adresář pro správu serveru (admin) neexistuje';
$string['phpextension'] = '{$a} PHP rozšíření';
$string['phpversion'] = 'Verze PHP';
$string['phpversionhelp'] = '<p>Moodle vyžaduje PHP alespoň verze 4.3.0 nebo 5.1.0 (PHP 5.0.x obsahuje množství chyb).</p>
<p>Nyní používáte PHP verze {$a}.</p>
<p>Musíte PHP upgradovat, nebo přejít k hostiteli s vyšší verzí!<br />
(U PHP 5.0.x můžete také přejít na nižší verzi 4.4.x či 4.3.x.)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Podařilo se vám úspěšně nainstalovat a spustit balíček <strong>{$a->packname} {$a->packversion}</strong>. Gratulujeme!';
$string['welcomep30'] = '<strong>{$a->installername}</strong> obsahuje aplikace k vytvoření prostředí, ve kterém bude provozován váš <strong>Moodle</strong>. Jmenovitě se jedná o:';
$string['welcomep40'] = 'Balíček rovněž obsahuje <strong>Moodle ve verzi {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Použití všech aplikací v tomto balíčku je vázáno jejich příslušnými licencemi. Kompletní balíček <strong>{$a->installername}</strong> je software s <a href="http://www.opensource.org/docs/definition_plain.html"> otevřeným kódem (open source)</a> a je šířen pod licencí <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Následující stránky vás v několik jednoduchých krocích nastavením <strong>Moodlu</strong> na vašem počítači. Můžete přijmout výchozí nastavení, nebo si je upravit podle svých potřeb.';
$string['welcomep70'] = 'Stisknutím níže uvedeného tlačítka "Další" pokračujte v nastavení vaší instalace Moodlu.';
$string['wwwroot'] = 'Webová adresa';
