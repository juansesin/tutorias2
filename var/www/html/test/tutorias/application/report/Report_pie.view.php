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
use \koolreport\widgets\google\PieChart;

PieChart::create(array(
    "dataStore"=>$this->dataStore($this->nombre.'_table'),
    "columns"=>$this->columnas,
    "width"=>"100%",
    "height"=>"600px",
    "options"=>array(
        "is3D"=>true,
        "slices"=>array(
            "6"=>array("offset"=>0.2),
            "2"=>array("offset"=>0.2),
            "4"=>array("offset"=>0.2),
            "0"=>array("offset"=>0.2)
        )
    )
));
?>