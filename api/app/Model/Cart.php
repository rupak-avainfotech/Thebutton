<?php
App::uses('AppModel', 'Model');
class Cart extends AppModel {

////////////////////////////////////////////////////////////

  public $belongsTo = array(
      'Product' => array(
          'className' => 'Product',
          'foreignKey' => 'product_id',
          'conditions' => '',
          'fields' => '',
          'order' => ''
      ),
      'Offer' => array(
          'className' => 'Offer',
          'foreignKey' => 'offer_id',
          'conditions' => '',
          'fields' => '',
          'order' => ''
      )
  );

////////////////////////////////////////////////////////////

}
