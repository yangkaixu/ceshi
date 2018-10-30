<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Document</title>
</head>
<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
<body>
	<h1>表单提交post行为</h1>
	<form action="/admin/user/insert" method="post">
		{{ csrf_field() }}
		用户:	<input type="text" name="uname" value=""><br/><br>						
		密码:	<input type="text" name="upass" value=""><br/><br>						
		手机:	<input type="text" name="uhone" value=""><br/><br>
		<input type="submit" value='提交'>						
	</form>
	<h1>ajaxPOST提交行为</h1>
	<button>点击发送ajax --- poxt</button>
	<script type="text/javascript">
		$('button').eq(0).click(function(){
			$.ajaxSetup({
        		headers: {
            		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       		}
			});
			$.post('/admin/user/insert',function(msg){
				alert(msg);
			});
		})
	</script>

</body>
</html>