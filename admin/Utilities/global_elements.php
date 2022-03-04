<?php
    require_once("../sql.php");

    /**
     * @param string $table Table it gets data from
     * @param string $columns Column(s) it needs to diplay in drop down
     * @param string $selectedValue value that needs to be selected if edit
     * @param string $where [optional] Where clause
     * @param string $javaScript [optional] JavaScript to be executed on change
     */
    function displayDropDown($table, $columns, $selectedValue, $where="", $javaScript=""){
        $sql = "SELECT id,$columns FROM $table $where";
        $mysql = new mySQLClass();
        $result = $mysql->mySQl($sql);

        // echo '<pre>'.print_r($result,true).'</pre>';
        $s = "<select name='Game' id='game' onchange='$javaScript'>";
        $s .= "<option value='' ></option>";
        foreach($result as $key=>$value){
            $s.= "<option value='{$value['id']}' >{$value['name']}</option>";
        }
        $s .="</select>";

        return $s;
    }
?>