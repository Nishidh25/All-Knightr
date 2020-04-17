DROP TABLE tblproduct;

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` int(3) NOT NULL,
  `desc` varchar(2000) NOT NULL,
  `dev` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price` ,`desc`,`dev`,`date`,`platform`,`rating`,`size`) VALUES
(1, 'Cyberpunk 2077', 'G2077', 'product-images/cyberpunk.png', 2999 ,'Cyberpunk 2077 is an open-world, action-adventure story set in Night City, a megalopolis obsessed with power, glamour and body modification. You play as V, a mercenary outlaw going after a one-of-a-kind implant that is the key to immortality. You can customize your characters cyberware, skillset and playstyle, and explore a vast city where the choices you make shape the story and the world around you.',
	'CD Projekt RED','16 April 2020','PS4, Xbox One, PC','TBD','NA'),
(2, 'FIFA 20', 'FIFA20', 'product-images/fifa20.png', 3999 ,'Powered by Frostbite, EA SPORTS FIFA 20 for PC brings two sides of The World’s Game to life: the prestige of the professional stage and an all-new street football experience in EA SPORTS VOLTA FOOTBALL.',
    'Electronic Arts EA','24 September 2019','PS4, Xbox One, PC ,Switch','7.8/10','50 GB'),
(3, 'Borderlands 3', 'BORD3', 'product-images/borderlands3-cover.jpg', 4999,'At the hard edge of the galaxy lies a group of planets ruthlessly exploited by militarized corporations. Brimming with loot and violence, this is your home—the Borderlands. Now, a crazed cult known as The Children of the Vault has emerged and is spreading like an interstellar plague. Play solo or co-op as one of four unique Vault Hunters, score loads of loot, and save the galaxy from this fanatical threat.',
    'Gearbox Software','13 September 2019','PS4, Xbox One, PC','9/10','75 GB'),
(4, 'Anthem', 'A2019', 'product-images/anthem-cover.jpg', 3499,'On a world left unfinished by the gods, a shadowy faction threatens all of humankind. The only thing that stands between these villains and the ancient technology they covet are the Freelancers.',
    'BioWare','22 February 2019','PS4, Xbox One, PC','6.5/10','80 GB'),
(5, 'Star Wars Jedi: Fallen Order', 'SWJFO', 'product-images/starwars.jpg', 3499,'Star Wars Jedi: Fallen Order is an upcoming single-player action-adventure video game developed by Respawn Entertainment and published by Electronic Arts, set in the Star Wars universe shortly after Episode III – Revenge of the Sith',
    'Respawn Entertainment','15 November 2019','PS4, Xbox One, PC','TBD','NA'),
(6, 'Need for Speed Heat', 'NFSH', 'product-images/NFSH.png', 3999,'Hustle by day and risk it all at night in Need for Speed Heat .A thrilling race experience that pits you against a city’s rogue police force as you battle your way into street racing’s elite.',
    'Electronic Arts EA','8 November 2019','PS4, Xbox One, PC','TBD','NA');



ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);