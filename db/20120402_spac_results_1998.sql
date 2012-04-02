CREATE TABLE `spac_results_1998` (                                                                 
                     `id` INT(11) NOT NULL AUTO_INCREMENT,                                                            
                     `id_racer` INT(11) NOT NULL DEFAULT '0',                                                         
                     `surname` VARCHAR(64) CHARACTER SET cp1250 COLLATE cp1250_czech_cs NOT NULL DEFAULT '',    
                     `firstname` VARCHAR(64) CHARACTER SET cp1250 COLLATE cp1250_czech_cs NOT NULL DEFAULT '',  
                     `team` VARCHAR(128) CHARACTER SET cp1250 COLLATE cp1250_czech_cs NOT NULL DEFAULT '',      
                     `id_category` INT(11) NOT NULL,                                                                  
                     `race_1` INT(11) DEFAULT '0',                                                                    
                     `race_2` INT(11) DEFAULT '0',                                                                    
                     `race_3` INT(11) DEFAULT '0',                                                                    
                     `race_4` INT(11) DEFAULT '0',                                                                    
                     `race_5` INT(11) DEFAULT '0',                                                                    
                     `race_6` INT(11) DEFAULT '0',                                                                    
                     `race_7` INT(11) DEFAULT '0',                                                                    
                     `race_8` INT(11) DEFAULT '0',                                                                    
                     `race_9` INT(11) DEFAULT '0',                                                                    
                     `race_10` INT(11) DEFAULT '0',                                                                   
                     `race_11` INT(11) DEFAULT '0',                                                                  
                     `total` INT(11) DEFAULT '0',                                                                     
                     `total_best_races` INT(11) DEFAULT '0',
		     `final_standing` INT(3) DEFAULT NULL,                                                      
                     `total_racers` INT(3) DEFAULT NULL,                                                           
                     PRIMARY KEY  (`id`)                                                                              
                   );