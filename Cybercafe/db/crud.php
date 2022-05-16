<?php
    class crud{
        private $db;

        function __construct($conn){
            $this->db = $conn;
        }


            public function getComp(){
                $sql = "SELECT * FROM `computer`";
                $result = $this->db->query($sql);
                return $result;
            }

            public function getCompadmin(){
                $sql = "SELECT * FROM `compadmin`";
                $result = $this->db->query($sql);
                return $result;
            }

            public function getCustcc(){
                $sql = "SELECT * FROM `customercc` natural join billing natural join computer order by Cust_id";
                $result = $this->db->query($sql);
                return $result;
            }

            public function getBill(){
                $sql = "SELECT * FROM `billing`";
                $result = $this->db->query($sql);
                return $result;
            }

        
            
        //Search Customer
            public function searchCust(){
                $sql = "SELECT * FROM `customercc` natural join billing WHERE Cust_id = $_POST[Cust_id]";
                $result = $this->db->query($sql);
                return $result;
            }

        //update Billing
            public function updateBilling($Cust_id, $Duration_end){
                try{
                    $sql = "UPDATE `billing` SET `Duration_end`= $_POST[Duration_end] WHERE `Cust_id`= $_POST[Cust_id]";
                    $stmt = $this->db->prepare($sql);

                    // $stmt->bindparam(':Bil_ID', $Bil_ID);
                    $stmt->bindparam(':Cust_id', $Cust_id);
                    // $stmt->bindparam(':Comp_id', $Comp_id);
                    // $stmt->bindparam(':Duration_start', $Duration_start);
                    $stmt->bindparam(':Duration_end', $Duration_end);

                    $stmt->execute();
                    return true;

            }catch (PDOException $e) {
                echo $e-> getMessage();
                return false;
            }
        }

    

        //Delete Billing
            public function deleteBilling($Bil_ID){
                try{
                    $sql = "DELETE FROM `billing` WHERE  Bil_ID = $Bil_ID";
                    $stmt = $this->db->prepare($sql);

                    $stmt->bindparam(':Bil_ID', $Bil_ID);

                    $stmt->execute();
                    return true;

            }catch (PDOException $e) {
                echo $e-> getMessage();
                return false;
            }
        }


        //Insert Admin
            public function insertAdmin($Admin_ID, $Admin_WorkingHour, $Comp_id){
                try{
                    $sql = "INSERT INTO `compadmin`(`Admin_ID`, `Admin_WorkingHour`, `Comp_id`) VALUES (:Admin_ID, :Admin_WorkingHour, :Comp_id)";
                    $stmt = $this->db->prepare($sql);

                    $stmt->bindparam(':Admin_ID', $Admin_ID);
                    $stmt->bindparam(':Admin_WorkingHour', $Admin_WorkingHour);
                    $stmt->bindparam(':Comp_id', $Comp_id);

                    $stmt->execute();
                    return true;

            }catch (PDOException $e) {
                echo $e-> getMessage();
                return false;
            }
        }

        //Delete Admin
        public function deleteAdmin($Admin_ID){
            try{
                $sql = "DELETE FROM `compadmin` WHERE  Admin_ID = $Admin_ID";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':Admin_ID', $Admin_ID);

                $stmt->execute();
                return true;

        }catch (PDOException $e) {
            echo $e-> getMessage();
            return false;
        }
    }

        //update Admin

        public function updateAdmin($Admin_ID, $Admin_WorkingHour, $Comp_id){
            try{
                $sql = "UPDATE `compadmin` SET `Admin_WorkingHour`= $Admin_WorkingHour, `Comp_id`= $Comp_id WHERE `Admin_ID`= $Admin_ID";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':Admin_ID', $Admin_ID);
                $stmt->bindparam(':Admin_WorkingHour', $Admin_WorkingHour);
                $stmt->bindparam(':Comp_id', $Comp_id);

                $stmt->execute();
                return true;

        }catch (PDOException $e) {
            echo $e-> getMessage();
            return false;
        }
    }

}
   

?>