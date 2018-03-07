<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	//connection



	try {
	    $pdo = new PDO("mysql:host=$servername;dbname=pdmis", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"));
	    // set the PDO error mode to exception
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  
    }catch(PDOException $e){
    	echo "Connection failed: " . $e->getMessage();
    }

	function getDates($id, $from, $to){
        
        if(empty($from) && empty($to)){
        
		$dates = $GLOBALS['pdo'] -> prepare(" SELECT `Laboratory_date` FROM `laboratory` WHERE `Hospital_id` = ? GROUP BY `Laboratory_date` ORDER BY `Laboratory_date` ");
		$dates -> execute([$id]);
		$dates = $dates -> fetchAll(PDO::FETCH_ASSOC);
		return $dates;
        
        }else{
        
        $dates = $GLOBALS['pdo'] -> prepare(" SELECT `Laboratory_date` FROM `laboratory` WHERE `Hospital_id` = ? 
            AND `Laboratory_date` BETWEEN ? AND ? GROUP BY `Laboratory_date` ORDER BY `Laboratory_date` ");
		$dates -> execute([$id, $from, $to]);
		$dates = $dates -> fetchAll(PDO::FETCH_ASSOC);
		return $dates;
        
        }
	}

	function getCreatinine($row, $patientid, $from, $to){

		// $column = array("row1", "row2", "row3", "row4", "row5");
		// $n = $column[$row];
        if(empty($from) && empty($to)){
		$data = $GLOBALS['pdo'] -> prepare(" SELECT $row FROM `Laboratory` WHERE `Hospital_id` = ? GROUP BY `Laboratory_date` ORDER BY `Laboratory_date` ");
		$data -> execute([$patientid]);
		$data = $data -> fetchAll(PDO::FETCH_ASSOC);

		return $data;
            
        }else{
            
            $data = $GLOBALS['pdo'] -> prepare(" SELECT $row FROM `Laboratory` WHERE `Hospital_id` = ? AND Laboratory_date BETWEEN ? AND ?GROUP BY `Laboratory_date` ORDER BY `Laboratory_date` ");
            $data -> execute([$patientid, $from, $to]);
            $data = $data -> fetchAll(PDO::FETCH_ASSOC);

            return $data;
        }
	}
    function getOtherlist($patientid){
		$data = $GLOBALS['pdo'] -> prepare(" SELECT description FROM laboratory_others WHERE Hospital_Id = ? GROUP BY description ");
		$data -> execute([$patientid]);
		$data = $data -> fetchAll(PDO::FETCH_ASSOC);

		return $data; 
	}

	function getOtherByDate($Description, $date, $patientid){
		$data = $GLOBALS['pdo'] -> prepare("SELECT value FROM `laboratory_others` WHERE description = ? AND `labothers_date` = ? AND Hospital_Id = ? ");
		$data -> execute([$Description, $date, $patientid]);
		$data = $data -> fetch(PDO::FETCH_ASSOC);
		return $data['value']; 
	}
	function checktreatment($id){-
		$treatment = $GLOBALS['pdo'] -> prepare(" SELECT `treatment_id` FROM `treatment` WHERE `Hospital_id` = ?");
		$treatment -> execute([$id]);
		$treatment = $treatment -> fetchAll(PDO::FETCH_ASSOC);
		return $treatment;
	}
    function checkproblemlist($id){-
		$problemlist = $GLOBALS['pdo'] -> prepare(" SELECT `problemlist_id` FROM `problemlist` WHERE `Hospital_id` = ?");
		$problemlist -> execute([$id]);
		$problemlist = $problemlist -> fetchAll(PDO::FETCH_ASSOC);
		return $problemlist;
	}
     function checkconfinement($id){-
		$confinement = $GLOBALS['pdo'] -> prepare(" SELECT `confinement_id` FROM `confinement` WHERE `Hospital_id` = ?");
		$confinement -> execute([$id]);
		$confinement = $confinement -> fetchAll(PDO::FETCH_ASSOC);
		return $confinement;
	}
    function checkdrug($id){-
		$drug = $GLOBALS['pdo'] -> prepare(" SELECT `drugprofile_id` FROM `patientdrugprofile` WHERE `Hospital_id` = ?");
		$drug -> execute([$id]);
		$drug = $drug -> fetchAll(PDO::FETCH_ASSOC);
		return $drug;
	}
    function checkorder($id){-
		$order = $GLOBALS['pdo'] -> prepare(" SELECT `order_id` FROM `hemo_order` WHERE `Hospital_id` = ?");
		$order -> execute([$id]);
		$order = $order -> fetchAll(PDO::FETCH_ASSOC);
		return $order;
	}
    



?>