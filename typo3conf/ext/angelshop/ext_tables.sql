#
# Table structure for table 'pages'
#
CREATE TABLE tt_address (
  tx_angelshop_newsletter  tinyint(11) default '0' NOT NULL
);
#
# Table structure for table 'pages'
#
CREATE TABLE tx_news_domain_model_news (
  tx_angelshop_news_recipe  tinyint(11) default '0' NOT NULL,
  tx_angelshop_news_icon   varchar(255) default ' ' NOT NULL,
  tx_angelshop_news_ingredient  text
);

#
# Table structure for table 'pages'
#
CREATE TABLE pages (
  ce_whatsapp_text   text,
  ce_whatsapp_button int(11) default '0' NOT NULL,
  ce_facebook_button int(11) default '0' NOT NULL,
  ce_social_position int(11) default '0' NOT NULL,
  tx_angelshop_facebook_image int(11) default '0' NOT NULL
);

#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (

  ## Old angelshop_tables
  tx_abatemplate_product_description text   NOT NULL,
  tx_abatemplate_product_additional_description text   NOT NULL,
  tx_abatemplate_product_price   text   NOT NULL,
  tx_abatemplate_product_old_price   text,
  tx_abatemplate_product_stock   int(11) default '0'   NOT NULL,
  tx_abatemplate_product_image_id    int(11) default '0'   NOT NULL,
  tx_abatemplate_product_image_count int(11) default '0'   NOT NULL,
  tx_abatemplate_product_image_name  text,
  tx_abatemplate_product_manufacturer_name   text,
  tx_abatemplate_product_category    text,
  tx_abatemplate_product  int(11) default '0'   NOT NULL,

  ## New angelshop_tables
  tx_angelshop_title   varchar(255) default ' ' NOT NULL,
  tx_angelshop_link   int(11) default 0    NOT NULL,
  tx_angelshop_fontawesome    varchar(255) default ' ' NOT NULL,
  tx_angelshop_class   varchar(255) default ' ' NOT NULL,
  tx_angelshop_movement   varchar(255) default ' ' NOT NULL,
  tx_angelshop_trader     int(11) default 0    NOT NULL,
  tx_angelshop_tab    int(11) default 0    NOT NULL,
  tx_angelshop_cognizance     varchar(255) default ' ' NOT NULL,
  tx_angelshop_sales_tax_indicator   varchar(255) default ' ' NOT NULL,
  tx_angelshop_opentime   text,
  tx_angelshop_address    text,
  tx_angelshop_phone   varchar(255) default ' ' NOT NULL,
  tx_angelshop_email   varchar(255) default ' ' NOT NULL,
  tx_angelshop_owner   varchar(255) default ' ' NOT NULL,
  tx_angelshop_map_small  int(11) default '0'   NOT NULL,
  tx_angelshop_salutation  varchar(255) default '0' NOT NULL,
  tx_angelshop_image_collection int(11) unsigned DEFAULT '0'
);
#
# Table structure for table 'fe_users'
#
CREATE TABLE fe_users (
  feuser_cognizance   varchar(255) default '0' NOT NULL,
  feuser_sales_tax_indicator varchar(255) default '0' NOT NULL,
  feuser_opentime varchar(255) default '0' NOT NULL,
  record   int(11) default '0'   NOT NULL

);

#
# Table structure for table 'tx_angelshop_domain_model_gallery'
#
CREATE TABLE tx_angelshop_domain_model_gallery (

  uid int(11) NOT NULL AUTO_INCREMENT,
  pid int(11) default '0'  NOT NULL,

  tstamp    int(11) unsigned default '0'    NOT NULL,
  crdate    int(11) unsigned default '0'    NOT NULL,
  cruser_id    int(11) unsigned default '0'    NOT NULL,
  deleted   tinyint(4) unsigned default '0' NOT NULL,
  hidden    tinyint(4) unsigned default '0' NOT NULL,
  starttime    int(11) unsigned default '0'    NOT NULL,
  endtime   int(11) unsigned default '0'    NOT NULL,

  t3ver_oid    int(11) default '0'  NOT NULL,
  t3ver_id  int(11) default '0'  NOT NULL,
  t3ver_wsid   int(11) default '0'  NOT NULL,
  t3ver_label   varchar(255) default ''  NOT NULL,
  t3ver_state   tinyint(4) default '0'   NOT NULL,
  t3ver_stage   int(11) default '0'  NOT NULL,
  t3ver_count   int(11) default '0'  NOT NULL,
  t3ver_tstamp     int(11) default '0'  NOT NULL,
  t3ver_move_id    int(11) default '0'  NOT NULL,

  sys_language_uid int(11) default '0'  NOT NULL,
  l10n_parent   int(11) default '0'  NOT NULL,
  l10n_diffsource  MEDIUMBLOB,

  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY t3ver_oid (t3ver_oid, t3ver_wsid),
  KEY language (l10n_parent, sys_language_uid)

);

