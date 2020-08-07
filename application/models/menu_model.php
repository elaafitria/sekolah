<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Menu_model extends CI_Model
{   
    Public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                  ";
        return $this->db->query($query)->result_array();
    }    

    Public function HapusDataSubmenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
    }

    Public function HapusDataMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_menu');
    }
    
    Public function HapusDataRole($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_role');
    }

    Public function getDataUpdate($table,$where)
    {
        
        return $this->db->get_where('user_sub_menu',$where);
    }

}


