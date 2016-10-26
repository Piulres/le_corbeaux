<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'le_corbeaux');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x4+l9>&Me+@|9IFf1p4s>HyI^KfX=R=b;Q7Nw<2@ER&7e=)>fmNnG|:6pk2PIK}a');
define('SECURE_AUTH_KEY',  '}3=],/!9AM7=cGvxY5F>6}E$L,(IKV4Y 0$Cg{ 2Zq(/hs[1zW@GQ0+Y-<yv~/#,');
define('LOGGED_IN_KEY',    '+3P?A&@{)U&%~AbWV ytxP;3s,lT2Gm9R=(ZjGIt$[2eBRca:{%`P90Icj=(z.s/');
define('NONCE_KEY',        '5y9!euN.jB:+/^N(88AxHt.Lb7KV(G~BciG9+&A8ed!5VPBi;6bA70r,<rR>_.Y[');
define('AUTH_SALT',        '7_}zJbt&.E#([uTOQebI|CFDn]K>Z#GbBA#h $?=q=-sXfISbf8QAkOG&K*apBP>');
define('SECURE_AUTH_SALT', 'xQm*hENc,~gx<H&L94[IjtSQ0ur{&iwr~N;|utbL+|f/1siRp6E}*R,4WlbTT-(W');
define('LOGGED_IN_SALT',   'fR+SiD86y*EpTA)*(ju?Nkl} 9u@|4~wowm BZ=|-hb$Wi*h7F7@auv7 qs_!J,=');
define('NONCE_SALT',       'D7&Lojz?3$42VjX@3xqjMhG2SIScN1ZF_9&=kZvs[D(~NwGexx+Q%!JP@L9[ HQH');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'custom_db_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
