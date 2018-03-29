<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Country extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Country_model');
    } 

    /*
     * Listing of countries
     */
    function index()
    {
        $data['countries'] = $this->Country_model->get_all_countries();
		$data['authLevel'] = 1;
        $this->load->view('templates/loginAuth', $data);
        $data['_view'] = 'country/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new country
     */
    function add()
    {   
        $this->load->library('form_validation');
		$data['authLevel'] = 1;
        $this->load->view('templates/loginAuth', $data);
		$this->form_validation->set_rules('country_name','Country Name','required|max_length[30]');
		$this->form_validation->set_rules('country_abbreviation','Country Abbreviation','required|max_length[5]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'country_name' => $this->input->post('country_name'),
				'country_abbreviation' => $this->input->post('country_abbreviation'),
            );
            
            $country_id = $this->Country_model->add_country($params);
            redirect('country/index');
        }
        else
        {            
            $data['_view'] = 'country/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a country
     */
    function edit($country_code)
    {   
        // check if the country exists before trying to edit it
        $data['country'] = $this->Country_model->get_country($country_code);
        $data['authLevel'] = 1;
        $this->load->view('templates/loginAuth', $data);
        if(isset($data['country']['country_code']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('country_name','Country Name','required|max_length[30]');
			$this->form_validation->set_rules('country_abbreviation','Country Abbreviation','required|max_length[5]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'country_name' => $this->input->post('country_name'),
					'country_abbreviation' => $this->input->post('country_abbreviation'),
                );

                $this->Country_model->update_country($country_code,$params);            
                redirect('country/index');
            }
            else
            {
                $data['_view'] = 'country/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The country you are trying to edit does not exist.');
    } 

    /*
     * Deleting country
     */
    function remove($country_code)
    {
        $country = $this->Country_model->get_country($country_code);
		$data['authLevel'] = 1;
        $this->load->view('templates/loginAuth', $data);
        // check if the country exists before trying to delete it
        if(isset($country['country_code']))
        {
            $this->Country_model->delete_country($country_code);
            redirect('country/index');
        }
        else
            show_error('The country you are trying to delete does not exist.');
    }
    
}