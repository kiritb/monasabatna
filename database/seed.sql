#create Meta Data Event Types

	#event_types
	insert into event_types (name, created_by, updated_by)
	values('Food', 'v1@v.com','v1@v.com');

	insert into event_types (name, created_by, updated_by)
	values('Music', 'v1@v.com','v1@v.com');

	insert into event_types (name, created_by, updated_by)
	values('Marathon', 'v1@v.com','v1@v.com');

	insert into event_types (name, created_by, updated_by)
	values('Fair', 'v1@v.com','v1@v.com');


	#cities
	insert into cities (name,created_by,updated_by)
	values ('Abha','v1@v.com','v1@v.com');

	insert into cities (name,created_by,updated_by)
	values ('Ad-Dilam','v1@v.com','v1@v.com');

	insert into cities (name,created_by,updated_by)
	values ('Badr','v1@v.com','v1@v.com');


	#amenitie_types
	insert into amenitie_types(name,language_id,created_by,updated_by)
	values('Gym',1, 'v1@v.com', 'v1@v.com');

	insert into amenitie_types(name,language_id,created_by,updated_by)
	values('Swimming Pool',1, 'v1@v.com', 'v1@v.com');

	insert into amenitie_types(name,language_id,created_by,updated_by)
	values('Kids Play Area',1, 'v1@v.com', 'v1@v.com');


	#pricing types
	insert into pricing_type (name,created_by,updated_by)
	values('per person', 'v1@v.com', 'v1@v.com');

	insert into pricing_type (name,created_by,updated_by)
	values('per day', 'v1@v.com', 'v1@v.com');

# Create Vendors
insert into vendors ( vendor_name,fathers_name, family_name, email,license_no,created_by,updated_by)
values ('vendor1','v1', 'v1', 'v1@v.com', 'V1LLD1','v1@v.com', 'v1@v.com');

insert into vendors ( vendor_name,fathers_name, family_name, email,license_no,created_by,updated_by)
values ('vendor2','v2', 'v2', 'v2@v.com', 'V1LLD2', 'v2@v.com', 'v2@v.com');

#Create Vennues
insert into vennues (vendor_id,name,short_description,points,min_guest_cap,max_guest_cap,start_time,end_time,order_no,language_id,home_page_display,is_express_deal,rating,created_by,updated_by)
values (1,'Music Night', 'The Music of the Night" (also labeled as just "Music of the Night") is a major song. ', '8',50,200,'9 AM', '4 PM', 1,1,1,1,4, 'v1@v.com','v1@v.com');

insert into vennues (vendor_id,name,short_description,points,min_guest_cap,max_guest_cap,start_time,end_time,order_no,language_id,home_page_display,is_express_deal,rating,created_by,updated_by)
values (1,'Variety Food Night', 'The Variety Food of the Night" (also labeled as just "Variety  Food of the Night") is a major Food. ', '8',200, 1000, '9 PM', '4 AM', 2,1,1,1,5, 'v1@v.com','v1@v.com');

insert into vennues (vendor_id,name,short_description,points,min_guest_cap,max_guest_cap,start_time,end_time,order_no,language_id,home_page_display,is_express_deal,rating,created_by,updated_by)
values (1,'Sk Marathon', 'The SK Marathon" (also labeled as just "SK Marathon of the Night") is a major Marathon. ', '8',50,200,'6 AM', '9 PM', 3,1,1,1,4, 'v1@v.com','v1@v.com');

insert into vennues (vendor_id,name,short_description,points,min_guest_cap,max_guest_cap,start_time,end_time,order_no,language_id,home_page_display,is_express_deal,rating,created_by,updated_by)
values (1,'Summer Trade Fair', 'The Summer Trade Fair" (also labeled as just "Summer Trade Fair") is a major Trade Fair. ', '8',50,200,'9 AM', '9 PM', 4,1,1,1,4, 'v1@v.com','v1@v.com');

