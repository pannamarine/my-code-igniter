<?php
class Country_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database(;)
    }
    public function __get_all()
    {
        $query = $this->db->get('Country');
        return $query-> result_array();
    }
}
?>