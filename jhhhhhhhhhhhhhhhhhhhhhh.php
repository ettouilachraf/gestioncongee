<select size="1" id="cbcolor" name="cbcolor">   
<?php
//valeur a selectionner dans la liste
$toselect='vert';
//toutes les valeurs possibles dans la liste
$all=array('blanc', 'rouge', 'vert');
foreach ($all as $val) {
    if ($val==$toselect) {
        echo '"'.$val.'" selected>'.$val.'';
    } else {
        echo '"'.$val.'">'.$val.'';
    }
}
?>
</select>