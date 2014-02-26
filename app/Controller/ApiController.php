<?php

App::uses('AppController', 'Controller');

/**
 * xx Controller
 *
 * @property Ad $Ad
 */
class ApiController extends AppController {

        public $uses = array('Social.Flickr');

        public function flickr() {
                $data = $this->Flickr->query('flickr.photos.search', array('user_id'=>'118585657@N03', 'per_page'=>8));
                return $data;
        }

}
