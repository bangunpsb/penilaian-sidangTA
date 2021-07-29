<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class pendaftaran extends db
{
    // Show users
    public function Show_Datakaryawan()
    {
        $query = "SELECT * FROM users ORDER BY email ASC";
        $stmt = $this->db->query($query);
        return $stmt;
    }
}