insert into vennues (vendor_id,name,short_description,points,min_guest_cap,max_guest_cap,start_time,end_time,order_no,language_id,home_page_display,is_express_deal,rating,created_by,updated_by)
values (1,'Winter Trade Fair', 'The Winter Trade Fair" (also labeled as just "Winter Trade Fair") is a major Trade Fair. ', '8',50,200,'9 AM', '9 PM', 5,1,0,0,4, 'v2@v.com','v2@v.com');

insert into vennues (vendor_id,name,short_description,points,min_guest_cap,max_guest_cap,start_time,end_time,order_no,language_id,home_page_display,is_express_deal,rating,created_by,updated_by)
values (1,'Spring Trade Fair', 'The Spring Trade Fair" (also labeled as just "Spring Trade Fair") is a major Trade Fair. ', '8',50,200,'9 AM', '9 PM', 6,1,0,0,4, 'v2@v.com','v2@v.com');
	
	#Create Address
	insert into address (linkable_id, linkable_type,address_line_1,google_map_link,city_id,created_by,updated_by)
	values (1,'vennues','123 XYZ Street','https://goo.gl/maps/XNv83vgHXyw', 1,'v1@v.com','v1@v.com');

	insert into address (linkable_id, linkable_type,address_line_1,google_map_link,city_id,created_by,updated_by)
	values (2,'vennues','456 XYZ Street','https://goo.gl/maps/XNv83vgHXyw', 1,'v1@v.com','v1@v.com');

	insert into address (linkable_id, linkable_type,address_line_1,google_map_link,city_id,created_by,updated_by)
	values (3,'vennues','789 XYZ Street','https://goo.gl/maps/XNv83vgHXyw', 1,'v1@v.com','v1@v.com');

	insert into address (linkable_id, linkable_type,address_line_1,google_map_link,city_id,created_by,updated_by)
	values (4,'vennues','111 XYZ Street','https://goo.gl/maps/XNv83vgHXyw', 1,'v1@v.com','v1@v.com');

	insert into address (linkable_id, linkable_type,address_line_1,google_map_link,city_id,created_by,updated_by)
	values (5,'vennues','222 XYZ Street','https://goo.gl/maps/XNv83vgHXyw', 1,'v1@v.com','v1@v.com');

	insert into address (linkable_id, linkable_type,address_line_1,google_map_link,city_id,created_by,updated_by)
	values (6,'vennues','333 XYZ Street','https://goo.gl/maps/XNv83vgHXyw', 1,'v1@v.com','v1@v.com');

	

	#create pricings
	insert into pricings (linkable_id,linkable_type,pricing_type_id,price,actual_price,created_by,updated_by)
	values (1,'vennues',1,100,100,'v1@v.com','v1@v.com');

	insert into pricings (linkable_id,linkable_type,pricing_type_id,price,actual_price,created_by,updated_by)
	values (2,'vennues',2,1000,1000,'v1@v.com','v1@v.com');

	insert into pricings (linkable_id,linkable_type,pricing_type_id,price,actual_price,created_by,updated_by)
	values (3,'vennues',2,800,800,'v1@v.com','v1@v.com');

	insert into pricings (linkable_id,linkable_type,pricing_type_id,price,actual_price,created_by,updated_by)
	values (4,'vennues',1,80,80,'v1@v.com','v1@v.com');

	insert into pricings (linkable_id,linkable_type,pricing_type_id,price,actual_price,created_by,updated_by)
	values (5,'vennues',1,70,70,'v1@v.com','v1@v.com');

	insert into pricings (linkable_id,linkable_type,pricing_type_id,price,actual_price,created_by,updated_by)
	values (6,'vennues',2,1200,1200,'v1@v.com','v1@v.com');

	#create images

	insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,order_no,created_by,updated_by)
	values(1,'vennues','http://localhost/monasabatna_web/public/svg/images/gallery-five.jpg','home_page_display','png',1,'v1@v.com','v1@v.com');

	insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,order_no,created_by,updated_by)
	values(2,'vennues','http://localhost/monasabatna_web/public/svg/images/gallery-four.jpg','home_page_display','png',1,'v1@v.com','v1@v.com');

	insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,order_no,created_by,updated_by)
	values(3,'vennues','http://localhost/monasabatna_web/public/svg/images/gallery-three.jpg','home_page_display','png',1,'v1@v.com','v1@v.com');

	insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,order_no,created_by,updated_by)
	values(4,'vennues','http://localhost/monasabatna_web/public/svg/images/gallery-two.jpg','home_page_display','png',1,'v1@v.com','v1@v.com');

	insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,order_no,created_by,updated_by)
	values(5,'vennues','localhost/monasabatna_web/public/svg/images/gallery-one.jpg','home_page_display','png',1,'v1@v.com','v1@v.com');

	insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,order_no,created_by,updated_by)
	values(6,'vennues','http://localhost/monasabatna_web/public/svg/images/event-portfolio-three.jpg','home_page_display','png',1,'v1@v.com','v1@v.com');


	#create ammenties
	insert into amenities ( linkable_id,linkable_type,amenitie_type_id,order_no,language_id,created_by,updated_by)
	values(1,'vennues',1,1,1,'v1@v.com','v1@v.com');

	insert into amenities ( linkable_id,linkable_type,amenitie_type_id,order_no,language_id,created_by,updated_by)
	values(1,'vennues',2,2,1,'v1@v.com','v1@v.com');

	insert into amenities ( linkable_id,linkable_type,amenitie_type_id,order_no,language_id,created_by,updated_by)
	values(2,'vennues',2,1,1,'v1@v.com','v1@v.com');

	insert into amenities ( linkable_id,linkable_type,amenitie_type_id,order_no,language_id,created_by,updated_by)
	values(2,'vennues',1,2,1,'v1@v.com','v1@v.com');

	insert into amenities ( linkable_id,linkable_type,amenitie_type_id,order_no,language_id,created_by,updated_by)
	values(3,'vennues',2,1,1,'v1@v.com','v1@v.com');

	insert into amenities ( linkable_id,linkable_type,amenitie_type_id,order_no,language_id,created_by,updated_by)
	values(3,'vennues',3,2,1,'v1@v.com','v1@v.com');

	insert into amenities ( linkable_id,linkable_type,amenitie_type_id,order_no,language_id,created_by,updated_by)
	values(3,'vennues',1,3,1,'v1@v.com','v1@v.com');

	insert into amenities ( linkable_id,linkable_type,amenitie_type_id,order_no,language_id,created_by,updated_by)
	values(4,'vennues',1,1,1,'v1@v.com','v1@v.com');

	insert into amenities ( linkable_id,linkable_type,amenitie_type_id,order_no,language_id,created_by,updated_by)
	values(4,'vennues',2,2,1,'v1@v.com','v1@v.com');

	insert into amenities ( linkable_id,linkable_type,amenitie_type_id,order_no,language_id,created_by,updated_by)
	values(5,'vennues',1,1,1,'v1@v.com','v1@v.com');

	insert into amenities ( linkable_id,linkable_type,amenitie_type_id,order_no,language_id,created_by,updated_by)
	values(5,'vennues',3,2,1,'v1@v.com','v1@v.com');

	insert into amenities ( linkable_id,linkable_type,amenitie_type_id,order_no,language_id,created_by,updated_by)
	values(6,'vennues',3,1,1,'v1@v.com','v1@v.com');

	insert into amenities ( linkable_id,linkable_type,amenitie_type_id,order_no,language_id,created_by,updated_by)
	values(6,'vennues',1,2,1,'v1@v.com','v1@v.com');


	#policies
	insert into policies (linkable_id,linkable_type,terms_header,terms,order_no,created_by,updated_by)
	values(1,'vennues','Your Agreement', 'By using this Site, you agree to be bound by, and to comply with, these Terms and Conditions. If you do not agree to these Terms and Conditions, please do not use this site.',1,'v1@v.com','v1@v.com');

	insert into policies (linkable_id,linkable_type,terms_header,terms,order_no,created_by,updated_by)
	values(1,'vennues','Privacy', 'Please review our Privacy Policy, which also governs your visit to this Site, to understand our practices.',2,'v1@v.com','v1@v.com');

	insert into policies (linkable_id,linkable_type,terms_header,terms,order_no,created_by,updated_by)
	values(1,'vennues','Copyright and trademark notice', 'Except our generated dummy copy, which is free to use for private and commercial use, all other text is copyrighted.',3,'v1@v.com','v1@v.com');

	insert into policies (linkable_id,linkable_type,terms_header,terms,order_no,created_by,updated_by)
	values(2,'vennues','Your Agreement', 'By using this Site, you agree to be bound by, and to comply with, these Terms and Conditions. If you do not agree to these Terms and Conditions, please do not use this site.',1,'v1@v.com','v1@v.com');

	insert into policies (linkable_id,linkable_type,terms_header,terms,order_no,created_by,updated_by)
	values(2,'vennues','Privacy', 'Please review our Privacy Policy, which also governs your visit to this Site, to understand our practices.',2,'v1@v.com','v1@v.com');

	insert into policies (linkable_id,linkable_type,terms_header,terms,order_no,created_by,updated_by)
	values(2,'vennues','Copyright and trademark notice', 'Except our generated dummy copy, which is free to use for private and commercial use, all other text is copyrighted.',3,'v1@v.com','v1@v.com');


	insert into policies (linkable_id,linkable_type,terms_header,terms,order_no,created_by,updated_by)
	values(3,'vennues','Your Agreement', 'By using this Site, you agree to be bound by, and to comply with, these Terms and Conditions. If you do not agree to these Terms and Conditions, please do not use this site.',1,'v1@v.com','v1@v.com');

	insert into policies (linkable_id,linkable_type,terms_header,terms,order_no,created_by,updated_by)
	values(3,'vennues','Privacy', 'Please review our Privacy Policy, which also governs your visit to this Site, to understand our practices.',2,'v1@v.com','v1@v.com');

	insert into policies (linkable_id,linkable_type,terms_header,terms,order_no,created_by,updated_by)
	values(3,'vennues','Copyright and trademark notice', 'Except our generated dummy copy, which is free to use for private and commercial use, all other text is copyrighted.',3,'v1@v.com','v1@v.com');


	insert into policies (linkable_id,linkable_type,terms_header,terms,order_no,created_by,updated_by)
	values(4,'vennues','Your Agreement', 'By using this Site, you agree to be bound by, and to comply with, these Terms and Conditions. If you do not agree to these Terms and Conditions, please do not use this site.',1,'v1@v.com','v1@v.com');

	insert into policies (linkable_id,linkable_type,terms_header,terms,order_no,created_by,updated_by)
	values(4,'vennues','Privacy', 'Please review our Privacy Policy, which also governs your visit to this Site, to understand our practices.',2,'v1@v.com','v1@v.com');

	insert into policies (linkable_id,linkable_type,terms_header,terms,order_no,created_by,updated_by)
	values(4,'vennues','Copyright and trademark notice', 'Except our generated dummy copy, which is free to use for private and commercial use, all other text is copyrighted.',3,'v1@v.com','v1@v.com');

	insert into policies (linkable_id,linkable_type,terms_header,terms,order_no,created_by,updated_by)
	values(5,'vennues','Your Agreement', 'By using this Site, you agree to be bound by, and to comply with, these Terms and Conditions. If you do not agree to these Terms and Conditions, please do not use this site.',1,'v1@v.com','v1@v.com');

	insert into policies (linkable_id,linkable_type,terms_header,terms,order_no,created_by,updated_by)
	values(5,'vennues','Privacy', 'Please review our Privacy Policy, which also governs your visit to this Site, to understand our practices.',2,'v1@v.com','v1@v.com');

	insert into policies (linkable_id,linkable_type,terms_header,terms,order_no,created_by,updated_by)
	values(5,'vennues','Copyright and trademark notice', 'Except our generated dummy copy, which is free to use for private and commercial use, all other text is copyrighted.',3,'v1@v.com','v1@v.com');

	insert into policies (linkable_id,linkable_type,terms_header,terms,order_no,created_by,updated_by)
	values(6,'vennues','Your Agreement', 'By using this Site, you agree to be bound by, and to comply with, these Terms and Conditions. If you do not agree to these Terms and Conditions, please do not use this site.',1,'v1@v.com','v1@v.com');

	insert into policies (linkable_id,linkable_type,terms_header,terms,order_no,created_by,updated_by)
	values(6,'vennues','Privacy', 'Please review our Privacy Policy, which also governs your visit to this Site, to understand our practices.',2,'v1@v.com','v1@v.com');

	insert into policies (linkable_id,linkable_type,terms_header,terms,order_no,created_by,updated_by)
	values(6,'vennues','Copyright and trademark notice', 'Except our generated dummy copy, which is free to use for private and commercial use, all other text is copyrighted.',3,'v1@v.com','v1@v.com');

	#reviews
	insert into reviews (user_id,linkable_id,linkable_type,review_comment,rating,is_approved,created_by,updated_by)
	values(1,1,'vennues','A very good venue for party. all the servies provided were just perfect',4,1,'v1@v.com','v1@v.com');

	insert into reviews (user_id,linkable_id,linkable_type,review_comment,rating,is_approved,created_by,updated_by)
	values(1,2,'vennues','A very good venue for party. all the servies provided were just perfect',4,1,'v1@v.com','v1@v.com');

	insert into reviews (user_id,linkable_id,linkable_type,review_comment,rating,is_approved,created_by,updated_by)
	values(1,3,'vennues','A very good venue for party. all the servies provided were just perfect',4,1,'v1@v.com','v1@v.com');

	insert into reviews (user_id,linkable_id,linkable_type,review_comment,rating,is_approved,created_by,updated_by)
	values(1,4,'vennues','A very good venue for party. all the servies provided were just perfect',4,1,'v1@v.com','v1@v.com');

	insert into reviews (user_id,linkable_id,linkable_type,review_comment,rating,is_approved,created_by,updated_by)
	values(1,4,'vennues','A very good venue for party. all the servies provided were just perfect',4,1,'v1@v.com','v1@v.com');

	insert into reviews (user_id,linkable_id,linkable_type,review_comment,rating,is_approved,created_by,updated_by)
	values(1,6,'vennues','A very good venue for party. all the servies provided were just perfect',4,1,'v1@v.com','v1@v.com');

