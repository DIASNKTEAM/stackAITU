<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RESULT</title>
</head>
<body>
	<?php

session_start();
require('connection.php');

$postid = $_POST['arenid'];
if ( isset($postid)) {

$out = mysqli_query($con , "SELECT * FROM `posts` WHERE id = '$postid'");
$row = mysqli_fetch_array($out)
?>
	<form action="lastedit.php" method="post">
		Enter title:<br>
		<textarea name="titlee" cols="60" rows="10" value = "<?php echo $row['title'] ?>" ><?php echo $row['title'] ?></textarea><br>
        Enter question:<br>
		<textarea name="questionn" cols="60" value = "<?php echo $row['question'] ?>"  rows="10"><?php echo $row['question'] ?></textarea><br>
		Enter code:<br>
		<textarea name="codee" cols="60" rows="30" value = "<?php echo $row['code'] ?>" ><?php echo $row['code'] ?></textarea><br>
		Choose language:<br>
		<select name="p_langg" value = "<?php echo $row['p_lang'] ?>" id="">

			<?php
             if ($row['p_lang'] == 'C++') {?>
             <option selected="selected" value="C++">C++</option>
			<option value="JAVA">JAVA</option>
			<option value="SQL">SQL</option>
			<option value="PHP">PHP</option>
			<option value="HTML">HTML</option>
			<option value="CSS">CSS</option>
			<option value="JS">JS</option>
			<option value="Python">Python</option>
			<option value="Kotlin">Kotlin</option>
			<option value="Swift">Swift</option>
			<?php
             }
             elseif ($row['p_lang'] == 'JAVA') {?>
             <option value="C++">C++</option>
			<option selected="selected" value="JAVA">JAVA</option>
			<option value="SQL">SQL</option>
			<option value="PHP">PHP</option>
			<option value="HTML">HTML</option>
			<option value="CSS">CSS</option>
			<option value="JS">JS</option>
			<option value="Python">Python</option>
			<option value="Kotlin">Kotlin</option>
			<option value="Swift">Swift</option>
			<?php
             }
             elseif ($row['p_lang'] == 'SQL') {?>
             <option value="C++">C++</option>
			<option value="JAVA">JAVA</option>
			<option selected="selected" value="SQL">SQL</option>
			<option value="PHP">PHP</option>
			<option value="HTML">HTML</option>
			<option value="CSS">CSS</option>
			<option value="JS">JS</option>
			<option value="Python">Python</option>
			<option value="Kotlin">Kotlin</option>
			<option value="Swift">Swift</option>
			<?php
             }
             elseif ($row['p_lang'] == 'PHP') {?>
             <option value="C++">C++</option>
			<option value="JAVA">JAVA</option>
			<option value="SQL">SQL</option>
			<option selected="selected" value="PHP">PHP</option>
			<option value="HTML">HTML</option>
			<option value="CSS">CSS</option>
			<option value="JS">JS</option>
			<option value="Python">Python</option>
			<option value="Kotlin">Kotlin</option>
			<option value="Swift">Swift</option>
			<?php
             }
             elseif ($row['p_lang'] == 'HTML') {?>
             <option value="C++">C++</option>
			<option value="JAVA">JAVA</option>
			<option value="SQL">SQL</option>
			<option value="PHP">PHP</option>
			<option selected="selected" value="HTML">HTML</option>
			<option value="CSS">CSS</option>
			<option value="JS">JS</option>
			<option value="Python">Python</option>
			<option value="Kotlin">Kotlin</option>
			<option value="Swift">Swift</option>
			<?php
             }
             elseif ($row['p_lang'] == 'CSS') {?>
             <option value="C++">C++</option>
			<option value="JAVA">JAVA</option>
			<option value="SQL">SQL</option>
			<option value="PHP">PHP</option>
			<option value="HTML">HTML</option>
			<option selected="selected" value="CSS">CSS</option>
			<option value="JS">JS</option>
			<option value="Python">Python</option>
			<option value="Kotlin">Kotlin</option>
			<option value="Swift">Swift</option>
			<?php
             }
             elseif ($row['p_lang'] == 'JS') {?>
             <option value="C++">C++</option>
			<option value="JAVA">JAVA</option>
			<option value="SQL">SQL</option>
			<option value="PHP">PHP</option>
			<option value="HTML">HTML</option>
			<option value="CSS">CSS</option>
			<option selected="selected" value="JS">JS</option>
			<option value="Python">Python</option>
			<option value="Kotlin">Kotlin</option>
			<option value="Swift">Swift</option>
			<?php
             }
             elseif ($row['p_lang'] == 'Python') {?>
             <option value="C++">C++</option>
			<option value="JAVA">JAVA</option>
			<option value="SQL">SQL</option>
			<option value="PHP">PHP</option>
			<option value="HTML">HTML</option>
			<option value="CSS">CSS</option>
			<option value="JS">JS</option>
			<option selected="selected" value="Python">Python</option>
			<option value="Kotlin">Kotlin</option>
			<option value="Swift">Swift</option>
			<?php
             }
             elseif ($row['p_lang'] == 'Kotlin') {?>
             <option value="C++">C++</option>
			<option value="JAVA">JAVA</option>
			<option value="SQL">SQL</option>
			<option value="PHP">PHP</option>
			<option value="HTML">HTML</option>
			<option value="CSS">CSS</option>
			<option value="JS">JS</option>
			<option value="Python">Python</option>
			<option selected="selected" value="Kotlin">Kotlin</option>
			<option value="Swift">Swift</option>
			<?php
             }
             elseif ($row['p_lang'] == 'Swift') {?>
             <option value="C++">C++</option>
			<option value="JAVA">JAVA</option>
			<option value="SQL">SQL</option>
			<option value="PHP">PHP</option>
			<option value="HTML">HTML</option>
			<option value="CSS">CSS</option>
			<option value="JS">JS</option>
			<option value="Python">Python</option>
			<option value="Kotlin">Kotlin</option>
			<option selected="selected" value="Swift">Swift</option>
			<?php
             }

			?>

		</select><br><br>
		<input type="submit" name="gogogo" value="submit">

	</form>
	<?php } 
	$_SESSION['AAAAAAAAAA'] = $postid;

?>
</body>
</html>