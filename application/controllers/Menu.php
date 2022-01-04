<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }


    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('menu');
        }
    }


    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Sub menu added!</div>');
            redirect('menu/submenu');
        }
    }
    // Controller untuk button delete Menu Management
    public function delete($id)
    {
        $this->Menu_model->deleteMenuManagement($id);
        $this->Menu_model->deleteSubmenuManagement($id);
        $this->session->set_flashdata('flash', 'Delete');
        redirect('menu', 'menu/submenu');
    }

    //Controller untuk button edit Menu Management
    public function edit($id)
    {
        $data['title'] = 'Edit Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Menu_model->getMenuById($id);

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Menu_model->editMenuManagement();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('menu');
        }
    }

    public function edit_sub($id)
    {
        $data['title'] = 'Edit Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Menu_model->getSubMenuById($id);

        $data['subMenu'] = $this->menu->getSubMenu();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu/edit_sub', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Menu_model->edit_subSubmenuManagement();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('menu/submenu');
        }
    }

    //    public function update()
    //{
    //  $id = $this->input->post('id');
    //$Menu = $this->input->post('Menu_name');

    //$data = array(
    //    'Menu' => $Menu,
    //);

    //$where = array(
    //  'id' => $id
    //);

    //        $this->Menu_model->updateMenuManagement($where, $data, 'menu');
    //      redirect('menu');
    //}
    //public function edit($id)
    //{
    #$data['menu'] = $this->Menu_model->editMenuMangement($id);
    // $this->load->view('templates/header', $data);
    // $this->load->view('templates/sidebar', $data);
    // $this->load->view('templates/topbar', $data);
    //$coba['nama'] = $id;

    //$this->load->view('menu/edit', $coba);
    // $this->load->view('templates/footer');
    //}

    //public function editya()
    //{
    #$this->db->insert('user_menu', ['menu' => $this->input->post('edit')]);
    // $this->db->where('id', $this->input->post('sembunyi'));
    // $this->db->update_data($this->input->post('edit'));
    //$satu = $this->input->post('sembunyi');
    //$dua = $this->input->post('edit');
    //$this->Menu_model->editMenuManagement($satu, $dua);
    //}
    //Konfirmasi Submenu Mangement ke Menu_model
    //public function deleted($id)
    //{

    //$this->Menu_model->deletedSubmenuManagement($id);
    //$this->session->set_flashdata('flash', 'Delete');

    //redirect('menu/submenu');
    //}
}
