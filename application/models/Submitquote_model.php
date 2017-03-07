<?php 
date_default_timezone_set('America/New_York');
class Submitquote_model extends CI_Model
{

    public function __construct()
     {
          parent::__construct();
     }

    function submitquote($firstname, $lastname, $email, $organization, $phone, $subject, $message, $QuoteID, $filename0, $filename1, $filename2, $status='under review')
    {
        if ($this->insert($firstname, $lastname, $email, $organization, $phone, $subject, $message, $QuoteID, $filename0, $filename1, $filename2, $status='under review')) {
            return true;
        }
        else {
            return false;
        }

    }

    function insert($firstname, $lastname, $email, $organization, $phone, $subject, $message, $QuoteID, $filename0, $filename1, $filename2, $status='under review') {
        $data = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'organization' => $organization,
            'phone' => $phone,
            'subject' => $subject,
            'created_at' => date('Y-m-j H:i:s'),
            'message' => $message,
            'quoteId' => $QuoteID,
            'filename0' => $filename0,
            'filename1' => $filename1,
            'filename2' => $filename2,
            'status' => $status
        );

        if ($this->db->insert('Quotes', $data)) {
            return true;
        } else {
            return false;
        }
    }

    function loadQuotes(){
        $email = $_SESSION['email'];
        $this->db->select('*');
        $this->db->from('Quotes');
        $this->db->where('email', $email);
        // $this->db->where('status','approved');

        if (!empty($response = $this->db->get())) {
//            if ($response->num_rows() > 0) {
//                $row = $response->result_array();
//                return $row;
//            }
            return $response;
        } 
//        else {
//            return false;
//        }
    }
}

?>