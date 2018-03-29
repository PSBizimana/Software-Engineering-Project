<?php
/* 
 * Generated by CRUDigniter v3.0 Beta 
 * www.crudigniter.com
 */
 
class Disease_category_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get disease_category by disease_category_code
     */
    function get_disease_category($disease_category_code)
    {
        $disease_category = $this->db->query("
            SELECT
                *

            FROM
                `disease_category`

            WHERE
                `disease_category_code` = ?
        ",array($disease_category_code))->row_array();

        return $disease_category;
    }
    
    /*
     * Get all disease_category
     */
    function get_all_disease_category()
    {
        $disease_category = $this->db->query("
            SELECT
                *

            FROM
                `disease_category`

            WHERE
                1 = 1
        ")->result_array();

        return $disease_category;
    }
    
    /*
     * function to add new disease_category
     */
    function add_disease_category($params)
    {
        $this->db->insert('disease_category',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update disease_category
     */
    function update_disease_category($disease_category_code,$params)
    {
        $this->db->where('disease_category_code',$disease_category_code);
        $response = $this->db->update('disease_category',$params);
        if($response)
        {
            return "disease_category updated successfully";
        }
        else
        {
            return "Error occuring while updating disease_category";
        }
    }
    
    /*
     * function to delete disease_category
     */
    function delete_disease_category($disease_category_code)
    {
        $response = $this->db->delete('disease_category',array('disease_category_code'=>$disease_category_code));
        if($response)
        {
            return "disease_category deleted successfully";
        }
        else
        {
            return "Error occuring while deleting disease_category";
        }
    }
}