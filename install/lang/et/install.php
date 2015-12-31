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

$string['admindirname'] = 'Administreerimiskataloog';
$string['availablelangs'] = 'Saadaval keelte nimekiri';
$string['chooselanguagehead'] = 'Keele valik';
$string['chooselanguagesub'] = 'Palun vali keel, mida kasutatakse AINULT installeerimise käigus. Hiljem saab valida õpikeskkonna ja kasutajate keelt.';
$string['databasehost'] = 'Andmebaasi host';
$string['databasename'] = 'Andmebaasi nimi';
$string['databasetypehead'] = 'Vali andmebaasi draiver';
$string['dataroot'] = 'Andmete kataloog';
$string['dbprefix'] = 'Tabeli eesliide';
$string['dirroot'] = 'Moodle kataloog';
$string['environmenthead'] = 'Keskkonna kontrollimine...';
$string['errorsinenvironment'] = 'Keskkonna sobivuse kontroll ebaõnnestus!';
$string['installation'] = 'Installeerimine';
$string['langdownloaderror'] = 'Kahjuks keelt "{$a}" ei paigaldatud. Paigaldamine jätkub inglise keeles.';
$string['memorylimithelp'] = '<p>PHP mälu limiit sinu serveri jaoks on hetkel {$a}.</p>
<p>See võib hiljem tekitada Moodle\'il mäluprobleeme, eriti kui sul on palju mooduleid ja/või kasutajaid.
</p>
<p>Me soovitame, et sa konfigureeriksid PHP kõrgema limiidi peale, näiteks 16M. Selle tostamiseks on mitu viisi:</p>
<ol>
<li>Kui võimalik, siis kompileeri PHP uuesti parameetriga <i>--enable-memory-limit</i>.
See lubab Moodle\'il ise mälu limiiti määrata.</li>
<li>Kui sul on juurdepääs oma php.ini failile, siis saad muuta seal <b>memory_limit</b> väärtuseks midagi 16M lähedast. Kui sul ei ole juurdepääsu, siis võiksid paluda administraatoril seda teha.</li>
<li>Mõnedes PHP serverites saad luua Moodle kataloogi .htaccess faili, mis sisaldab seda rida:<p><blockquote>php_value memory_limit 16M</blockquote></p>
<p>Kuigi mõnedes serverites tõkestab see <b>kõigi</b> PHP lehekülgede tööd (sa näed veateateid, kui vaatad lehti), nii et pead eemaldama .htaccess faili.</p></li>
</ol>';
$string['paths'] = 'Rajad';
$string['pathserrcreatedataroot'] = 'Andmete kataloogi ({$a->dataroot}) ei saa installeerija luua.';
$string['pathshead'] = 'Radade kinnitused';
$string['pathsunsecuredataroot'] = 'Andmete juurkataloogi asukoht pole turvamine';
$string['pathswrongadmindir'] = 'Admin kataloogi ei eksisteeri';
$string['phpextension'] = '{$a} PHP laiendus';
$string['phpversion'] = 'PHP versioon';
$string['phpversionhelp'] = '<p>Moodle vajab vähemalt PHP versiooni 4.1.0</p>
<p>Sinu jooksev versioon on {$a}</p>
<p>Sa pead oma PHP-d uuendama või kolima hosti, kus on uuem PHP versioon!</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Sa näed seda lehte, sest oled edukalt installeerinud ja käivitanud <strong>{$a->packname} {$a->packversion}</strong> paketi Sinu arvutis. Õnnitleme!';
$string['welcomep40'] = 'Pakett sisaldab ka <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep70'] = 'Vajuta "Järgmine" nuppu all jätkamaks <strong>Moodle</strong> paigaldamisega.';
$string['wwwroot'] = 'Veebiaadress';
