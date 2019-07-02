<style>
    .cssHeader
    {
        background-color:#e9ffe8;
    }
    .cssItem
    {
        background-color:#fdffe8;
    }
</style>

<?php
use \koolreport\widgets\google\ColumnChart;

ColumnChart::create(array(
    "dataStore"=>$this->dataStore($this->nombre.'_table'),
    "columns"=>$this->columnas,
    "width"=>"100%",
    "height"=>"600px",
    "style"=>function($row){
        return "color:#ADBD37;fill-opactity:0.6";
    }
));
?>