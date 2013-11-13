<?php

function paging_function($field, $thispage, $countsql){
  include("connect_sql.php");
  include_once("classes/develop_php_library.php"); // Include the class library
  $per_page = 10;         // number of results to show per page
  $query3 = pg_query($db, $countsql);
  $total_results = pg_num_rows($query3);
  // echo $thispage;
  // echo $total_results;
  $total_pages = ceil($total_results / $per_page);//total pages we going to have

            if (isset($_GET[$field])) {
              $show_page = $_GET[$field]; //current page

              if ($show_page > 0 && $show_page <= $total_pages) {
                $start = ($show_page - 1) * $per_page;
                $end = $start + $per_page;
              } else {
        // error - show first set of results
                $show_page = 1;
                $start = 0;              
                $end = $per_page;
              }
            } else {
    // if page isn't set, show first set of results
              $show_page = 1;
              $start = 0;
              $end = $per_page;
            }

            $pagLink = "<ul class=\"pagination pull-right\">";
            if ($show_page>1){
              $k = $show_page - 1;
              $pagLink .= "<li><a href=$thispage?$field=".$k.">&laquo</a></li>";

            }
            else {
             $pagLink .= "<li class=\"disabled\"><a href=\"#\">&laquo</a></li>";
           }
           if ($show_page - 5 > 0) $i = $show_page - 5;
           else $i = 1;

           if ($show_page + 5 < $total_pages) $end_page = $show_page + 5;
           else $end_page = $total_pages;

           for (; $i<=$end_page; $i++) {  
            if ($i == $show_page){
              $pagLink .= "<li class=\"active\"><a href=cons.php?page=".$i.">".$i."</a></li>";  

            }
            else {
              $pagLink .= "<li><a href=$thispage?$field=".$i.">".$i."</a></li>";  

            }
          };  
          if ($show_page<$total_pages){
           $k = $show_page + 1;
           $pagLink .= "<li><a href=$thispage?$field=".$k.">&raquo</a></li>";

         }
         else {
           $pagLink .= "<li class=\"disabled\"><a href=\"#\">&raquo</a></li>";
         }
         echo $pagLink . "</ul>"; 
         return $countsql . " limit $per_page offset $start";
       }
       ?>
