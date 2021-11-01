use f32ee;

create table if not exists image (
	img_id int unsigned not null auto_increment primary key,
	p_id int unsigned not null,
	img_dir char(30));

create table if not exists user (
	u_id int unsigned not null auto_increment primary key,
	username char(50) not null,
	u_password char(50) not null,
	u_email char(50) not null);

create table if not exists cartItem (
	c_id int unsigned not null auto_increment primary key,
	u_id int unsigned not null,
	p_id int unsigned not null,
	quantity int unsigned);

create table if not exists category (
	c_id int unsigned not null auto_increment,
	p_id int unsigned not null,
	primary key(c_id,p_id));


CREATE TABLE IF NOT EXISTS product (
    p_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    p_name VARCHAR(30) NOT NULL,
    p_price DOUBLE NOT NULL,
    p_sht_desc VARCHAR(200) NOT NULL,
    p_lng_desc VARCHAR(500) NOT NULL
    );

insert into image values
	(110,11,'picture/prod-110.jpg'),
	(111,11,'picture/prod-111.jpg'),
	(112,11,'picture/prod-112.jpg'),
	(113,11,'picture/prod-113.jpg'),
	(120,12,'picture/prod-120.jpg'),
	(121,12,'picture/prod-121.jpg'),
	(130,13,'picture/prod-130.jpg'),
	(131,13,'picture/prod-131.jpg'),
	(140,14,'picture/prod-140.jpg'),
	(141,14,'picture/prod-141.jpg'),
	(142,14,'picture/prod-142.jpg'),
	(143,14,'picture/prod-143.jpg'),
	(210,21,'picture/prod-210.jpg'),
	(211,21,'picture/prod-211.jpg'),
	(220,22,'picture/prod-220.jpg'),
	(221,22,'picture/prod-221.jpg'),
	(230,23,'picture/prod-230.jpg'),
	(231,23,'picture/prod-231.jpg'),
	(310,31,'picture/prod-310.jpg'),
	(311,31,'picture/prod-311.jpg'),
	(320,32,'picture/prod-320.jpg'),
	(321,32,'picture/prod-321.jpg'),
	(322,32,'picture/prod-322.jpg'),
	(330,33,'picture/prod-330.jpg'),
	(331,33,'picture/prod-331.jpg'),
	(410,41,'picture/prod-410.jpg'),
	(411,41,'picture/prod-411.jpg'),
	(412,41,'picture/prod-412.jpg'),
	(420,42,'picture/prod-420.jpg'),
	(421,42,'picture/prod-421.jpg'),
	(422,42,'picture/prod-422.jpg'),
	(430,43,'picture/prod-430.jpg'),
	(431,43,'picture/prod-431.jpg'),
	(432,43,'picture/prod-432.jpg'),
	(433,43,'picture/prod-433.jpg'),
	(440,44,'picture/prod-440.jpg'),
	(441,44,'picture/prod-441.jpg'),
	(442,44,'picture/prod-442.jpg'),
	(510,51,'picture/prod-510.jpg'),
	(511,51,'picture/prod-511.jpg'),
	(512,51,'picture/prod-512.jpg'),
	(513,51,'picture/prod-513.jpg'),
	(520,52,'picture/prod-520.jpg'),
	(521,52,'picture/prod-521.jpg'),
	(522,52,'picture/prod-522.jpg'),
	(530,53,'picture/prod-530.jpg'),
	(531,53,'picture/prod-531.jpg'),
	(532,53,'picture/prod-532.jpg'),
	(540,54,'picture/prod-540.jpg'),
	(541,54,'picture/prod-541.jpg'),
	(610,61,'picture/prod-610.jpg'),
	(611,61,'picture/prod-611.jpg'),
	(620,62,'picture/prod-620.jpg'),
	(630,63,'picture/prod-631.jpg'),
	(631,63,'picture/prod-631.jpg'),
	(640,64,'picture/prod-640.jpg'),
	(641,64,'picture/prod-641.jpg');

insert into cartItem values
	(0,0,11,1),
	(1,0,21,1),
	(2,0,31,1),
	(3,0,41,1),
	(4,0,51,1),
	(5,0,61,1);

insert into category values
	(1,11),
	(1,12),
	(1,13),
	(1,14),
	(2,21),
	(2,22),
	(2,23),
	(3,31),
	(3,32),
	(3,33),
	(3,34),
	(4,41),
	(4,42),
	(4,43),
	(4,44),
	(5,51),
	(5,52),
	(5,53),
	(5,54),
	(6,61),
	(6,62),
	(6,63),
	(6,64);

