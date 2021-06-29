<?php
class ModelCheckoutLegalEntitiesNik extends Model {
    public function addLegalEntitiesInfo($data) {
        $this->db->query("INSERT INTO `" . DB_PREFIX . "legal_entities` SET customer_id = '" . (int)($data['customer_id']) . "', order_id = '" . (int)$data['order_id'] . "', vat = '" . (isset($data['vat']) ? (int)$data['vat'] : 0) . "', legal_entity_form = '" . (int)$data['legal_entity_form'] . "', organization = '" . $this->db->escape($data['organization']) . "', `index` = '" . $this->db->escape($data['index']) . "', legal_address = '" . $this->db->escape($data['legal_address']) . "', mailing_address = '" . $this->db->escape($data['mailing_address']) . "', email = '" . $this->db->escape($data['email']) . "', `inn` = '" . $this->db->escape($data['inn']) . "', `kpp` = '" . $this->db->escape($data['kpp']) . "', current_account_number = '" . $this->db->escape($data['current_account_number']) . "', bank_name = '" . $this->db->escape($data['bank_name']) . "', bic = '" . $this->db->escape($data['bic']) . "', bank_correspondent_account = '" . $this->db->escape($data['bank_correspondent_account']) . "', head_fullname = '" . $this->db->escape($data['head_fullname']) . "', business_registration = '" . (isset($data['business_registration']) ? (int)$data['business_registration'] : 0) . "'");
    }

    public function editLegalEntitiesInfo($order_id, $data) {
        $this->db->query("UPDATE `" . DB_PREFIX . "legal_entities` SET vat = '" . (isset($data['vat']) ? (int)$data['vat'] : 0) . "', legal_entity_form = '" . (int)$data['legal_entity_form'] . "', organization = '" . $this->db->escape($data['organization']) . "', `index` = '" . $this->db->escape($data['index']) . "', legal_address = '" . $this->db->escape($data['legal_address']) . "', mailing_address = '" . $this->db->escape($data['	mailing_address']) . "', email = '" . $this->db->escape($data['email']) . "', `inn` = '" . $this->db->escape($data['inn']) . "', `kpp` = '" . $this->db->escape($data['kpp']) . "', current_account_number = '" . $this->db->escape($data['current_account_number']) . "', bank_name = '" . $this->db->escape($data['bank_name']) . "', bic = '" . $this->db->escape($data['bic']) . "', bank_correspondent_account = '" . $this->db->escape($data['bank_correspondent_account']) . "', head_fullname = '" . $this->db->escape($data['head_fullname']) . "', business_registration = '" . isset($data['business_registration']) ? (int)$data['business_registration'] : 0 . "' WHERE order_id = '" . (int)$order_id . "'");
    }

    public function deleteLegalEntitiesInfo($order_id) {
        $this->db->query("DELETE FROM `" . DB_PREFIX . "legal_entities` WHERE order_id = '" . (int)$order_id . "'");
    }

    public function getLegalEntitiesInfo($order_id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "legal_entities` le WHERE le.order_id = '" . (int)$order_id . "'");

        return $query->rows;
    }
}