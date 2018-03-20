<?php

class Admin extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_admin');
    $this->load->helper('url');
  }

  function index(){
    $data['contact'] = $this->m_admin->tampil_data()->result();
    $this->load->view('v_admin',$data);
  }

  function edit($id){
    $where = array('id' => $id);
    $data['contact'] = $this->m_admin->edit_data($where,'contact')->result();
    $this->load->view('v_edit',$data);
  }

  function update(){
    $id = $this->input->post('id');
    $nama = $this->input->post('name');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
    $message = $this->input->post('message');

    $data = array(
			'Nama' => $nama,
			'Email' => $email,
			'Subject' => $subject,
      'Message' => $message

			);

    $where = array('id' => $id);

    $this->m_admin->update_data($where,$data,'contact');
    redirect('admin/');
  }

  function hapus($id){
  $where = array('id' => $id);
  $this->m_admin->hapus_data($where,'contact');
  redirect('admin/index');
  }

  function tambah_aksi(){
		$Nama = $this->input->post('name');
		$Email = $this->input->post('email');
		$Subject = $this->input->post('subject');
    $Message = $this->input->post('message');

    $data = array(
			'Nama' => $Nama,
			'Email' => $Email,
			'Subject' => $Subject,
      'Message' => $Message

			);
		$this->m_admin->input_data($data,'contact');
		redirect('welcome');
	}
}