#
# Table structure for table 'tx_angelshop_domain_model_teaserrow'
#
CREATE TABLE tx_angelshop_domain_model_teaserrow (

  uid   int(11)   NOT NULL AUTO_INCREMENT,
  pid   int(11) default '0'  NOT NULL,

  tstamp    int(11) unsigned default '0'    NOT NULL,
  crdate    int(11) unsigned default '0'    NOT NULL,
  cruser_id    int(11) unsigned default '0'    NOT NULL,
  deleted   tinyint(4) unsigned default '0' NOT NULL,
  hidden    tinyint(4) unsigned default '0' NOT NULL,
  starttime    int(11) unsigned default '0'    NOT NULL,
  endtime   int(11) unsigned default '0'    NOT NULL,

  t3ver_oid    int(11) default '0'  NOT NULL,
  t3ver_id  int(11) default '0'  NOT NULL,
  t3ver_wsid   int(11) default '0'  NOT NULL,
  t3ver_label   varchar(255) default ''  NOT NULL,
  t3ver_state   tinyint(4) default '0'   NOT NULL,
  t3ver_stage   int(11) default '0'  NOT NULL,
  t3ver_count   int(11) default '0'  NOT NULL,
  t3ver_tstamp     int(11) default '0'  NOT NULL,
  t3ver_move_id    int(11) default '0'  NOT NULL,

  sys_language_uid int(11) default '0'  NOT NULL,
  l10n_parent   int(11) default '0'  NOT NULL,
  l10n_diffsource  MEDIUMBLOB,

  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY t3ver_oid (t3ver_oid, t3ver_wsid),
  KEY language (l10n_parent, sys_language_uid)

);

#
# Table structure for table 'tx_angelshop_domain_model_trader'
#
CREATE TABLE tx_angelshop_domain_model_trader (

  uid   int(11)   NOT NULL AUTO_INCREMENT,
  pid   int(11) default '0'  NOT NULL,

  title varchar(255) default ''  NOT NULL,
  link  varchar(255) default ''  NOT NULL,
  image int(11) default '0'  NOT NULL,
  record    int(11) default '0'  NOT NULL,


  tstamp    int(11) unsigned default '0'    NOT NULL,
  crdate    int(11) unsigned default '0'    NOT NULL,
  cruser_id    int(11) unsigned default '0'    NOT NULL,
  deleted   tinyint(4) unsigned default '0' NOT NULL,
  hidden    tinyint(4) unsigned default '0' NOT NULL,
  starttime    int(11) unsigned default '0'    NOT NULL,
  endtime   int(11) unsigned default '0'    NOT NULL,

  t3ver_oid    int(11) default '0'  NOT NULL,
  t3ver_id  int(11) default '0'  NOT NULL,
  t3ver_wsid   int(11) default '0'  NOT NULL,
  t3ver_label   varchar(255) default ''  NOT NULL,
  t3ver_state   tinyint(4) default '0'   NOT NULL,
  t3ver_stage   int(11) default '0'  NOT NULL,
  t3ver_count   int(11) default '0'  NOT NULL,
  t3ver_tstamp     int(11) default '0'  NOT NULL,
  t3ver_move_id    int(11) default '0'  NOT NULL,

  sys_language_uid int(11) default '0'  NOT NULL,
  l10n_parent   int(11) default '0'  NOT NULL,
  l10n_diffsource  MEDIUMBLOB,

  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY t3ver_oid (t3ver_oid, t3ver_wsid),
  KEY language (l10n_parent, sys_language_uid)

);

