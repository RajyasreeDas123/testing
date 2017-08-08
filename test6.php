<?php
	include_once 'test2.php';
	$con = new Test();
	$table = 'EmployeeData';
	if(!empty($__REQUEST)) {
		$ID=$_REQUEST["id"];
		$where = "`EMPID`=".$ID;
		$res=$con->delete($table,$where);
		$res1=$con->select($table,$where);
		if($res1!="") {
			header("Location:test3.php");
			exit;
		}
		else
			echo "<br>Nothing to Dispaly";
	}
	if($_POST['Submit'] == 'SUBMIT DETAILS' && !empty($_POST)) {
		$data = array();
		$name = $_POST["name"];
		$age = $_POST["age"];
		$path= $_FILES['ufile']['name'];
		$date=new DateTime();
		$new_filename=$date->format('Y-m-d H:i:s').$_FILES['ufile']['name'];
		$new_filepath="uploads/".$date->format('Y-m-d H:i:s').$_FILES['ufile']['name'];
		copy($_FILES['ufile']['tmp_name'], 'uploads/'.$new_filename);     
		$new_filepath='uploads/'.$new_filename; 
		//$data = 'EMPNAME,EMPAGE,EMPIMAGE,EMPIMAGEPATH';
		$data['EMPNAME'] = $name;
		$data['EMPAGE'] = $age;
		$data['EMPIMAGE'] = $path;
		$data['EMPIMAGEPATH'] = $new_filepath;
		//$values = "'".$name."', '".$age."', '".$new_filename."','".$new_filepath."'";
		//$res = $con->add($table,$data,$values);
		$res = $con->add($table,$data);
		$last_id = mysql_insert_id;
		if($last_id!="") {
			header("Location:test3.php");
			exit;
		}
	}
	if($_POST['Update'] == 'UPDATE DETAILS' && !empty($_POST)) {
		$eid=$_POST["eid"];
		$name = $_POST["name"];
		$age = $_POST["age"];
		$path= $_POST['imgpath'];
		$path1=$_FILES['ufile']['name'];
		if($path1!='')
		{
			$date=new DateTime();
			$new_filename=$date->format('Y-m-d H:i:s').$_FILES['ufile']['name'];
			copy($_FILES['ufile']['tmp_name'], 'uploads/'.$new_filename);     
			$new_filepath='uploads/'.$new_filename;
			$path=$new_filepath;
		}
		$data = "`EMPNAME`='".$name."' , `EMPAGE`='".$age."' , `EMPIMAGE`='".$path."' , `EMPIMAGEPATH`='".$path."'";
		$where = "`EMPID`=".$eid;
		$res = $con->edit($table,$where,$data);
		header("Location:test3.php");
		exit;
	}
?>
