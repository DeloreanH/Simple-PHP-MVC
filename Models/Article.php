<?php

class Article
{

    public $id;
    public $name;
    public $price;
    public $description;
    public $image;


    function __construct($id, $name, $price, $description, $image )
    {
        $this->id           =  $id;
        $this->name         =  $name;
        $this->price        =  $price;
        $this->description  =  $description;
        $this->image        =  $image;
    }

    public static function all(){
        $db=Db::getConnect();
        $sql=$db->query('SELECT * FROM items');

        foreach ($sql->fetchAll() as $article) {
            $itemList[]= new Article($article['id'],$article['name'], $article['price'],$article['description'],$article['img']);
        }
        return $itemList;
    }
}
?>
