<?php
$Name=$_post['Name'];
$Email Id=$_post['Name'];
$Mobile No=$_post['Name'];
$Date Of Birth=$_post['Name'];
$Pin code=$_post['Name'];

if(!empty($name) ||(!empty($email id) ||(!empty($mobile no) ||(!empty($date of birth) ||(!empty($pin code) ){
$host="localhost";
$dbname="users";

$conn= new mysqli($host,$dbname)
if(mysqli_connect_error()){
die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
}else{
$select="select email from register where email=? Limit 1";
$Insert="insert into register(name,email id,mobile no,date of birth,pin code) values(?,?,?,?,?)";
$stmt=$conn->prepare($select);
$stmt->bind_parm("s",$email);
$stmt->execute();
$stmt->bind_result($email);
$stmt->store_result();
$rnum=$stmt->num_rows;

if($rnum==0) {

$stmt->close();
$stmt=$conn->prepare($INSERT);
$stmt->bind_param("ssiii",$name,$emailid,$mobileno,$dateofbirth,$pincode);
$stmt->execute();
echo"new record inserted sucessfully";
}else{
echo"someone already registerd using this email";
}
$stmt->close();
$conn->close();
}
}else{
echo "All fields are required";
 die();
?>