INSERT INTO product values
(11,'BILLY',69,'Bookcase, white80x28x106 cm','It is estimated that every five seconds, one BILLY bookcase is sold somewhere in the world. Pretty impressive considering we launched BILLY in 1979. It’s the booklovers choice that never goes out of style'),
(12,'VEBJÖRN',249,'Desk, beige140x60 cm','Unleash creative thoughts and projects at this desk in a traditional style. Generous storage on open shelves and in drawers with practical label slots – to stay organized and have everything close at hand.Unleash creative thoughts and projects at this desk in a traditional style. Generous storage on open shelves and in drawers with practical label slots – to stay organized and have everything close at hand'),
(13,'LAGKAPTEN',596,'Desk and storage combination swivel chair','Make sure you have a great day at work – at home. This set has everything you need for a complete and functional workspace with a chair, desk and storage. Ready to use in a flash!'),
(14,'LÅNGFJÄLL',199,'Office chair, Gunnared dark grey/white','The gently curved lines accentuated by sewn details are kind to your body and pleasant to look at. Also, there’s a tilt and height-adjusting mechanism that’s built to outlast years of ups and downs.'),
(21,'KOPPLA',25.9,'6-way socket with switch, white1.5 m','6 sockets feed energy to electrical supplies and the switch turns everything off so no money is wasted in standby mode. KOPPLA series supports your electrical needs and gives you power where you need it.'),
(22,'SYMFONISK',179,'WiFi bookshelf speaker, white','Place the speaker horizontally or vertically, or mount it on the wall to use as a practical shelf. Also helps you to use your space optimally, while providing a rich sound that fills the entire room.'),
(23,'VINDRIKTNING', 16.9, 'Air quality sensor', 'Do you want to know more about the air you breath in your home? Check the air quality based on particles (PM2.5) with this stylish and easy-to-use sensor – perfect to combine with FÖRNUFTIG air purifier.'),
(31,'TERTIAL',14.9,'Work lamp, dark grey','TERTIAL work lamp was introduced in our range in 1998. The classic, steel design with adjustable arm and head makes it a perfect choice if you are looking for a flexible and effective reading light.'),
(32,'FORSÅ',29.9,'Work lamp, nickel-plated','Classic style work lamp in steel that will brighten up your day. The arm and shade are adjustable which makes it a great lamp for reading by the desk, bed or sofa.'),
(33,'HEKTAR',99,'Work lamp with wireless charging, dark grey',	'The simple, oversized metal shape is inspired by old lamps from places like factories and theatres. Used together, HEKTAR lamps support different activities and create a unified, rustic look in the room.'),
(34,'BAROMETER',49.9,'Work lamp, brass-colour',	'Brass-coloured work lamp in metal that shines from head to toe. A perfect choice for those who like a classic style and want to be able to direct the light where they like when working or reading.'),
(41,'NOJIG',1.5,'Organiser, plastic 20x25x10 cm','This slightly taller plastic box helps you make the best use of space on shelves and in drawers. Use one or several and combine different sizes to create a solution that suits your things.'),
(42,'SKÅDIS',35,'Pegboard, white76x56 cm','Great next to your carpenter''s bench but serves just as well in the bathroom, entrance or office, keeping smaller items close at hand. Add SKÅDIS accessories to create the best storage for your needs.'),
(43,'TJENA',4.9,'Magazine file, $2.45','Important papers and children''s drawings not organised? With a magazine file, things get organised quickly. Choose a colour you like and keep it, or let the creativity flow and create your own design.'),
(44,'TJOG',	7.9, 'Storage box with lid, 25x36x15 cm','In this box you can organise everything from paper and games to clothing accessories. A metal label holder and a textile-like surface make the box just as practical and durable as decorative.'),
(51,'GALANT',299,'Cabinet with doors, 80x120 cm','10 year guarantee. Read about the terms in the guarantee brochure.'),
(52,'IDÅSEN',349,'Cabinet with doors and drawers, beige80x47x119 cm','Use the robust IDÅSEN cabinet to store plenty of work things close to your workspace – while ROTHULT smart lock keeps papers and other items safe. Goes perfectly with other furniture in the IDÅSEN series.'),
(53,'BEKANT',379,'Storage unit on castors, mesh 61x101 cm','Roll it to wherever you need it. You can also use it as a reception desk thanks to the generous work surface. Durable and steady with a quality that will last for many years.'),
(54,'GALANT',1398,'Storage combination w sliding doors, white320x120 cm','Binders, folders, papers – an office can easily get cluttered if everything is visible. With storage behind sliding doors, you can easily reach everything while enjoying a calmer environment to work in.'),
(61,'TOTEBO',4.9,'Drawing pin','Steel, Copper-plated'),
(62,'SKRUTT',3.9,'Desk pad, 65x45 cm','EVA plastic, Polyethylene plastic'),
(63,'REJSA',4.9,'Box, metal9x17x7.5 cm','This small, durable metal storage box is reminiscent of storage from industries of the past. Now, just like then, the large opening makes it easy to find what you are looking for.'),
(64,'RISSLA',59,'Desk pad, black','This desk pad offers a smooth and elegant surface for working and protects your desk from dirt and scratches. The weight and the bent front edge keep the pad firmly in place.');