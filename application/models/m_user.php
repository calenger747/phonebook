<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model {


    function cek($username, $password) {
    	$this->db->where('username',$username);
	    $this->db->where('password',$password);
	    $result = $this->db->get('tbl_user',1);
	    return $result;
    }

    public function get_all()
	{
		$query = $this->db->select("*")
				 ->from('tbl_phonebook')
				 ->order_by('id', 'DESC')
				 ->get();
		return $query->result();
	}

	public function simpan($data)
	{
		
		$query = $this->db->insert("tbl_phonebook", $data);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function edit($id)
	{
		
		$query = $this->db->where("id", $id)
				->get("tbl_phonebook");

		if($query){
			return $query->row();
		}else{
			return false;
		}

	}

	public function update($data, $id)
	{
		
		$query = $this->db->update("tbl_phonebook", $data, $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function hapus($id)
	{
		
		$query = $this->db->delete("tbl_phonebook", $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function get_excel()
	{
		$this->db->select('*');
  		$this->db->from('tbl_phonebook');
  		$this->db->order_by('id', 'ASC');
		$data = $this->db->get('');
  		return $data;

	}

}
