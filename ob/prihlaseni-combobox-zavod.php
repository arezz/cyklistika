                <select name="zavod">          
                  <option value="empty">Vyberte závod</option>          
                  <?php  
                  $zavody=MySQL_Query("SELECT id,name,date,place FROM spac_race WHERE active_login=11 ORDER BY date ASC");
                  while ($zaznam = MySQL_Fetch_Array($zavody))
                  {
                    $rcid=$zaznam["id"];
                    $rcname=$zaznam["name"];
                    $rcdate=$zaznam["date"];
                    $rcplace=$zaznam["place"];
                    $rcdate=(string)$rcdate;
                    list($rok,$mesic,$den)=explode('-',$rcdate);
                    $den = (int)$den;
                    $mesic = (int)$mesic;
                    if (isset($_POST["zavod"]) & (count($err) > 0 ))
                    {
                      if ($_POST["zavod"] == $rcid)
                      {
                        echo "<option value='".$rcid."' selected='selected'>$den.$mesic. $rok - $rcname, $rcplace</option>";
                      }
                    }
                    echo "<option value='".$rcid."'>$den.$mesic. $rok - $rcname, $rcplace</option>";  
                  }
                  ?>          
                </select>