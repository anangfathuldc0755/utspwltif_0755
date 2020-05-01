<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    private $_table = "mahasiswa";

    public $nim;
    public $nama;
    public $jekel;
    public $image = "default.jpg";
    public $keterangan;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'jekel',
            'label' => 'jekel',
            'rules' => 'required'],
            
            ['field' => 'keterangan',
            'label' => 'keterangan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nim" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nim = $post["nim"];
        $this->nama = $post["nama"];
		$this->jekel = $post["jekel"];
		$this->image = $this->_uploadImage();
        $this->keterangan = $post["keterangan"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nim = $post["id"];
        $this->nama = $post["nama"];
		$this->jekel = $post["jekel"];
		
		
		if (!empty($_FILES["image"]["nama"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
		}

        $this->keterangan = $post["keterangan"];
        $this->db->update($this->_table, $this, array('nim' => $post['id']));
    }

    public function delete($id)
    {
		$this->_deleteImage($id);
        return $this->db->delete($this->_table, array("nim" => $id));
	}

	private function _uploadImage()
	{
		$config['upload_path']          = './upload/mahasiswa/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->nim;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	private function _deleteImage($id)
	{
		$mahasiswa = $this->getById($id);
		if ($mahasiswa->image != "default.jpg") {
			$filename = explode(".", $mahasiswa->image)[0];
			return array_map('unlink', glob(FCPATH."upload/mahasiswa/$filename.*"));
		}
	}

}