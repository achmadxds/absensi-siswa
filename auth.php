<?php  
	$conn = mysqli_connect('localhost', 'root', '', 'absensi');

	if (mysqli_connect_errno()) {
		echo "koneksi database gagal : " . mysqli_connect_error();
	}

	function query($query)
	{
	  global $connect;
	  $result   = mysqli_query($connect, $query);
	  $rows     = [];
	  while ($row = mysqli_fetch_assoc($result)) {
	    $rows[] = $row;
	  }
	  return $rows;
	}

	function Login() {
		global $conn;

		if(isset($_POST['login'])) {
			$username = mysqli_real_escape_string($conn, $_POST['usernameLogin']);
			$password = mysqli_real_escape_string($conn, $_POST['passwordLogin']);
			$result   = mysqli_query($conn, 'SELECT `username`, `password`, `is_admin` FROM `users` WHERE `username`="'.$username.'" ');
			if(mysqli_num_rows($result) > 0){
				$row = mysqli_fetch_assoc($result);
				if(password_verify($password, $row['password'])) {
					if($row['is_admin'] == 1){
						$_SESSION['admin'] = true;
						$_SESSION['username'] = $username;
						header('Location: admin/dashboard.php');
						exit;
					} else {
						$_SESSION['siswa'] = true;
						$_SESSION['username'] = $username;
						header('Location: siswa/dashboard.php');
						exit;
					}
				} else {
					echo "<script> alert('password salah bro!'); </script>";
				}
			} else {
				echo "<script> alert('username salah bro!'); </script>";
			}
		}

		return mysqli_affected_rows($conn);
	}

	function Register() {
		global $conn;

		if(isset($_POST['register'])) {
			$username        = strtolower(stripslashes($_POST['username']));
			$password        = mysqli_escape_string($conn, $_POST['password']);
			$email           = $_POST['email'];
			$email           = filter_var($email, FILTER_SANITIZE_EMAIL);
			$email           = filter_var($email, FILTER_VALIDATE_EMAIL);
			$confirmPassword = mysqli_escape_string($conn, $_POST['confirmPassword']);
			$is_admin        = 0;

			$result          = mysqli_query($conn, 'SELECT `username`, `email` FROM `users` WHERE `username`="'.$username.'" ');
			if(mysqli_fetch_assoc($result)) {
				echo "<script> alert('EMAIL / USERNAME TELAH TERPAKAI!') </script>";
				return false;
			}

			if($password != $confirmPassword){
				echo "<script> alert('KONFIRMASI PASSWORD TIDAK SESUAI!') </script>";
				return false;
			}

			$password = password_hash($password, PASSWORD_DEFAULT);
			$query    = 'INSERT INTO `users` (`username`, `password`, `email`, `is_admin`) VALUES ("'.$username.'", "'.$password.'", "'.$email.'", '.$is_admin.') ';
			mysqli_query($conn, $query);			

			return mysqli_affected_rows($conn);
		}
	}

	function Absen()
	{
		global $conn;

		$qr       = mysqli_query($conn, 'SELECT `username`, `nama`, `no_absen`, `kelas` FROM `users` WHERE `username`="'.$_SESSION['username'].'" ');
		$row      = mysqli_fetch_assoc($qr);
		$is_absen = '1';

		if(isset($_POST['task']) == "absensubmit"){
			mysqli_query($conn, 'UPDATE `users` SET `is_absen`="'.$is_absen.'" WHERE `username`="'.$_SESSION['username'].'" ');
			exit;
		}
	}
?>