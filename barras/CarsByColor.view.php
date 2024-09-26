<?php 
    use \koolreport\widgets\koolphp\Table;
    use \koolreport\widgets\google\ColumnChart;
?>

<div class="report-content">
    <div class="text-center">
        <h1>Carros pela Cor</h1>
        <p class="lead">This report show cars by color</p>
    </div>

    <?php
    ColumnChart::create(array(
        "dataStore"=>$this->dataStore('cars_by_color'),  
        "columns"=>array(
            "color"=>array(
                "label"=>"Cor",
                "type"=>"string",
            ),
            "value"=>array(
                "label"=>"Valor",
                "type"=>"number",
                "prefix"=>"$",
            )
        ),
        "width"=>"100%",
    ));
    ?>

    <?php
    Table::create(array(
        "dataStore"=>$this->dataStore('cars_by_color'),
        "columns"=>array(
            "color"=>array(
                "label"=>"Cor",
                "type"=>"string",
            ),
            "value"=>array(
                "label"=>"Valor",
                "type"=>"number",
                "prefix"=>"$",
            )
        ),
        "cssClass"=>array(
            "table"=>"table table-hover table-bordered"
        )
    ));
    ?>
</div>

<hr>
<h3>Cars by color</h3>
<p>Aqui descreva o relatório</p>
