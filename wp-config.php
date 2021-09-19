<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'work_bd' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'M1Aw{fAuQGBsB@&s@#k3akX$AbDrbtb-gkpqCQgmT$m6C{n~ Pp)ubkj9L&k?ePZ' );
define( 'SECURE_AUTH_KEY',  'rX9`Qz(f%<g0S%jss~!@Rmv:@VU&b-,4h}S&LWTvj2u[5q&6#Y;LB+(giDQ8#3$9' );
define( 'LOGGED_IN_KEY',    'K@;)TQ&d>@+>uelY2%sLf 1{801j$BnH.(0S-gvkE|NY,!6-yDJij:|^I(~Oa`u]' );
define( 'NONCE_KEY',        '.G[<Y5x;d;K]?2I?gA|/z^|rIGG#y#]lXDrPsZ{?tWdhJPa_te`}jWRM0e,t4AF#' );
define( 'AUTH_SALT',        't9bd/ZT}TJ}duS<>-zV!./[o#AcK#bhuq!R.>p1ndixnwRe2y/t0[HV37D8r#NAX' );
define( 'SECURE_AUTH_SALT', 'Ln(JZl)qPqOBa:yM6yKrZOFBR%Tc`{8~J4fH;*S@-_[`U#94-q$xZF!SZ7;qE-!h' );
define( 'LOGGED_IN_SALT',   '@POy$)!$AL5s~uS~$)P9{[_QP6zS40#yeSX[=d{SS>N UOYS74~C?+}dPB6.cNB*' );
define( 'NONCE_SALT',       '*d)~JvIjpbZg[NMc&TVIpG<af/0qb%1SaKd`2dNSQTi#7_-YD~?EiJtpt,ye7~<D' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'bd_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
