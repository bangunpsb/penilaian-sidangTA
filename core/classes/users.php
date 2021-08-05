<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class users extends db
{

    public function pendaftaranCount()
    {
        $query = "SELECT COUNT(status_pendaftaran) FROM pendaftaran where status_pendaftaran=1 AND nim='160123456789'";
        $stmt = $this->db->query($query);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
    
    // Show users
    public function Show_Datakaryawan()
    {
        $query = "SELECT * FROM users ORDER BY email ASC";
        $stmt = $this->db->query($query);
        return $stmt;
    }


    

    // Show Cetak users
    public function Show_CetakDatakaryawan()
    {
        $query = "SELECT * FROM users ORDER BY email ASC";
        $stmt = $this->db->query($query);
        return $stmt;
    }

    public function userCount()
    {
        $query = "SELECT COUNT(id) FROM users";
        $stmt = $this->db->query($query);
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public function levelCount()
    {
        $query = "SELECT COUNT(DISTINCT level) FROM users";
        $stmt = $this->db->query($query);
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public function logout($id)
    {
        header("location:http://localhost/github/penilaian-sidangTA/");
        $query = "UPDATE users SET status=? WHERE id=?";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['2', $id]);
    }


    public function userLogin($logId)
    {
        $query = "SELECT * FROM users where id=?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$logId]);
        return $stmt->fetch();
    }

    public function login($email, $password)
    {
        $query = "SELECT * FROM users where email=? && password=?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$email, $password]);
        $cek = $stmt->fetch();

        if (isset($cek)) {
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $cek['id'];
            $_SESSION['level'] = $cek['level'];
            $_SESSION['status'] = $cek['status'];


            if ($_SESSION['level'] == 'admin' || $_SESSION['level'] == 'user' || $_SESSION['level'] == 'dosen') {
                if ($cek['status'] == 0) {
                    $_SESSION["msgStatus1"] = "Belum verifikasi email";
                    echo 0;
                } else if ($cek['status'] == 1) {
                    $_SESSION["msgStatus2"] = "Anda sudah melakukan login";
                    echo 1;
                } else if ($cek['status'] == 2) {
                    $sql = "UPDATE users set status=? WHERE id=?";
                    $stmt = $this->db->prepare($sql);
                    $stmt->execute([1, $cek['id']]);
                    $output = $_SESSION['status'] = 1;
                    json_encode($output);
                    echo 2;
                } else {
                    echo 'not found';
                }
            } else {
                echo 3;
            }
        } else {
            echo 3;
        }
    }

    public function ubah_password($id, $ubahPassword)
    {
        $sql = "UPDATE users set password=?, status=? WHERE id=?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$ubahPassword, '2', $id]);
        echo "Berhasil Ubah Password";
        exit();
    }

    public function reset_password($id, $token, $ubahPassword)
    {
        $sqlcek = "SELECT * FROM users WHERE token=?";
        $stmtcek = $this->db->prepare($sqlcek);
        $stmtcek->execute([$token]);
        $row = $stmtcek->fetchColumn();
        if ($row > 0) {
            $query = "UPDATE users SET password=?,status=? WHERE id=?";
            $stmt = $this->db->prepare($query);
            $stmt->execute([$ubahPassword, '2', $row]);
            echo "Berhasil Reset Password ";
        } else {
            echo "LINK INI TIDAK DAPAT DIGUNAKAN / TIDAK BERLAKU";
        }
    }


    // lupapassword.php
    public function lupaPassword($resetemail, $token)
    {
        $query = "SELECT count(*) FROM users where email=?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$resetemail]);
        $cek = $stmt->fetchColumn();
        if ($cek > 0) {
            $sqlcek = "UPDATE users set status=?,token=? WHERE email=?";
            $stmtcek = $this->db->prepare($sqlcek);
            $stmtcek->execute(['2', $token, $resetemail]);
            $this->linklupaPassword($resetemail, $token);
            $_SESSION["msgStatus2"] = "Berhasil mengirim link lupa password ke email";
            echo $_SESSION["msgStatus2"];
        } else {
            $_SESSION["msgStatus1"] = "Email tidak ditemukan";
            echo $_SESSION["msgStatus1"];
        }
    }


    // link utk mengirim lupa password ke email
    public function linklupaPassword($resetemail, $token)
    {
        $mail = new PHPMailer(true);
        try {
            $this->resetemail = $resetemail;
            $this->token = $token;
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'bangunpsb@gmail.com';
            $mail->Password   = 'Ruslan281060!';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            //Recipients
            $mail->setFrom('bangunpsb@gmail.com', 'Account Lupa Password');
            $mail->addAddress($resetemail);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Lupa Password';
            $msg = "Klik link dibawah untuk mengganti password.<br><a href='http://localhost/github/penilaian-sidangTA/Vpass_baru&token=$token' style='background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 10px;
            margin: 10px 2px;
            cursor: pointer;'>Verifikasi Disini</a>";
            $mail->Body    = $msg;
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public function daftarUser($imgDaftar, $lokasi_imgDaftar, $nim_daftar, $namaDepan_daftar, $namaBelakang_daftar, $email_daftar, $nohp_daftar, $password_daftar, $token, $level_daftar, $status_daftar)
    {
        $querycekpengguna = "SELECT count(*) FROM users where email=? OR nim=?";
        $stmtcekpengguna = $this->db->prepare($querycekpengguna);
        $stmtcekpengguna->execute([$email_daftar, $nim_daftar]);
        $cekpengguna = $stmtcekpengguna->fetchColumn();

        if ($cekpengguna > 0) {
            echo 1;
        } else {
            $query = 'INSERT INTO users (nim,nama_depan,nama_belakang,email,no_hp,password,level,status,token,img_users) VALUES (?,?,?,?,?,?,?,?,?,?)';
            $stmt = $this->db->prepare($query);
            $result = $stmt->execute([$nim_daftar, $namaDepan_daftar, $namaBelakang_daftar, $email_daftar, $nohp_daftar, $password_daftar, $level_daftar, $status_daftar, $token, $imgDaftar]);
            $this->verAccount($email_daftar, $token);
            $locationfolder = "../assets/imgUsers/$imgDaftar";
            $upload = move_uploaded_file($lokasi_imgDaftar, $locationfolder);
            echo 0;
        }
    }



    public function verAccount($email_daftar, $token)
    {

        $mail = new PHPMailer(true);

        try {
            $this->email = $email_daftar;
            $this->token = $token;
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'bangunpsb@gmail.com';
            $mail->Password   = 'Ruslan281060!';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            //Recipients
            $mail->setFrom('rakensu@gmail.com', 'Account Registrasi');
            $mail->addAddress($email_daftar);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Verifikasi Akun Pendaftaran';
            $msg = "Klik link dibawah untuk verifikasi account anda.<br><a href='http://localhost/github/penilaian-sidangTA/Vdaftar&token=$token' style='background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 10px;
            margin: 10px 2px;
            cursor: pointer;'>Verifikasi Disini</a>";
            $mail->Body    = $msg;
            $mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }


    public function updateAccount($getToken)
    {
        $query = "UPDATE users SET status=? WHERE token=?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([2, $getToken]);
        $_SESSION["msgVer"] = "Akun anda sudah diverifikasi, sekarang anda bisa login";
    }

    public function updateUser($update_nim, $update_namaDepan, $update_namaBelakang, $update_noHp)
    {
        $query = "UPDATE users SET nama_depan=?,nama_belakang=?,no_hp=? WHERE nim=?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$update_namaDepan, $update_namaBelakang, $update_noHp, $update_nim]);
        echo 1;
    }
}
