                <select name="kategorie">          
                  <option value="empty">Vyberte kategorii</option>          
                  <?php  
                  $kat=MySQL_Query("SELECT id,prefix,name FROM spac_category ORDER BY id");
                  while ($zaznam = MySQL_Fetch_Array($kat))
                  {
                    $cid=$zaznam["id"];
                    $cprefix=$zaznam["prefix"];
                    $cname=$zaznam["name"];
                    if (isset($_POST["kategorie"]) & (count($err) > 0 ))
                    {
                      if ($_POST["kategorie"] == $cid)
                      {
                        echo "<option value='".$cid."' selected='selected'>$cprefix ($cname)</option>";
                      }
                    }
                    echo "<option value='".$cid."'>$cprefix ($cname)</option>";  
                  }
                  ?>          
                </select>