#Create Events with and without Express deals

insert into events ( vendor_id, name ,event_type_id, short_description,start_date,end_date,order_no,language_id,is_express_deal,home_page_display,created_by,updated_by )
values (1, 'Music Night',2,'The Music of the Night" (also labeled as just "Music of the Night") is a major song. ', '2018-12-31' , '2018-12-31',1,1,1,1,'v1@v.com','v1@v.com');  

insert into events ( vendor_id, name ,event_type_id, short_description,start_date,end_date,order_no,language_id,is_express_deal,home_page_display,created_by,updated_by )
values (1, 'Variety Food Night',1,'The Variety Food Night" (also labeled as just "Variety Food Night") is a major Food Night. ', '2019-01-01' , '2019-01-03',2,1,1,1,'v1@v.com','v1@v.com');  

insert into events ( vendor_id, name ,event_type_id, short_description,start_date,end_date,order_no,language_id,is_express_deal,home_page_display,created_by,updated_by )
values (1, 'Winter Trade Fair',4,'Winter Trade Fair" (also labeled as just "Winter Trade Fair") is a major Trade Fair. ', '2018-01-18' , '2018-01-21',3,1,1,0,'v1@v.com','v1@v.com');  

insert into events ( vendor_id, name ,event_type_id, short_description,start_date,end_date,order_no,language_id,is_express_deal,home_page_display,created_by,updated_by )
values (1, 'Sk Marathon',3,'The Sk Marathon" (also labeled as just "Sk Marathon") is a Major Marathon. ', '2018-12-25' , '2018-12-25',4,1,1,1,'v1@v.com','v1@v.com');  

