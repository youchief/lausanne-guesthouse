<?php

App::uses('AppModel', 'Model');

/**
 * News Model
 *
 */
class News extends AppModel {

        /**
         * Display field
         *
         * @var string
         */
        public $displayField = 'title';
        
        public $order = 'News.created DESC';
        public $actsAs = array(
            'Translate' => array(
                'title' => 'titleTranslation',
                'body' => 'bodyTranslation',
            )
        );

        /**
         * Validation rules
         *
         * @var array
         */
        public $validate = array(
            'title' => array(
                'notEmpty' => array(
                    'rule' => array('notEmpty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            ),
            'body' => array(
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

        
         public $hasOne = array(
            'NewsPic' => array(
                'className' => 'NewsPic',
                'foreignKey' => 'news_id',
                'dependent' => true,
                'conditions' => '',
                'fields' => '',
                'order' => '',
                'limit' => '',
                'offset' => '',
                'exclusive' => '',
                'finderQuery' => '',
                'counterQuery' => ''
            )
        );
}
