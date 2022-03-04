<?php
    require_once("sql.php");

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

    function displayTable($sql, $table, $where="", $showTools = true){
        $mysql = new mySQLClass();
        $headings = $mysql->getTableHeadings($table,"id");
        
        $result = $mysql->mySQl($sql);

        echo "<form method='post' style='float:right;'>
        <input type='submit' name='addRow' id='addRow' value='Add' class='btn btn-success'>
        <input type='hidden' name='table' id='table' value='game_time'>
        </form>";

        echo "<table class='table table-striped'>
                <thead>";

                foreach($headings as $h){
                    echo "<th>".ucwords(str_replace("_"," ",$h['Field']))."</th>";
                }

                if($showTools){
                    echo "<th>Tools</th>";
                }
               

                foreach($result as $row){
                    echo "<tr>";
                    foreach($headings as $h){
                        echo "<td>{$row[$h['Field']]}</td>";
                    }

                    if($showTools){
                        echo "<td>".addEditTools($row['id'],$table)."</td>";
                    }
                    
                    echo "</tr>";
                }

        echo"</thead>
                <tbody>";
        echo"</tbody>
              </table>";
    }

    function addEditTools($id,$table){
        
        $s = "<form method='post'>
              <input type='submit' name='editRow' id='editRow' value='Edit' class='btn btn-warning'>
              <input type='submit' name='removeRow' id='removeRow' value='Remove' class='btn btn-danger'>
              <input type='hidden' name='table' id='table' value='$table'>
              <input type='hidden' name='id' id='id' value='$id'>
            </form>";
  
        return $s;
      }

      function AddTools($id,$table){

        echo "<form method='post' style='float:right;'>
        <input type='submit' name='addRow' id='addRow' value='Add' class='btn btn-success'>
        <input type='hidden' name='table' id='table' value='$table'>
        </form>";

        $mySQL = new mySQLClass();
        $sql = "SELECT gt.id, g.name as game, gt.playtime, gt.date_started, gt.date_finished, gt.player_name FROM game_time gt
                LEFT JOIN games g ON g.id=gt.game";
        $result = $mySQL->mySQl($sql);
        $headings = $mySQL->getTableHeadings("game_time","id");
        echo "<table class='table table-striped'>";
            echo "<thead>";

            foreach($headings as $h){
              echo "<th>".ucwords(str_replace("_"," ",$h['Field']))."</th>";
            }
            echo "<th>Tools</th>";

            echo "</thead>";
            foreach($result as $key=>$value){
              echo "<tr>";
        
              foreach($headings as $h){
                echo "<td>".$value[$h['Field']]."</td>";
              }
        }
    }
?>