<?php

App::uses('AppController', 'Controller');

/**
 * Rooms Controller
 *
 * @property Room $Room
 * @property PaginatorComponent $Paginator
 */
class RoomsController extends AppController {

        /**
         * Components
         *
         * @var array
         */
        public $components = array('Paginator');

        /**
         * admin_index method
         *
         * @return void
         */
        public function admin_index() {
                $this->Room->recursive = 1;
                $this->set('rooms', $this->Paginator->paginate());
        }
        
         public function index() {
                $this->Room->recursive = 1;
                $this->set('rooms', $this->Paginator->paginate());
        }
        
        
         public function view($id = null) {
                if (!$this->Room->exists($id)) {
                        throw new NotFoundException(__('Invalid room'));
                }
                $options = array('conditions' => array('Room.' . $this->Room->primaryKey => $id));
                $this->set('room', $this->Room->find('first', $options));
        }

        /**
         * admin_view method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_view($id = null) {
                if (!$this->Room->exists($id)) {
                        throw new NotFoundException(__('Invalid room'));
                }
                $options = array('conditions' => array('Room.' . $this->Room->primaryKey => $id));
                $this->set('room', $this->Room->find('first', $options));
        }

        /**
         * admin_add method
         *
         * @return void
         */
        public function admin_add() {
                if ($this->request->is('post')) {
                        $this->Room->create();
                        if ($this->Room->saveAssociated($this->request->data)) {
                                $this->Session->setFlash(__('The room has been saved'), 'default', array('class' => 'alert alert-success'));
                                return $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The room could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
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
                if (!$this->Room->exists($id)) {
                        throw new NotFoundException(__('Invalid room'));
                }
                if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->Room->saveAssociated($this->request->data)) {
                                $this->Session->setFlash(__('The room has been saved'), 'default', array('class' => 'alert alert-success'));
                                return $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The room could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
                        }
                } else {
                        $options = array('conditions' => array('Room.' . $this->Room->primaryKey => $id));
                        $this->request->data = $this->Room->find('first', $options);
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
                $this->Room->id = $id;
                if (!$this->Room->exists()) {
                        throw new NotFoundException(__('Invalid room'));
                }
                $this->request->onlyAllow('post', 'delete');
                if ($this->Room->delete()) {
                        $this->Session->setFlash(__('Room deleted'), 'default', array('class' => 'alert alert-success'));
                        return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Room was not deleted'), 'default', array('class' => 'alert alert-error'));
                return $this->redirect(array('action' => 'index'));
        }

}
