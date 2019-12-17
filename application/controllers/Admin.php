<?php

	class Admin extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('Admin_Model');
			$this->load->helper('url');
			$this->load->helper('string');
			$this->load->library('form_validation');
			$this->load->library('session');
		}

		public function index()
		{	
			$this->load->view('templates/header');
			$this->load->view('admin/login');
			$this->load->view('templates/footerlogin');
		}


		public function login()
		{	
			$this->form_validation->set_rules("nama", "Username", 'trim|required');
			$this->form_validation->set_rules("password", "Password", 'trim|required');

			if($this->form_validation->run() == false)
			{
				$this->index();
			}

			else
			{
				$username = $this->input->post('nama');
				$password = $this->input->post('password');
				$user = $this->db->get_where('admin', ['Username' => $username])->row_array();

				if($user)
				{
					if($password == $user['Password'])
					{
						$sesi = array(
							"id" => $user['Id'],
							"nama" => $user['Username'],
							"aktif" => TRUE
						);
						$this->session->set_userdata($sesi);
						redirect('Admin/home');
					}
					else
					{
						redirect('Admin');
					}
				}

				else
				{
					redirect('Admin');
				}
				
			}
		}

		public function home()
		{
			if ($this->session->userdata("aktif")) 
			{
				$data['pelayanan'] = $this->Admin_Model->getAllData(1);
				$data['testi'] = $this->Admin_Model->getAllData(4);
				$data['portfolio'] = $this->Admin_Model->getAllData(5);
				$data['gallery'] = $this->Admin_Model->getAllData(6);
				$this->load->view('templates/header1');
				$this->load->view('templates/navbaradmin');
				$this->load->view('admin/home', $data);
				$this->load->view('templates/footer1');
			}
		}


		public function edit($no)
		{
			if ($this->session->userdata("aktif")) 
			{
				switch ($no) 
				{
					case 1:
						$data['portfolio'] = $this->Admin_Model->getAllData(2);
						$this->load->view('templates/header2');
						$this->load->view('templates/navbaradmin2');
						$this->load->view('admin/edit_portfolio', $data);
						$this->load->view('templates/footer2');
						break;

					case 2:
						$data['gallery'] = $this->Admin_Model->getAllData(3);
						$this->load->view('templates/header2');
						$this->load->view('templates/navbaradmin2');
						$this->load->view('admin/edit_gallery', $data);
						$this->load->view('templates/footer2');
						break;

					case 3:
						$data['testi'] = $this->Admin_Model->getAllData(4);
						$this->load->view('templates/header2');
						$this->load->view('templates/navbaradmin2');
						$this->load->view('admin/edit_testi', $data);
						$this->load->view('templates/footer2');
						break;

					case 4:
						$data['pelayanan'] = $this->Admin_Model->getAllData(1);
						$this->load->view('templates/header2');
						$this->load->view('templates/navbaradmin2');
						$this->load->view('admin/edit_pelayanan', $data);
						$this->load->view('templates/footer2');
						break;

					case 5:
						$data['sepatu'] = $this->Admin_Model->getAllData(9);
						$data['rebana'] = $this->Admin_Model->getAllData(10);
						$data['jam'] = $this->Admin_Model->getAllData(11);
						$this->load->view('templates/header2');
						$this->load->view('templates/navbaradmin2');
						$this->load->view('admin/edit_produk', $data);
						$this->load->view('templates/footer2');
						break;

					case 6:
						$data['kontak'] = $this->Admin_Model->getAllData(7);
						$this->load->view('templates/header2');
						$this->load->view('templates/navbaradmin2');
						$this->load->view('admin/liat_kontak', $data);
						$this->load->view('templates/footer2');
						break;

					case 7:
						$data['about'] = $this->Admin_Model->getAllData(8);
						$this->load->view('templates/header2');
						$this->load->view('templates/navbaradmin2');
						$this->load->view('admin/edit_about', $data);
						$this->load->view('templates/footer2');
						break;
				}
			}
		}


		public function editpelayanan()
		{
			$this->Admin_Model->gantiPelayanan();
			redirect('admin/edit/4');
		}




		public function editportfolio()
		{
			$this->Admin_Model->gantiPortfolio();
			redirect('admin/edit/1');	
		}

		public function tambahportfolio()
		{
			$cek = $this->db->get_where('portfolio', ['Urutan' => $this->input->post('urutan')])->row_array();
			if ($cek) 
			{
				redirect('admin/edit/1');
			}
			$this->Admin_Model->tambahPortfolio();
			redirect('admin/edit/1');	
		}





		public function editgallery()
		{
			$this->Admin_Model->gantiGallery();
			redirect('admin/edit/2');	
		}

		public function tambahgallery()
		{
			$cek = $this->db->get_where('gallery', ['Urutan' => $this->input->post('urutan')])->row_array();
			if ($cek) 
			{
				redirect('admin/edit/2');
			}
			$this->Admin_Model->tambahGallery();
			redirect('admin/edit/2');	
		}




		public function edittesti()
		{
			$this->Admin_Model->gantiTesti();
			redirect('admin/edit/3');	
		}

		public function tambahtesti()
		{
			$this->Admin_Model->tambahTesti();
			redirect('admin/edit/3');	
		}





		public function editabout()
		{
			$this->Admin_Model->gantiAbout();
			redirect('admin/edit/7');	
		}

		public function tambahabout()
		{
			$this->Admin_Model->tambahAbout();
			redirect('admin/edit/7');
		}




		public function editsepatu()
		{
			$this->Admin_Model->gantiSepatu();
			redirect('admin/edit/5');	
		}

		public function tambahsepatu()
		{
			$this->Admin_Model->tambahSepatu();
			redirect('admin/edit/5');
		}




		public function editjam()
		{
			$this->Admin_Model->gantiJam();
			redirect('admin/edit/5');	
		}

		public function tambahjam()
		{
			$this->Admin_Model->tambahJam();
			redirect('admin/edit/5');
		}






		public function editrebana()
		{
			$this->Admin_Model->gantiRebana();
			redirect('admin/edit/5');	
		}

		public function tambahrebana()
		{
			$this->Admin_Model->tambahRebana();
			redirect('admin/edit/5');
		}






		public function hapus($jenis, $id)
		{
			switch ($jenis)
			{
				case 1:
					$this->Admin_Model->hapus(1,$id);
					redirect('admin/edit/1');						
					break;

				case 2:
					$this->Admin_Model->hapus(2,$id);
					redirect('admin/edit/2');						
					break;

				case 3:
					$this->Admin_Model->hapus(3,$id);
					redirect('admin/edit/3');						
					break;

				case 4:
					$this->Admin_Model->hapus(4,$id);
					redirect('admin/edit/7');						
					break;

				case 5:
					$this->Admin_Model->hapus(5,$id);
					redirect('admin/edit/6');						
					break;

				case 6:
					$this->Admin_Model->hapus(6,$id);
					redirect('admin/edit/5');						
					break;

				case 7:
					$this->Admin_Model->hapus(7,$id);
					redirect('admin/edit/5');						
					break;

				case 8:
					$this->Admin_Model->hapus(8,$id);
					redirect('admin/edit/5');						
					break;
			}

		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect('admin');
		}

	}
?>