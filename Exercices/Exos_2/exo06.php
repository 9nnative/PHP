
<?php

$elements = ["Monsieur","Madame","Mademoiselle"];
echo alimenterListeDeroulante($elements);

function alimenterListeDeroulante(array $elements = ["N/A"]){
    $resultat = "<form action='#'>
        <select class='uk-select' name='civilite'>";
        foreach($elements as $option){
            $resultat .= "<option value='$option'>$option</option>";
        }
    $resultat .= "</select></form>";
    return $resultat;
}

