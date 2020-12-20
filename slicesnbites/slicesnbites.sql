DATABASE NAME

sliceandbites

FOR TABLE 1

1.cart:

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
)

ALTER TABLE `cart`
  DROP `product_image`;

ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

FOR TABLE 2

2.orders:

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) 

ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;


FOR TABLE 3

3product:

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `discription` varchar(1000) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_code` varchar(50) NOT NULL,
  `product_price` varchar(100) NOT NULL
)

#PIZZA MENU#

INSERT INTO `product` (`id`,`image`,`category`, `product_name`,`discription`, `product_qty`, `product_code`,`product_price`)VALUES
('1','pi1.jpg','pizza','Magherita','A classic delight with 100% Real mozzarella cheese','01','pi1',' 99'),
('2','pi2.jpg','pizza','Farmhouse','Delightful combination of onion capsicum tomato & grilled mushroom','01','pi2','129'),
('3','pi3.jpg','pizza','Veggie Paradise','The awesome foursome! Golden corn black olives capsicum red paprika','01','pi3', '159'),
('4','pi4.jpg','pizza','Peppy Paneer','Flavorful trio of juicy paneer crisp capsicum with spicy red paprika','01','pi4','159'),
('5','pi5.jpg','pizza','Veggie Extravaganza','Black olives capsicum onion grilled mushroom corn tomato jalapeno & extra cheese','01','pi5','179'),
('6','pi6.jpg','pizza','Chicken Denominator','Loaded with double pepper barbecue chicken peri-peri chicken chicken tikka & grilled chicken rashers','01','pi6',' 199'),
('7','pi7.jpg','pizza','Non Veg Supreme','Supreme combination of black olives onion capsicum grilled mushroom pepper barbecue chicken peri-peri chicken & grilled chicken rashers',
'01','pi7', '229'),
('8','pi8.jpg','pizza','Chicken Fiesta', 'Grilled chicken rashers peri-peri chicken onion & capsicum a complete fiesta', '01','pi8','249');

#PASTA MENU#

INSERT INTO `product` (`id`,`image`, `category`,`product_name`,`discription`, `product_qty`, `product_code`,`product_price`)VALUES
('9','pa1.jpg','pasta','Creamy Tomato Pasta','Instant Fusilli Pasta Creamy Culinary Dressing Onion Olive Green Capsicum Parsley sprinkle','01','pa1','129'),
('10','pa2.jpg','pasta','Cheesy Jalapeno Pasta Veg','Instant Fusilli Pasta Cheesy Jalapeno Sauce Onion Jalapeno Parsley sprinkle', '01','pa2','129'),
('11','pa3.jpg','pasta','Tikka Masala Pasta Veg','Instant Fusilli Pasta Spicy Red dressing Onion Paneer Tikka Parsley sprinkle','01','pa3', '129'),
('12','pa4.jpg','pasta','Creamy Tomato Pasta Non Veg','Instant Fusilli Pasta Creamy Culinary Dressing Onion Olives BBQ Pepper Chicken Parsley
 sprinkle','01','pa4','139'),
('13','pa5.jpg','pasta','Cheesy Jalapeno Pasta Non Veg','Instant Fusilli Pasta Cheesy Jalapeno Sauce Onion Jalapeno BBQ Pepper Chicken Parsley 
sprinkle','01','pa5','159'),
('14','pa6.jpg','pasta','Tikka Masala Pasta Non Veg','Loaded with double pepper barbecue chicken peri-peri chicken chicken tikka & grilled chicken 
rashers','01','pa6','199'),
('15','pa7.jpg','pasta','Pasta Treat Specials','Veg Creamy Tomato Pasta + Veg Tikka Masala Pasta + Garlic Bread + Pepsi','01','pa7','359'),
('16','pa8.jpg','pasta','Pasta Pizza Party Specials','Med Creamy Tomato Pasta Pizza + Tikka Masala Pasta + Pepsi','01','pa8','299');


#SIDES MENU#

INSERT INTO `product` (`id`,`image`,`category`,`product_name`,`discription`, `product_qty`, `product_code`,`product_price`)VALUES

('17','s1.jpg','sides','French Fries (Reg)','Indulge in a taste of choiciest potatoes and perfect crisp','01','s1','59'),
('18','s2.jpg','sides','Potato Cheese Shots','Crisp and golden outside flavorful burst of cheese potato & spice inside','01','s2','69'),
('19','s3.jpg','sides','Crinkle Fries','Crispy wavy masala coated fries served with a spicy tomato chilli sauce','01','s3',' 69'),
('20','s4.jpg','sides','Taco Mexicana-Veg','Truly irresistible! Crispy taco with a delicious veg patty & creamy sauce','01','s4', '79'),
('21','s5.jpg','sides','Veg Parcel','Snacky bites! Pizza rolls with paneer & creamy harissa sauce','01','s5', '49'),
('22','s6.jpg','sides','Chicken Parcel','Snacky bites! Pizza rolls with chicken sausage & creamy harissa sauce','01','s6','69'),
('23','s7.jpg','sides','Butterscotch Mousse Cake','Sweet temptation! Butterscotch flavored mousse','01','s7','99'),
('24','s8.jpg','sides','Brownie Fantasy','Sweet Temptation! Hot Chocolate Brownie drizzled with chocolate fudge sauce','01','s8','99');

#DRINKS MENU#

INSERT INTO `product` (`id`,`image`,`category`,`product_name`,`discription`, `product_qty`, `product_code`,`product_price`)VALUES

('25','d1.jpg','drink','Iced Tea','Just chill! Cold tea with addition of sweetness on requirement','01','d1','59'),
('26','d2.jpg','drink','Rainbow Smoothie','A 7 layered smoothie! Not only fun to look at, but also delicious to drink','01','d2','119'),
('27','d3.jpg','drink','Blueberry Kiwi Mojito','Summer special! Fizzy and bubbly cocktail','01','d3','89'),
('28','d4.jpg','drink','Milkshake Tour','Combo of melted vanilla, chocolate, strawberry and mint','01','d4', '199');

#EXTRAS#
INSERT INTO `product` (`id`,`image`,`category`,`product_name`,`discription`, `product_qty`, `product_code`,`product_price`)VALUES

('29','e1.jpg','drink','Classic Stuffed Garlic Bread','Freshly baked garlic bread with cheese, juicy corn & tangy jalapeno.','01','e1','149'),
('30','e2.jpg','drink','Burger Pizza - Non Veg','Oven-baked buns with cheese, peri-peri chicken, tomato & capsicum in creamy mayo.','01','e2','149'),
('31','e3.jpg','drink','Indi Chicken Tikka','The wholesome flavour of tandoori masala with Chicken tikka, onion, red paprika & mint mayo.','01','e3','399'),
('32','e4.jpg','drink','Creamy Tomato Pasta Pizza  Non Veg','Loaded with a delicious pasta topping,BBQ chicken, capsicum, crunchy bell peppers.','01','e4', '359');


4.users

CREATE TABLE `slicesnbites`.`users` 
( `id` INT(5) NOT NULL AUTO_INCREMENT , 
`username` VARCHAR(10) NOT NULL , 
`email` VARCHAR(20) NOT NULL ,
 `password` VARCHAR(6) NOT NULL ,
  PRIMARY KEY (`id`)
  ) ENGINE = InnoDB; 
