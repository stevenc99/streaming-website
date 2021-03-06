<?php

$CONFIG['CONFERENCE'] = array(
	/**
	 * Der Startzeitpunkt der Konferenz als Unix-Timestamp. Befinden wir uns davor, wird die Closed-Seite
	 * mit einem Text der Art "hat noch nicht angefangen" angezeigt.
	 *
	 * Wird dieser Zeitpunkt nicht angegeben, gilt die Konferenz immer als angefangen. (Siehe aber ENDS_AT
	 * und CLOSED weiter unten)
	 */
	//'STARTS_AT' => strtotime("2016-08-20 09:00"),

	/**
	 * Der Endzeitpunkt der Konferenz als Unix-Timestamp. Befinden wir uns danach, wird eine Danke-Und-Kommen-Sie-
	 * Gut-Nach-Hause-Seite sowie einem Ausblick auf die kommenden Events angezeigt.
	 *
	 * Wird dieser Zeitpunkt nicht angegeben, endet die Konferenz nie. (Siehe aber CLOSED weiter unten)
	 */
	'ENDS_AT' => strtotime("2016-08-21 19:45"),

	/**
	 * Hiermit kann die Funktionalitaet von STARTS_AT/ENDS_AT überschrieben werden. Der Wert 'before'
	 * simuliert, dass die Konferenz noch nicht begonnen hat. Der Wert 'after' simuliert, dass die Konferenz
	 * bereits beendet ist. 'running' simuliert eine laufende Konferenz.
	 *
	 * Der Boolean true ist aus Abwärtskompatibilitätsgründen äquivalent zu 'after'. False ist äquivalent
	 * zu 'running'.
	 */
	//'CLOSED' => 'running',

	/**
	 * Titel der Konferenz (kann Leer- und Sonderzeichen enthalten)
	 * Dieser im Seiten-Header, im <title>-Tag, in der About-Seite und ggf. ab weiteren Stellen als
	 * Anzeigetext benutzt
	 */
	'TITLE' => 'FrOSCon 2016',

	/**
	 * Veranstalter
	 * Wird für den <meta name="author">-Tag verdet. Wird diese Zeile auskommentiert, wird kein solcher
	 * <meta>-Tag generiert.
	 */
	'AUTHOR' => 'FrOSCon 2016',

	/**
	 * Beschreibungstext
	 * Wird für den <meta name="description">-Tag verdet. Wird diese Zeile auskommentiert, wird kein solcher
	 * <meta>-Tag generiert.
	 */
//	'DESCRIPTION' => '<img src="./configs/conferences/jh-nord-2016/Icon_JH-Nord-2016.svg" class="iconjh">',

	/**
	 * Schlüsselwortliste, Kommasepariert
	 * Wird für den <meta name="keywords">-Tag verdet. Wird diese Zeile auskommentiert, wird kein solcher
	 * <meta>-Tag generiert.
	 */
//	'KEYWORDS' => '',

	/**
	 * HTML-Code für den Footer (z.B. für spezielle Attribuierung mit <a>-Tags)
	 * Sollte üblicherweise nur Inline-Elemente enthalten
	 * Wird diese Zeile auskommentiert, wird die Standard-Attribuierung für (c3voc.de) verwendet
	 */
	'FOOTER_HTML' => '
		by <a href="http://froscon.de/">FrOSCon</a> &amp;
		<a href="https://c3voc.de">C3VOC</a>
	',

	/**
	 * HTML-Code für den Banner (nur auf der Startseite, direkt unter dem Header)
	 * wird üblicherweise für KeyVisuals oder Textmarke verwendet (vgl. Blaues
	 * Wischiwaschi auf http://media.ccc.de/)
	 *
	 * Dieser HTML-Block wird üblicherweise in der main.less speziell für die
	 * Konferenz umgestaltet.
	 *
	 * Wird diese Zeile auskommentiert, wird kein Banner ausgegeben.
	 */
	//'BANNER_HTML' => '<img src="../configs/conferences/jh-nord-2016/Banner_JH-Nord-2016.svg" class="jhnord">',

	/**
	 * Link zu den Recordings
	 * Wird diese Zeile auskommentiert, wird der Link nicht angezeigt
	 */
	'RELEASES' => 'https://media.ccc.de/c/froscon2016',

	/**
	 * Link zu einer (externen) ReLive-Übersichts-Seite
	 * Wird diese Zeile auskommentiert, wird der Link nicht angezeigt
	 */
	//'RELIVE' => 'http://vod.c3voc.de/',

	/**
	 * Alternativ kann ein ReLive-Json konfiguriert werden, um die interne
	 * ReLive-Ansicht zu aktivieren.
	 *
	 * Wird beides aktiviert, hat der externe Link Vorrang!
	 * Wird beides auskommentiert, wird der Link nicht angezeigt
	 */
	'RELIVE_JSON' => 'configs/conferences/froscon2016/vod.json',

	/**
	 * APCU-Cache-Zeit in Sekunden
	 * Wird diese Zeile auskommentiert, werden die apc_*-Methoden nicht verwendet und
	 * das Relive-Json bei jedem Request von der Quelle geladen und geparst
	 */
	//'RELIVE_JSON_CACHE' => 30*60,
);

