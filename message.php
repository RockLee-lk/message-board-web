<?php 

	$user_name = $_POST['username'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
echo '用户名：'. $user_name;
echo '联系方式：' . $phone;
echo '留言内容：' . $message;

$servername = "localhost";
$username = "root";
$password = "lk19950725";
$dbname = "likun";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "INSERT INTO message_board (username, phone, message)
VALUES (".$user_name.", ".$phone.", ".$message.")";
 
if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();

?>