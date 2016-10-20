<?php

  class html{
   public $html;
   //always pass parameter in constructure
   public function __construct($html = 'Default') {
    echo $html;  
   }

  }


  
  class htmlTable extends html {
   protected $table;
    public function getTableHTML(){
    $this->html = 'some table html';
     return $html;
    }
 }

$obj = new html('obj passing value ');
$obj1 = new htmlTable;
$html = $obj1->getTableHTML();

echo $obj1->html;
echo $html;
?>
