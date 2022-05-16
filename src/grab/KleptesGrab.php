<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/Kleptes/src/provider/Provider.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/Kleptes/src/provider/MySQL.php";

class KleptesGrab {

    /** @var array $u_data */
    private $u_data;

    /** @var Provider $provider */
    public $provider;

    public function __construct($u_data, Provider $provider){
        $this->u_data = $u_data;
        $this->provider = $provider;
    }

    /**
     * @return string
     */
    public function get_user_ip() : string {
        if (isset($this->u_data["HTTP_CLIENT_IP"])) {
            $ip = $this->u_data["HTTP_CLIENT_IP"];
        } elseif (isset($this->u_data["HTTP_X_FORWARDED_FOR"])) {
            $ip = $this->u_data["HTTP_X_FORWARDED_FOR"];
        } elseif (isset($this->u_data["HTTP_X_FORWARDED"])) {
            $ip = $this->u_data["HTTP_X_FORWARDED"];
        } elseif (isset($this->u_data["HTTP_FORWARDED_FOR"])) {
            $ip = $this->u_data["HTTP_FORWARDED_FOR"];
        } elseif (isset($this->u_data["HTTP_FORWARDED"])) {
            $ip = $this->u_data["HTTP_FORWARDED"];
        } else $ip = $this->u_data["REMOTE_ADDR"];
        if (strpos($ip, ',') > 0) $ip = substr($ip, 0, strpos($ip, ','));

        return $ip;
    }

    /**
     * @return string
     */
    public function get_user_agent() : string {
        return $this->u_data['HTTP_USER_AGENT'];
    }

    /**
     * @return string
     */
    public function get_time() : string {
        date_default_timezone_set('Europe/Paris');
        return date("F j, Y, g:i a");
    }

    public function insert_data(){
        $sql = $this->provider->connect_sql();

        if ($sql instanceof MySQLi){
            $sql->query("CREATE TABLE IF NOT EXISTS `data`(ip VARCHAR(50), user_agent VARCHAR(255), time VARCHAR(255))");

            if ($sql->query("SELECT * FROM `data` WHERE ip = '{$this->get_user_ip()}'")->num_rows > 0){
                $sql->query("DELETE FROM `data` WHERE `ip` = '{$this->get_user_ip()}'");
            }

            $sql->query("INSERT INTO `data` (
                ip, user_agent, time
            ) VALUES (
                '{$this->get_user_ip()}', '{$this->get_user_agent()}', '{$this->get_time()}'
            )");
            $sql->close();
        }
    }
}
