<?php

	class Admin_Model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('date');
		}


		public function getAllData($x,$y=" ")
		{
			switch($x)
			{
				case 1:
					return $this->db->get('pelayanan')->result_array();
					break;

				case 2:
					return $this->db->get('portfolio')->result_array();
					break;

				case 3:
					return $this->db->get('gallery')->result_array();
					break;

				case 4:
					return $this->db->get('testimoni')->result_array();
					break;

				case 5:
					$this->db->order_by('Urutan', 'ASC');
					return $this->db->get_where('portfolio',["Tampil" => "Y"])->result_array();
					break;

				case 6:
					$this->db->order_by('Urutan', 'ASC');
					return $this->db->get_where('gallery',["Tampil" => "Y"])->result_array();
					break;

				case 7:
					return $this->db->get('kontak')->result_array();
					break;

				case 8:
					$this->db->order_by('Jenis', 'DESC');
					return $this->db->get('about')->result_array();
					break;

				case 9:
					$this->db->order_by('Recommended', 'DESC');
					return $this->db->get('sepatu')->result_array();
					break;

				case 10:
					return $this->db->get('rebana')->result_array();
					break;

				case 11:
					$this->db->order_by('Recommended', 'DESC');
					return $this->db->get('jam')->result_array();
					break;

				case 12:
					return $this->db->get_where('about',['Jenis' => "visi"])->row_array();
					break;

				case 13:
					return $this->db->get_where('about',['Jenis' => "misi"])->result_array();
					break;

				case 14:
					return $this->db->get_where('about',['Jenis' => "prinsip"])->result_array();
					break;

				case 15:
					return $this->db->get_where('rebana',['Id' => $y])->row_array();
					break;

				case 16:
					return $this->db->get_where('sepatu',['Id' => $y])->row_array();
					break;

				case 17:
					return $this->db->get_where('jam',['Id' => $y])->row_array();
					break;

			}
		}

		private function uploadPortfolio()
		{
		    $config['upload_path']          = 'img/portofolio/';
		    $config['allowed_types']        = 'gif|jpg|png|jpeg';
		    $config['file_name']            = $this->input->post('fotoportfolio');
		    $config['overwrite']			= true;
		    $config['max_size']             = 1024; // 1MB

		    $this->load->library('upload', $config);
		    $this->upload->initialize($config);

		    if ($this->upload->do_upload('fotoportfolio')) 
		    {
		        return $this->upload->data("file_name");
		    }
		}

		private function uploadGallery()
		{
		    $config['upload_path']          = 'img/gallery/';
		    $config['allowed_types']        = 'gif|jpg|png|jpeg';
		    $config['file_name']            = $this->input->post('fotogallery');
		    $config['overwrite']			= true;
		    $config['max_size']             = 1024; // 1MB

		    $this->load->library('upload', $config);
		    $this->upload->initialize($config);

		    if ($this->upload->do_upload('fotogallery')) 
		    {
		        return $this->upload->data("file_name");
		    }
		}

		private function uploadTesti()
		{
		    $config['upload_path']          = 'img/testi/';
		    $config['allowed_types']        = 'gif|jpg|png|jpeg';
		    $config['file_name']            = $this->input->post('fototesti');
		    $config['overwrite']			= true;
		    $config['max_size']             = 1024; // 1MB

		    $this->load->library('upload', $config);
		    $this->upload->initialize($config);

		    if ($this->upload->do_upload('fototesti')) 
		    {
		        return $this->upload->data("file_name");
		    }
		}

		private function uploadSepatu()
		{
		    $config['upload_path']          = 'img/produk/';
		    $config['allowed_types']        = 'gif|jpg|png|jpeg';
		    $config['file_name']            = $this->input->post('fotosepatu');
		    $config['overwrite']			= true;
		    $config['max_size']             = 1024; // 1MB

		    $this->load->library('upload', $config);
		    $this->upload->initialize($config);

		    if ($this->upload->do_upload('fotosepatu')) 
		    {
		        return $this->upload->data("file_name");
		    }
		}


		private function uploadJam()
		{
		    $config['upload_path']          = 'img/produk/';
		    $config['allowed_types']        = 'gif|jpg|png|jpeg';
		    $config['file_name']            = $this->input->post('fotojam');
		    $config['overwrite']			= true;
		    $config['max_size']             = 1024; // 1MB

		    $this->load->library('upload', $config);
		    $this->upload->initialize($config);

		    if ($this->upload->do_upload('fotojam')) 
		    {
		        return $this->upload->data("file_name");
		    }
		}


		private function uploadRebana($no)
		{
		    $config['upload_path']          = 'img/produk/';
		    $config['allowed_types']        = 'gif|jpg|png|jpeg';
		    $config['file_name']            = $this->input->post('fotorebana'.$no);
		    $config['overwrite']			= true;
		    $config['max_size']             = 1024; // 1MB

		    $this->load->library('upload', $config);
		    $this->upload->initialize($config);

		    if ($this->upload->do_upload('fotorebana'.$no)) 
		    {
		        return $this->upload->data("file_name");
		    }
		}

		public function gantiPelayanan()
		{
			$data = [
				"Judul" => $this->input->post('judul'),
				"Keterangan" => $this->input->post('keterangan')
			];

			$this->db->where('Id', $this->input->post('idpelayanan'));
			$this->db->update('pelayanan', $data);
		}


		public function gantiPortfolio()
		{
			if($this->input->post('status') == "N")
			{

				$data = [
					"Jenis_Rumah" => $this->input->post('jenisRumah'),
					"Alamat" => $this->input->post('alamat'),
					"Ukuran" => $this->input->post('ukuran'),
					"Kamar" => $this->input->post('kamar'),
					"Kamar_Mandi" => $this->input->post('kamarmandi'),
					"Keterangan" => $this->input->post('keterangan'),
					"Urutan" => NULL,
					"Tampil" => $this->input->post('status'),
				];

				$this->db->where('Id', $this->input->post('idportfolio'));
				$this->db->update('portfolio', $data);
			}

			else
			{

				$cek = $this->db->get_where('portfolio', ['Urutan' => $this->input->post('urutan')])->row_array();
				$temp = $this->db->get_where('portfolio', ['Id' => $this->input->post('idportfolio')])->row_array();
				if ($cek['Urutan'] != $temp['Urutan']) 
				{
					$data0 =  [
						"Urutan" => 0
					];

					$this->db->where('Id', $cek['Id']);
					$this->db->update('portfolio', $data0);

					$ganti = [
						"Urutan" => $temp['Urutan']
					];

					$data = [
						"Jenis_Rumah" => $this->input->post('jenisRumah'),
						"Alamat" => $this->input->post('alamat'),
						"Ukuran" => $this->input->post('ukuran'),
						"Kamar" => $this->input->post('kamar'),
						"Kamar_Mandi" => $this->input->post('kamarmandi'),
						"Keterangan" => $this->input->post('keterangan'),
						"Urutan" => $this->input->post('urutan'),
						"Tampil" => $this->input->post('status'),
					];

					$this->db->where('Id', $this->input->post('idportfolio'));
					$this->db->update('portfolio', $data);


					$this->db->where('Id', $cek['Id']);
					$this->db->update('portfolio', $ganti);				
					
				}

				else
				{
					$data = [
						"Jenis_Rumah" => $this->input->post('jenisRumah'),
						"Alamat" => $this->input->post('alamat'),
						"Ukuran" => $this->input->post('ukuran'),
						"Kamar" => $this->input->post('kamar'),
						"Kamar_Mandi" => $this->input->post('kamarmandi'),
						"Keterangan" => $this->input->post('keterangan'),
						"Urutan" => $this->input->post('urutan'),
						"Tampil" => $this->input->post('status'),
					];

					$this->db->where('Id', $this->input->post('idportfolio'));
					$this->db->update('portfolio', $data);
				}
			}
		}


		public function gantiGallery()
		{
			if ($this->input->post("status") == "N") 
			{

				$data = [
					"Keterangan" => $this->input->post('keterangan'),
					"Urutan" => NULL,
					"Tampil" => $this->input->post('status'),
				];

				$this->db->where('Id', $this->input->post('idgallery'));
				$this->db->update('gallery', $data);
				
			}

			else
			{
				$cek = $this->db->get_where('gallery', ['Urutan' => $this->input->post('urutan')])->row_array();
				$temp = $this->db->get_where('gallery', ['Id' => $this->input->post('idgallery')])->row_array();
				if ($cek['Urutan'] != $temp['Urutan']) 
				{
					$data0 =  [
						"Urutan" => 0
					];
					$this->db->where('Id', $cek['Id']);
					$this->db->update('gallery', $data0);

					$temp = $this->db->get_where('gallery', ['Id' => $this->input->post('idgallery')])->row_array();
					$ganti = [
						"Urutan" => $temp['Urutan']
					];

					$data = [
						"Keterangan" => $this->input->post('keterangan'),
						"Urutan" => $this->input->post('urutan'),
						"Tampil" => $this->input->post('status'),
					];

					$this->db->where('Id', $this->input->post('idgallery'));
					$this->db->update('gallery', $data);

					$this->db->where('Id', $cek['Id']);
					$this->db->update('gallery', $ganti);				
					
				}

				else
				{
					$data = [
						"Keterangan" => $this->input->post('keterangan'),
						"Urutan" => $this->input->post('urutan'),
						"Tampil" => $this->input->post('status'),
					];

					$this->db->where('Id', $this->input->post('idgallery'));
					$this->db->update('gallery', $data);
				}
			}
		}



		public function gantiTesti()
		{
			$data = [
				"Nama" => $this->input->post('nama'),
				"Keterangan" => $this->input->post('keterangan'),
			];

			$this->db->where('Id', $this->input->post('idtesti'));
			$this->db->update('testimoni', $data);
		}


		public function gantiAbout()
		{
			if ($this->input->post('jenis') != "prinsip") 
			{
				$data = [
					"Judul" => NULL,
					"Keterangan" => $this->input->post('keterangan'),
				];

				$this->db->where('Id', $this->input->post('idabout'));
				$this->db->update('about', $data);
			}
			else
			{
				$data = [
					"Judul" => $this->input->post('judul'),
					"Keterangan" => $this->input->post('keterangan'),
				];

				$this->db->where('Id', $this->input->post('idabout'));
				$this->db->update('about', $data);

			}		
			
		}

		public function gantiSepatu()
		{
			$data = [
				"Nama" => $this->input->post('nama'),
				"Keterangan" => $this->input->post('keterangan'),
				"Recommended" => $this->input->post('recommended'),
			];

			$this->db->where('Id', $this->input->post('idsepatu'));
			$this->db->update('sepatu', $data);
		}


		public function gantiJam()
		{
			$data = [
				"Nama" => $this->input->post('nama'),
				"Keterangan" => $this->input->post('keterangan'),
				"Recommended" => $this->input->post('recommended'),
			];

			$this->db->where('Id', $this->input->post('idjam'));
			$this->db->update('jam', $data);
		}


		public function gantiRebana()
		{
			$data = [
				"Nama_Barang" => $this->input->post('nama'),
				"Keterangan" => $this->input->post('keterangan'),
			];

			$this->db->where('Id', $this->input->post('idrebana'));
			$this->db->update('rebana', $data);
		}






		public function tambahPortfolio()
		{
			if($this->input->post("status") == "N")
			{
				$data = [
					"Jenis_Rumah" => $this->input->post('jenisRumah'),
					"Alamat" => $this->input->post('alamat'),
					"Ukuran" => $this->input->post('ukuran'),
					"Kamar" => $this->input->post('kamar'),
					"Kamar_Mandi" => $this->input->post('kamarmandi'),
					"Keterangan" => $this->input->post('keterangan'),
					"Urutan" => NULL,
					"Tampil" => $this->input->post('status'),
					"Gambar" => $this->uploadPortfolio(),
				];

				$this->db->insert('portfolio',$data);

			}
			else
			{
				$data = [
					"Jenis_Rumah" => $this->input->post('jenisRumah'),
					"Alamat" => $this->input->post('alamat'),
					"Ukuran" => $this->input->post('ukuran'),
					"Kamar" => $this->input->post('kamar'),
					"Kamar_Mandi" => $this->input->post('kamarmandi'),
					"Keterangan" => $this->input->post('keterangan'),
					"Urutan" => $this->input->post('urutan'),
					"Tampil" => $this->input->post('status'),
					"Gambar" => $this->uploadPortfolio(),
				];

				$this->db->insert('portfolio',$data);
			}
		}




		public function tambahTesti()
		{
			$data = [
				"Nama" => $this->input->post('nama'),
				"Keterangan" => $this->input->post('keterangan'),
				"Gambar" => $this->uploadTesti(),
			];

			$this->db->insert('testimoni',$data);
		}



		public function tambahGallery()
		{
			if ($this->input->post('status') == "N") 
			{
				$data = [
					"Nama_Gallery" => $this->uploadGallery(),
					"Keterangan" => $this->input->post('keterangan'),
					"Urutan" => NULL,
					"Tampil" => $this->input->post('status'),

				];

				$this->db->insert('gallery',$data);
			}
			else
			{
				$data = [
					"Nama_Gallery" => $this->uploadGallery(),
					"Keterangan" => $this->input->post('keterangan'),
					"Urutan" => $this->input->post('urutan'),
					"Tampil" => $this->input->post('status'),

				];

				$this->db->insert('gallery',$data);
			}
		}
 


		public function tambahAbout()
		{
				$data = [
					"Jenis" => $this->input->post('jenis'),
					"Judul" => NULL,
					"Keterangan" => $this->input->post('keterangan'),
				];

				$this->db->insert('about',$data);
		}



		public function tambahKontak()
		{
				$data = [
					"Nama" => $this->input->post('nama'),
					"Email" => $this->input->post('email'),
					"Subjek" => $this->input->post('subjek'),
					"Keterangan" => $this->input->post('keterangan'),
					"Tanggal" => date('d-m-Y'),

				];

				$this->db->insert('kontak',$data);
		}




		public function tambahSepatu()
		{
				$data = [
					"Nama" => $this->input->post('nama'),
					"Keterangan" => $this->input->post('keterangan'),
					"Recommended" => $this->input->post('recommended'),
					"Gambar" => $this->uploadSepatu(),

				];

				$this->db->insert('sepatu',$data);
		}	


		public function tambahRebana()
		{
				$data = [
					"Nama_Barang" => $this->input->post('nama'),
					"Keterangan" => $this->input->post('keterangan'),
					"Gambar_1" => $this->uploadRebana(1),
					"Gambar_2" => $this->uploadRebana(2),
					"Gambar_3" => $this->uploadRebana(3),
					"Gambar_4" => $this->uploadRebana(4),
					"Gambar_5" => $this->uploadRebana(5),
					"Gambar_6" => $this->uploadRebana(6),
					"Gambar_7" => $this->uploadRebana(7),

				];

				$this->db->insert('rebana',$data);
		}


		public function tambahJam()
		{
				$data = [
					"Nama" => $this->input->post('nama'),
					"Keterangan" => $this->input->post('keterangan'),
					"Recommended" => $this->input->post('recommended'),
					"Gambar" => $this->uploadJam(),

				];

				$this->db->insert('jam',$data);
		}


		public function hapus($tipe, $id)
		{
			switch ($tipe)
			{
				case 1:
					$this->db->delete('portfolio',['Id' => $id]);			
					break;

				case 2:
					$this->db->delete('gallery',['Id' => $id]);			
					break;

				case 3:
					$this->db->delete('testimoni',['Id' => $id]);			
					break;

				case 4:
					$this->db->delete('about',['Id' => $id]);			
					break;

				case 5:
					$this->db->delete('kontak',['Id' => $id]);			
					break;

				case 6:
					$this->db->delete('sepatu',['Id' => $id]);			
					break;

				case 7:
					$this->db->delete('rebana',['Id' => $id]);			
					break;

				case 8:
					$this->db->delete('jam',['Id' => $id]);			
					break;
			}

		}
	}
?>