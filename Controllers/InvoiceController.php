<?php

    class InvoiceController
    {
        public function __construct(){}

        public function store(){

            $invoice = new Invoice(null, $_POST['total'], "Pickup");
            Invoice::save($invoice);
            // add response
        }

    }


?>
