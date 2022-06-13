<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'agilwebsite2' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'root' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', 'admin' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '=}1!c<yR-buG0<sL,Zr{}DCw_BF27ax4!-^b%h{*L@eNV%^;V2Il%]*]23R!=DwJ' );
define( 'SECURE_AUTH_KEY', 'ImxL[c#8-ZAigX_TJGVmqFH:(AHl^3w`[>+76d&k>aaSF54P<a#>LjYwVWk]`FAf' );
define( 'LOGGED_IN_KEY', 'j%$cpTf`#W(Ku3 ckffPc<ufOFuMaubU&F)oj<.O,d*~KY/xTYRqL;xwLIFb:_UZ' );
define( 'NONCE_KEY', 'sKgTv.c<3F`Awi`F5BApalN%n[r%7PL>@bvk#=>R9/vj>{:T:e-qZYwRM#hJMr_@' );
define( 'AUTH_SALT', 'v`p0,a^6`M`{C!Q~1#Yt+Fq}PU|PnC{()RddQ~^_~N?s|vHsSGYn-VaQv+~eW=6u' );
define( 'SECURE_AUTH_SALT', 'z(w71X]h /+ggA[IvC~+L;T91PB=#G6W1gUYG:KUZ?*U(8;ASa_WG:RS2qj6}-4O' );
define( 'LOGGED_IN_SALT', '^[ZS`-diwR+-~s)gE&M*m@VrzmcaBJMSVGO^@7*Z]1@L(8>VZ><YuGgMh iF<TES' );
define( 'NONCE_SALT', 'E;-M8=pc?UaR#@ZQ)D}p)|>7Cxe+d$[7`]C0w:!,^~=NLWBVk%s.t0t=$3Zn) 4I' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once( ABSPATH . 'wp-settings.php' );
