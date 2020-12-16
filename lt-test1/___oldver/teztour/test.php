<?

require_once 'ZabbixApi.class.php';
use ZabbixApi\ZabbixApi;
use ZabbixApi\Exception;
try {
    // connect to Zabbix API
	$api = new ZabbixApi('http://109.68.190.232:8080/api_jsonrpc.php',  'Admin', 'zabbix');
	var_dump($api);
} catch(Exception $e) {

    // Exception in ZabbixApi catched
    echo $e->getMessage();
}


?>