insert into events ( vendor_id, name ,event_type_id, short_description,start_date,end_date,order_no,language_id,is_express_deal,home_page_display,created_by,updated_by )
values (2, 'Summer Trade Fair',4,'Summer Trade Fair" (also labeled as just "Summer Trade Fair") is a Trade Fair. ', '2018-12-01' , '2018-12-01',5,1,1,1,'v2@v.com','v2@v.com');  

insert into events ( vendor_id, name ,event_type_id, short_description,start_date,end_date,order_no,language_id,is_express_deal,home_page_display,created_by,updated_by )
values (1, 'Spring Trade Fair',2,'The Spring Trade Fair" (also labeled as just "Spring Trade Fair") is a major Spring Trade Fair. ', '2019-04-30' , '2019-04-30',6,1,0,0,'v2@v.com','v2@v.com');

	#address
	insert into address (linkable_id, linkable_type,address_line_1,google_map_link,city_id,created_by,updated_by)
	values (1,'events','123 XYZ Street','https://goo.gl/maps/XNv83vgHXyw', 1,'v1@v.com','v1@v.com');

	insert into address (linkable_id, linkable_type,address_line_1,google_map_link,city_id,created_by,updated_by)
	values (2,'events','456 XYZ Street','https://goo.gl/maps/XNv83vgHXyw', 1,'v1@v.com','v1@v.com');

	insert into address (linkable_id, linkable_type,address_line_1,google_map_link,city_id,created_by,updated_by)
	values (3,'events','789 XYZ Street','https://goo.gl/maps/XNv83vgHXyw', 1,'v1@v.com','v1@v.com');

	insert into address (linkable_id, linkable_type,address_line_1,google_map_link,city_id,created_by,updated_by)
	values (4,'events','111 XYZ Street','https://goo.gl/maps/XNv83vgHXyw', 1,'v1@v.com','v1@v.com');

	insert into address (linkable_id, linkable_type,address_line_1,google_map_link,city_id,created_by,updated_by)
	values (5,'events','222 XYZ Street','https://goo.gl/maps/XNv83vgHXyw', 1,'v1@v.com','v1@v.com');

	insert into address (linkable_id, linkable_type,address_line_1,google_map_link,city_id,created_by,updated_by)
	values (6,'events','333 XYZ Street','https://goo.gl/maps/XNv83vgHXyw', 1,'v1@v.com','v1@v.com');

	#Pricings
	insert into pricings (linkable_id,linkable_type,pricing_type_id,price,actual_price,created_by,updated_by)
	values (1,'events',1,100,100,'v1@v.com','v1@v.com');

	insert into pricings (linkable_id,linkable_type,pricing_type_id,price,actual_price,created_by,updated_by)
	values (2,'events',2,1000,1000,'v1@v.com','v1@v.com');

	insert into pricings (linkable_id,linkable_type,pricing_type_id,price,actual_price,created_by,updated_by)
	values (3,'events',2,800,800,'v1@v.com','v1@v.com');

	insert into pricings (linkable_id,linkable_type,pricing_type_id,price,actual_price,created_by,updated_by)
	values (4,'events',1,80,80,'v1@v.com','v1@v.com');

	insert into pricings (linkable_id,linkable_type,pricing_type_id,price,actual_price,created_by,updated_by)
	values (5,'events',1,70,70,'v1@v.com','v1@v.com');

	insert into pricings (linkable_id,linkable_type,pricing_type_id,price,actual_price,created_by,updated_by)
	values (6,'events',2,1200,1200,'v1@v.com','v1@v.com');

	#images
	insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,order_no,created_by,updated_by)
	values(1,'events','http://localhost/monasabatna_web/public/svg/images/event-portfolio-one.jpg','home_page_display','png',1,'v1@v.com','v1@v.com');

	insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,order_no,created_by,updated_by)
	values(2,'events','http://localhost/monasabatna_web/public/svg/images/event-portfolio-five.jpg','home_page_display','png',1,'v1@v.com','v1@v.com');

	insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,order_no,created_by,updated_by)
	values(3,'events','http://localhost/monasabatna_web/public/svg/images/event-portfolio-nine.jpg','home_page_display','png',1,'v1@v.com','v1@v.com');

	insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,order_no,created_by,updated_by)
	values(4,'events','http://localhost/monasabatna_web/public/svg/images/event-portfolio-seven.jpg','home_page_display','png',1,'v1@v.com','v1@v.com');

	insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,order_no,created_by,updated_by)
	values(5,'events','http://localhost/monasabatna_web/public/svg/images/event-portfolio-four.jpg','home_page_display','png',1,'v1@v.com','v1@v.com');

	insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,order_no,created_by,updated_by)
	values(6,'events','http://localhost/monasabatna_web/public/svg/images/event-portfolio-three.jpg','home_page_display','png',1,'v1@v.com','v1@v.com');

