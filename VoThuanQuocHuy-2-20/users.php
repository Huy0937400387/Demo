<?php 
	include ('db.php');

	/**
	 * 
	 */
	class users extends db
	{
		
		/*public function select($sql) {
			$sql = 'SELECT * FROM users';
			$users = $this->query($sql);
			return $users;
		}*/

		public function delete($params) {
			$sql = '.....cau sql....';
			$this->query($sql);
		}

		public function insert($params) {
			$sql = '.....cau sql....';
			$this->query($sql);
		}

		public function update($params) {
			$sql = '.....cau sql....';
			$this->query($sql);
		}

		public function getUsers() {
			$sql = 'SELECT * FROM users';
			$users = $this->select($sql);
			return $users;
		}
	}
 ?>