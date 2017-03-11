<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Custom Formval Class
 */
class Custom_formval {
    
    public function __construct() {
//        echo "Custom_formval library!";
    }
    
    public function formval_email($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            echo "formval_email";
            return false;
        }
        return true;
    }
}