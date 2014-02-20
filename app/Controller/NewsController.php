<?php

App::uses('AppController', 'Controller');
CakePlugin::load('Uploader');

/**
 * News Controller
 *
 * @property News $News
 * @property PaginatorComponent $Paginator
 */
class NewsController extends AppController {

        /**
         * Components
         *
         * @var array
         */
        public $components = array('Paginator');
        public $helpers = array('Time');

        /**
         * admin_index method
         *
         * @return void
         */
        public function admin_index() {
                $this->News->recursive = 0;
                $this->set('news', $this->Paginator->paginate());
        }

        public function lastnews() {
                 $this->News->recursive = 0;
                return $this->News->find('all', array('limit'=>3));
        }

        /**
         * admin_view method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_view($id = null) {
                if (!$this->News->exists($id)) {
                        throw new NotFoundException(__('Invalid news'));
                }
                $options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
                $this->set('news', $this->News->find('first', $options));
        }
        
        public function view($id = null) {
                if (!$this->News->exists($id)) {
                        throw new NotFoundException(__('Invalid news'));
                }
                $options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
                $this->set('news', $this->News->find('first', $options));
        }

        /**
         * admin_add method
         *
         * @return void
         */
        public function admin_add() {
                if ($this->request->is('post')) {
                        $this->News->create();
                        if ($this->News->saveAssociated($this->request->data)) {
                                $this->Session->setFlash(__('The news has been saved'), 'default', array('class' => 'alert alert-success'));
                                return $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The news could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
                        }
                }
        }

        /**
         * admin_edit method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_edit($id = null) {
                if (!$this->News->exists($id)) {
                        throw new NotFoundException(__('Invalid news'));
                }
                if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->News->saveAssociated($this->request->data)) {
                                $this->Session->setFlash(__('The news has been saved'), 'default', array('class' => 'alert alert-success'));
                                return $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The news could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
                        }
                } else {
                        $options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
                        $this->request->data = $this->News->find('first', $options);
                }
        }

        /**
         * admin_delete method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_delete($id = null) {
                $this->News->id = $id;
                if (!$this->News->exists()) {
                        throw new NotFoundException(__('Invalid news'));
                }
                $this->request->onlyAllow('post', 'delete');
                if ($this->News->delete()) {
                        $this->Session->setFlash(__('News deleted'), 'default', array('class' => 'alert alert-success'));
                        return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('News was not deleted'), 'default', array('class' => 'alert alert-error'));
                return $this->redirect(array('action' => 'index'));
        }

}
