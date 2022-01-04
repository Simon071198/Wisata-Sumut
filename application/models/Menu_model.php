<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*,`user_menu`.`menu` 
                    FROM `user_sub_menu` JOIN `user_menu` 
                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`";
        return $this->db->query($query)->result_array();
    }
    //Model delete untuk Menu Mangement
    public function deleteMenuManagement($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_menu');
    }
    //Model delete untuk Submenu Management
    public function deleteSubmenuManagement($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
    }

    //Model edit untuk Menu Management
    public function getMenuById($id)
    {
        return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    }
    public function editMenuManagement()
    {
        $id = $this->input->post('id', true);
        $menu = $this->input->post('menu', true);

        $this->db->where('id', $id)->update('user_menu', ['menu' => $menu]);
    }

    //Model edit untuk Submenu Management
    public function getSubMenuById($id)
    {
        return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
    }
    public function edit_subSubmenuManagement()
    {
        $id = $this->input->post('id', true);
        $submenu = $this->input->post('id', true);
        $title = $this->input->post('id', true);
        $menu_id = $this->input->post('id', true);
        $url = $this->input->post('id', true);
        $icon = $this->input->post('id', true);

        $this->db->where('id', $id)->update('user_sub_menu', ['submenu' => $submenu]);
        $this->db->where('id', $id)->update('user_sub_menu', ['title' => $title]);
        $this->db->where('id', $id)->update('user_sub_menu', ['menu_id' => $menu_id]);
        $this->db->where('id', $id)->update('user_sub_menu', ['url' => $url]);
        $this->db->where('id', $id)->update('user_sub_menu', ['icon' => $icon]);
    }
}
