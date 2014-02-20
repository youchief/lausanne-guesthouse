<?php

App::uses('AppModel', 'Model');

/**
 * NewsPic Model
 *
 * @property News $News
 */
class NewsPic extends AppModel
{

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'url';
    public $actsAs = array(
        'Uploader.Attachment' => array(
            'url' => array(
                'overwrite' => true,
                'nameCallback' => 'formatName',
                'transforms' => array(
                    'image-normal' => array(
                        'class' => 'resize',
                        'self' => true,
                        'width' => 600,
                    )
                )
            )
        )
    );

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'news_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'News' => array(
            'className' => 'News',
            'foreignKey' => 'news_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );


    public function formatName()
    {
        return time();
    }

}
