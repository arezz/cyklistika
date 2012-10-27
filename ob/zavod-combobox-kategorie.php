              <span>Kategorie:&nbsp;</span>
              <input type="hidden" name="zavod" value="<?php echo $zavod; ?>" />
              <select name="kategorie" onchange="this.form.submit();">
                <option value="all" <?php if ($kategorie == "all") {echo "selected='selected'"; $choice = "all";}?>>Vše</option>
                  <?php  
                  $kat=MySQL_Query("SELECT id,prefix,name FROM spac_category WHERE season IN (1012) ORDER BY id");
                  while ($zaznam = MySQL_Fetch_Array($kat))
                  {
                    $cid=$zaznam["id"];
                    $cprefix=$zaznam["prefix"];
                    $cname=$zaznam["name"];
                    $sendvalue=$cprefix;
                    if ($kategorie == $cprefix)
                    {
                      echo "<option value='$cprefix' selected='selected'>$cprefix</option>";
                      $choice = $cprefix;
                    }
                    else
                    {
                      echo "<option value='$cprefix'>$cprefix</option>";
                    } 
                  }
                  ?>
              </select>
              <noscript>
                <input type="submit" value="Zobrazit" />
              </noscript>
