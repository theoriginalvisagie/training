<?php
    require_once("../sql.php");

    /**
     * @param $table Table it gets data from
     * @param $columns Column(s) it needs to diplay in drop down
     * @param $where [optional] Where clause
     * @param $javaScript [optional] JavaScript to be executed on change
     */
    function displayDropDown($table, $columns, $where="", $javaScript=""){
        $sql = "SELECT id,$columns FROM $table $where";
        $mysql = new mySQLClass();
        $result = $mysql->mySQl($sql);

        // echo '<pre>'.print_r($result,true).'</pre>';
        $s = "<select name='cars' id='cars' onchange='$javaScript'>";
        $s .= "<option value=''></option>";
        foreach($result as $key=>$value){
            $s.= "<option value='{$value['id']}'>{$value['name']}</option>";
        }
        $s .="</select>";

        return $s;
    }
?>