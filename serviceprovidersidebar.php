<div class="span2 main-menu-span">
      <div class="well nav-collapse sidebar-nav in collapse" style="position:fixed; margin-left: 10px; height: 219px; padding:0px">
        <ul class="nav nav-tabs nav-stacked main-menu">
          <!-- <li class="nav-header hidden-tablet">Main</li> -->
          
          <?php
          echo"
          <a class=\"ajax-link\" href=\"/servicequestions.php?see=$u\"><li class=\"nav-header hidden-tablet\" style=\"padding-top:10px;\">Questions</li></a>
          <a class=\"ajax-link\" href=\"/serviceprovider.php?see=$u\"><li class=\"nav-header hidden-tablet\" style=\"padding-top:10px;\">Reviews</li></a>";
          ?>
          <li class="nav-header hidden-tablet" style="padding-top:10px;">My Services</li>
          <hr style="margin:0px;">
          <hr style="margin:0px;">

          <?php 
      
                      $sql = "SELECT \"Service\".\"Type\" from \"Provides\",\"Service\" where \"ServiceProviderUserID\" = $u and \"Provides\".\"ServiceID\"=\"Service\".\"ServiceID\" group by \"Service\".\"Type\";";
                      $query = pg_query($db, $sql);
                      while ($row = pg_fetch_row($query)) {
                        echo "<li class=\"nav-header hidden-tablet\" style=\"margin-top:8px;\">$row[0]</li>";


                        $typesql = "SELECT \"SubType\",\"Service\".\"ServiceID\" from \"Service\",\"Provides\" where \"ServiceProviderUserID\" = $u and \"Provides\".\"ServiceID\"=\"Service\".\"ServiceID\" and \"Type\" = '". $row[0] . "';";
                        $typequery = pg_query($db, $typesql);
                        while ($typerow = pg_fetch_row($typequery)) {
                          echo "<li style=\"margin-left: -2px;\"><a class=\"ajax-link\" href=\"/moreservices.php?sid=$typerow[1]&see=$u\"><span class=\"hidden-tablet\"><i class=\"icon-play\"></i><font style=\"color:  #6d84b4; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                          font-size: 12px; line-height: 1.28;\">$typerow[0]</font></span></a></li>";
                        }
                      }
                        
                      
          ?>


          <li style="margin-left: -2px;"><a class="ajax-link" href=# data-toggle="modal" data-target="#myModal"><span class="hidden-tablet"><i class="icon-plus-sign"></i> Ask Question </span></a></li>

        </ul>
        <!-- <label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><div class="checker" id="uniform-is-ajax"><span><input id="is-ajax" type="checkbox" style="opacity: 0;"></span></div> Ajax on menu</label> -->
      </div><!--/.well -->
    </div>
