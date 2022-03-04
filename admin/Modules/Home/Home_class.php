<?php
  ini_set('display_errors', 0);
  ini_set('display_startup_errors', 0);
  error_reporting(E_ALL);
  class Home {
    function __construct(){
      // $this->init();
    }

    function init(){
      $this->displayDash();
    }

    function displayDash(){
      echo "<header class='navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow'>
              <a class='navbar-brand col-md-3 col-lg-2 me-0 px-3' href='#'>Game Capture Report</a>
              <button class='navbar-toggler position-absolute d-md-none collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#sidebarMenu' aria-controls='sidebarMenu' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
              </button>
              <input class='form-control form-control-dark w-100' type='text' placeholder='Search' aria-label='Search'>
              <div class='navbar-nav'>
                <div class='nav-item text-nowrap'>
                  <form method='post'>
                    <input type='submit' value='Logout' name='Logout' id='Logout' class='btn btn-dark' >   
                 </form>
                </div>
              </div>
            </header>";
    
      $arrTopMenu = array("dashboard","players","game_list","reports","integrations");

      echo "<div class='container-fluid'>
              <div class='row'>
                <nav id='sidebarMenu' class='col-md-3 col-lg-2 d-md-block bg-light sidebar collapse'>
                  <div class='position-sticky pt-3'>";
      echo "<ul class='nav flex-column'>";

      foreach($arrTopMenu as $links){
        echo "<li class='nav-item'>
                <a class='nav-link' aria-current='page' href='#'><span data-feather='home'></span>".ucwords(str_replace("_"," ",$links))."</a>
              </li>";
      }

      echo "</ul></div></nav>";

    
      echo"<main class='col-md-9 ms-sm-auto col-lg-10 px-md-4'>
        <div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'>
          <h1 class='h2'>Dashboard</h1>
          <div class='btn-toolbar mb-2 mb-md-0'>
            <div class='btn-group me-2'>
            <!---<button type='button' class='btn btn-sm btn-outline-secondary'>Share</button> -->
              
            </div>
            <!--- <button type='button' class='btn btn-sm btn-outline-secondary dropdown-toggle'>
              <span data-feather='calendar'></span>
              This week
            </button> -->
          </div>
        </div>
    
          <!-- DONT WORRY -->
          GRAPH GOES HERE
          <!-- end -->
    
          <h2>Game Data</h2>
          <div class='table-responsive'>";

          /**THis is where everything goes */
          $sql = "SELECT * FROM game_time";
          displayTable($sql, "game_time");
          /** */

      echo "</div>
      </main>";
    }

    function addEdit($table,$id=""){

      $mySQL = new mySQLClass();
      $headings = $mySQL->getTableHeadings($table,"id,date_finished");

      $where = "WHERE id='$id'";
      $sql = "SELECT * FROM $table $where";

      $result = $mySQL->mySQL($sql);

  
      echo "<div style='width:50%;'>
            <h3>Add/Edit</h3>
            <form method='post'>";

        echo '<pre>'.print_r($result,true).'</pre>';
      echo "<table class='table table-striped'>";
      foreach($headings as $h){
        $row = $result[0];
        echo "<tr>";
        echo "<td>".ucwords(str_replace("_"," ",$h['Field']))."</td>";

        if($h['Field'] == "game"){
          echo"<td>".displayDropDown("games","name","")."</td>";
        }else if($h['Field'] == "date_started"){
            echo "<td><input type='date' value='{$row[$h['Field']]}' id='{$h['Field']}' name='{$h['Field']}'></td>";
        }else{
          echo "<td><input type='text' value='{$row[$h['Field']]}' id='{$h['Field']}' name='{$h['Field']}'></td>";
        }

        echo "</tr>";
      }   
      echo "</table>";
      
      echo "<br><input type='submit' value='Save' id='saveNew' name='saveNew' class='btn btn-success'>
        <input type='hidden' value='$table' id='table' name='table'>";
        echo"</form>
      </div>";      
    }
    
  }
       
            /*=====[NEW SHIT]===== */

            // $mySQL = new mySQLClass();
            // $sql = "SELECT gt.id, g.name as game, gt.playtime, gt.date_started, gt.date_finished, gt.player_name FROM game_time gt
            //         LEFT JOIN games g ON g.id=gt.game";
            // $result = $mySQL->mySQl($sql);
            // $headings = $mySQL->getTableHeadings("game_time","id");

              
            // echo "<form method='post' style='float:right;'>
            //         <input type='submit' name='addRow' id='addRow' value='Add' class='btn pull-right btn-success'>
            //         <input type='hidden' name='table' id='table' value='game_time'>
            //       </form>";

            // echo "<table class='table table-striped'>";
            // echo "<thead>";

            // foreach($headings as $h){
            //   echo "<th>".ucwords(str_replace("_"," ",$h['Field']))."</th>";
            // }
            // echo "<th>Tools</th>";

            // echo "</thead>";
            // foreach($result as $key=>$value){
            //   echo "<tr>";
        
            //   foreach($headings as $h){
            //     echo "<td>".$value[$h['Field']]."</td>";
            //   }

            //   // echo "<td>".addEditTools($value['id'],"game_time")."</td>";
            //   echo "</tr>";

            // }
            // echo "</table>";
            // echo "</div>";
 
?>

           