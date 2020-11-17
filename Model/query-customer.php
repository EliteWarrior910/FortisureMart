<?php
    class Customer{
        public function __construct($DB){
            $this->conn = $DB;
        }

        public function addCustomer($Data){
            $FirstName = $Data['firstName'];
            $LastName = $Data['lastName'];
            $Address = $Data['address'];
            $City = $Data['city'];
            $State = $Data['state'];
            $PostalCode = $Data['postalCode'];
            $Country = $Data['country'];
            $Email = $Data['email'];
            $Phone = $Data['phone'];
            $Comments = $Data['comments'];


            $Query = "Insert INTO customers(contactLastName, contactFirstName, phone, addressline1, city, state, postalCode, country, email, comments)
            VALUES('$LastName', '$FirstName', '$Phone', '$Address', '$City', '$State', '$PostalCode', '$Country', '$Email', '$Comments');";

            $Results = $this->conn->prepare($Query);

            $Results->execute();

            return $this->conn->lastInsertId();
        }
    }
?>