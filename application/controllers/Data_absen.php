<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_absen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('welcome_message',$output);
	}

	public function data_absen(){
		$this->load->model('Absen_model');
        $this->Absen_model->get_data_absen();
        $crud = new grocery_CRUD();
		$crud->set_table('data_absen');
		$crud->unset_operations();
		$output = $crud->render();

		//Config Halaman
		if (!$this->Absen_model->get_data_absen()) {
			$output->pesan = '<div class="alert alert-danger alert-dismissable">
        				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        				<h4><i class="icon fa fa-ban"></i> Alert!</h4>
        				Anda tidak terhubung dengan mesin !
        			</div>';
		} elseif($this->Absen_model->get_data_absen()) {
			$output->pesan = '<div class="alert alert-success alert-dismissable">
        				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        				<h4><i class="icon fa fa-check"></i> Success !</h4>
        				Anda terhubung dengan mesin.
        			</div>';
		}
		
        	/*$output->pesan = '<div class="alert alert-danger alert-dismissable">
        				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        				<h4><i class="icon fa fa-ban"></i> Alert!</h4>
        				Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
        			</div>';
        }*/
		$output->judul_besar = 'Presensi';
		$output->judul_kecil = 'Data Absen';
		$output->m_data_absen = TRUE;

		$this->_example_output($output);
    }

	public function pengaturan(){
        $crud = new grocery_CRUD();
		$crud->set_table('pengaturan');
		$crud->unset_add();
		$crud->unset_delete();
		$crud->unset_read();
		$output = $crud->render();

		//Config Halaman
		$output->judul_besar = 'Pengaturan';
		$output->judul_kecil = 'Manage Pengaturan';
		$output->m_pengaturan = TRUE;

		// echo $this->Absensi_model->get_status_mesin();
        //$this->Absensi_model->get_data_absen();

		$this->_example_output($output);
    }

}