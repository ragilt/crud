<?php

/* 
 * Belajar CodeIgniter 3.0.3.
 * Ragil Turyanto
 * http://ragilt.net 2015.
 */
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Postberita extends CI_Model 
{
    var $table = "berita";
    function __construct()
    {
        parent::__construct();
    }
    function getAll()
    {
        $q = $this->db->get($this->table);
        if($q->num_rows() > 0)
        {
            return $q->result();
        }
        return array();
    }
    function add($data)
    {
        $this->db->insert($this->table,$data);
    }
    function update($data,$id)
    {
        $this->db->where("id",$id);
        $this->db->update($this->table,$data);
    }
    function delete($id)
    {
        $this->db->where("id",$id);
        $this->db->delete($this->table);
    }
    
    function getById($id)
{
    $this->db->where("id",$id);
    $q = $this->db->get($this->table);
    if($q->num_rows() > 0)
    {
        return $q->row();
    }
    return false;
}
}