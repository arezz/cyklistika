ALTER TABLE spac_results_2011 ADD COLUMN id_racer INT(11) NOT NULL DEFAULT 0 AFTER id;

UPDATE spac_results_2011 SET id_racer=id;

CREATE TABLE `igmk`.`racer`( `id` INT(11) NOT NULL AUTO_INCREMENT , `surname` VARCHAR(64) CHARSET cp1250 COLLATE cp1250_czech_cs DEFAULT '' , `firstname` VARCHAR(64) CHARSET cp1250 COLLATE cp1250_czech_cs DEFAULT '' , PRIMARY KEY (`id`))  ;

insert into `racer` (`id`, `surname`, `firstname`) values('1','GALATÍK','Roman');
insert into `racer` (`id`, `surname`, `firstname`) values('2','CIMBÁLNÍK','Pavel');
insert into `racer` (`id`, `surname`, `firstname`) values('3','ŠTAINER','Pavel');
insert into `racer` (`id`, `surname`, `firstname`) values('4','PECHA','Michal');
insert into `racer` (`id`, `surname`, `firstname`) values('5','TOMAN','Petr');
insert into `racer` (`id`, `surname`, `firstname`) values('6','KVAPULINSKÝ','Martin');
insert into `racer` (`id`, `surname`, `firstname`) values('7','BLAHUT','Radek');
insert into `racer` (`id`, `surname`, `firstname`) values('8','GRUCHALA','Vojtěch');
insert into `racer` (`id`, `surname`, `firstname`) values('9','PAVLÍK','Jan');
insert into `racer` (`id`, `surname`, `firstname`) values('10','FOLTYN','Jiří');
insert into `racer` (`id`, `surname`, `firstname`) values('11','BÁBAN','Marcel');
insert into `racer` (`id`, `surname`, `firstname`) values('12','DUŽÍK','Josef');
insert into `racer` (`id`, `surname`, `firstname`) values('13','ŠUSTR','Vilém');
insert into `racer` (`id`, `surname`, `firstname`) values('14','ŠKODA','Kristián');
insert into `racer` (`id`, `surname`, `firstname`) values('15','MUSIOL','Lukáš');
insert into `racer` (`id`, `surname`, `firstname`) values('16','STANČÍK','Martin');
insert into `racer` (`id`, `surname`, `firstname`) values('17','UBLANSKÝ','Adam');
insert into `racer` (`id`, `surname`, `firstname`) values('18','SOSNA','Tomáš');
insert into `racer` (`id`, `surname`, `firstname`) values('19','KUBÍNEK','Aleš');
insert into `racer` (`id`, `surname`, `firstname`) values('20','PROUZA','Martin');
insert into `racer` (`id`, `surname`, `firstname`) values('21','PALIDER','Jan');
insert into `racer` (`id`, `surname`, `firstname`) values('22','SLONINA','Luděk');
insert into `racer` (`id`, `surname`, `firstname`) values('23','PIETROSZ','Tomáš');
insert into `racer` (`id`, `surname`, `firstname`) values('24','GREPL','Radim');
insert into `racer` (`id`, `surname`, `firstname`) values('25','MALOŠÍK','Jan');
insert into `racer` (`id`, `surname`, `firstname`) values('26','BODY','Marcel');
insert into `racer` (`id`, `surname`, `firstname`) values('27','KNÉBEL','Radim');
insert into `racer` (`id`, `surname`, `firstname`) values('28','FILIP','Dan');
insert into `racer` (`id`, `surname`, `firstname`) values('29','CELTA','Tomáš');
insert into `racer` (`id`, `surname`, `firstname`) values('30','CHAMRÁD','Jiří');
insert into `racer` (`id`, `surname`, `firstname`) values('31','MACHOTKA','Karel');
insert into `racer` (`id`, `surname`, `firstname`) values('32','KLÁŠTERKA','Tomáš');
insert into `racer` (`id`, `surname`, `firstname`) values('33','POVALA','Roman');
insert into `racer` (`id`, `surname`, `firstname`) values('34','UVÍRA','Václav');
insert into `racer` (`id`, `surname`, `firstname`) values('35','BOLLO','Roman');
insert into `racer` (`id`, `surname`, `firstname`) values('36','KOLÁČEK','Petr');
insert into `racer` (`id`, `surname`, `firstname`) values('37','STANĚK','Pavel');
insert into `racer` (`id`, `surname`, `firstname`) values('38','HLAWICZKA','Martin');
insert into `racer` (`id`, `surname`, `firstname`) values('39','PODHORNÝ','Jarmil');
insert into `racer` (`id`, `surname`, `firstname`) values('40','NOVOTNÝ','Jiří');
insert into `racer` (`id`, `surname`, `firstname`) values('41','BENÍČEK','Tomáš');
insert into `racer` (`id`, `surname`, `firstname`) values('42','JIRÁSEK','Josef');
insert into `racer` (`id`, `surname`, `firstname`) values('43','ŠTEC','Josef');
insert into `racer` (`id`, `surname`, `firstname`) values('44','GIERC','David');
insert into `racer` (`id`, `surname`, `firstname`) values('45','MARTINÁK','Tomáš');
insert into `racer` (`id`, `surname`, `firstname`) values('46','KUBALA','Janusz');
insert into `racer` (`id`, `surname`, `firstname`) values('47','KOKEŠ','Pavel');
insert into `racer` (`id`, `surname`, `firstname`) values('48','KRÁL','Martin');
insert into `racer` (`id`, `surname`, `firstname`) values('49','SCHNERCH','Martin');
insert into `racer` (`id`, `surname`, `firstname`) values('50','SIKORA','Tomáš');
insert into `racer` (`id`, `surname`, `firstname`) values('51','HARABIŠ','Radim');
insert into `racer` (`id`, `surname`, `firstname`) values('52','BALICA','Lukáš');
insert into `racer` (`id`, `surname`, `firstname`) values('53','KARMELITA','Tomáš');
insert into `racer` (`id`, `surname`, `firstname`) values('54','ŽEBRÁK','Radim');
insert into `racer` (`id`, `surname`, `firstname`) values('55','DULAVA','David');
insert into `racer` (`id`, `surname`, `firstname`) values('56','ŠIMON','Vítězslav');
insert into `racer` (`id`, `surname`, `firstname`) values('57','KOTAS','Wieslaw');
insert into `racer` (`id`, `surname`, `firstname`) values('58','BENEŠ','Petr');
insert into `racer` (`id`, `surname`, `firstname`) values('59','GALUŠKA','Tomáš');
insert into `racer` (`id`, `surname`, `firstname`) values('60','GRUSSMANN','Václav');
insert into `racer` (`id`, `surname`, `firstname`) values('61','SATINSKÝ','Alexandr');
insert into `racer` (`id`, `surname`, `firstname`) values('62','WENZEL','Roman');
insert into `racer` (`id`, `surname`, `firstname`) values('63','FIERLA','Jan');
insert into `racer` (`id`, `surname`, `firstname`) values('64','LYSEK','Vladimír');
insert into `racer` (`id`, `surname`, `firstname`) values('65','SOKOL','Pavel');
insert into `racer` (`id`, `surname`, `firstname`) values('66','ŠKARKA','Jiří');
insert into `racer` (`id`, `surname`, `firstname`) values('67','FRANTA','Roman');
insert into `racer` (`id`, `surname`, `firstname`) values('68','CHMURA','Petr');
insert into `racer` (`id`, `surname`, `firstname`) values('69','ZOK','Bogdan');
insert into `racer` (`id`, `surname`, `firstname`) values('70','JAKL','Jiří');
insert into `racer` (`id`, `surname`, `firstname`) values('71','GIRACZKA','Martin');
insert into `racer` (`id`, `surname`, `firstname`) values('72','MARŠÁLEK','Tomáš');
insert into `racer` (`id`, `surname`, `firstname`) values('73','VODIČKA','Štěpán');
insert into `racer` (`id`, `surname`, `firstname`) values('74','LACH','Alan');
insert into `racer` (`id`, `surname`, `firstname`) values('75','BLACHOWSKI','Riszard');
insert into `racer` (`id`, `surname`, `firstname`) values('76','BUCHAL','Ivo');
insert into `racer` (`id`, `surname`, `firstname`) values('77','ONDŘEJKA','Miroslav');
insert into `racer` (`id`, `surname`, `firstname`) values('78','HELCEL','Martin');
insert into `racer` (`id`, `surname`, `firstname`) values('79','WIDENKA','Aleš');
insert into `racer` (`id`, `surname`, `firstname`) values('80','VITEČEK','Petr');
insert into `racer` (`id`, `surname`, `firstname`) values('81','KONDERLA','Martin');
insert into `racer` (`id`, `surname`, `firstname`) values('82','HUDECKI','Petr');
insert into `racer` (`id`, `surname`, `firstname`) values('83','WILHELM','Jaroslav');
insert into `racer` (`id`, `surname`, `firstname`) values('84','STUCHLÝ','Pavel');
insert into `racer` (`id`, `surname`, `firstname`) values('85','DOVIČIČ','Robert');
insert into `racer` (`id`, `surname`, `firstname`) values('86','CZEPCZOR','Bohumil');
insert into `racer` (`id`, `surname`, `firstname`) values('87','HAVLÍČEK','Robert');
insert into `racer` (`id`, `surname`, `firstname`) values('88','SCHICHEL','Tomáš');
insert into `racer` (`id`, `surname`, `firstname`) values('89','PELC','Ladislav');
insert into `racer` (`id`, `surname`, `firstname`) values('90','ADAMČÍK','Miroslav');
insert into `racer` (`id`, `surname`, `firstname`) values('91','BARAN','Petr');
insert into `racer` (`id`, `surname`, `firstname`) values('92','ZEMÁNEK','Lubomír');
insert into `racer` (`id`, `surname`, `firstname`) values('93','TOMAN','Vladislav');
insert into `racer` (`id`, `surname`, `firstname`) values('94','KRCHŇÁK','Pavel');
insert into `racer` (`id`, `surname`, `firstname`) values('95','MUSIL','Oldřich');
insert into `racer` (`id`, `surname`, `firstname`) values('96','PRASKI','Henryk');
insert into `racer` (`id`, `surname`, `firstname`) values('97','HLAVATÍK','Ladislav');
insert into `racer` (`id`, `surname`, `firstname`) values('98','PASTUŠEK','Vlastimír');
insert into `racer` (`id`, `surname`, `firstname`) values('99','SAVKA','Miroslav');
insert into `racer` (`id`, `surname`, `firstname`) values('100','SCHNEIDER','Rudolf');
insert into `racer` (`id`, `surname`, `firstname`) values('101','VYORAL','Lubomír');
insert into `racer` (`id`, `surname`, `firstname`) values('102','KNYTL','Vojtěch');
insert into `racer` (`id`, `surname`, `firstname`) values('103','KOPŘIVA','Miroslav');
insert into `racer` (`id`, `surname`, `firstname`) values('104','HINNER','Jiří');
insert into `racer` (`id`, `surname`, `firstname`) values('105','BAIER','Jan');
insert into `racer` (`id`, `surname`, `firstname`) values('106','HOLEŠ','Jiří');
insert into `racer` (`id`, `surname`, `firstname`) values('107','PAVLÍK','Petr');
insert into `racer` (`id`, `surname`, `firstname`) values('108','PEKARČÍK','Jiří');
insert into `racer` (`id`, `surname`, `firstname`) values('109','PILECKI','Stanislav');
insert into `racer` (`id`, `surname`, `firstname`) values('110','MRAKVIA','Zdenek');
insert into `racer` (`id`, `surname`, `firstname`) values('111','NIEDERMAJER','Václav');
insert into `racer` (`id`, `surname`, `firstname`) values('112','KUZNÍK','Rostislav');
insert into `racer` (`id`, `surname`, `firstname`) values('113','GREPL','Vincenc');
insert into `racer` (`id`, `surname`, `firstname`) values('114','KANTÚR','Milan');
insert into `racer` (`id`, `surname`, `firstname`) values('115','LEPKA','Václav');
insert into `racer` (`id`, `surname`, `firstname`) values('116','DANĚČEK','Pavel');
insert into `racer` (`id`, `surname`, `firstname`) values('117','MUŠKA','Josef');
insert into `racer` (`id`, `surname`, `firstname`) values('118','TEŠNAR','Tomáš');
insert into `racer` (`id`, `surname`, `firstname`) values('119','MOTTL','Bohumír');
insert into `racer` (`id`, `surname`, `firstname`) values('120','PAVLÍK','Jiří');
insert into `racer` (`id`, `surname`, `firstname`) values('121','KUBÍK','Josef');
insert into `racer` (`id`, `surname`, `firstname`) values('122','KRAMOLIŠ','Radiomír');
insert into `racer` (`id`, `surname`, `firstname`) values('123','HOMOLA','Petr');
insert into `racer` (`id`, `surname`, `firstname`) values('124','VESELÝ','Petr');
insert into `racer` (`id`, `surname`, `firstname`) values('125','SIWEK','Stanislaw');
insert into `racer` (`id`, `surname`, `firstname`) values('126','OSLZLA','Stanislav');
insert into `racer` (`id`, `surname`, `firstname`) values('127','DUBNÝ','Pavel');
insert into `racer` (`id`, `surname`, `firstname`) values('128','PAVELEK','František');
insert into `racer` (`id`, `surname`, `firstname`) values('129','LESCZYNSKI','Ksawery');
insert into `racer` (`id`, `surname`, `firstname`) values('130','MRNŮŠTÍK','Josef');
insert into `racer` (`id`, `surname`, `firstname`) values('131','TROMBIK','Emil');
insert into `racer` (`id`, `surname`, `firstname`) values('132','RECHTENBERG','Karel');
insert into `racer` (`id`, `surname`, `firstname`) values('133','FUSS','Herbert');
insert into `racer` (`id`, `surname`, `firstname`) values('134','BURIAN','Vlastimil');
insert into `racer` (`id`, `surname`, `firstname`) values('135','VILHELM','Václav');
insert into `racer` (`id`, `surname`, `firstname`) values('136','VYBÍRAL','Jiří');
insert into `racer` (`id`, `surname`, `firstname`) values('137','GLOGAR','Jan');
insert into `racer` (`id`, `surname`, `firstname`) values('138','GOLDMAN','Jaromír');
insert into `racer` (`id`, `surname`, `firstname`) values('139','BŘEČKOVÁ','Lucie');
insert into `racer` (`id`, `surname`, `firstname`) values('140','GRUCHALOVÁ','Lucie');
insert into `racer` (`id`, `surname`, `firstname`) values('141','KOTALOVÁ','Veronika');
insert into `racer` (`id`, `surname`, `firstname`) values('142','CHMUROVÁ','Petra');
insert into `racer` (`id`, `surname`, `firstname`) values('143','TOMANOVÁ','Lucie');
insert into `racer` (`id`, `surname`, `firstname`) values('144','HALMOVÁ','Eva');
insert into `racer` (`id`, `surname`, `firstname`) values('145','UBLANSKÁ','Kamila');
insert into `racer` (`id`, `surname`, `firstname`) values('146','SIKOROVÁ','Michaela');
insert into `racer` (`id`, `surname`, `firstname`) values('147','KUSIDLO','Katarzyna');
insert into `racer` (`id`, `surname`, `firstname`) values('148','KRATOCHVÍLOVÁ','Eva');
insert into `racer` (`id`, `surname`, `firstname`) values('149','VARYŠOVÁ','Tereza');
insert into `racer` (`id`, `surname`, `firstname`) values('150','ČUPOVÁ','Jana');
insert into `racer` (`id`, `surname`, `firstname`) values('151','KRZYŽANKOVÁ','Lenka');
insert into `racer` (`id`, `surname`, `firstname`) values('152','PALIDEROVÁ','Alena');
insert into `racer` (`id`, `surname`, `firstname`) values('153','SLADKOVSKÁ','Petra');
insert into `racer` (`id`, `surname`, `firstname`) values('154','BLACHOWSKÁ ','Sabina');
insert into `racer` (`id`, `surname`, `firstname`) values('155','FRAJKOWSKÁ','Ester');
insert into `racer` (`id`, `surname`, `firstname`) values('156','JAKLOVÁ','Ivana');
insert into `racer` (`id`, `surname`, `firstname`) values('157','ŠČUČKOVÁ','Jiřina');
insert into `racer` (`id`, `surname`, `firstname`) values('158','PARGAČOVÁ','Marcela');
insert into `racer` (`id`, `surname`, `firstname`) values('159','NOVOTNÁ','Martina');
insert into `racer` (`id`, `surname`, `firstname`) values('160','LIBENKOVÁ','Sylva');
insert into `racer` (`id`, `surname`, `firstname`) values('161','DANĚČKOVÁ','Romana');
insert into `racer` (`id`, `surname`, `firstname`) values('162','VAVREČKOVÁ','Lenka');
insert into `racer` (`id`, `surname`, `firstname`) values('163','SOKOLOVÁ','Petra');
insert into `racer` (`id`, `surname`, `firstname`) values('164','GELETIČOVÁ','Anna');
insert into `racer` (`id`, `surname`, `firstname`) values('165','FIERLA','Ondřej');
insert into `racer` (`id`, `surname`, `firstname`) values('166','JAKL','Tomáš');
insert into `racer` (`id`, `surname`, `firstname`) values('167','PASTUŠEK','Jan');
insert into `racer` (`id`, `surname`, `firstname`) values('168','PAVLÍK','Petr');
insert into `racer` (`id`, `surname`, `firstname`) values('169','JANKO','Martin');
insert into `racer` (`id`, `surname`, `firstname`) values('170','HRACHOVINA','Eduard');
insert into `racer` (`id`, `surname`, `firstname`) values('171','KŘÍSTEK','Martin');
insert into `racer` (`id`, `surname`, `firstname`) values('172','HECKO','Filip');
insert into `racer` (`id`, `surname`, `firstname`) values('173','BLACHOWSKI','Marek');
insert into `racer` (`id`, `surname`, `firstname`) values('174','MAZÚR','Jiří');
insert into `racer` (`id`, `surname`, `firstname`) values('175','GABOR','Mario');