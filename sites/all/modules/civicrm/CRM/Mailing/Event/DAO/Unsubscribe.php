<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Mailing/Event/Unsubscribe.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:a44ecc4ce8b1a8ecdca57fff8d053392)
 */

/**
 * Database access object for the Unsubscribe entity.
 */
class CRM_Mailing_Event_DAO_Unsubscribe extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_mailing_event_unsubscribe';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = FALSE;

  /**
   * @var int unsigned
   */
  public $id;

  /**
   * FK to EventQueue
   *
   * @var int unsigned
   */
  public $event_queue_id;

  /**
   * Unsubscribe at org- or group-level
   *
   * @var boolean
   */
  public $org_unsubscribe;

  /**
   * When this delivery event occurred.
   *
   * @var timestamp
   */
  public $time_stamp;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_mailing_event_unsubscribe';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'event_queue_id', 'civicrm_mailing_event_queue', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Unsubscribe ID'),
          'required' => TRUE,
          'table_name' => 'civicrm_mailing_event_unsubscribe',
          'entity' => 'Unsubscribe',
          'bao' => 'CRM_Mailing_Event_BAO_Unsubscribe',
          'localizable' => 0,
        ],
        'event_queue_id' => [
          'name' => 'event_queue_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing Event Queue'),
          'description' => 'FK to EventQueue',
          'required' => TRUE,
          'table_name' => 'civicrm_mailing_event_unsubscribe',
          'entity' => 'Unsubscribe',
          'bao' => 'CRM_Mailing_Event_BAO_Unsubscribe',
          'localizable' => 0,
          'FKClassName' => 'CRM_Mailing_Event_DAO_Queue',
        ],
        'org_unsubscribe' => [
          'name' => 'org_unsubscribe',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Unsubscribe is for Organization?'),
          'description' => 'Unsubscribe at org- or group-level',
          'required' => TRUE,
          'table_name' => 'civicrm_mailing_event_unsubscribe',
          'entity' => 'Unsubscribe',
          'bao' => 'CRM_Mailing_Event_BAO_Unsubscribe',
          'localizable' => 0,
        ],
        'time_stamp' => [
          'name' => 'time_stamp',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Unsubscribe Timestamp'),
          'description' => 'When this delivery event occurred.',
          'required' => TRUE,
          'default' => 'CURRENT_TIMESTAMP',
          'table_name' => 'civicrm_mailing_event_unsubscribe',
          'entity' => 'Unsubscribe',
          'bao' => 'CRM_Mailing_Event_BAO_Unsubscribe',
          'localizable' => 0,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'mailing_event_unsubscribe', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'mailing_event_unsubscribe', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
