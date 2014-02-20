<?php

App::uses('AppController', 'Controller');

/**
 * LinkCategories Controller
 *
 * @property LinkCategory $LinkCategory
 * @property PaginatorComponent $Paginator
 */
class LinkCategoriesController extends AppController {

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
                $this->LinkCategory->recursive = 0;
                $this->set('linkCategories', $this->Paginator->paginate());
        }

        public function index() {
                $this->LinkCategory->recursive = 1;
                $this->set('linkCategories', $this->Paginator->paginate());
        }

        /**
         * admin_view method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_view($id = null) {
                if (!$this->LinkCategory->exists($id)) {
                        throw new NotFoundException(__('Invalid link category'));
                }
                $options = array('conditions' => array('LinkCategory.' . $this->LinkCategory->primaryKey => $id));
                $this->set('linkCategory', $this->LinkCategory->find('first', $options));
        }

        /**
         * admin_add method
         *
         * @return void
         */
        public function admin_add() {
                if ($this->request->is('post')) {
                        $this->LinkCategory->create();
                        if ($this->LinkCategory->save($this->request->data)) {
                                $this->Session->setFlash(__('The link category has been saved'), 'default', array('class' => 'alert alert-success'));
                                return $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The link category could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
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
                if (!$this->LinkCategory->exists($id)) {
                        throw new NotFoundException(__('Invalid link category'));
                }
                if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->LinkCategory->save($this->request->data)) {
                                $this->Session->setFlash(__('The link category has been saved'), 'default', array('class' => 'alert alert-success'));
                                return $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The link category could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
                        }
                } else {
                        $options = array('conditions' => array('LinkCategory.' . $this->LinkCategory->primaryKey => $id));
                        $this->request->data = $this->LinkCategory->find('first', $options);
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
                $this->LinkCategory->id = $id;
                if (!$this->LinkCategory->exists()) {
                        throw new NotFoundException(__('Invalid link category'));
                }
                $this->request->onlyAllow('post', 'delete');
                if ($this->LinkCategory->delete()) {
                        $this->Session->setFlash(__('Link category deleted'), 'default', array('class' => 'alert alert-success'));
                        return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Link category was not deleted'), 'default', array('class' => 'alert alert-error'));
                return $this->redirect(array('action' => 'index'));
        }

}
