<?php
function pr($arr = []){
	echo "<pre>"; print_r($arr); echo "</pre>";
}

try{
	echo "This is running from docker"; die;
	/*$redis = new Redis();
	$redis->connect('app_redis',6379);
	$resp = $redis->get('sample_key');

	if($resp==true){
		echo $resp;
		$redis->delete("sample_key");
	}else{
	    echo "Cache is empty";
	    $redis->set("sample_key","Sample data from redis cache");
	}*/

	/*$memcached = new Memcached();
	$memcached->addServer("memcached",11211);
	$response = $memcached->get("sample_key");

	if($response==true){
		echo $response;
		$memcached->delete("sample_key");
	}else{
	    echo "Cache is empty";
	    $memcached->set("sample_key","Sample data from cache");
	}*/

	/*echo "<br/>";

	echo "this is docker compose";
	$conn = mysqli_connect("db","myuser","ff@123","newprac");
	pr($conn);

	$dbconn = pg_connect("host=psdb port=5432 dbname=newprac user=postgres password=ff@123");
	if(!$dbconn){
		echo "DB conection falied..."; die;
	}

	print "Successfully connected to: " . pg_host($dbconn) . "<br/>\n";

	$result = pg_query($dbconn, "SELECT * FROM users");

	while ($row = pg_fetch_row($result)) {
		pr($row);
	}
	pg_close($dbconn);*/
}catch(\Exception $e){
	echo $e->getMessage();
}
?>