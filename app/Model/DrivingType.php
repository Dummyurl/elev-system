<?php

App::uses('AppModel'        , 'Model');

class DrivingType extends AppModel {
    var $validate = array(
        'name' => array(
            'NotEmpty' => array(
                'rule'    => 'notEmpty',
                'message' => 'Name cannot be null.'
            ),
            'Unique' => array(
                'rule'      => 'isUnique',
                'message'   => 'Driving Type already exists.'
            )
        ),
    );
    
    public function beforeSave($options = array()) {
        parent::beforeSave($options);
        if (isset($this->data[$this->alias]['slug']) && empty($this->data[$this->alias]['slug'])) {
            $this->data[$this->alias]['slug'] = strtolower(
                    Inflector::slug($this->data[$this->alias]['name'])
            );
        }
    }
}