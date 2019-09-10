<?php 
    /** O nome do banco de dados */
    define('DB_NAME','id9782644_mausato');

    /** Usuário do banco de dados MySQL */
    define('DB_USER','id9782644_admin');

    /** Senha do banco de dados MySQL */
    define('DB_PASSWORD','12345');

    /** Nome do host do MySQL */
    define('DB_HOST','localhost');

    /** caminho absoluto para a pasta do sistema */
    if( !defined('ABSPATH'))
    {
        define('ABSPATH', dirname(__FILE__) . '/');
    }

    if ( !defined('BASEURL'))
    {
        define('BASEURL', '/');
    }

    if( !defined('DBAPI') )
    {
        DEFINE('DBAPI', ABSPATH. 'inc/database.php');
    }

    define('HEADER_TEMPLATE', ABSPATH. 'inc/header.php');
    define('COPYRIGHT','Enzzo Mensato e Mauricio Rodrigues');
    define('FOOTER_TEMPLATE', ABSPATH. 'inc/footer.php');