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
define( 'DB_NAME', 'portfolio' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'Darlley' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '06775682158' );

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
define( 'AUTH_KEY',         'RGUIYDP(70S^O]DR.Q-0#jN:drTE;UM7* v:}O$^HHdf@oo*g/+AOn(SH`bUw_<y' );
define( 'SECURE_AUTH_KEY',  'rZ4zW%m[P-{z%jv8Kp:{xoH*}MB&&<#7E3+##12Z,GfWwk}D*x9K2B!{;kJwr}Ex' );
define( 'LOGGED_IN_KEY',    '/4,6X7;4O chJ%bx@0]vWov?.9kDA`@>iFI`H.l #nnC26lcXSGg+0a4 #KXom&[' );
define( 'NONCE_KEY',        'nzw<tj]8x,:{{Z]7-nQbZV8H<[sP*Dnv%IPAp=G<SGtSvDJE9]!T16;}a~S0{I1<' );
define( 'AUTH_SALT',        'K]3zQK&ZZ~%t&F0Yh-=3Vyp`q TaE8 g&ayooL^=(wfou&Ar:[(sPdAFsHlM=oH0' );
define( 'SECURE_AUTH_SALT', '|@]b91#OuwNgPh6GXL.#8yA,!K}B1(@G11Zzs`j[Oq` *slnVgR?7rMeu3J?H%:@' );
define( 'LOGGED_IN_SALT',   'i}/tO7d@]o,8]zqjemHhYjr#!CEKX7>QlAqOqJOdi:3_{,6:5:{9>iOBIfK-DTYW' );
define( 'NONCE_SALT',       '!Dh5[tAP1a{S4WUipw.lhV(`+!REw1wBzRU|^Oi.X?;UGF9IR#/C%`.l)R<c%9Hn' );

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
