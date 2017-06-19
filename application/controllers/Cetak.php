<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cetak_model');
		$this->load->library('dompdf_gen');
		$this->load->helper('file');
	}

	public function index()
	{
		$data['ekstra']=$this->cetak_model->view_row();
		$this->load->view('uas/preview', $data);
	}

	public function cetakPdf()
	{
		$data['ekstra']=$this->cetak_model->view_row();
		$this->load->view('uas/print', $data);
		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();

		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream('laporan.pdf');

		unset($html);
		unset($dompdf);
	}
}
