<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		// cek sesi login
		if ($this->session->userdata('status') != "login") {
			redirect(base_url().'welcome?pesan=belumlogin');
		}
		$this->load->model('data_karyawan');
		$this->load->model('data_pelanggan');
		$this->load->model('data_transaksi');
		$this->load->model('data_pengeluaran');
	}

	public function index()
	{
		$user['username'] = $this->session->userdata('username');

		$total_pendapatan = $this->data_transaksi->total_income_year();
		$total_pengeluaran = $this->data_pengeluaran->total_spend_year();
		$total_keuntungan = $total_pendapatan - $total_pengeluaran;
		$data = array(
					'n_karyawan' => number_format($this->data_karyawan->count_rows()),
					'n_pelanggan' => number_format($this->data_pelanggan->count_rows()),
					'n_transaksi' => number_format($this->data_transaksi->count_rows()),
					'n_transaksi_aktif' => number_format($this->data_transaksi->count_active()),
					'total_pendapatan' => ($total_pendapatan > 0) ? number_format($total_pendapatan, 2) : '0.00' ,
					'total_pengeluaran' => ($total_pengeluaran > 0) ? number_format($total_pengeluaran, 2) : '0.00',
					'total_keuntungan' => is_numeric($total_keuntungan)? number_format($total_keuntungan, 2) : "0.00"
				);

		$this->load->view('header');
		$this->load->view('navigation', $user);
		$this->load->view('dashboard', $data);
		$this->load->view('footer');
		$this->load->view('source');
	}
}
