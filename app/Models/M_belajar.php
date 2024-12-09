<?php

namespace App\Models;
use CodeIgniter\Model;

class M_belajar extends Model
{
    public function tampil($table, $by){
        return $this->db->table($table)
                        ->orderby($by, 'desc')
                        ->get()
                        ->getResult();
    }
    
    public function join($table, $table2, $on){
        return $this->db->table($table)
                        ->join($table2,$on)
                        ->get()
                        ->getResult();
    }
    public function join4($table, $table2,$table3,$table4, $on,$on2,$on3){
        return $this->db->table($table)
                        ->join($table2,$on)
                        ->join($table3,$on2)
                        ->join($table4,$on3)
                        ->get()
                        ->getResult();
    }
    public function filter($table, $table2, $on ,$filter1, $filter2, $awal, $akhir){
        return $this->db->table($table)
                        ->join($table2,$on)
                        ->where($filter1,$awal)
                        ->where($filter2,$akhir)
                        ->get()
                        ->getResult();
    }
    public function joinw($table,$table2,$on,$w){
        return $this->db->table($table)
        ->join($table2,$on)
        ->where($w)
        ->get()
        ->getRow();
    }
    public function joinw4($table,$table2,$table3,$table4,$on,$on2,$on3,$w){
        return $this->db->table($table)
        ->join($table2,$on)
        ->join($table3,$on)
        ->join($table4,$on)
        ->where($w)
        ->get()
        ->getRow();
    }

    public function input($table, $data){
        return $this->db->table($table)
                        ->insert($data);
    }

    public function hapus($table, $data){
        return $this->db->table($table)
                        ->delete($data);
    }
    public function getWhere($table, $where){
        return $this->db->table($table)
                        ->getWhere($where)
                        ->getRow();
    }

    public function edit($table, $data, $where)
    {
        return $this->db->table($table)
                        ->update($data, $where);
    }
}
