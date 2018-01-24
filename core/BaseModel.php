<?php
	class BaseModel{
		private $pdo;
		
		function __construct($dbname, $host = 'localhost', $user = 'root', $password = 'root'){
			$this->pdo = new PDO("mysql:dbhost=$host; dbname=$dbname; charset=utf8", $user, $password);	
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
		}
		
		// 辅助方法
		private function get_keys($data = []){
			return implode(",", array_keys($data));
		}
		
		private function get_values($data = []){
			$values = "";
			foreach($data as $value){
				$value = is_string($value) ? "'".$value."'" : $value;
				$values .= empty($values) ? $value : ",$value";
			}
			
			return $values;
		}
		
		private function get_limits($data = [], $like_flag = false, $set_flag = false){
			$limits = "";
			foreach($data as $key=>$value){
				$limit = !$set_flag && $like_flag && is_string($value) ? 
							"$key like '%$value%'" : "$key = '$value'";
							
				$limits .= empty($limits) ? 
							$limit : ($set_flag ? 
								", $limit" : "and $limit"); 
			}
			
			return $limits;
		}
		
		// 保护方法
		protected function insert_data($table_name, $data = []){
			if(empty($data)){
				return ;
			}
			$keys = $this->get_keys($data);
			$values = $this->get_values($data);
			
			$sql = "insert into $table_name($keys) values($values)";
			$this->pdo->query($sql);
			
		}
		
		protected function delete_data($table_name, $data = []){
			if(empty($data)){
				return;
			}
			
			$limits = $this->get_limits($data, true);
			$sql = "delete from $table_name where $limits";
			$this->pdo->query($sql);
			
		}
		
		protected function update_data($table_name, $old_data = [], $new_data = []){
			if(empty($old_data) || empty($new_data)){
				return;
			}
			
			$set_fields = $this->get_limits($new_data, false, true);
			$limits = $this->get_limits($old_data);
			
			$sql = "update $table_name set $set_fields where $limits";
			$this->pdo->query($sql);
			
		} 
		
		protected function query_data($table_name, $limit_data = [], $search_fields = '*'){
			if(!empty($limit_data)){
				$limits = $this->get_limits($limit_data);
				$sql = "select $search_fields from $table_name where $limits";
			}else{
				$sql = "select $search_fields from $table_name";
			}
			
			$result = $this->pdo->prepare($sql);
			$result->execute();
			return $result->fetchAll();
		}
	}
?>