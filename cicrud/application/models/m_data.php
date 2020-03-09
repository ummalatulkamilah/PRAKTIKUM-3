<!-- model m_data ini berisi operasi-operasi database untuk keperluaan crud -->

<?php 

class M_data extends CI_Model{

// fungsi tambpil data befungsi untuk mengambil data dari database.untuk kasus saya saya akan mengambil data dari tabel user maka dari itu user sebagai parameter.
	function tampil_data(){
		return $this->db->get('user');
	}

// fungsi input_data berfungsi untuk menyimpan data yang di diterima dari form inputan ke tabel yang dituju.
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

// fungsi hapus_data berfungsi untuk meghapus tabel yang ada di database, berdasarkan data yang ada pada variabel where
	function hapus_data($where,$table){
		$this->db->where($where); 
		$this->db->delete($table);
	}

// fungsi edit data berfungsi untuk menyeleksi data user yang akan di edit berdasarkan id yang di simpan divariabel where
	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

// fungsi update berfungsi melakukan update data user yang sudah di edit ke database.
	function update_data($where,$data,$table){
		$this->db->where($where); //
		$this->db->update($table,$data); // update data ke tabel yang dituju
	}	

}