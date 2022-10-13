<style>
.tb{border-collapse:collapse; border:solid 1px green;width:90%}

.tc{border:solid 1px silver; padding: 2px 10px; font:normal 11pt Arial;
color:blue;text-align:center}

.tcn{border:solid 1px silver; padding: 2px 10px; font:normal 11pt Arial;
color:blue;text-align:left}

.trh:hover{background-color:yellow; color:red;}

h4{font-family:"Courier New";}

.btn_add_studen {

	margin-top: 30px;
	width: 200px;
	height: 50px;
	background-image: url("https://i.pinimg.com/originals/bb/ac/df/bbacdf4fc52b0899f619e5e51f0ca02f.jpg");
	font-size: 30px;
	font-weight: 900;
	color: black;
	font-family: monospace;
	border: 2px solid black;
	text-decoration: none;
}


</style>
<?php
include("connect.php");

function display($col,$cond,$sort,$title){
	$i=1;
	if($cond=="")
		if($sort=="") $student = $col->find();
	   else $student = $col->find();
	else
		if($sort=="") $student = $col->find($cond);
	   else $student = $col->find($cond)->sort($sort);  

	echo "<center><hr><h4>{$title}</h4>";
	$str='<table class="tb">
		<tr>
			<td class="tc">TT</td>
			<td class="tc">Mã số</td>
			<td class="tc">Họ tên</td>
			<td class="tc">Lớp</td>
			<td class="tc">Tuổi</td>
			<td class="tc">Ghi chú</td>
		</tr>';
   $i=1; 
	foreach ($student as $document) {
		$code=$document["scode"];
		$name=$document["snam"];
		$group=$document["class"];
		$age=$document["age"];
		$str.='<tr class=trh>
					<td class="tc">'.$i.'</td>
					<td class="tc">'.$code.'</td>
					<td class="tcn">'.$name.'</td>
					<td class="tc">'.$group.'</td>
					<td class="tc">'.$age.'</td>
					<td class="tc">&nbsp;</td>
			    </tr>';
       $i++;
	}
	$str.='</table><center>';
	echo $str;
}	// end function

$student="student";
$collection = $db->$student;

if($collection->find()){
	display($collection,"",array("scode"=> 1),"DANH SÁCH SINH VIÊN");
} 
else{
	header("location:error.html");
}

?>

<a class="btn_add_studen" href="addStudent.php">Add Student</a>
