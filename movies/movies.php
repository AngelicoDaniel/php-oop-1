<?php 
class Movie {
    public $title;
    public $author;
    public $date;

    function __construct( $_title, $_author, $_date){
        $this->title = $_title;
        $this->author = $_author;
        $this->date = $_date;
    }

    public function getMovie($_title, $_author, $_date){
        return $this->title;
        return $this->author;
        return $this->date;
    }
    public function numeric(){

        if (is_numeric($this->date )) {
            return "<h2>is numeric!</h2>";
        }   else {
            return "<h2>NAN</h2>";
        }
    }
}
?>