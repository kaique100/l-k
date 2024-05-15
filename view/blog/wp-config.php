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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'blognascimentojoias' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'Yv;E16qs5CX_g[aXGDJT;ZT^TQ<~#}.{;&rf<GNb{RS/y{!z/0|0w-hK/,g`wuly' );
define( 'SECURE_AUTH_KEY',  '4En`caV5|A<H7+?8V.axE%ujIuuY<kij,3.f19$0O)poIa*]=RXC$hI<z3X2[mO~' );
define( 'LOGGED_IN_KEY',    'EM;,*j-08G W_yP!-6UUeQ+K>.cA!J)U]5nX}9qCXA3)[MWyVplcu|Da2E^2#!J@' );
define( 'NONCE_KEY',        'Y+bNuu~E/X.f)L< E3#O,=Y}F.|&{},:gm7DKj9gr>!xF8KI^Gn;#L_@2>k LFI)' );
define( 'AUTH_SALT',        '&YgDZ!,3N3RnbB!d2W~&verHYu2;/}}rsr~o|8Et*#Qx@F{$2;_ -Oc<Z>Mf-nZE' );
define( 'SECURE_AUTH_SALT', 'p?$xe5+wJUq&2T0RSVvPNW+YADDBTH-=:]}dRjP+Dy9PpKF{WlX8v@X[0pDAvxf5' );
define( 'LOGGED_IN_SALT',   'Kaz#p@1s)>2h1Sq*WMU;uS`EqOI/gi[/xP,wZOf.)8[zN:{l7.anKHR^w:9s>hAh' );
define( 'NONCE_SALT',       'i~=>EVZ3svVOdQt$Rjzzya3fDi[d,x^*qo~+%OE4_<|<nz^!|* @q~$PB6Ksh5$V' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
