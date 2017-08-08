<?php 
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'test');
	class Test {
		function __construct()
		{
			$conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysql_error());
			mysql_select_db(DB_NAME, $conn);
		}
		public function add($table,$data) {
			//$query = "INSERT INTO `".$table."` (".$data.") VALUES (".$values.")";
			$query = "INSERT INTO `".$table."` SET ";
			$i = 0;
			foreach($data as $key => $values) {
				$i++;
				$query .= "`".$key."` = '".addslashes($values)."'";
				if($i != count($data)) {
					$query .= ",";
				}
			}
			$query .= ";";
			//echo $query;exit;
			$res = mysql_query($query);
			return $res;
		}
		public function edit($table,$where,$data) {
			//echo $table.$where.$data;exit;
			$query = "UPDATE `".$table."` SET ".$data." WHERE ".$where;
			//echo $query;exit;
			$res = mysql_query($query);
			return $res;
		}
		public function delete($table,$where) {
			$query = "DELETE FROM `".$table."` WHERE ".$where;
			$res = mysql_query($query);
			return $res;
		}
		public function select($table,$where) {
			if($where) {
				$query = "SELECT * FROM `".$table."` where ".$where;
				//echo $query;exit;
				$res=mysql_query($query);
			} else {
				$res=mysql_query("SELECT * FROM ".$table);
			}
			return $res;
		}
	}
?>
