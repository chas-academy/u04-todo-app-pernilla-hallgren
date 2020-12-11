<?php

// create a user validator class to handle validation
// constructor which takes in POST data from form
// check required "field to check" are present in the data
// create methods to validate individual fields
// -- a method to validate a username
// -- a method to validate an email
// return an error array once all checks are done

class UserValidator {


    private $data;  // this will hold the POST data
    private $errors = []; // 
    private static $fields = ['username', 'email']; // we want to check if the fields är ifyllda

    public function __construct($post_data) {
        $this->data = $post_data; 
    }
    // validera the form to see if we have values for username och email
    public function validateForm() {
        foreach(self::$fields as $field) { 
        // self cause its static
            if(array_key_exists($fields, $this->data)) {// här kollar vi om datan fiins i fields
                trigger_error("$field is not present in data");
                return;
            }
        }   
        $this-> validateUsername();
        $this-> validateEmail();     
    }

    private function validateUsername(){
        $val = trim($this->data['username']); // trim trimmar any kind of whitespace in the username input
        if(empty($val)) {
            $this->addError('username', 'username cannot be empty'); // if the field is empty
        } else {
            if(preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)) { //om inte empty gör följande.. här används ett regular expression(if a certain string is matching a certain pattern) 
                $this->addError('username', 'username must be 6-12 chars & alphanumeric'); 
            }
        }
    }

    private function validateEmail() {

    }

    private function addError($key, $val) {
        $this->errors[$key] = $val; 
    }

}




?>