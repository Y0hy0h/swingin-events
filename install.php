<?php

global $wpdb;
global $db_version;
$db_version = '1.0';

$table_name = $wpdb->prefix . 'swinginevents';

function install()
{
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
    id mediumint(9) NOT NULL AUTO_INCREMENT,
    title tinytext NOT NULL,
    PRIMARY KEY  (id)
) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    add_option('db_version', $db_version);
}

function seed()
{
    global $wpdb;

    $chico = 'Chico Mendes';

    $table_name = $wpdb->prefix . 'liveshoutbox';

    $wpdb->insert(
        $table_name,
        array(
            'time' => current_time('mysql'),
            'name' => $welcome_name,
            'text' => $welcome_text,
        )
    );
}