/**
 * Konfiguration der Stream-Übersicht auf der Startseite
 */
$CONFIG['OVERVIEW'] = array(
	/**
	 * Abschnitte aud der Startseite und darunter aufgeführte Räume
	 * Es können beliebig neue Gruppen und Räume hinzugefügt werden
	 *
	 * Die Räume müssen in $CONFIG['ROOMS'] konfiguriert werden,
	 * sonst werden sie nicht angezeigt.
	 */
	'GROUPS' => array(
		'Lecture Rooms' => array(
			'S1', 'S3', 'S4', 'S5', 'S6', 'S7', 'S8',
		),
	),
);



/**
 * Liste der Räume (= Audio & Video Produktionen, also auch DJ-Sets oä.)
 */
$CONFIG['ROOMS'] = array(
	/**
	 * Array-Key ist der Raum-Slug, der z.B. auch zum erstellen der URLs,
	 * in $CONFIG['OVERVIEW'] oder im Feedback verwendet wird.
	 */
	'S1' => array(
		'DISPLAY' => 'Saal 1',
		'STREAM' => 's1',
		'PREVIEW' => true,
		'TRANSLATION' => false,
		'STEREO' => false,

		'SD_VIDEO' => true,
		'HD_VIDEO' => true,
		'SLIDES' => false,

		'AUDIO' => true,
		'MUSIC' => false,

		'SCHEDULE' => true,
		'SCHEDULE_NAME' => 'Saal 1',

		'FEEDBACK' => false,
		'SUBTITLES' => false,

		'EMBED' => true,
		'IRC' => false,
	),
	'S3' => array(
		'DISPLAY' => 'Saal 3',
		'STREAM' => 's2',
		'PREVIEW' => true,
		'TRANSLATION' => false,
		'STEREO' => false,

		'SD_VIDEO' => true,
		'HD_VIDEO' => true,
		'SLIDES' => false,

		'AUDIO' => true,
		'MUSIC' => false,

		'SCHEDULE' => true,
		'SCHEDULE_NAME' => 'Saal 3',

		'FEEDBACK' => false,
		'SUBTITLES' => false,

		'EMBED' => true,
		'IRC' => false,
	),
	'S4' => array(
		'DISPLAY' => 'Saal 4',
		'STREAM' => 's3',
		'PREVIEW' => true,
		'TRANSLATION' => false,
		'STEREO' => false,

		'SD_VIDEO' => true,
		'HD_VIDEO' => true,
		'SLIDES' => false,

		'AUDIO' => true,
		'MUSIC' => false,

		'SCHEDULE' => true,
		'SCHEDULE_NAME' => 'Saal 4',

		'FEEDBACK' => false,
		'SUBTITLES' => false,

		'EMBED' => true,
		'IRC' => false,
	),
	'S5' => array(
		'DISPLAY' => 'Saal 5',
		'STREAM' => 's4',
		'PREVIEW' => true,
		'TRANSLATION' => false,
		'STEREO' => false,

		'SD_VIDEO' => true,
		'HD_VIDEO' => true,
		'SLIDES' => false,

		'AUDIO' => true,
		'MUSIC' => false,

		'SCHEDULE' => true,
		'SCHEDULE_NAME' => 'Saal 5',

		'FEEDBACK' => false,
		'SUBTITLES' => false,

		'EMBED' => true,
		'IRC' => false,
	),
	'S6' => array(
		'DISPLAY' => 'Saal 6',
		'STREAM' => 's5',
		'PREVIEW' => true,
		'TRANSLATION' => false,
		'STEREO' => false,

		'SD_VIDEO' => true,
		'HD_VIDEO' => true,
		'SLIDES' => false,

		'AUDIO' => true,
		'MUSIC' => false,

		'SCHEDULE' => true,
		'SCHEDULE_NAME' => 'Saal 6',

		'FEEDBACK' => false,
		'SUBTITLES' => false,

		'EMBED' => true,
		'IRC' => false,
	),
	'S7' => array(
		'DISPLAY' => 'Saal 7',
		'STREAM' => 's6',
		'PREVIEW' => true,
		'TRANSLATION' => false,
		'STEREO' => false,

		'SD_VIDEO' => true,
		'HD_VIDEO' => true,
		'SLIDES' => false,

		'AUDIO' => true,
		'MUSIC' => false,

		'SCHEDULE' => true,
		'SCHEDULE_NAME' => 'Saal 7',

		'FEEDBACK' => false,
		'SUBTITLES' => false,

		'EMBED' => true,
		'IRC' => false,
	),
	'S8' => array(
		'DISPLAY' => 'Saal 8',
		'STREAM' => 's7',
		'PREVIEW' => true,
		'TRANSLATION' => false,
		'STEREO' => false,

		'SD_VIDEO' => true,
		'HD_VIDEO' => true,
		'SLIDES' => false,

		'AUDIO' => true,
		'MUSIC' => false,

		'SCHEDULE' => true,
		'SCHEDULE_NAME' => 'Saal 8',

		'FEEDBACK' => false,
		'SUBTITLES' => false,

		'EMBED' => true,
		'IRC' => false,
	),
);

