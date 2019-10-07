<?php 


class About extends Controller {
	public function index($nama ='FarhanPraw', $pekerjaan = 'Melawak', $umur = 23)
	{
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = 'About Me';

		$this->view('template/header', $data);
		$this->view('about/index', $data);
		$this->view('template/footers');
	}
	public function page()
	 {
	 	$data['judul'] = 'page';
	 	$this->view('template/header', $data);
	 	$this->view('about/page');
	 	$this->view('template/footers');
	 }
}


 ?>