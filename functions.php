<?php 
	require "config.php";
	class LogInRegistration{
	function __construct(){
		$database = new DatabaseConnection();
	}
  	public function registerUser($name, $password, $discipline, $bloodgroup, $age,$weight,$donatedate, $donateNum,$email,$phone1,$phone2,$phone3, $image){
      	global $pdo;
      	$query = $pdo->prepare("SELECT id FROM users WHERE password = ? AND email = ?");
      	$query->execute(array($password, $email));
      	$num = $query->rowcount();
		if($num == 0){
        	$query = $pdo->prepare("INSERT INTO users(name, password, discipline, bloodgroup,age,weight, donatedate, donateNum,email,phone1,phone2,phone3, image)     VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
        	$query->execute(array($name, $password, $discipline, $bloodgroup, $age,$weight,$donatedate,$donateNum, $email,$phone1,$phone2,$phone3, $image));
			
			
			$query = $pdo->prepare("SELECT id FROM registerhistory ");
			$query->execute();
			$lastid = $query->rowcount();  
			$today=date("d/m/Y");						
			$a=1;
			if($lastid == 0){
				$query = $pdo->prepare("INSERT INTO registerhistory(date, num ) VALUES (?,?)");
				$query->execute(array($today, $a ));
			}else{ 
				$query = $pdo->prepare("SELECT date FROM registerhistory WHERE id = ? ");
				$query->execute(array($lastid));
				$n=$query->fetch(PDO::FETCH_ASSOC);
				if(strcmp($today , $n['date'])>0){
					//insert new row
					$query = $pdo->prepare("INSERT INTO registerhistory(date, num ) VALUES (?,?)");
					$query->execute(array($today, $a ));
				}else{
					//update existing row
					$query = $pdo->prepare("SELECT num FROM registerhistory WHERE id = ? ");
					$query->execute(array($lastid));
					$n=$query->fetch(PDO::FETCH_ASSOC);
					$new = (int)$n['num']+1;
					$query = $pdo->prepare("UPDATE registerhistory SET  num=? WHERE id = ? ");
					$query->execute(array($new, $lastid));
				}
			}
			$query = $pdo->prepare("SELECT Num FROM totaldonor ");
					$query->execute();
					$n=$query->fetch(PDO::FETCH_ASSOC);
					$new = (int)$n['Num']+1;
					$query = $pdo->prepare("UPDATE totaldonor SET  Num=?  ");
					$query->execute(array($new ));
			header('Location: registration.php');
			exit();
			return true;
      	}else{
			return print "<span style='color: #e53d37'>Error...Username/email already used</span>";
  	    }
    }
	public function loginUser($email, $password){
        global $pdo;
        $query = $pdo->prepare("SELECT id,name  FROM users WHERE email = ? AND password= ? ");
        $query->execute(array($email, $password));
        $userdata = $query->fetch();
        $num = $query->rowcount();
        if($num == 1) {
			session_start();                
            $_SESSION['login'] = true;
                $_SESSION['uid'] = $userdata['id']; 
				$_SESSION['uname']= $userdata['name'];
                return true;    
        }else{
            return false;
        }
    }
	public function valid($id){	
		global $pdo;
		$query = $pdo->prepare("SELECT donatedate  FROM users WHERE id = ?");
		$query->execute(array($id));
		$userdata = $query->fetch();
		if($userdata['donatedate']==null){
			return true;
		}else{				
			$date2=date("d/m/Y");
			$date1=$userdata['donatedate'];
			$d1 = explode("/",$date1);
			$d2 = explode("/",$date2);
			$newdate1 = date_create($d1[2]."/".$d1[1]."/".$d1[0]);
			$newdate2 = date_create($d2[2]."/".$d2[1]."/".$d2[0]);	
			$diff=date_diff($newdate1,$newdate2);
			$res =$diff->format("%R%a days");
			if((int)$res>=90){
				return true;
			}
			else{
				return false;
			}
		}
	}
    public function logOutUser(){
        global $pdo;
        $_SESSION['login'] = false;
        unset($_SESSION['uid']);
        unset($_SESSION['uname']);
        session_destroy();
	}
    public function getUser($id){
          global $pdo;
          $query = $pdo->prepare("SELECT * FROM users WHERE id = ? ");
          $query->execute(array($id));
          return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function getUserHistory($id){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM donateinfo WHERE id = ? ");
        $query->execute(array($id));
        return $query->fetchALL(PDO::FETCH_ASSOC);
	}
	public function getSelectedUser($bloodgroup){		  
		global $pdo;
        $query = $pdo->prepare("SELECT * FROM users  WHERE bloodgroup = ? ");
        $query->execute(array($bloodgroup));
        return $query->fetchALL(PDO::FETCH_ASSOC);
	}
    public function getSession(){
        return @$_SESSION['login'];
    }  
    public function getUsername($uid){
        global $pdo;
        $query = $pdo->prepare("SELECT name FROM users WHERE id = ? ");
        $query->execute(array($uid));
        $result = $query->fetch();
        echo $result['name'];
    }
    public function getUserById($id){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM users WHERE id = ? ");
        $query->execute(array($id));
        return $query->fetchALL(PDO::FETCH_ASSOC);
    }
	public function getImageName($uid){
		global $pdo;
		$query = $pdo->prepare("SELECT image FROM users WHERE id = ? ");
        $query->execute(array( $uid ));
    	$arr=$query->fetch(PDO::FETCH_ASSOC);
		return $arr['image'];
	}
      public function updateUser($uid, $name,  $discipline, $bloodgroup, $age,$weight,$donateNum,$email,$phone1,$phone2,$phone3){
           global $pdo;		   		   		   
           $query = $pdo->prepare("UPDATE users SET  name=?, discipline=?, bloodgroup=?,age = ?, weight=?, donateNum=?, email=?, phone1=?, phone2=?, phone3=?  WHERE id=?");
           $query->execute(array($name,$discipline,$bloodgroup,$age,$weight,$donateNum,$email,$phone1,$phone2,$phone3 , $uid  ));
           return true;
      }
      public function getUserDetails($id){
           global $pdo;
           $query = $pdo->prepare("SELECT * FROM users WHERE id = ?");
           $query->execute(array($id));
           return $query->fetchALL(PDO::FETCH_ASSOC);
		}
		public function updatePassword($uid,$new_pass,$old_pass){
            global $pdo;
            $query = $pdo->prepare("SELECT id FROM users WHERE password = ? ");
            $query->execute(array($old_pass));
            $num = $query->rowCount();
            if($num == 0){
				return print("<span style='color: #e53d37'>Error...Old password not exit.<span/>");
            }
            else{
				$query = $pdo->prepare("UPDATE users SET password=? WHERE id=?");
				$query->execute(array($new_pass,$uid));
				return print("<span style='color: green'>Passwowrd change successfully...<span/>");
            }
        }
	    public function addDonateInfo($uid,$donateDate,$donatelocation){
      	 	global $pdo;
			$query = $pdo->prepare("INSERT INTO donateinfo (id, donateDate, location) VALUES (?,?,?)");
        	$query->execute(array($uid, $donateDate, $donatelocation));
			$query = $pdo->prepare("SELECT donateNum FROM users WHERE id = ?");
            $query->execute(array($uid));
		    $num=$query->fetch(PDO::FETCH_ASSOC);
			$new = (int)$num['donateNum']+1;
			$query = $pdo->prepare("UPDATE users SET  donateNum=?, donatedate=?  WHERE id=?");
			$query->execute(array($new, $donateDate, $uid));
			return print("<span style='color: green'>New Information added successfully...<span/>");     	 	
  	    }
		public function  SaveExperience($name, $message){			 
			global $pdo;
			$date=date("d/m/Y");
			$query = $pdo->prepare("INSERT INTO experience(name, message, date )     VALUES (?,?,?)");
        	 		$query->execute(array($name, $message, $date));
      	 		    return print("<span style='color: green'>saved successfully...<span/>");
		}
		 public function incDonor(){
			global $pdo;
			$query = $pdo->prepare("SELECT id FROM gotdonor ");
			$query->execute();
			$lastid = $query->rowcount(); 			 
			$today=date("d/m/Y");						
			$a=1;
			if($lastid == 0){ 
				$query = $pdo->prepare("INSERT INTO gotdonor(date, num ) VALUES (?,?)");
				$query->execute(array($today, $a ));				
			}else{ 
				$query = $pdo->prepare("SELECT date FROM gotdonor WHERE id = ? ");
				$query->execute(array($lastid));
				$n=$query->fetch(PDO::FETCH_ASSOC);
				if(strcmp($today , $n['date'])>0){
					//insert new row
					$query = $pdo->prepare("INSERT INTO gotdonor(date, num ) VALUES (?,?)");
					$query->execute(array($today, $a ));
				}else{
					//update existing row
					$query = $pdo->prepare("SELECT num FROM gotdonor WHERE id = ? ");
					$query->execute(array($lastid));
					$n=$query->fetch(PDO::FETCH_ASSOC);
					$new = (int)$n['num']+1;
					$query = $pdo->prepare("UPDATE gotdonor SET  num=? WHERE id = ? ");					
					$query->execute(array($new, $lastid));					
				} 
			}			
		 }
		public function getSuccessFulSeeker(){ 
			global $pdo;
			$today=date("d/m/Y");
			$query = $pdo->prepare("SELECT num FROM gotdonor WHERE date= ?");
			$query->execute(array($today));
			$r=$query->fetch(PDO::FETCH_ASSOC);
			echo $r['num'];	
		  
		 }
		 
		 public function getRegisterdDonorToday(){ 
			global $pdo;
			$today=date("d/m/Y");
			$query = $pdo->prepare("SELECT num FROM registerhistory WHERE date= ?");
			$query->execute(array($today));
			$arr=$query->fetch(PDO::FETCH_ASSOC);
			echo $arr['num'];	 
		  
		 }
		public function getAllExperience(){
          global $pdo;
          $query = $pdo->prepare("SELECT * FROM experience  ");
          $query->execute();
          return $query->fetchALL(PDO::FETCH_ASSOC);
      }
	 public function gettotaldonor(){ 
			global $pdo; 
			$query = $pdo->prepare("SELECT Num FROM totaldonor ");
			$query->execute();
			$arr=$query->fetch(PDO::FETCH_ASSOC);
			echo $arr['Num'];	 
		  
		 }



	   
  }
?>