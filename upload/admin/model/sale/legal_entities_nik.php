<?php
class ModelSaleLegalEntitiesNik extends Model {
    public function install() {
        $this->db->query("
		CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "legal_entities` (
		  `id` INT(11) NOT NULL AUTO_INCREMENT,
		  `customer_id` INT(11) NOT NULL,
		  `order_id` INT(11) NOT NULL,
		  `vat` INT(2) NOT NULL,
		  `legal_entity_form` INT(2) NOT NULL,
		  `organization` VARCHAR(255) NOT NULL,
		  `index` VARCHAR(20) NOT NULL,
		  `legal_address` VARCHAR(255) NOT NULL,
		  `mailing_address` VARCHAR(255) NOT NULL,
		  `inn` VARCHAR(50) NOT NULL,
		  `kpp` VARCHAR(50) NOT NULL,
		  `email` VARCHAR(50) NOT NULL,
		  `current_account_number` VARCHAR(75) NOT NULL,
		  `bank_name` VARCHAR(50) NOT NULL,
		  `bic` VARCHAR(75) NOT NULL,
		  `bank_correspondent_account` VARCHAR(100) NOT NULL,
		  `head_fullname` VARCHAR(100) NOT NULL,
		  `business_registration` INT(2) NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
		");
    }

    public function uninstall() {
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "legal_entities`");
    }

    public function getLegalEntitiesInfo($order_id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "legal_entities` le WHERE le.order_id = '" . (int)$order_id . "'");

        return $query->row;
    }
}
