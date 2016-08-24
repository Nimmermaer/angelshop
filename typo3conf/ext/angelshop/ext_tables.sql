#
# Table structure for table 'pages'
#
CREATE TABLE pages (
  ce_whatsapp_text   TEXT,
  ce_whatsapp_button INT(11) DEFAULT '0' NOT NULL,
  ce_facebook_button INT(11) DEFAULT '0' NOT NULL,
  ce_social_position INT(11) DEFAULT '0' NOT NULL
);

#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (

  ## Old angelshop_tables
  tx_abatemplate_product_description            TEXT                     NOT NULL,
  tx_abatemplate_product_additional_description TEXT                     NOT NULL,
  tx_abatemplate_product_price                  TEXT                     NOT NULL,
  tx_abatemplate_product_old_price              TEXT,
  tx_abatemplate_product_stock                  INT(11) DEFAULT '0'      NOT NULL,
  tx_abatemplate_product_image_id               INT(11) DEFAULT '0'      NOT NULL,
  tx_abatemplate_product_image_count            INT(11) DEFAULT '0'      NOT NULL,
  tx_abatemplate_product_image_name             TEXT,
  tx_abatemplate_product_manufacturer_name      TEXT,
  tx_abatemplate_product_category               TEXT,
  tx_abatemplate_product                        INT(11) DEFAULT '0'      NOT NULL,

  ## New angelshop_tables
  tx_angelshop_title                            VARCHAR(255) DEFAULT ' ' NOT NULL,
  tx_angelshop_link                             INT(11) DEFAULT ' '      NOT NULL,
  tx_angelshop_fontawesome                      VARCHAR(255) DEFAULT ' ' NOT NULL,
  tx_angelshop_class                            VARCHAR(255) DEFAULT ' ' NOT NULL,
  tx_angelshop_trader                           INT(11) DEFAULT ' '      NOT NULL,
  tx_angelshop_tab                              INT(11) DEFAULT ' '      NOT NULL,
  tx_angelshop_cognizance                       VARCHAR(255) DEFAULT ' ' NOT NULL,
  tx_angelshop_sales_tax_indicator              VARCHAR(255) DEFAULT ' ' NOT NULL,
  tx_angelshop_opentime                         TEXT,
  tx_angelshop_address                          TEXT,
  tx_angelshop_phone                            VARCHAR(255) DEFAULT ' ' NOT NULL,
  tx_angelshop_email                            VARCHAR(255) DEFAULT ' ' NOT NULL,
  tx_angelshop_owner                            VARCHAR(255) DEFAULT ' ' NOT NULL,
  tx_angelshop_map_small                        INT(11) DEFAULT '0'      NOT NULL
);
#
# Table structure for table 'fe_users'
#
CREATE TABLE fe_users (
  feuser_cognizance          VARCHAR(255) DEFAULT '0' NOT NULL,
  feuser_sales_tax_indicator VARCHAR(255) DEFAULT '0' NOT NULL,
  feuser_opentime            VARCHAR(255) DEFAULT '0' NOT NULL,
  record                     INT(11) DEFAULT '0'      NOT NULL

);

