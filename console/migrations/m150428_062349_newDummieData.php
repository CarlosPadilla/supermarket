<?php

use yii\db\Schema;
use yii\db\Migration;

class m150428_062349_newDummieData extends Migration
{
	public function up()
	{
		$sql = 'SET FOREIGN_KEY_CHECKS = 0;';
		$this->execute($sql);

		$sql = 'TRUNCATE TABLE `roles`;
			INSERT INTO `roles` (`role_name`) VALUES ("Accounting"),("Accounting"),("Human Resources"),("Customer Service"),("Payroll"),("Legal Department"),("Quality Assurance"),("Advertising"),("Accounting"),("Asset Management");
			INSERT INTO `roles` (`role_name`) VALUES ("Research and Development"),("Research and Development"),("Asset Management"),("Advertising"),("Asset Management"),("Media Relations"),("Research and Development"),("Sales and Marketing"),("Tech Support"),("Finances");';
		$this->execute($sql);

		$sql ='TRUNCATE TABLE `user`;
			INSERT INTO `user` (`username`,`auth_key`,`password_hash`,`email`,`status`,`created_at`,`id_rol`) VALUES ("Devin","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","ligula@arcuNunc.org",1,"2014-10-03 10:57:47",3),("Zenia","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","orci.lacus.vestibulum@nequeetnunc.edu",1,"2014-05-09 02:44:34",3),("Mariko","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","Nunc@mi.com",0,"2015-05-27 05:15:21",1),("Lawrence","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","ad.litora.torquent@vitaeerat.ca",1,"2015-05-29 18:37:04",4),("Oleg","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","ornare.placerat@faucibuslectusa.com",1,"2015-04-22 04:16:25",1),("Montana","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","dui.nec.urna@aliquetnecimperdiet.ca",0,"2015-08-30 15:36:29",2),("Liberty","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","justo@eutellusPhasellus.edu",1,"2015-07-31 00:14:04",4),("Michael","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","odio@Donecporttitortellus.net",0,"2015-08-15 10:14:01",3),("Benjamin","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","magna.Sed.eu@loremfringilla.org",1,"2015-12-08 21:01:56",4),("Quail","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","Proin@ridiculusmus.org",0,"2014-10-12 11:21:30",2);
			INSERT INTO `user` (`username`,`auth_key`,`password_hash`,`email`,`status`,`created_at`,`id_rol`) VALUES ("Austin","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","ornare@Sed.org",1,"2015-03-19 10:01:20",2),("Stewart","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","In@nuncQuisque.net",0,"2016-04-24 10:42:53",1),("Owen","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","enim.non@Maurisnulla.net",1,"2015-08-03 14:19:55",3),("Kyra","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","nec@ornaresagittis.ca",1,"2015-08-09 09:14:05",2),("Darryl","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","Quisque.purus.sapien@sagittisfelis.co.uk",1,"2015-11-21 16:25:05",3),("Leandra","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","libero.Proin.sed@anteblanditviverra.com",0,"2014-11-26 19:11:07",4),("Dai","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","risus@ultricesposuerecubilia.edu",1,"2015-07-13 17:15:39",1),("Abel","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","urna.Nunc.quis@purus.net",0,"2016-04-13 21:16:53",3),("Sharon","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","nibh@enimconsequat.ca",1,"2015-02-06 17:40:30",1),("Quinn","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","turpis.vitae.purus@egestaslacinia.ca",0,"2014-09-13 08:35:22",4);
			INSERT INTO `user` (`username`,`auth_key`,`password_hash`,`email`,`status`,`created_at`,`id_rol`) VALUES ("Darius","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","mattis@metussitamet.net",1,"2014-10-16 21:09:41",4),("Kimberly","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","nulla.In.tincidunt@luctusetultrices.net",1,"2014-06-27 12:24:23",3),("Xanthus","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","ultricies.ligula@convallis.com",0,"2015-02-23 13:06:14",3),("Timothy","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","sed.dui@Duismi.edu",0,"2015-10-06 19:48:14",3),("Tobias","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","Mauris.blandit@vitaealiquet.ca",1,"2014-08-28 04:37:09",2),("Yasir","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","aliquet@ataugueid.edu",0,"2015-02-06 06:48:32",3),("Quamar","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","sit.amet@nequepellentesque.com",1,"2015-11-03 17:35:56",4),("Bruce","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","Vivamus@euodio.edu",0,"2015-08-10 15:00:06",4),("Keith","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","posuere.cubilia@Aliquamfringillacursus.org",0,"2014-11-26 01:32:03",2),("Sacha","Bf85DsyZQQThRVJfv_BTunjsOV1_IEzn","$2y$13$0cLhrtlJJ.7XGwo8EnC4n.dJlZxrQfmHaQw.oQ5t.24h1cpWfVYNy","elementum@et.co.uk",1,"2015-07-01 14:12:15",3);';
		$this->execute($sql);

		$sql = 'TRUNCATE TABLE `products`;
			INSERT INTO `products` (`name`,`description`,`stock`,`price`) VALUES ("Actos","",137,(FLOOR(RAND()*100))),("Lexapro","",134,(FLOOR(RAND()*100))),("Omeprazole (Rx)","Excelent",3,(FLOOR(RAND()*100))),("Metoprolol Succinatee","Good",161,(FLOOR(RAND()*100))),("Cephalexin","Good",164,(FLOOR(RAND()*100))),("Furosemide","Excelent",184,(FLOOR(RAND()*100))),("Symbicort","Medium",148,(FLOOR(RAND()*100))),("Hydrochlorothiazide","Good",178,(FLOOR(RAND()*100))),("Vitamin D (Rx)","Medium",112,(FLOOR(RAND()*100))),("Lorazepam","Excelent",27,(FLOOR(RAND()*100)));
			INSERT INTO `products` (`name`,`description`,`stock`,`price`) VALUES ("Simvastatin","Good",70,(FLOOR(RAND()*100))),("Lisinopril","Really Good",155,(FLOOR(RAND()*100))),("Synthroid","Really Good",53,(FLOOR(RAND()*100))),("Hydrocodone/APAP","Good",159,(FLOOR(RAND()*100))),("Vytorin","",37,(FLOOR(RAND()*100))),("Ranitidine HCl","Medium",180,(FLOOR(RAND()*100))),("Viagra","",1,(FLOOR(RAND()*100))),("Prednisone","Really Good",106,(FLOOR(RAND()*100))),("Promethazine HCl","",197,(FLOOR(RAND()*100))),("Allopurinol","",174,(FLOOR(RAND()*100)));
			INSERT INTO `products` (`name`,`description`,`stock`,`price`) VALUES ("Metoprolol Succinate","Medium",60,(FLOOR(RAND()*100))),("Potassium Chloride","Medium",52,(FLOOR(RAND()*100))),("Tramadol HCl","Medium",126,(FLOOR(RAND()*100))),("Simvastatin","Excelent",156,(FLOOR(RAND()*100))),("Folic Acid","Medium",16,(FLOOR(RAND()*100))),("Lisinopril","Really Good",171,(FLOOR(RAND()*100))),("Benicar HCT","Really Good",136,(FLOOR(RAND()*100))),("Alprazolam","Medium",196,(FLOOR(RAND()*100))),("Citalopram HBr","",4,(FLOOR(RAND()*100))),("Paroxetine HCl","",55,(FLOOR(RAND()*100)));';
		$this->execute($sql);
		$sql = 'TRUNCATE TABLE `inventary`;
			INSERT INTO `inventary` (`unit_number`,`acquire_date`,`expire_date`) VALUES (19,"2014-10-07 11:40:57","2016-03-17 03:02:50"),(11,"2014-12-04 20:03:16","2016-01-04 11:25:32"),(12,"2015-09-21 22:12:44","2015-06-15 19:34:14"),(15,"2014-08-23 08:52:44","2014-08-27 22:55:38"),(8,"2015-08-22 07:12:01","2016-03-26 13:06:26"),(10,"2015-12-09 03:36:08","2014-08-19 09:01:08"),(22,"2015-01-26 08:49:48","2016-02-22 11:17:15"),(7,"2014-06-24 12:32:10","2015-05-26 08:32:43"),(29,"2015-04-06 04:05:09","2014-09-24 11:53:35"),(3,"2016-04-06 00:59:48","2015-08-16 16:44:09");
			INSERT INTO `inventary` (`unit_number`,`acquire_date`,`expire_date`) VALUES (10,"2015-07-08 07:27:37","2014-07-26 21:49:27"),(18,"2015-12-14 10:27:32","2014-12-26 14:23:20"),(12,"2015-02-17 06:54:39","2014-12-05 20:07:44"),(19,"2015-02-22 13:15:53","2015-07-30 05:02:30"),(8,"2015-01-02 09:40:13","2015-10-06 18:07:26"),(5,"2015-04-01 19:31:51","2014-09-11 10:16:42"),(24,"2014-07-05 21:08:02","2014-05-24 04:36:43"),(2,"2016-01-10 23:12:05","2016-04-16 03:58:11"),(26,"2015-02-21 08:43:58","2015-06-08 09:35:56"),(18,"2014-12-06 00:46:57","2015-06-14 08:50:04");
			INSERT INTO `inventary` (`unit_number`,`acquire_date`,`expire_date`) VALUES (11,"2014-12-31 11:13:05","2014-08-07 01:58:51"),(8,"2016-02-21 22:02:42","2015-02-25 12:32:05"),(23,"2015-04-02 02:41:39","2015-11-29 14:34:32"),(23,"2014-12-24 09:44:34","2015-03-20 03:41:24"),(13,"2014-10-14 13:07:41","2015-10-21 20:53:22"),(23,"2015-12-13 21:29:21","2014-08-17 00:17:45"),(24,"2015-07-13 17:11:35","2015-01-26 23:31:53"),(7,"2016-02-10 13:13:29","2015-08-14 23:16:29"),(22,"2015-03-08 08:45:45","2015-09-15 03:39:55"),(14,"2014-08-20 17:24:23","2016-01-05 00:10:29");
			INSERT INTO `inventary` (`unit_number`,`acquire_date`,`expire_date`) VALUES (4,"2014-10-13 20:07:31","2015-03-20 23:17:01"),(20,"2015-04-18 08:40:25","2015-01-16 22:14:21"),(8,"2015-08-20 06:50:39","2014-12-13 07:23:59"),(9,"2015-05-21 04:49:25","2016-03-25 02:50:26"),(25,"2014-10-23 06:23:40","2014-10-04 03:16:27"),(14,"2014-06-03 16:38:24","2015-02-20 03:57:53"),(24,"2015-02-03 21:15:40","2014-07-01 07:35:45"),(19,"2014-08-03 12:15:51","2015-10-02 12:45:45"),(30,"2016-01-11 23:58:44","2015-05-12 22:05:08"),(1,"2015-10-11 06:28:48","2015-01-16 05:35:41");';

		$this->execute($sql);
		$sql = 'TRUNCATE TABLE `transactions`;
			INSERT INTO `transactions` (`total`,`is_venta`) VALUES ("323.82",0),("294.00",1),("169.08",0),("457.24",1),("384.54",1),("424.21",1),("181.41",1),("340.37",1),("383.48",0),("34.05",0);
			INSERT INTO `transactions` (`total`,`is_venta`) VALUES ("34.89",1),("29.13",1),("118.51",1),("182.60",0),("490.70",0),("86.34",0),("411.05",0),("469.14",1),("363.81",0),("381.78",0);
			INSERT INTO `transactions` (`total`,`is_venta`) VALUES ("274.42",1),("158.15",0),("344.68",1),("322.65",0),("79.20",1),("209.46",0),("383.74",1),("102.96",0),("242.49",0),("166.12",1);
			INSERT INTO `transactions` (`total`,`is_venta`) VALUES ("163.18",0),("350.23"),("301.51",0),("153.90",1),("455.62",1),("283.81",1),("82.59",1),("356.51",0),("259.30",1),("357.77",1);';
		$this->execute($sql);
		$sql = 'TRUNCATE TABLE `list_product`;

			INSERT INTO `list_product` (`id_product`,`id_transaction`)
				VALUES (17,4),(14,23),(23,24),(7,24),(19,2),(1,4),(6,27),(7,11),(26,21),(27,25);
			INSERT INTO `list_product` (`id_product`,`id_transaction`)
				VALUES (28,34),(15,23),(20,30),(2,35),(2,17),(29,24),(7,17),(2,1),(16,34),(7,22);
			INSERT INTO `list_product` (`id_product`,`id_transaction`)
				VALUES (3,2),(19,39),(12,10),(2,38),(7,7),(10,4),(16,24),(6,23),(30,9),(29,30);
			INSERT INTO `list_product` (`id_product`,`id_transaction`)
				VALUES (22,26),(5,12),(19,9),(12,39),(20,5),(22,36),(18,14),(17,16),(4,40),(12,36);
			INSERT INTO `list_product` (`id_product`,`id_transaction`)
				VALUES (18,30),(6,26),(13,35),(16,34),(4,25),(1,34),(21,21),(4,9),(4,5),(5,28);
			INSERT INTO `list_product` (`id_product`,`id_transaction`)
				VALUES (6,24),(5,22),(8,25),(8,25),(5,16),(20,25),(8,40),(14,38),(14,22),(18,3);
			INSERT INTO `list_product` (`id_product`,`id_transaction`)
				VALUES (22,32),(1,18),(30,23),(27,26),(1,26),(2,19),(1,4),(19,28),(12,27),(21,40);
			INSERT INTO `list_product` (`id_product`,`id_transaction`)
				VALUES (10,38),(13,30),(24,7),(4,7),(28,1),(16,30),(9,27),(15,7),(12,17),(10,11);
			INSERT INTO `list_product` (`id_product`,`id_transaction`)
				VALUES (11,17),(8,2),(30,1),(28,26),(20,2),(7,19),(28,35),(21,5),(16,12),(28,28);
			INSERT INTO `list_product` (`id_product`,`id_transaction`)
				VALUES (15,11),(7,36),(14,1),(15,21),(15,16),(22,28),(18,13),(7,27),(11,6),(23,11);';
		$this->execute($sql);

		$sql = 'SET FOREIGN_KEY_CHECKS = 1;';
		$this->execute($sql);

	}

	public function down()
	{
		echo "m150428_062349_newDummieData cannot be reverted.\n";

		return false;
	}

	/*
	// Use safeUp/safeDown to run migration code within a transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
