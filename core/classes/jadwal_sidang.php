<?php

class jadwal_sidang extends db
{
    // count jadwal sidang
    public function sidangCount()
    {
        $query = "SELECT COUNT(kd_sidang) FROM jadwal_sidang";
        $stmt = $this->db->query($query);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
}
