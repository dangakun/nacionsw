# nacionsw

el framework utilizado es codeigniter, con jquery y bootstrap

datos para la base de datos:

		'hostname' => 'localhost',
		'username' => 'nacionluke',
		'password' => 'newhope',
		'database' => 'nacionswdb'

CREATE DATABASE `nacionswdb` /*!40100 DEFAULT CHARACTER SET utf8 */;

CREATE TABLE `nacionswdb`.`transports` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `model` text,
  `number` int(11) NOT NULL,
  `transport_class` varchar(45) DEFAULT NULL,
  `count` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Sand Crawler','Digger Crawler','vehicles',4,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'T-16 skyhopper','T-16 skyhopper','vehicles',6,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'X-34 landspeeder','X-34 landspeeder','vehicles',7,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'TIE/LN starfighter','Twin Ion Engine/Ln Starfighter','vehicles',8,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Snowspeeder','t-47 airspeeder','vehicles',14,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'TIE bomber','TIE/sa bomber','vehicles',16,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'AT-AT','All Terrain Armored Transport','vehicles',18,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'AT-ST','All Terrain Scout Transport','vehicles',19,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Storm IV Twin-Pod cloud car','Storm IV Twin-Pod','vehicles',20,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Sail barge','Modified Luxury Sail Barge','vehicles',24,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Bantha-II cargo skiff','Bantha-II','vehicles',25,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'TIE/IN interceptor','Twin Ion Engine Interceptor','vehicles',26,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Imperial Speeder Bike','74-Z speeder bike','vehicles',30,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Vulture Droid','Vulture-class droid starfighter','vehicles',33,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Multi-Troop Transport','Multi-Troop Transport','vehicles',34,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Armored Assault Tank','Armoured Assault Tank','vehicles',35,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Single Trooper Aerial Platform','Single Trooper Aerial Platform','vehicles',36,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'C-9979 landing craft','C-9979 landing craft','vehicles',37,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Tribubble bongo','Tribubble bongo','vehicles',38,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Sith speeder','FC-20 speeder bike','vehicles',42,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Zephyr-G swoop bike','Zephyr-G swoop bike','vehicles',44,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Koro-2 Exodrive airspeeder','Koro-2 Exodrive airspeeder','vehicles',45,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'XJ-6 airspeeder','XJ-6 airspeeder','vehicles',46,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'LAAT/i','Low Altitude Assault Transport/infrantry','vehicles',50,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'LAAT/c','Low Altitude Assault Transport/carrier','vehicles',51,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'AT-TE','All Terrain Tactical Enforcer','vehicles',53,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'SPHA','Self-Propelled Heavy Artillery','vehicles',54,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Flitknot speeder','Flitknot speeder','vehicles',55,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Neimoidian shuttle','Sheathipede-class transport shuttle','vehicles',56,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Geonosian starfighter','Nantex-class territorial defense','vehicles',57,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Tsmeu-6 personal wheel bike','Tsmeu-6 personal wheel bike','vehicles',60,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Emergency Firespeeder','Fire suppression speeder','vehicles',62,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Droid tri-fighter','tri-fighter','vehicles',67,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Oevvaor jet catamaran','Oevvaor jet catamaran','vehicles',69,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Raddaugh Gnasp fluttercraft','Raddaugh Gnasp fluttercraft','vehicles',70,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Clone turbo tank','HAVw A6 Juggernaut','vehicles',71,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Corporate Alliance tank droid','NR-N99 Persuader-class droid enforcer','vehicles',72,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Droid gunship','HMP droid gunship','vehicles',73,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'AT-RT','All Terrain Recon Transport','vehicles',76,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'CR90 corvette','CR90 corvette','starships',2,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Star Destroyer','Imperial I-class Star Destroyer','starships',3,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Sentinel-class landing craft','Sentinel-class landing craft','starships',5,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Death Star','DS-1 Orbital Battle Station','starships',9,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Millennium Falcon','YT-1300 light freighter','starships',10,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Y-wing','BTL Y-wing','starships',11,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'X-wing','T-65 X-wing','starships',12,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'TIE Advanced x1','Twin Ion Engine Advanced x1','starships',13,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Executor','Executor-class star dreadnought','starships',15,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Rebel transport','GR-75 medium transport','starships',17,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Slave 1','Firespray-31-class patrol and attack','starships',21,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Imperial shuttle','Lambda-class T-4a shuttle','starships',22,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'EF76 Nebulon-B escort frigate','EF76 Nebulon-B escort frigate','starships',23,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Calamari Cruiser','MC80 Liberty type Star Cruiser','starships',27,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'A-wing','RZ-1 A-wing Interceptor','starships',28,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'B-wing','A/SF-01 B-wing starfighter','starships',29,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Republic Cruiser','Consular-class cruiser','starships',31,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Droid control ship','Lucrehulk-class Droid Control Ship','starships',32,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Naboo fighter','N-1 starfighter','starships',39,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Naboo Royal Starship','J-type 327 Nubian royal starship','starships',40,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Scimitar','Star Courier','starships',41,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'J-type diplomatic barge','J-type diplomatic barge','starships',43,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'AA-9 Coruscant freighter','Botajef AA-9 Freighter-Liner','starships',47,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Jedi starfighter','Delta-7 Aethersprite-class interceptor','starships',48,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'H-type Nubian yacht','H-type Nubian yacht','starships',49,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Republic Assault ship','Acclamator I-class assault ship','starships',52,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Solar Sailer','Punworcca 116-class interstellar sloop','starships',58,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Trade Federation cruiser','Providence-class carrier/destroyer','starships',59,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Theta-class T-2c shuttle','Theta-class T-2c shuttle','starships',61,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Republic attack cruiser','Senator-class Star Destroyer','starships',63,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Naboo star skiff','J-type star skiff','starships',64,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Jedi Interceptor','Eta-2 Actis-class light interceptor','starships',65,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'arc-170','Aggressive Reconnaissance-170 starfighte','starships',66,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Banking clan frigte','Munificent-class star frigate','starships',68,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'Belbullab-22 starfighter','Belbullab-22 starfighter','starships',74,1);
INSERT INTO `nacionswdb`.`transports` (`id`,`name`,`model`,`transport_class`,`number`,`count`) VALUES (null,'V-wing','Alpha-3 Nimbus-class V-wing starfighter','starships',75,1);
