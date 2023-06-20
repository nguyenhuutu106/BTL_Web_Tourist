<?php
extract($_POST);
foreach ($_POST as $key => $value) {
    if ($key == 'id_tour') {
        echo $value;
    }
}
?>