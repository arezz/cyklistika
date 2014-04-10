-- zmena zenske kategorie
UPDATE spac_category SET name='Ženy 19 až 34 let' WHERE id=6;
UPDATE spac_category SET name='Ženy 35 a více let' WHERE id=7;

-- docasne zakazani detskych kategorii (lze pak povolit nastavenim season=2011)
UPDATE spac_category SET season=0 WHERE id IN (14,15,16,17,18,19);
