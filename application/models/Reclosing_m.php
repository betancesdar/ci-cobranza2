<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reclosing_m extends CI_Model {
    public function get_paymentsclose() 
    {
        $this->db->select("li.id,c.dni,concat(c.first_name,' ',c.last_name) AS name_cst,l.id AS
         loan_id,li.date,li.num_quota,li.capital_amount");
        $this->db->from('loan_item li');
        $this->db->join('loans l','l.id = li.loan_id','left');
        $this->db->join('customers c','c.id = l.customer_id','left');
        $this->db->where('li.status',1);
        $this->db->order_by('li.date','desc');
       
        return $this->db->get()->result();

    }

    

}