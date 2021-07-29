<?php

class pendaftaran extends db
{
    // Show users
    public function pendaftaranCount()
    {
        $query = "SELECT COUNT(status_pendaftaran) FROM pendaftaran where status_pendaftaran=1 AND nim='160123456789'";
        $stmt = $this->db->query($query);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
}
