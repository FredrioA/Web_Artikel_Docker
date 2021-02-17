<?php
	class Post_model extends CI_Model
	{
		public function tambahPost()
		{
			$data = array(
				'judul' => $this->input->post('judul'),
				'isi' => $this->input->post('isi')
			);
			$this->db->insert('post',$data);
		}

		public function newPost(){
			return $this->db->select("id_post, judul, SUBSTRING(isi, 1, 300) as isi")->order_by('id_post', 'desc')->get('post', 5)->result_array();
		}

		public function getPost()
		{
			return $this->db->select("id_post, judul, SUBSTRING(isi, 1, 300) as isi")->order_by('id_post', 'desc')->get('post')->result_array();
		}

		public function getSearch($limit, $start, $search = null)
		{
			$search = $search;
			return $this->db->select("id_post, judul, SUBSTRING(isi, 1, 300) as isi")->like('judul', $search, 'both')->order_by('id_post', 'desc')->get('post', $limit, $start)->result_array();
		}

		public function getId($id)
		{
			return $this->db->select("id_post, judul, isi")->where("id_post", $id)->get('post')->result_array();
		}

		public function countPosts($search = null){
			return $this->db->like('judul', $search)->from('post')->count_all_results();
		}

		public function countAllPost()
		{
			return $this->db->get('post')->num_rows();
		}

		public function updatePost($id){
      		$data = array(
        		'judul' => $this->input->post('judul'),
        		'isi' => $this->input->post('isi')
      		);

      		$this->db->where('id_post',$id)->update('post', $data);
    	}

    	public function hapusPost($id){
    		$this->db->where('id_post', $id)->delete('post');
    	}

	}
?>