CREATE TABLE `spac_results_2002` (                                                                 
                     `id` INT(11) NOT NULL AUTO_INCREMENT,                                                            
                     `id_racer` INT(11) NOT NULL DEFAULT '0',                                                         
                     `surname` VARCHAR(64) CHARACTER SET cp1250 COLLATE cp1250_czech_cs NOT NULL DEFAULT '',    
                     `firstname` VARCHAR(64) CHARACTER SET cp1250 COLLATE cp1250_czech_cs NOT NULL DEFAULT '',  
                     `team` VARCHAR(128) CHARACTER SET cp1250 COLLATE cp1250_czech_cs NOT NULL DEFAULT '',      
                     `id_category` INT(11) NOT NULL,                                                                      
                     `total` INT(11) DEFAULT '0',            
		     `final_standing` INT(3) DEFAULT NULL,                                                      
                     `total_racers` INT(3) DEFAULT NULL,                                                           
                     PRIMARY KEY  (`id`)                                                                              
                   );