<!DOCTYPE html>
<html>
<head>
	<title>留言板</title>
</head>
<body>

<h1>留言板</h1>
<form action="./message.php" method="post">
	<table>
		<tr>
		<td>
			联系人:
		</td>
		<td>
			<input type="text" name="username" />	
		</td>
	</tr>
	<tr>
		<td>
			联系方式:
		</td>	
		<td>
			<input type="text" name="phone" />	
		</td>
	</tr>
	<tr>
		<td>
			留言:
		</td>
		<td>
			<textarea rows="4" name="message"></textarea>	
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="" value="提交"></td>
	</tr>
	</table>
	
</form>
</body>
</html>