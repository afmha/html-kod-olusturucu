<?php
 if($_POST){$s1=@$_POST['secim1'];$s2=@$_POST['secim2'];$charset=@$_POST['charset'];$title=@$_POST['title'];if(empty($title)){die('Title eksik bırakılamaz.');}if(empty($charset)){die('Charset eksik bırakılamaz.');}$veri='
<!DOCTYPE html>
<html>
	<head>
		<meta charset="'.$charset.'">
		<title>'.$title.'</title>
				
		';if($s1){$veri.='
		<style type="text/css">
		
		</style>
		';}if($s2){$veri.='
		<script type="text/javascript">
		
		</script>
		';}$veri.='
	</head>
	<body>
					
	</body>
</html>
		';echo '
			<textarea>
				'.$veri.'
			</textarea>
		';}else{?>
		
			<form action="" method="POST">
			
				<h2>Sayfa Kurulumu<h2>
				<br><br>
				Charset : <input type="text" name="charset"><br>
				Title : <input type="text" name="title"><br>
				<input type="checkbox" name="secim1" value="css">CSS<br>
				<input type="checkbox" name="secim2" value="js">JS<br>
				<br><br>
				<input type="submit" name="git" value="Oluştur">
			
			</form>
		
		<?php
 }?>