#our partners
insert into partners ( name,order_no,home_page_display,created_by,updated_by)
values('Four Seasons',1,1,'v1@v.com','v1@v.com');

insert into partners ( name,order_no,home_page_display,created_by,updated_by)
values('Marriott',2,1,'v1@v.com','v1@v.com');

insert into partners ( name,order_no,home_page_display,created_by,updated_by)
values('Golden Tulip',3,1,'v1@v.com','v1@v.com');

insert into partners ( name,order_no,home_page_display,created_by,updated_by)
values('Ibis',4,1,'v1@v.com','v1@v.com');

insert into partners ( name,order_no,home_page_display,created_by,updated_by)
values('InterContinental',5,1,'v1@v.com','v1@v.com');

insert into partners ( name,order_no,home_page_display,created_by,updated_by)
values('ITC',6,0,'v1@v.com','v1@v.com');

	#files
	insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,order_no,created_by,updated_by)
	values(1,'partners','http://localhost/monasabatna_web/public/svg/images/adv1.png','home_page_display','png',1,'v1@v.com','v1@v.com');

	insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,order_no,created_by,updated_by)
	values(2,'partners','http://localhost/monasabatna_web/public/svg/images/adv4.png','home_page_display','png',1,'v1@v.com','v1@v.com');

	insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,order_no,created_by,updated_by)
	values(3,'partners','http://localhost/monasabatna_web/public/svg/images/adv2.png','home_page_display','png',1,'v1@v.com','v1@v.com');

	insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,order_no,created_by,updated_by)
	values(4,'partners','http://localhost/monasabatna_web/public/svg/images/footimg2.png','home_page_display','png',1,'v1@v.com','v1@v.com');

	insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,order_no,created_by,updated_by)
	values(5,'partners','http://localhost/monasabatna_web/public/svg/images/adv3.png','home_page_display','png',1,'v1@v.com','v1@v.com');