#
# Table structure for table 'tx_angelshop_domain_model_fontawesome'
#
CREATE TABLE tx_angelshop_domain_model_fontawesome (

  uid   int(11)   NOT NULL AUTO_INCREMENT,
  pid   int(11) default '0'  NOT NULL,

  class varchar(255) default '0'    NOT NULL,
  movement  varchar(255) default '0'    NOT NULL,
  title varchar(255) default '0'    NOT NULL,
  link  varchar(255) default '0'    NOT NULL,

  record int(11) unsigned default '0'    NOT NULL,
  tstamp int(11) unsigned default '0'    NOT NULL,
  crdate int(11) unsigned default '0'    NOT NULL,
  cruser_id    int(11) unsigned default '0'    NOT NULL,
  deleted   tinyint(4) unsigned default '0' NOT NULL,
  hidden tinyint(4) unsigned default '0' NOT NULL,
  starttime    int(11) unsigned default '0'    NOT NULL,
  endtime   int(11) unsigned default '0'    NOT NULL,
  sorting   int(11) unsigned default '0'    NOT NULL,

  t3ver_oid    int(11) default '0'  NOT NULL,
  t3ver_id  int(11) default '0'  NOT NULL,
  t3ver_wsid   int(11) default '0'  NOT NULL,
  t3ver_label   varchar(255) default ''  NOT NULL,
  t3ver_state   tinyint(4) default '0'   NOT NULL,
  t3ver_stage   int(11) default '0'  NOT NULL,
  t3ver_count   int(11) default '0'  NOT NULL,
  t3ver_tstamp     int(11) default '0'  NOT NULL,
  t3ver_move_id    int(11) default '0'  NOT NULL,

  sys_language_uid int(11) default '0'  NOT NULL,
  l10n_parent   int(11) default '0'  NOT NULL,
  l10n_diffsource  MEDIUMBLOB,

  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY t3ver_oid (t3ver_oid, t3ver_wsid),
  KEY language (l10n_parent, sys_language_uid)

);

#
# Table structure for table 'tx_angelshop_domain_model_tab'
#
CREATE TABLE tx_angelshop_domain_model_tab (

  uid   int(11)   NOT NULL AUTO_INCREMENT,
  pid   int(11) default '0'  NOT NULL,

  header varchar(255) default '0'    NOT NULL,
  icon  varchar(255) default '0'    NOT NULL,
  movement  varchar(255) default '0'    NOT NULL,
  text  text,
  image int(11) default '0'  NOT NULL,

  record int(11) unsigned default '0'    NOT NULL,
  tstamp int(11) unsigned default '0'    NOT NULL,
  crdate int(11) unsigned default '0'    NOT NULL,
  cruser_id    int(11) unsigned default '0'    NOT NULL,
  deleted   tinyint(4) unsigned default '0' NOT NULL,
  hidden tinyint(4) unsigned default '0' NOT NULL,
  starttime    int(11) unsigned default '0'    NOT NULL,
  endtime   int(11) unsigned default '0'    NOT NULL,
  sorting   int(11) unsigned default '0'    NOT NULL,

  t3ver_oid    int(11) default '0'  NOT NULL,
  t3ver_id  int(11) default '0'  NOT NULL,
  t3ver_wsid   int(11) default '0'  NOT NULL,
  t3ver_label   varchar(255) default ''  NOT NULL,
  t3ver_state   tinyint(4) default '0'   NOT NULL,
  t3ver_stage   int(11) default '0'  NOT NULL,
  t3ver_count   int(11) default '0'  NOT NULL,
  t3ver_tstamp     int(11) default '0'  NOT NULL,
  t3ver_move_id    int(11) default '0'  NOT NULL,

  sys_language_uid int(11) default '0'  NOT NULL,
  l10n_parent   int(11) default '0'  NOT NULL,
  l10n_diffsource  MEDIUMBLOB,

  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY t3ver_oid (t3ver_oid, t3ver_wsid),
  KEY language (l10n_parent, sys_language_uid)

);

#
# Table structure for table 'tx_angelshop_trader_ttcontent_mm'
#
#
CREATE TABLE tx_angelshop_trader_ttcontent_mm (
  uid  int(11)     NOT NULL AUTO_INCREMENT,
  uid_local   int(11) default '0'    NOT NULL,
  uid_foreign     int(11) default '0'    NOT NULL,
  tablenames   varchar(30) default '' NOT NULL,
  sorting  int(11) default '0'    NOT NULL,
  sorting_foreign int(11) default '0'    NOT NULL,
  ident varchar(30) default '' NOT NULL,

  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign),
  PRIMARY KEY (uid)
);
