<?php

/**
 * @package    Swingin_Events
 * @subpackage Swingin_Events/includes
 */

/**
 * @package    Swingin_Events
 * @subpackage Swingin_Events/includes
 */
class Swingin_Events_Database
{

    /**
     * @var int $version
     */
    protected $version;

    /**
     * @var string $version_key
     */
    protected $version_key;

    /**
     * @var string $table_name
     */
    protected $table_name;

    public function __construct()
    {
        global $wpdb;

        $this->table_name = $wpdb->prefix . "swinginevents";
        $wpdb->show_errors();
    }

    public function up() {
        global $wpdb;

        $charset_collate = $wpdb->get_charset_collate();
        $sql = "CREATE TABLE $this->table_name (
    id mediumint(9) NOT NULL AUTO_INCREMENT,
    title tinytext NOT NULL,
    PRIMARY KEY  (id)
) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);

        add_option($this->version_key, $this->version);
    }

    public function down() {
        $sql = "DROP TABLE $this->table_name;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);

        delete_option($this->version_key);
    }

    /**
     * Retrieve the version of the database.
     *
     * @return    int    The version number of the database.
     * @since     1.0.0
     */
    public function get_version()
    {
        return $this->version;
    }

}
