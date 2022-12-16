<?php 
class Movie{
    public $name;
    public $author;
    public $date;

    function _construct( $_name, $_author, $_date){
        $this->name = $_name;
        $this->author = $_author;
        $this->date = $_date;
    }
}
?>