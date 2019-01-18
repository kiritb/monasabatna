DROP DATABASE IF EXISTS evms;

CREATE DATABASE evms;

DROP TABLE IF EXISTS evms.users;
create table evms.users(
  id int(11) NOT NULL AUTO_INCREMENT,
  first_name varchar(256) NOT NULL,
  fathers_name varchar(256) NOT NULL,
  family_name varchar(256) NOT NULL,
  email varchar(256) NOT NULL,
  password text NOT NULL,
  remember_token varchar(100) DEFAULT NULL,
  account_verified_at datetime DEFAULT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY email (email,status)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.vendors;
CREATE TABLE evms.vendors
(
  id  int(11) NOT NULL AUTO_INCREMENT,
  vendor_name varchar(256) NOT NULL,
  fathers_name varchar(256) NOT NULL,
  family_name varchar(256) DEFAULT NULL,
  email varchar(30) NOT NULL,
  accessToken varchar(32) DEFAULT NULL,
  license_no varchar(256) NOT NULL,
  expiry_date datetime DEFAULT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY email (email,status)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.address;
CREATE TABLE evms.address
(
  id int(11) NOT NULL AUTO_INCREMENT,
  linkable_id int(11) NOT NULL,
  linkable_type varchar(30) NOT NULL,
  address_line_1 text NOT NULL,
  address_line_2 text DEFAULT NULL,
  google_map_link text DEFAULT NULL,
  city_id int(11) DEFAULT NULL,
  country_id int(11) DEFAULT NULL,
  is_default tinyint(1) NOT NULL DEFAULT 0,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.phones;
CREATE TABLE evms.phones
(
  id int(11) NOT NULL AUTO_INCREMENT,
  linkable_id int(11) NOT NULL,
  linkable_type varchar(30) NOT NULL,
  country_code varchar(50) NOT NULL,
  phone_number varchar(10) NOT NULL,
  is_default tinyint(1) NOT NULL DEFAULT 0,
  is_landline tinyint(1) NOT NULL DEFAULT 0,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY email (phone_number)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.event_types;
create table evms.event_types(
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(256) NOT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
  
DROP TABLE IF EXISTS evms.vennues;
CREATE TABLE evms.vennues
(
  id int(11) NOT NULL AUTO_INCREMENT,
  vendor_id int(11) NOT NULL,
  name varchar(256) NOT NULL,
  short_description text NOT NULL,
  long_description text DEFAULT NULL,
  points varchar(10) DEFAULT NULL,
  min_guest_cap int(11) NOT NULL,
  max_guest_cap int(11) NOT NULL,
  start_time varchar(256) NOT NULL,
  end_time varchar(256) NOT NULL,
  transacton_count int(11) NOT NULL DEFAULT 0,
  order_no int(11) DEFAULT NULL,
  home_page_display tinyint(1) NOT NULL DEFAULT 0,
  is_express_deal tinyint(1) NOT NULL DEFAULT 0,
  fb_link text DEFAULT NULL,
  twitter_link text DEFAULT NULL,
  rating decimal(10,1) NOT NULL DEFAULT 0,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (vendor_id) REFERENCES vennues(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS evms.vennue_types;
CREATE TABLE evms.vennue_types
(
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(256) NOT NULL,
  short_description text DEFAULT NULL,
  order_no int(11) DEFAULT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS evms.room_types;
CREATE TABLE evms.room_types
(
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(256) NOT NULL,
  order_no int(11) DEFAULT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS evms.vennue_room_mapping;
CREATE TABLE evms.vennue_room_mapping
(
  id int(11) NOT NULL AUTO_INCREMENT,
  room_type_id int(11) NOT NULL,
  vennue_id int(11) NOT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (room_type_id) REFERENCES room_types(id),
  FOREIGN KEY (vennue_id) REFERENCES vennues(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.vennue_type_mapping;
CREATE TABLE evms.vennue_type_mapping
(
  id int(11) NOT NULL AUTO_INCREMENT,
  venue_type_id int(11) NOT NULL,
  vennue_id int(11) NOT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (venue_type_id) REFERENCES vennue_types(id),
  FOREIGN KEY (vennue_id) REFERENCES vennues(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS evms.vennue_event_mapping;
CREATE TABLE evms.vennue_event_mapping
(
  id int(11) NOT NULL AUTO_INCREMENT,
  event_type_id int(11) NOT NULL,
  vennue_id int(11) NOT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (event_type_id) REFERENCES event_types(id),
  FOREIGN KEY (vennue_id) REFERENCES vennues(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS evms.events;
create table evms.events(
  id int(11) NOT NULL AUTO_INCREMENT,
  vendor_id int(11) NOT NULL,
  name varchar(256) NOT NULL,
  event_type_id int(11) NOT NULL,
  short_description text DEFAULT NULL,
  start_date datetime NOT NULL,
  end_date datetime NOT NULL,
  order_no int(11) DEFAULT NULL,
  is_express_deal tinyint(1) NOT NULL DEFAULT 0,
  home_page_display tinyint(1) NOT NULL DEFAULT 0,
  rating decimal(10,1) NOT NULL DEFAULT 0,
  fb_link text DEFAULT NULL,
  twitter_link text DEFAULT NULL,
  booking_last_date datetime NOT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (vendor_id) REFERENCES vennues(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.event_organisers;
create table evms.event_organisers(
  id int(11) NOT NULL AUTO_INCREMENT,
  vendor_id int(11) NOT NULL,
  name varchar(256) NOT NULL,
  short_description text DEFAULT NULL,
  order_no int(11) DEFAULT NULL,
  prior_intimation_days int(5) NOT NULL,
  is_express_deal tinyint(1) NOT NULL DEFAULT 0,
  rating decimal(10,1) NOT NULL DEFAULT 0,
  fb_link text DEFAULT NULL,
  twitter_link text DEFAULT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (vendor_id) REFERENCES vennues(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.packages;
create table evms.packages(
  id int(11) NOT NULL AUTO_INCREMENT,
  event_type_id int(11) NOT NULL,
  linkable_id int(11) NOT NULL,
  linkable_type varchar(256) NOT NULL,
  name varchar(256) NOT NULL,
  short_description text DEFAULT NULL,
  set_up_time varchar(256) NOT NULL,
  note text DEFAULT NULL,
  order_no int(11) DEFAULT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (event_type_id) REFERENCES event_types(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.providers;
create table evms.providers(
  id int(11) NOT NULL AUTO_INCREMENT,
  linkable_id int(11) NOT NULL,
  linkable_type varchar(30) NOT NULL,
  provider_desc text NOT NULL,
  order_no int(11) DEFAULT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.prerequisites;
create table evms.prerequisites(
  id int(11) NOT NULL AUTO_INCREMENT,
  linkable_id int(11) NOT NULL,
  linkable_type varchar(30) NOT NULL,
  prerequisite_text text NOT NULL,
  order_no int(11) DEFAULT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.supplier_product_types;
create table evms.supplier_product_types(
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(256) NOT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS evms.supplier_types;
create table evms.supplier_types(
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(256) NOT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.suppliers;
create table evms.suppliers(
  id int(11) NOT NULL AUTO_INCREMENT,
  vendor_id int(11) NOT NULL,
  supplier_type_id int(11) NOT NULL,
  name varchar(256) NOT NULL,
  short_description text DEFAULT NULL,
  long_description text DEFAULT NULL,
  order_no int(11) DEFAULT NULL,
  rating decimal(10,1) NOT NULL DEFAULT 0,
  fb_link text DEFAULT NULL,
  twitter_link text DEFAULT NULL,
  is_express_deal tinyint(1) NOT NULL DEFAULT 0,
  prior_intimation_days int(5) NOT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (vendor_id) REFERENCES vennues(id),
  FOREIGN KEY (supplier_type_id) REFERENCES supplier_types(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.supplier_product_mapping;
CREATE TABLE evms.supplier_product_mapping
(
  id int(11) NOT NULL AUTO_INCREMENT,
  package_id int(11) NOT NULL,
  supplier_product_id int(11) NOT NULL,
  order_no int(11) DEFAULT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (package_id) REFERENCES packages(id),
  FOREIGN KEY (supplier_product_id) REFERENCES supplier_product_types(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS evms.amenitie_types;
create table evms.amenitie_types(
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(256) NOT NULL,
  short_description text  DEFAULT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS evms.amenities;
create table evms.amenities(
  id int(11) NOT NULL AUTO_INCREMENT,
  linkable_id int(11) NOT NULL,
  linkable_type varchar(30) NOT NULL,
  amenitie_type_id int(11) NOT NULL,
  order_no int(11) DEFAULT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (amenitie_type_id) REFERENCES amenitie_types(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.services_types;
create table evms.services_types(
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(256) NOT NULL,
  short_description text  DEFAULT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.services;
create table evms.services(
  id int(11) NOT NULL AUTO_INCREMENT,
  service_type_id int(11) NOT NULL,
  linkable_id int(11) NOT NULL,
  linkable_type varchar(30) NOT NULL,
  status int(1) NOT NULL DEFAULT 1,
  order_no int(11) DEFAULT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (service_type_id) REFERENCES services_types(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.services_menu;
create table evms.services_menu(
  id int(11) NOT NULL AUTO_INCREMENT,
  service_id int(11) NOT NULL,
  name varchar(256) NOT NULL,
  order_no int(11) DEFAULT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (service_id) REFERENCES services(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS evms.files;
create table evms.files(
  id int(11) NOT NULL AUTO_INCREMENT,
  linkable_id int(11) NOT NULL,
  linkable_type varchar(30) NOT NULL,
  file_path varchar(256) NOT NULL,
  file_type varchar(256) NOT NULL,
  file_extension varchar(256) DEFAULT NULL,
  status int(1) NOT NULL DEFAULT 1,
  order_no int(11) DEFAULT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.contact_emails;
create table evms.contact_emails(
  id int(11) NOT NULL AUTO_INCREMENT,
  linkable_id int(11) NOT NULL,
  linkable_type varchar(30) NOT NULL,
  email varchar(256) NOT NULL,
  status int(1) NOT NULL DEFAULT 1,
  order_no int(11) DEFAULT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.cities;
create table evms.cities(
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(64) NOT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.pricing_type;
create table evms.pricing_type(
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(30) NOT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.payment_type;
create table evms.payment_type(
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(30) NOT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.pricings;
create table evms.pricings(
  id int(11) NOT NULL AUTO_INCREMENT,
  linkable_id int(11) NOT NULL,
  linkable_type varchar(30) NOT NULL,
  pricing_type_id int(11) NOT NULL,
  payment_type_id int(11) DEFAULT NULL,
  price decimal(10,2) NOT NULL,
  discount decimal(10,2) DEFAULT NULL,
  actual_price decimal(10,2) NOT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (pricing_type_id) REFERENCES pricing_type(id),
  FOREIGN KEY (payment_type_id) REFERENCES payment_type(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS evms.orders;
create table evms.orders(
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  order_no varchar(6) NOT NULL,
  linkable_id int(11) NOT NULL,
  linkable_type varchar(30) NOT NULL,
  voucher_id int(11) DEFAULT NULL,
  pricing_type_id int(11) NOT NULL,
  payment_type_id int(11) DEFAULT NULL,
  voucher_amount decimal(10,2) DEFAULT NULL,
  totalAmount decimal(10,2) NOT NULL,
  discountedAmount decimal(10,2) NOT NULL,
  netTotal decimal(10,2) NOT NULL,
  taxAmount decimal(10,2) NOT NULL,
  taxPercent decimal(10,2) NOT NULL,
  serviceFee decimal(10,2) NOT NULL,
  servicePercent decimal(10,2) NOT NULL,
  booking_from_date datetime NOT NULL,
  booking_to_date datetime NOT NULL,
  is_payment_done tinyint NOT NULL DEFAULT 0,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (pricing_type_id) REFERENCES pricing_type(id),
  FOREIGN KEY (payment_type_id) REFERENCES payment_type(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS evms.client_creds;
create table evms.client_creds(
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(30) NOT NULL,
  code varchar(4) NOT NULL,
  secret_key  varchar(16) NOT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS evms.partners;
create table evms.partners(
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(30) NOT NULL,
  order_no int(11) DEFAULT NULL,
  home_page_display tinyint(1) NOT NULL DEFAULT 0,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS evms.reviews;
create table evms.reviews(
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  linkable_id int(11) NOT NULL,
  linkable_type varchar(30) NOT NULL,
  review_comment text DEFAULT NULL,
  rating int(11) DEFAULT NULL,
  is_approved tinyint(1) NOT NULL DEFAULT 1,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS evms.testimonials;
create table evms.testimonials(
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  testimonial text DEFAULT NULL,
  is_approved tinyint(1) NOT NULL DEFAULT 1,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS evms.sms_otp;
create table evms.sms_otp(
  id int(11) NOT NULL AUTO_INCREMENT,
  user_id int(11) NOT NULL,
  otp int(4) NOT NULL,
  otp_type int(11) NOT NULL,
  sms_text text NOT NULL,
  sms_sent tinyint(1) NOT NULL DEFAULT 0,
  expiry_date datetime NOT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS evms.policies;
create table evms.policies(
  id int(11) NOT NULL AUTO_INCREMENT,
  linkable_id int(11) NOT NULL,
  linkable_type varchar(30) NOT NULL,
  terms_header text NOT NULL,
  terms text DEFAULT NULL,
  order_no int(11) DEFAULT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS evms.filters;
create table evms.filters(
  id int(11) NOT NULL AUTO_INCREMENT,
  linkable_type varchar(30) NOT NULL,
  filter_type varchar(30) NOT NULL,
  filter text NOT NULL,
  order_no int(11) DEFAULT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS evms.faq;
create table evms.faq(
  id int(11) NOT NULL AUTO_INCREMENT,
  linkable_id int(11) DEFAULT NULL,
  linkable_type varchar(30) DEFAULT NULL,
  question text NOT NULL,
  answer text NOT NULL,
  order_no int(11) DEFAULT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS evms.customer_query;
create table evms.customer_query(
  id int(11) NOT NULL AUTO_INCREMENT,
  first_name varchar(256) NOT NULL,
  fathers_name varchar(256) DEFAULT NULL,
  family_name varchar(256) DEFAULT NULL,
  country_code varchar(50) DEFAULT NULL,
  phone_number varchar(10) DEFAULT NULL,
  email varchar(256) NOT NULL,
  message text NOT NULL,
  status int(1) NOT NULL DEFAULT 1,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  created_by varchar(256) NOT NULL,
  updated_by varchar(256) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

