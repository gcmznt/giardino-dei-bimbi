<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'giardino');

/** Nome utente del database MySQL */
define('DB_USER', 'giardino');

/** Password del database MySQL */
define('DB_PASSWORD', 'giardino');

/** Hostname MySQL  */
define('DB_HOST', '127.0.0.1');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'po!q-&&xuKR@4jFHwGzX/4y!IH2)}y1fTj0+JnD*W-I/h[q~:Jc]C^2SmYT6_%AO');
define('SECURE_AUTH_KEY',  'Ym:hUN2Lh@#J*)!lm}XA!3D85UypzDm5Uzm2Zer]qp58pu,+<y+C(`Ji|=AdrCG(');
define('LOGGED_IN_KEY',    'CuUsMi-$SuA^1Ku;BR]ccUkb9{jD8UjDy;<}Q<05}wq%/jks*!ghbP&?phQQ.V/g');
define('NONCE_KEY',        '@*{JKo!*b2aQVE8/f}9`O`$1wqW0C2Fn_M.3y>z$TswoYI[da`fh1l!^^9O4OdK?');
define('AUTH_SALT',        '-J`)R|7UV0av(./U)3H2u?qp1d&@pG{F@ Zr {mQn5:`3|57YYUA2DO0CI/P{`ZN');
define('SECURE_AUTH_SALT', '@JH 5WRFrfAYufs->GlwXsR@ 2{.0ptXH<?roAQ`|m<AA4Ay>mbK|&Esuz`K>bE3');
define('LOGGED_IN_SALT',   'jcbjWA`Cy6wo%>NLGiab$R2m[vdghI6%#f6d|C%NrJT`jFbZj ;!gA+B&N|UxMtd');
define('NONCE_SALT',       'bVUkGaSFM@-hy0tH8crD$v7o%lGZs@HB5@eg(I2Cnmx}kAz+.fr>pAG6[~$xZ?8w');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'giardino_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');