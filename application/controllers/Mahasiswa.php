<?php
class Matakuliah extends CI_Controller
{
 public function index()
 {
 $this->load->view('view-form-mahasiswa');
 }
 public function cetak()
 {
    $this->form_validation->set_rules('Nama', 'Nama Mahasiswa', 
    'required|min_length[3]', [
     'required' => 'Nama Mahasiswa Harus diisi',
     'min_lenght' => 'Nama terlalu pendek'
     ]);
     $this->form_validation->set_rules('NIS', 'NIS', 
    'required|min_length[3]', [
     'required' => 'NIS Harus diisi',
     'min_lenght' => 'NIS terlalu pendek'
     ]);
     $this->form_validation->set_rules('Kelas', 'Kelas', 
    'required|min_length[3]', [
     'required' => 'Kelas Harus diisi',
     'min_lenght' => 'Kelas terlalu pendek'
     ]);
     $this->form_validation->set_rules('Tanggal', 'Tanggal Lahir', 
    'required|min_length[3]', [
     'required' => 'Tanggal Lahir Harus diisi',
     'min_lenght' => 'Tanggal Lahir terlalu pendek'
     ]);
     $this->form_validation->set_rules('Tempat', 'Tempat Lahir', 
    'required|min_length[3]', [
     'required' => 'Tempat Lahir Harus diisi',
     'min_lenght' => 'Tempat Lahir terlalu pendek'
     ]);
     $this->form_validation->set_rules('', '', 
    'required|min_length[3]', [
     'required' => ' Harus diisi',
     'min_lenght' => ' terlalu pendek'
     ]);
     $this->form_validation->set_rules('Alamat', 'Alamat', 
    'required|min_length[3]', [
     'required' => 'Alamat Harus diisi',
     'min_lenght' => 'Alamat terlalu pendek'
     ]);
     $this->form_validation->set_rules('', '', 
    'required|min_length[3]', [
     'required' => ' Harus diisi',
     'min_lenght' => ' terlalu pendek'
     ]);
     if ($this->form_validation->run() != true) {
     $this->load->view(‘view-form-matakuliah’);
     } else {
    
 $data = [
 ‘kode’ => $this->input->post(‘kode’),
 ‘nama’ => $this->input->post(‘nama’),
 ‘sks’ => $this->input->post(‘sks’)
 ];
 $this->load->view(‘view-data-matakuliah’, $data);
  }
 }
}

