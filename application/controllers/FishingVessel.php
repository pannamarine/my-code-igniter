<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FishingVessel extends CI_Controller {

    public function index()
    {
        $this->load->model('fishingvessel_model');
        $result = $this->fishingvessel_model->get_all();

        $data['vessels'] = $result;
        $data['title'] = "รายชื่อเรือประมงทั้งหมด";

        $this->load->view('header');
        $this->load->view('fishing-vessel/index', $data);
        $this->load->view('footer');
    }

    public function all()
    {
        echo "Show all vessels...";
    }

    public function new_vessel()
    {
        $this->load->model('Country_model');
        $result = $this->load->country_model->get_all();

        $data['country_list'] = $result;
        $data['title'] = "เพิ่มข้อมูลเรือประมง";

        $this->load->view('header', $data);
        $this->load->view('fishing-vessel/new-ship', $data);
        $this->load->view('footer');
    }

    public function create()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('vesselName', 'vesselName', 'required|max_length[10]', array('required' =>'ช่วยกรอกชื่อเรือด้วยนะ'));

        if($this->form_validation->run() == false)
        {   
            $this->load->model('Country_model');
            $result = $this->load->country_model->get_all();
    
            $data['country_list'] = $result;
            $data['title'] = "เพิ่มข้อมูลเรือประมง";
    
            $this->load->view('header', $data);
            $this->load->view('fishing-vessel/new-ship', $data);
            $this->load->view('footer');
        }
        else
        {
            $this->load_model->('fishingvessel_model');
            $this->fishingvessel_model->save_new_vessel();
            redirect('fishingvessel/'); 
        }

    public function save_new_vesel()
    {
        $data['Name'] = $this->input->post('vesselName');
        $data['Country_ID'] = $this->input->post('country')

        return $this->db->insert('vessel,$data')
    }

    public function new_success()
    {

    }
}

/* End of file FishingVessel.php */

?>