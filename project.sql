drop table if exists `db_main`;
create table db_main(
	itemID integer auto_increment primary key,
	itemdate datetime default null,
	owner varchar(30) not null,
	sampleID varchar(30) not null,
	rundata varchar(30) not null,
	measurement varchar(30) not null
)engine = myisam  default charset = utf8;
insert into db_main (itemdate, owner, sampleID, rundata, measurement) values ('2016-6-9','apple','SN110', 'rundata_id_001', 'measurement11');
insert into db_main (itemdate, owner, sampleID, rundata, measurement) values ('2016-6-9','banana','SN111', 'rundata_id_002', 'measurement22');
insert into db_main (itemdate, owner, sampleID, rundata, measurement) values ('2016-6-9','grape','SN112', 'rundata_id_003', 'measurement33');
insert into db_main (itemdate, owner, sampleID, rundata, measurement) values ('2016-6-9','orange','SN113', 'rundata_id_004', 'measurement44');
insert into db_main (itemdate, owner, sampleID, rundata, measurement) values ('2016-6-9','strawberry','SN114', 'rundata_id_005', 'measurement55');
insert into db_main (itemdate, owner, sampleID, rundata, measurement) values ('2016-8-9','apple','SN115', 'rundata_id_006', 'measurement66');

-- drop table if exists `db_recipe`;
-- create table db_recipe(
-- 	recipeID integer auto_increment primary key,
-- 	itemID integer,
-- 	ionID integer,
-- 	ebeamID integer,
-- 	sputterID integer,
-- 	FOREIGN KEY (itemID) REFERENCES db_main(itemID)
-- )engine = myisam  default charset = utf8;

-- insert into db_recipe (itemID, ionID, ebeamID, sputterID) values (1, 1, 1, 1);
-- insert into db_recipe (itemID, ionID, ebeamID, sputterID) values (1, 1, 2, 2);
-- insert into db_recipe (itemID, ionID, ebeamID, sputterID) values (2, 2, 3, 3);
-- insert into db_recipe (itemID, ionID, ebeamID, sputterID) values (3, 3, 4, 4);

-- select * from db_ion where itemID = 1;


drop table if exists `db_ion`;
create table db_ion(
	ionID integer auto_increment primary key,
    itemID integer,
    min integer,
	flowrate float,
	totalflow float,
	filamentcurrent float,
	dischargecurrent float,
	dischargevoltage float,
	beamcurrent float,
	beamvoltage float,
	emissioncurrent_lower integer,
	emissioncurrent_upper integer,	
	FOREIGN KEY (itemID) REFERENCES db_main(itemID)
)engine = myisam  default charset = utf8;

insert into db_ion ( itemID, min, flowrate, totalflow, filamentcurrent, dischargecurrent, dischargevoltage, beamcurrent, beamvoltage, emissioncurrent_lower, emissioncurrent_upper) values (1, 2, 5.14, 5.14, 12.1, 23.1, 55.4, 32.3, 999, 142, 170);
insert into db_ion ( itemID, min, flowrate, totalflow, filamentcurrent, dischargecurrent, dischargevoltage, beamcurrent, beamvoltage, emissioncurrent_lower, emissioncurrent_upper) values (2, 2, 3.3, 3.2, 3.3, 3.2, 3.2, 3.3, 3.2, 3, 4);
insert into db_ion ( itemID, min, flowrate, totalflow, filamentcurrent, dischargecurrent, dischargevoltage, beamcurrent, beamvoltage, emissioncurrent_lower, emissioncurrent_upper) values (1, 2, 3.3, 3.2, 3.3, 3.2, 2.3, 3.3, 3.2, 3, 4);
insert into db_ion ( itemID, min, flowrate, totalflow, filamentcurrent, dischargecurrent, dischargevoltage, beamcurrent, beamvoltage, emissioncurrent_lower, emissioncurrent_upper) values (3, 2, 3.3, 3.2, 3.3, 3.2, 2.4, 3.3, 3.2, 3, 4);

drop table if exists `db_ebeam`;
create table db_ebeam(
	ebeamID integer auto_increment primary key,
	itemID integer,
	material varchar(5),
	thickness integer,
	rate float,
	power float,
	highvoltage float,
	emissioncurrent float,
	FOREIGN KEY (itemID) REFERENCES db_main(itemID)
)engine = myisam  default charset = utf8;
insert into db_ebeam (itemID, material, thickness, rate, power, highvoltage, emissioncurrent) values (1, 'au', 100, 3.3, 3.2, 3.4, 3.6);
insert into db_ebeam (itemID, material, thickness, rate, power, highvoltage, emissioncurrent) values (1, 'ti', 500, 3.3, 3.2, 3.4, 3.6);
insert into db_ebeam (itemID, material, thickness, rate, power, highvoltage, emissioncurrent) values (1, 'cu', 5000, 3.3, 3.2, 3.4, 3.6);


drop table if exists `db_sputter`;
create table db_sputter(
	sputterID integer auto_increment primary key,
	itemID integer,
	material varchar(5),
	premin integer,
	min integer,
	thickness integer,
	ig2pressure float,
	airflow float,
	sputterpressure_mtorr float,
	power float,
	voltage float,
	current float,
	FOREIGN KEY (itemID) REFERENCES db_main(itemID)
)engine = myisam  default charset = utf8;

insert into db_sputter (itemID, material, premin, min, thickness, ig2pressure, airflow, sputterpressure_mtorr, power, voltage, current) values (1, 'TiW', 5, 8, 500, 3.3,3.3,3.3,3.3,3.3,3.3);
insert into db_sputter (itemID, material, premin, min, thickness, ig2pressure, airflow, sputterpressure_mtorr, power, voltage, current) values (2, 'Nb', 5, 30, 2500, 3.3,3.3,3.3,3.3,3.3,3.3);
insert into db_sputter (itemID, material, premin, min, thickness, ig2pressure, airflow, sputterpressure_mtorr, power, voltage, current) values (3, 'Nb', 5, 30, 2500, 3.3,3.3,3.3,3.3,3.3,3.3);

drop table if exists `db_measurement`;
create table db_measurement(
	measurementID integer auto_increment primary key,
	itemID integer,
	substrate varchar(5),
	rsh float,
	tc1 float,
	tc2 float,
	ic float,
	rrr float,
	FOREIGN KEY (itemID) REFERENCES db_main(itemID)
)engine = myisam  default charset = utf8;

insert into db_measurement (itemID, substrate, rsh, tc1, tc2, ic, rrr) values (1, 'Si', 1.2, 8.1, 9.1, 10, 2.23);
insert into db_measurement (itemID, substrate, rsh, tc1, tc2, ic, rrr) values (1, 'SiO2', 1.2, 8.1, 9.1, 10, 2.23);
insert into db_measurement (itemID, substrate, rsh, tc1, tc2, ic, rrr) values (2, 'Glass', 1.2, 8.1, 9.1, 10, 2.23);

