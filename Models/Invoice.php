<?php

class Invoice
{

    public $id;
    public $total;
    public $delivery;

    function __construct($id, $total, $delivery)
    {
        $this->id       = $id;
        $this->total    = $total;
        $this->delivery = $delivery;

    }

    public static function save($invoice){
        $db=Db::getConnect();
        $insert=$db->prepare('INSERT INTO INVOICES VALUES(NULL,:total,:delivery');
        $insert->bindValue('total',$invoice->total);
        $insert->bindValue('delivery',$invoice->delivery);
        $insert->execute();
    }
}
?>
