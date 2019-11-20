<?php
	function oddeven($number) {
		//0 2 4 Even Odd 1 3 5
		if (is_numeric($number) && $number <= 1000) {
			if ($number % 2 == 0) {
				return "Even";
			} else {
				return "Odd";
			}
		} else {
			return false;
		}
	}
	$res = false;
	if (isset($_POST["submitpost"])) {
		$number = $_POST["number"];
		$value = oddeven($number);
		$result = ($value) ? "$number is $value" : "Number is Longer";
		$res = true;
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Odd Even Numbers Using Form</title>
	</head>
	<body>
		<div>
			<h3>Odd Even Numbers Using Form</h3>
			<form method="post">
				<p>
					<strong>
						Enter The Numbers :
					</strong> <input type="number" name="number" value="<?php $number; ?>" max="1000" /> </p>
				<p> <input type="submit" name="submitpost" value="Submit" /> </p>
			</form>
		</div>
		<div>
			<?php
		if ($res)
			echo "$result";
			?>
		</div>
	</body>
</html>