#testimonials
insert into testimonials(user_id,testimonial,is_approved,created_by,updated_by)
values (1,'
Using lorem ipsum to focus attention on graphic elements in a webpage design proposal
In publishing and graphic design, lorem ipsum is a placeholder text used to demonstrate the visual form of a document without relying on meaningful content (also called greeking). Replacing the actual content with placeholder text allows designers to design the form of the content before the content itself has been produced.',1, 'v1@v.com', 'v1@v.com');

insert into testimonials(user_id,testimonial,is_approved,created_by,updated_by)
values (2,'
Using lorem ipsum to focus attention on graphic elements in a webpage design proposal
In publishing and graphic design, lorem ipsum is a placeholder text used to demonstrate the visual form of a document without relying on meaningful content (also called greeking). Replacing the actual content with placeholder text allows designers to design the form of the content before the content itself has been produced.',1, 'v1@v.com', 'v1@v.com');


insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,created_by,updated_by)
values(1,'users','http://localhost/monasabatna_web/public/svg/images/testipic.png','user_image','png','v1@v.com','v1@v.com');

insert into files(linkable_id,linkable_type,file_path,file_type,file_extension,created_by,updated_by)
values(2,'users','http://localhost/monasabatna_web/public/svg/images/testi-about2.png','user_image','png','v1@v.com','v1@v.com');

#event organisers
insert into event_organisers( vendor_id,name,no_of_themes,short_description,order_no,rating,fb_link,twitter_link,created_by,updated_by)
values(1,'Kirit Bellubbi',8,'The Spring Trade Fair" (also labeled as just "Spring Trade Fair") is a major Spring Trade Fair. ', 1 , 4.2, 'https://www.facebook.com/Shake-It-Off-213865949349546/','https://twitter.com/ibonpereztv/status/1069178516028178433?','v1@v.com', 'v1@v.com');
