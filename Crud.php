<?php
    class Crud
    {
        private $servername = "localhost";
		private $username   = "root";
		private $password   = "";
		private $dbname = "employee_project";
        public $con;
        public $employeeTable = "employee_management";
		public function __construct()
		{
			try {
				$this->con = new mysqli($this->servername, $this->username, $this->password, $this->dbname);	
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
        public function save($name, $dob,$salary,$joining_date, $relieving_date,$contact,$status,$insertdate)
        {
            $sql = "INSERT INTO $this->employeeTable(name,dob,salary,joining_date,relieving_date,contact,status,datetime) VALUES('$name', '$dob','$salary','$joining_date','$relieving_date','$contact','$status','$insertdate')";
            $query = $this->con->query($sql);
			if ($query) {
				return true;
			}else{
				return false;
			}
        }
         /* Fetch employee records for show listing */
		public function displayRecord()
		{
			$sql = "SELECT * FROM $this->employeeTable";
			$query = $this->con->query($sql);			
			$data = array();
			if ($query->num_rows > 0) {
				while ($row = $query->fetch_assoc()) {
					$data[] = $row;
				}
				//echo "<pre>";print_r($data);
				return $data;
			}else{
				return false;
			}
        }

        public function displayRecordbyid($id)
		{
			//echo $id;
			$sql = "SELECT * FROM $this->employeeTable where id =$id";
			$query = $this->con->query($sql);			
			$data = array();
			if ($query->num_rows > 0) {
				while ($row = $query->fetch_assoc()) {
					$data = $row;
				}
				//echo "<pre>";print_r($data);
				return $data;
			}else{
				return false;
			}

        }

        public function update($id ,$name, $dob,$salary,$joining_date, $relieving_date,$contact,$status,$insertdate)
            {
            	//echo $id;$name;
	               $sql = "UPDATE $this->employeeTable SET name='$name',dob='$dob',salary='$salary',joining_date='$joining_date',relieving_date='$relieving_date',contact='$contact',status='$status' where id =$id";
	                $query = $this->con->query($sql);
				    if ($query) {
				    return true;
				    }else{
				    return false;
				    }
            }

        public function deleteRecord($id)
		{
			$sql = "DELETE from $this->employeeTable where id=$id";
			$query = $this->con->query($sql);
			$data = array();
			if ($query) {
				return true;
			}else{
				return false;
			}
		}    
        
    }
?>