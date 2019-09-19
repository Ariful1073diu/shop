<?php 
	include_once "../lib/Session.php";
	include_once "../lib/Database.php";
	include_once "../helper/format.php";
	Session::CheckSession();
 ?>
<?php 
/**
* Adminloging class
*/
class Adminloging{
	private $db;
	private $fm;
	public function __construct(){
			$this->db = new Database();
			$this->fm = new Format();
	}
	public function adminLogin($adminUser, $adminPass){
		$adminUser = $this->fm->validation($adminUser);
		$adminPass = $this->fm->validation($adminPass);

		$adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
		$adminPss = mysqli_real_escape_string($this->db->link, $adminPass);

		if(empty($adminUser) || empty($adminPass)){
			$loginmsg = "Username or Password must not be empty !";
			return $loginmsg;
		}else{
			$query = "SELECT * FROM tbl_admin WHERE admin_user='$adminUser' AND admin_pass='$admin_pass'";
			$result  = $this->db->select($query);
			if($result != false){
				$value = $result->fetch_assoc();
				Session::set("adminlogin", true);
				Session::set("admin_Id", $value['admin_Id']);
			}
		}

	}
} ?>
