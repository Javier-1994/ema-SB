<?php
class AssistanceData {
	public static $tablename = "asistencia";


	public function AssistanceData(){
		$this->name = "";
		$this->lastname = "";
		$this->email = "";
		$this->password = "";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (date_at,person_id,kind_id,user_id) ";
		echo $sql .= "value (\"$this->date_at\",$this->person_id,$this->kind_id,$this->user_id)";
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto AssistanceData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set kind_id=\"$this->kind_id\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new AssistanceData());
	}

	public static function getByPD($person,$date_at){
		$sql = "select * from ".self::$tablename." where idalumno=$person and fecha=\"$date_at\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new AssistanceData());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new AssistanceData());

	}
	
	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new AssistanceData());
	}


}

?>

<?php


class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="root";$this->pass="";$this->host="localhost";$this->ddbb="caffin";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}

class Executor {

	public static function doit($sql){
		$con = Database::getCon();
		//if(Core::$debug_sql){
		//print "<pre>".$sql."</pre>";
		//}
		return array($con->query($sql),$con->insert_id);
	}
}


class Model {

	public static function exists($modelname){
		$fullpath = self::getFullpath($modelname);
		$found=false;
		if(file_exists($fullpath)){
			$found = true;
		}
		return $found;
	}

	public static function one($query,$aclass){
		$cnt = 0;
		$found = null;
		$data = new $aclass;
		while($r = $query->fetch_array()){
			$cnt=1;
			foreach ($r as $key => $v) {
				if($cnt>0 && $cnt%2==0){ 
					$data->$key = $v;
				}
				$cnt++;
			}

			$found = $data;
			break;
		}
		return $found;
	}

}

?>

