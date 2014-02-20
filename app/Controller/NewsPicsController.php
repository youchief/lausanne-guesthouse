<?php

App::uses('AppController', 'Controller');
CakePlugin::load('Uploader');

/**
 * NewsPics Controller
 *
 * @property NewsPic $NewsPic
 * @property PaginatorComponent $Paginator
 */
class NewsPicsController extends AppController {

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
                $this->NewsPic->recursive = 0;
                $this->set('newsPics', $this->Paginator->paginate());
        }

        /**
         * admin_view method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_view($id = null) {
                if (!$this->NewsPic->exists($id)) {
                        throw new NotFoundException(__('Invalid news pic'));
                }
                $options = array('conditions' => array('NewsPic.' . $this->NewsPic->primaryKey => $id));
                $this->set('newsPic', $this->NewsPic->find('first', $options));
        }
        
 

        /**
         * admin_add method
         *
         * @return void
         */
        public function admin_add($news_id) {
                if ($this->request->is('post')) {
                        $this->NewsPic->create();
                        $this->request->data['NewsPic']['news_id'] = $news_id;
                        if ($this->NewsPic->save($this->request->data)) {
                                $this->Session->setFlash(__('The news pic has been saved'), 'default', array('class' => 'alert alert-success'));
                                return $this->redirect(array('controller' =>'news', 'action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The news pic could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
                        }
                }
                $news = $this->NewsPic->News->find('list');
                $this->set(compact('news'));
        }

        /**
         * admin_edit method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_edit($id = null) {
                if (!$this->NewsPic->exists($id)) {
                        throw new NotFoundException(__('Invalid news pic'));
                }
                if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->NewsPic->save($this->request->data)) {
                                $this->Session->setFlash(__('The news pic has been saved'), 'default', array('class' => 'alert alert-success'));
                                return $this->redirect(array('controller' =>'news', 'action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The news pic could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
                        }
                } else {
                        $options = array('conditions' => array('NewsPic.' . $this->NewsPic->primaryKey => $id));
                        $this->request->data = $this->NewsPic->find('first', $options);
                }
                $news = $this->NewsPic->News->find('list');
                $this->set(compact('news'));
        }

        /**
         * admin_delete method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_delete($id = null) {
                $this->NewsPic->id = $id;
                if (!$this->NewsPic->exists()) {
                        throw new NotFoundException(__('Invalid news pic'));
                }
                $this->request->onlyAllow('post', 'delete');
                if ($this->NewsPic->delete()) {
                        $this->Session->setFlash(__('News pic deleted'), 'default', array('class' => 'alert alert-success'));
                        return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('News pic was not deleted'), 'default', array('class' => 'alert alert-danger'));
                return $this->redirect(array('action' => 'index'));
        }
        
}
        
                
