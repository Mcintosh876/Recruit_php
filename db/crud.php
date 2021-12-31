<?php
class crud{
     private $db;

function __construct($conn){
    $this ->db = $conn;

     }

   public  function insertAttendee($fname,$lname,$dob,$email,$contact,$gender,$avatar_path,$adress){
        try {
            $sql = "INSERT INTO `attendee`(`firstname`, `lastname`, `dateofbirth`, `emailaddress`, `contactnumber`, `gender_id`, `avatar_path`, `adress`) VALUES(:fname,:lname,:dob,:email,:contact,:gender,:avatar_path,:adress)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':dob',$dob);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':contact',$contact);
            $stmt->bindparam(':gender',$gender);
            $stmt->bindparam(':avatar_path',$avatar_path);
            $stmt->bindparam(':adress',$adress);



            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
     }

     public function editAttendee($id, $fname,$lname,$dob,$email,$contact,$gender,$adress){
        try{
         $sql = "UPDATE`attendee` SET `firstname`=:fname,`lastname`=:lname,`dateofbirth`=:dob,`emailaddress`=:email,`contactnumber`=:contact,`gender_id`=:gender, adress=:adress WHERE attendee_id = :id " ;

         $stmt = $this->db->prepare($sql);
            
            $stmt->bindparam(':id',$id);
            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':dob',$dob);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':contact',$contact);
            $stmt->bindparam(':gender',$gender);
            $stmt->bindparam(':adress',$adress);


            $stmt->execute();
            return true;

        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

     }

     public function getApplicant(){
         try{
              $sql = "SELECT * FROM `attendee` a inner join gender s on a.gender_id = s.gender_id";
        $result = $this-> db->query($sql);
        return $result;
         }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
         }
     }


     public function getApplicantDetails($id){
         try{
        $sql = "select * from attendee a inner join gender s on a.gender_id = s.gender_id where attendee_id = :id";
        $stmt = $this-> db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(); 
         return $result; 
         }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        
    }

public function deleteApplicant($id){
    try{
        $sql = "delete from attendee where attendee_id =:id";
    $stmt = $this-> db->prepare($sql);
    $stmt->bindparam(':id', $id);
    $stmt->execute();
     return true;
    } catch(PDOException $e) {
        echo $e->getMessage();
        return false;
    } 

}
     public function getGender(){
        try{
        $sql = "SELECT * FROM `gender`";
        $result = $this-> db->query($sql);
        return $result; 
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
       
    }
   public function getGenderById($id){
        try{
        $sql = "SELECT * FROM `gender` WHERE gender_id = :id";
        $stmt = $this-> db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    } catch(PDOException $e) {
        echo $e->getMessage();
        return false;
    }        
    }


}

?>
