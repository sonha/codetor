<?php
//khai báo mảng ban đầu
$list_university = array('Bach Khoa', 'Buu chinh', 'GTVT', 'Kinh doanh & Cong Nghe');
$list_course = array('PHP', 'Javascript', 'CSS', 'MySQL');
//lấy năm hiện tại
$current_year = date('Y', time());
//tạo mảng các câu thông báo lỗi
$error_message = array();

//Nếu bấm register thì thực hiện action
if(isset($_POST['register'])) {
	$username = (isset($_POST['username'])) ? $_POST['username'] : '';
    $username = htmlspecialchars($username, ENT_QUOTES);//nhap thu <script>alert('baba');</script>
//    var_dump(strlen($username));die;
	$password = (isset($_POST['password'])) ? $_POST['password'] : '';
	$password_confirm = (isset($_POST['password_confirm'])) ? $_POST['password_confirm'] : '';
	$email = (isset($_POST['email'])) ? $_POST['email'] : '';
    $age = (isset($_POST['age'])) ? $_POST['age'] : '';
	$gender = (isset($_POST['gender'])) ? $_POST['gender'] : '';
	$university = (isset($_POST['university'])) ? $_POST['university'] : '';
	$course = (isset($_POST['course'])) ? $_POST['course'] : array();
    $note = (isset($_POST['note'])) ? $_POST['note'] : '';
	$day = (isset($_POST['day'])) ? $_POST['day'] : '';
	$month = (isset($_POST['month'])) ? $_POST['month'] : '';
	$year = (isset($_POST['year'])) ? $_POST['year'] : '';
	if($username == '') {
		$error_message['username'] = '<p style="color: red;">username is required</p>';
	} else {
        if(strlen($username) > 10 || strlen($username) < 4 ) {
            $error_message['username'] = '<p style="color: red;">username must be greater than 4 and smaller than 10</p>';
        }
    }
    if($age == '') {
        $error_message['age'] = '<p style="color: red;">age is required</p>';
    } else {
        if(!is_int($age)) {
            $error_message['age'] = '<p style="color: red;">age is numeric required</p>';
        }
    }
	if($university == '') {
		$error_message['university'] = '<p style="color: red;">university is required</p>';
	}
    if($note == '') {
        $error_message['note'] = '<p style="color: red;">note is required</p>';
    }
    if(empty($course)) {
		$error_message['course'] = '<p style="color: red;">course is required</p>';
	} else {
		$course_name = implode(',',$course);
	}
	if($password == '' || $password_confirm == '') {
		$error_message['password'] = '<p style="color: red;">password and password_confirm is required</p>';
	} else {
		if($password != $password_confirm) {
			$error_message['password'] = '<p style="color: red;">Passwords dont match. Please try again.</p>';
		}
	}
	if($email == '') {
		$error_message['email'] = '<p style="color: red;">email is required</p>';
	} else {
		// validate email : đúng định dạng email trả về true, ngược lại trả false.
		$validate = filter_var($email, FILTER_VALIDATE_EMAIL);
		if(!$validate) {
			$error_message['email'] = '<p style="color: red;">email must be formatted as an email</p>';
		}
	}
	if($day == '' || $month == '' || $year == '' ) {
		$error_message['date'] = '<p style="color: red;">day, month, year is required</p>';
	}
	if($gender == '') {
		$error_message['gender'] = '<p style="color: red;">gender is required</p>';
	} 
	if($gender = 'M') {
		$gender_name = 'Nam';
	} else {
		$gender_name = 'Nu';
	}
	if(empty($error_message)) {
		echo '<h1>User Infomation</h1><br>';
		echo 'Username : '.$username.'<br>';
		echo 'Password : '.$password.'<br>';
        echo 'Age : '.$age.'<br>';
		echo 'Birthday : '.$day.'/'.$month.'/'.$year.'<br>';
		echo 'Email : '.$email.'<br>';
		echo 'Gender : '.$gender_name.'<br>';
		echo 'University : '.$list_university[$university].'<br>';
		echo 'Course : '.$course_name.'<br>';
	}
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>

        table {
            border: 1px solid black;
        }

    </style>
</head>
<body>
<h1>User Register Form</h1>
<hr>
<form action="" method="POST">
<table>
    <tr>
        <td>Username</td>
        <td><input type="text" name="username" value="<?php echo (isset($username)) ? $username : '';?>"/></td>
		<td><?php echo (isset($error_message['username'])) ? $error_message['username'] : '';?></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="password" value="<?php echo (isset($password)) ? $password : '';?>"/></td>
		<td><?php echo (isset($error_message['password'])) ? $error_message['password'] : '';?></td>
    </tr>
	<tr>
        <td>Password Confirm</td>
        <td><input type="password" name="password_confirm" value="<?php echo (isset($password_confirm)) ? $password_confirm : '';?>"/></td>
		<td></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="email" value="<?php echo (isset($email)) ? $email : '';?>"/></td>
		<td><?php echo (isset($error_message['email'])) ? $error_message['email'] : '';?></td>
    </tr>
    <tr>
        <td>Age</td>
        <td><input type="text" name="age" value="<?php echo (isset($age)) ? $age : '';?>"/></td>
        <td><?php echo (isset($error_message['age'])) ? $error_message['age'] : '';?></td>
    </tr>
    <tr>
        <td>Birthday</td>
        <td>
            Day
            <select name="day">
				<option value="">---</option>
            <?php for($i = 1; $i <= 31; $i++) { ?>
                <option value="<?php echo $i;?>" <?php if(isset($day) &&($day==$i)) { echo 'selected="selected"';}?>><?php echo $i;?></option>
            <?php } ?>
            </select>
            Month
            <select name="month">
				<option value="">---</option>
                <?php for($j = 1; $j <= 12; $j++) { ?>
                    <option value="<?php echo $j;?>" <?php if(isset($month) &&($month==$j)) { echo 'selected="selected"';}?>><?php echo $j;?></option>
                <?php } ?>
            </select>
            Year
            <select name="year">
				<option value="">---</option>
                <?php for($k = 1995; $k <= $current_year; $k++) { ?>
                    <option value="<?php echo $k;?>" <?php if(isset($year) &&($year==$k)) { echo 'selected="selected"';}?>><?php echo $k;?></option>
                <?php } ?>
            </select>
        </td>
		<td><?php echo (isset($error_message['date'])) ? $error_message['date'] : '';?></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td>
            <input type="radio" name="gender" value="M" <?php if(isset($gender) && $gender=='M') {echo 'checked="checked"';}?>/>Nam
            <input type="radio" name="gender" value="F" <?php if(isset($gender) && $gender=='F') {echo 'checked="checked"';}?>/>Nữ
        </td>
		<td><?php echo (isset($error_message['gender'])) ? $error_message['gender'] : '';?></td>
    </tr>
    <tr>
        <td>University</td>
        <td>
            <select name="university">
                <?php foreach ($list_university as $key => $item) { ?>
                    <option value="<?php echo $key;?>" <?php if( isset($university) && ($key == $university)) { echo 'selected="selected"';}?>><?php echo $item;?></option>
                <?php }?>
            </select>
        </td>
		<td></td>
    </tr>
    <tr>
        <td>Course</td>
        <td>
            <?php foreach($list_course as $key => $item) { ?>
            <input type="checkbox" name="course[]" value="<?php echo $item;?>" <?php if(isset($course) && (in_array($item, $course))) { echo 'checked';}?>/><?php echo $item;?>
            <?php } ?>
        </td>
		<td><?php echo (isset($error_message['course'])) ? $error_message['course'] : '';?></td>
    </tr>
    <tr>
        <td>Note</td>
        <td>
            <textarea name="note" id="" cols="40" rows="10"><?php echo (isset($note)) ? $note : '';?></textarea>
        </td>
        <td><?php echo (isset($error_message['note'])) ? $error_message['note'] : '';?></td>
    </tr>
	<tr>
		<td><input type="submit" name="register" value="Check"/></td>
	</tr>
</table>
</form>
</body>
</html>