<?php
function ordernaArray($array):void {
    sort($array);
    print_r($array);
}

ordernaArray(["Lucas","Ana","Zoe"]);