<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of ContactModel
 *
 *
 */
class ContactModel extends CI_Model {

    public function insert_user($user_data)
    {
        return $this->db->insert('contact', $user_data);
    }

    public function fetch_all_users()
    {
        $query =  $this->db->get('contact');
        foreach ($query->result() as $row)
        {
            $user_data[]=[
                'contact_name'     =>$row->contact_name,
                'contact_address'  =>$row->contact_address,
                'contact_phone'    =>$row->contact_phone
            ];
        }
        return $user_data;
    }
}   