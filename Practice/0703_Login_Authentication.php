<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script>
		function check() {
			const account = document.getElementById("account").value;
			const password = document.getElementById("password").value;

			if (account == "user" && password == "0000") {
				alert("登入成功！");
			} else if (account == '') {
				alert("帳號未填寫！");
			} else if (password == '') {
				alert("密碼未填寫！");
			} else {
				alert("帳號或密碼錯誤！")
			}
		};
	</script>

	<title>Login 身份驗證</title>
</head>


<body>
	<div>
		</br></br></br></br></br>
		<h2 style="font-family:'DFKai-sb'; font-size:35px; text-align:center;">登 入</h2>
		</br>
		<form id="loginForm" style="text-align:center;">
			<label for="account" style="text-align:center; font-family:'DFKai-sb'; font-size:20px;">帳號：
				<input type="text" placeholder="請輸入帳號" id="account" name="account"
					style="padding:3px; width:20%; border-radius:3px; font-size:18px; font-family:Times New Roman, DFKai-sb;"
					required>
			</label>
			<br><br>
			<label for="password" style="text-align:right; font-family:'DFKai-sb'; font-size:20px;">密碼：
				<input type="password" placeholder="請輸入密碼" id="password" name="password"
					style="padding:3px; width:20%; border-radius:3px; font-size:18px; font-family:Times New Roman, DFKai-sb;"
					required>
			</label>
			</br></br></br></br>
			<div style="text-align:center;">
				<button type="submit" style="font-size:20px; font-family:'DFKai-sb'; border-radius:3px;"
					onclick="check();">登入</button>
			</div>
		</form>
		<p id="message"></p>
	</div>
	<script src="script.js"></script>
</body>

</html>