#
# Table structure for table 'tx_angelshop_domain_model_gallery'
#
CREATE TABLE tx_angelshop_domain_model_gallery (

  uid              INT(11)                         NOT NULL AUTO_INCREMENT,
  pid              INT(11) DEFAULT '0'             NOT NULL,

  tstamp           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  crdate           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  cruser_id        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  deleted          TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  hidden           TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  starttime        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  endtime          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,

  t3ver_oid        INT(11) DEFAULT '0'             NOT NULL,
  t3ver_id         INT(11) DEFAULT '0'             NOT NULL,
  t3ver_wsid       INT(11) DEFAULT '0'             NOT NULL,
  t3ver_label      VARCHAR(255) DEFAULT ''         NOT NULL,
  t3ver_state      TINYINT(4) DEFAULT '0'          NOT NULL,
  t3ver_stage      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_count      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_tstamp     INT(11) DEFAULT '0'             NOT NULL,
  t3ver_move_id    INT(11) DEFAULT '0'             NOT NULL,

  sys_language_uid INT(11) DEFAULT '0'             NOT NULL,
  l10n_parent      INT(11) DEFAULT '0'             NOT NULL,
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

  uid              INT(11)                         NOT NULL AUTO_INCREMENT,
  pid              INT(11) DEFAULT '0'             NOT NULL,

  tstamp           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  crdate           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  cruser_id        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  deleted          TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  hidden           TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  starttime        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  endtime          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,

  t3ver_oid        INT(11) DEFAULT '0'             NOT NULL,
  t3ver_id         INT(11) DEFAULT '0'             NOT NULL,
  t3ver_wsid       INT(11) DEFAULT '0'             NOT NULL,
  t3ver_label      VARCHAR(255) DEFAULT ''         NOT NULL,
  t3ver_state      TINYINT(4) DEFAULT '0'          NOT NULL,
  t3ver_stage      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_count      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_tstamp     INT(11) DEFAULT '0'             NOT NULL,
  t3ver_move_id    INT(11) DEFAULT '0'             NOT NULL,

  sys_language_uid INT(11) DEFAULT '0'             NOT NULL,
  l10n_parent      INT(11) DEFAULT '0'             NOT NULL,
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

  uid              INT(11)                         NOT NULL AUTO_INCREMENT,
  pid              INT(11) DEFAULT '0'             NOT NULL,

  title            VARCHAR(255) DEFAULT ''         NOT NULL,
  link             VARCHAR(255) DEFAULT ''         NOT NULL,
  image            INT(11) DEFAULT '0'             NOT NULL,
  record           INT(11) DEFAULT '0'             NOT NULL,


  tstamp           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  crdate           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  cruser_id        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  deleted          TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  hidden           TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  starttime        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  endtime          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,

  t3ver_oid        INT(11) DEFAULT '0'             NOT NULL,
  t3ver_id         INT(11) DEFAULT '0'             NOT NULL,
  t3ver_wsid       INT(11) DEFAULT '0'             NOT NULL,
  t3ver_label      VARCHAR(255) DEFAULT ''         NOT NULL,
  t3ver_state      TINYINT(4) DEFAULT '0'          NOT NULL,
  t3ver_stage      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_count      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_tstamp     INT(11) DEFAULT '0'             NOT NULL,
  t3ver_move_id    INT(11) DEFAULT '0'             NOT NULL,

  sys_language_uid INT(11) DEFAULT '0'             NOT NULL,
  l10n_parent      INT(11) DEFAULT '0'             NOT NULL,
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

  uid              INT(11)                         NOT NULL AUTO_INCREMENT,
  pid              INT(11) DEFAULT '0'             NOT NULL,

  class            VARCHAR(255) DEFAULT '0'        NOT NULL,
  title            VARCHAR(255) DEFAULT '0'        NOT NULL,
  link             VARCHAR(255) DEFAULT '0'        NOT NULL,

  record           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  tstamp           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  crdate           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  cruser_id        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  deleted          TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  hidden           TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  starttime        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  endtime          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  sorting          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,

  t3ver_oid        INT(11) DEFAULT '0'             NOT NULL,
  t3ver_id         INT(11) DEFAULT '0'             NOT NULL,
  t3ver_wsid       INT(11) DEFAULT '0'             NOT NULL,
  t3ver_label      VARCHAR(255) DEFAULT ''         NOT NULL,
  t3ver_state      TINYINT(4) DEFAULT '0'          NOT NULL,
  t3ver_stage      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_count      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_tstamp     INT(11) DEFAULT '0'             NOT NULL,
  t3ver_move_id    INT(11) DEFAULT '0'             NOT NULL,

  sys_language_uid INT(11) DEFAULT '0'             NOT NULL,
  l10n_parent      INT(11) DEFAULT '0'             NOT NULL,
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

  uid              INT(11)                         NOT NULL AUTO_INCREMENT,
  pid              INT(11) DEFAULT '0'             NOT NULL,

  header           VARCHAR(255) DEFAULT '0'        NOT NULL,
  icon             VARCHAR(255) DEFAULT '0'        NOT NULL,
  text             TEXT,
  image            INT(11) DEFAULT '0'             NOT NULL,

  record           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  tstamp           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  crdate           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  cruser_id        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  deleted          TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  hidden           TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  starttime        INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  endtime          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  sorting          INT(11) UNSIGNED DEFAULT '0'    NOT NULL,

  t3ver_oid        INT(11) DEFAULT '0'             NOT NULL,
  t3ver_id         INT(11) DEFAULT '0'             NOT NULL,
  t3ver_wsid       INT(11) DEFAULT '0'             NOT NULL,
  t3ver_label      VARCHAR(255) DEFAULT ''         NOT NULL,
  t3ver_state      TINYINT(4) DEFAULT '0'          NOT NULL,
  t3ver_stage      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_count      INT(11) DEFAULT '0'             NOT NULL,
  t3ver_tstamp     INT(11) DEFAULT '0'             NOT NULL,
  t3ver_move_id    INT(11) DEFAULT '0'             NOT NULL,

  sys_language_uid INT(11) DEFAULT '0'             NOT NULL,
  l10n_parent      INT(11) DEFAULT '0'             NOT NULL,
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
  uid             INT(11)                NOT NULL AUTO_INCREMENT,
  uid_local       INT(11) DEFAULT '0'    NOT NULL,
  uid_foreign     INT(11) DEFAULT '0'    NOT NULL,
  tablenames      VARCHAR(30) DEFAULT '' NOT NULL,
  sorting         INT(11) DEFAULT '0'    NOT NULL,
  sorting_foreign INT(11) DEFAULT '0'    NOT NULL,
  ident           VARCHAR(30) DEFAULT '' NOT NULL,

  KEY uid_local (uid_local),
  KEY uid_foreign (uid_foreign),
  PRIMARY KEY (uid)
);
