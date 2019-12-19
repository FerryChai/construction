<?php

	class User extends CI_Controller
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
			$data['pelayanan'] = $this->Admin_Model->getAllData(1);
			$data['testi'] = $this->Admin_Model->getAllData(4);
			$data['portfolio'] = $this->Admin_Model->getAllData(5);
			$data['gallery'] = $this->Admin_Model->getAllData(6);
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('user/home', $data);
			$this->load->view('templates/footer');
		}

		public function about()
		{	
			$data['visi'] = $this->Admin_Model->getAllData(12);
			$data['misi'] = $this->Admin_Model->getAllData(13);
			$data['prinsip'] = $this->Admin_Model->getAllData(14);
			$this->load->view('templates/header1');
			$this->load->view('templates/navbar');
			$this->load->view('user/about',$data);
			$this->load->view('templates/footer1');
		}

		public function portfolio()
		{	
			$data['portfolio'] = $this->Admin_Model->getAllData(2);
			$this->load->view('templates/header1');
			$this->load->view('templates/navbar');
			$this->load->view('user/portfolio', $data);
			$this->load->view('templates/footer1');
		}

		public function gallery()
		{
			$data['gallery'] = $this->Admin_Model->getAllData(3);
			$this->load->view('templates/header1');
			$this->load->view('templates/navbar');
			$this->load->view('user/gallery', $data);
			$this->load->view('templates/footer1');
		}

		public function kontak()
		{
			$this->load->view('templates/header1');
			$this->load->view('templates/navbar');
			$this->load->view('user/kontak');
			$this->load->view('templates/footer1');
		}

		public function produk()
		{
			$data['rebana'] = $this->Admin_Model->getAllData(10);
			$data['sepatu'] = $this->Admin_Model->getAllData(9);
			$data['jam'] = $this->Admin_Model->getAllData(11);

			$this->load->view('templates/header1');
			$this->load->view('templates/navbar');
			$this->load->view('user/produk', $data);
			$this->load->view('templates/footer1');
		}

		public function lihatproduk($no,$id)
		{
			switch ($no) 
			{
				case 1:
					$data['no'] = 1;
					$data['jenis'] = "rebana";
					$data['list'] = $this->Admin_Model->getAllData(10);
					$data['produk'] = $this->Admin_Model->getAllData(15,$id);
					$this->load->view('templates/header3');
					$this->load->view('templates/navbar2');
					$this->load->view('user/produkdetails', $data);
					$this->load->view('templates/footer3');
					break;

				case 2:
					$data['no'] = 2;
					$data['jenis'] = "sepatu";
					$data['list'] = $this->Admin_Model->getAllData(9);
					$data['produk'] = $this->Admin_Model->getAllData(16,$id);
					$this->load->view('templates/header3');
					$this->load->view('templates/navbar2');
					$this->load->view('user/produkdetails', $data);
					$this->load->view('templates/footer3');
					break;

				case 3:
					$data['no'] = 3;
					$data['jenis'] = "jam";
					$data['list'] = $this->Admin_Model->getAllData(11);
					$data['produk'] = $this->Admin_Model->getAllData(17,$id);
					$this->load->view('templates/header3');
					$this->load->view('templates/navbar2');
					$this->load->view('user/produkdetails', $data);
					$this->load->view('templates/footer3');
					break;
			}
			
		}


		public function kirim()
		{

	        // Load PHPMailer library
	        $this->load->library('phpmailer_lib');
	        
	        $nama = $this->input->post('nama');
	        $emailclient = $this->input->post('email');
	        $subjek = $this->input->post('subjek');
	        $keterangan = $this->input->post('keterangan');



	        // PHPMailer object
	        $mail = $this->phpmailer_lib->load();
	        
	        // SMTP configuration
	        $mail->isSMTP();
	        $mail->Host     = 'smtp.gmail.com';
	        $mail->SMTPAuth = true;
	        $mail->Username = 'karyaintimegah@gmail.com';
	        $mail->Password = 'intimegah1234';
	        $mail->SMTPSecure = 'tls';
	        $mail->Port     = 587;
	        
	        $mail->setFrom($emailclient,$nama);
	        $mail->addReplyTo($emailclient,$subjek);
	        
	        // Add a recipient
	        $mail->addAddress('Herusubiat@gmail');
	        
	        // Add cc or bcc 
	        // $mail->addCC('cc@example.com');
	        // $mail->addBCC('bcc@example.com');
	        
	        // Email subject
	        $mail->Subject = $subjek;
	        
	        // Set email format to HTML
	        $mail->isHTML(true);
	        
	        // Email body content
	        $mailContent = "
	        <h1>".$subjek."</h1>	        
	        <p>".$keterangan."</p>
	        ";
	        $mail->Body = $mailContent;
	        
	        // Send email
	        if(!$mail->send()){
	            echo 'Message could not be sent.';
	            echo 'Mailer Error: ' . $mail->ErrorInfo;
	        }else{
	        	$this->Admin_Model->tambahKontak();
	            $this->kontak();
	        }
	    }







	}
?>