<?php

App::uses('AppModel', 'Model');

/**
 * Faq Model
 *
 */
class Faq extends AppModel {

        /**
         * Display field
         *
         * @var string
         */
        public $displayField = 'question';
        public $order = 'Faq__i18n_questionTranslation ASC';
        public $actsAs = array(
            'Translate' => array(
                'question' => 'questionTranslation',
                'response' => 'responseTranslation'
            )
        );

        /**
         * Validation rules
         *
         * @var array
         */
        public $validate = array(
            'question' => array(
                'notEmpty' => array(
                    'rule' => array('notEmpty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            ),
            'response' => array(
                'notEmpty' => array(
                    'rule' => array('notEmpty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            ),
        );

}
