<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Visiting_patron extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Visiting_patron_model');
    } 

    /*
     * Listing of visiting_patron
     */
    function index()
    {
        $data['visiting_patron'] = $this->Visiting_patron_model->get_all_visiting_patron();

        $data['_view'] = 'visiting_patron/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new visiting_patron
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('patron_first_name','Patron First Name','required|max_length[30]');
		$this->form_validation->set_rules('patron_last_name','Patron Last Name','required|max_length[30]');
		$this->form_validation->set_rules('patron_middle_initial','Patron Middle Initial','required|max_length[1]');
		$this->form_validation->set_rules('patron_dob','Patron Dob','required');
		$this->form_validation->set_rules('patron_place_of_birth','Patron Place Of Birth','required|max_length[30]');
		$this->form_validation->set_rules('patron_street_address','Patron Street Address','required|max_length[60]');
		$this->form_validation->set_rules('patron_city','Patron City','required|max_length[30]');
		$this->form_validation->set_rules('patron_province_state_code','Patron Province State Code','required|integer');
		$this->form_validation->set_rules('patron_telephone','Patron Telephone','required|integer');
		$this->form_validation->set_rules('patron_email','Patron Email','required|max_length[30]|valid_email');
		$this->form_validation->set_rules('patron_primary_physician_code','Patron Primary Physician Code','required|integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'patron_first_name' => $this->input->post('patron_first_name'),
				'patron_last_name' => $this->input->post('patron_last_name'),
				'patron_middle_initial' => $this->input->post('patron_middle_initial'),
				'patron_dob' => $this->input->post('patron_dob'),
				'patron_place_of_birth' => $this->input->post('patron_place_of_birth'),
				'patron_street_address' => $this->input->post('patron_street_address'),
				'patron_city' => $this->input->post('patron_city'),
				'patron_province_state_code' => $this->input->post('patron_province_state_code'),
				'patron_telephone' => $this->input->post('patron_telephone'),
				'patron_email' => $this->input->post('patron_email'),
				'patron_primary_physician_code' => $this->input->post('patron_primary_physician_code'),
            );
            
            $visiting_patron_id = $this->Visiting_patron_model->add_visiting_patron($params);
            redirect('visiting_patron/index');
        }
        else
        {            
            $data['_view'] = 'visiting_patron/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a visiting_patron
     */
    function edit($patron_code)
    {   
        // check if the visiting_patron exists before trying to edit it
        $data['visiting_patron'] = $this->Visiting_patron_model->get_visiting_patron($patron_code);
        
        if(isset($data['visiting_patron']['patron_code']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('patron_first_name','Patron First Name','required|max_length[30]');
			$this->form_validation->set_rules('patron_last_name','Patron Last Name','required|max_length[30]');
			$this->form_validation->set_rules('patron_middle_initial','Patron Middle Initial','required|max_length[1]');
			$this->form_validation->set_rules('patron_dob','Patron Dob','required');
			$this->form_validation->set_rules('patron_place_of_birth','Patron Place Of Birth','required|max_length[30]');
			$this->form_validation->set_rules('patron_street_address','Patron Street Address','required|max_length[60]');
			$this->form_validation->set_rules('patron_city','Patron City','required|max_length[30]');
			$this->form_validation->set_rules('patron_province_state_code','Patron Province State Code','required|integer');
			$this->form_validation->set_rules('patron_telephone','Patron Telephone','required|integer');
			$this->form_validation->set_rules('patron_email','Patron Email','required|max_length[30]|valid_email');
			$this->form_validation->set_rules('patron_primary_physician_code','Patron Primary Physician Code','required|integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'patron_first_name' => $this->input->post('patron_first_name'),
					'patron_last_name' => $this->input->post('patron_last_name'),
					'patron_middle_initial' => $this->input->post('patron_middle_initial'),
					'patron_dob' => $this->input->post('patron_dob'),
					'patron_place_of_birth' => $this->input->post('patron_place_of_birth'),
					'patron_street_address' => $this->input->post('patron_street_address'),
					'patron_city' => $this->input->post('patron_city'),
					'patron_province_state_code' => $this->input->post('patron_province_state_code'),
					'patron_telephone' => $this->input->post('patron_telephone'),
					'patron_email' => $this->input->post('patron_email'),
					'patron_primary_physician_code' => $this->input->post('patron_primary_physician_code'),
                );

                $this->Visiting_patron_model->update_visiting_patron($patron_code,$params);            
                redirect('visiting_patron/index');
            }
            else
            {
                $data['_view'] = 'visiting_patron/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The visiting_patron you are trying to edit does not exist.');
    } 

    /*
     * Deleting visiting_patron
     */
    function remove($patron_code)
    {
        $visiting_patron = $this->Visiting_patron_model->get_visiting_patron($patron_code);

        // check if the visiting_patron exists before trying to delete it
        if(isset($visiting_patron['patron_code']))
        {
            $this->Visiting_patron_model->delete_visiting_patron($patron_code);
            redirect('visiting_patron/index');
        }
        else
            show_error('The visiting_patron you are trying to delete does not exist.');
    }
    
}