/**
 * Globaler Schalter für die Embedding-Funktionalitäten
 *
 * Wird diese Zeile auskommentiert oder auf False gesetzt, werden alle
 * Embedding-Funktionen deaktiviert.
 */
$CONFIG['EMBED'] = true;

/**
 * Konfigurationen zum Konferenz-Fahrplan
 * Wird dieser Block auskommentiert, werden alle Fahrplan-Bezogenen Features deaktiviert
 */
$CONFIG['SCHEDULE'] = array(
	/**
	 * URL zum Fahrplan-XML
	 *
	 * Diese URL muss immer verfügbar sein, sonst können kann die Programm-Ansicht
	 * aufhören zu funktionieren. Wenn die Quelle unverlässlich ist ;) sollte ein
	 * externer HTTP-Cache vorgeschaltet werden.
	 */
	'URL' => 'configs/conferences/froscon2016/schedule.xml',

	/**
	 * Nur die angegebenen Räume aus dem Fahrplan beachten
	 *
	 * Wird diese Zeile auskommentiert, werden alle Räume angezeigt
	 */
	'ROOMFILTER' => array('Saal 1', 'Saal 3', 'Saal 4', 'Saal 5', 'Saal 6', 'Saal 7', 'Saal 8'),

	/**
	 * Skalierung der Programm-Vorschau in Sekunden pro Pixel
	 */
	'SCALE' => 7,

	/**
	 * Simuliere das Verhalten als wäre die Konferenz bereits heute
	 *
	 * Diese folgende Beispiel-Zeile Simuliert, dass das
	 * Konferenz-Datum 2014-12-29 auf den heutigen Tag 2015-02-24 verschoben ist.
	 */
	//'SIMULATE_OFFSET' => strtotime(/* Conference-Date */ '2016-05-21') - strtotime(/* Today */ '2016-05-19'),
	'SIMULATE_OFFSET' => 0,
);


return $CONFIG;
