<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $this->load->model('Db_ci3');
    }

	public function index()
	{
		$recordjilbab = $this->Db_ci3->getDataJilbab();
        $DATA = array('data_jilbab' => $recordjilbab);
        $this->load->view('home', $DATA);
	}

	public function formInput()
    {
        $this->load->view('create');	
	}

	public function formEdit($code)
    {
        $recordjilbab = $this->Db_ci3->getDataJilbabDetail($code);	
        $DATA = array('data_jilbab' =>$recordjilbab);
        $this->load->view('edit', $DATA);
    }

	public function AksiCreate()
    {
        $code = $this->input->post('code');
        $name = $this->input->post('name');
        $colour = $this->input->post('colour');

        $DataCreate=array(
            'code' => $code,
            'name' => $name,
            'colour' => $colour,
        );
        echo "Ini tempat proses data";
        $this->Db_ci3->InsertDatajilbab($DataCreate);
        redirect(base_url('index.php/C_home/AksiCreate'));
	}

    public function AksiEdit(){
        $code = $this->input->post('code');
        $name = $this->input->post('name');
        $colour = $this->input->post('colour');

        $DataUpdate = array(
            'name' => $name,
            'colour' => $colour,
        );
    
    $this->Db_ci3->EditDataJilbab($DataUpdate, $code);
    redirect (base_url());
    }

    public function AksiDelete($code) {
        $this->Db_ci3->DeleteDataJilbab($code);
        redirect(base_url());
    }


}

