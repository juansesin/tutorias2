<style>
    .cssHeader
    {
        background-color: #d2d6de;
        color: #333333;
    }
    .cssItem
    {
        background-color:#e0e0e0;
    }
    
div.scrollmenu {  
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  text-align: center;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: #777;
}
</style>
<div class="scrollmenu">
<?php
use \koolreport\widgets\koolphp\Table;
$content = array(
    "dataStore"=>$this->dataStore($this->nombre.'_table'),
    "width"=>"100%",
    "height"=>"500px",
    "columns"=>$this->columnas,
    "class"=>array(
        "table"=>"table table-hover"
    ),
    "options"=>array(
        "colReorder"=>true,
        "orders"=>array(array(1,"desc")),
        "searching"=>true,
        "paging"=>true,
        "themeBase"=>"bs4",
    ),
    "cssClass"=>array(
        "table"=>"table-striped table-hover ",
        "th"=>"col cssHeader",
        "tr"=>"cssItem"
    ),
    "paging"=>array(
        "pageSize"=>10,
        "pageIndex"=>0,
        "align"=>"center"
    ),
);
if ($this->showFooter != null){
    $content['showFooter'] = $this->showFooter;
}
Table::create($content);
?>
</div>