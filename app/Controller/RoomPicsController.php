<?php

App::uses('AppController', 'Controller');


/**
 * RoomPics Controller
 *
 * @property RoomPic $RoomPic
 * @property PaginatorComponent $Paginator
 */
class RoomPicsController extends AppController {

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
                $this->RoomPic->recursive = 0;
                $this->set('roomPics', $this->Paginator->paginate());
        }

        /**
         * admin_view method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_view($id = null) {
                if (!$this->RoomPic->exists($id)) {
                        throw new NotFoundException(__('Invalid room pic'));
                }
                $options = array('conditions' => array('RoomPic.' . $this->RoomPic->primaryKey => $id));
                $this->set('roomPic', $this->RoomPic->find('first', $options));
        }

        /**
         * admin_add method
         *
         * @return void
         */
        public function admin_add($room_id) {
                if ($this->request->is('post')) {
                        $this->RoomPic->create();
                        $this->request->data['RoomPic']['room_id'] = $room_id;
                        if ($this->RoomPic->save($this->request->data)) {
                                $this->Session->setFlash(__('The room pic has been saved'), 'default', array('class' => 'alert alert-success'));
                                return $this->redirect(array('controller'=>'rooms', 'action' => 'view', $room_id));
                        } else {
                                $this->Session->setFlash(__('The room pic could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
                        }
                }
                $rooms = $this->RoomPic->Room->find('list');
                $this->set(compact('rooms'));
        }

        /**
         * admin_edit method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_edit($id = null) {
                if (!$this->RoomPic->exists($id)) {
                        throw new NotFoundException(__('Invalid room pic'));
                }
                if ($this->request->is('post') || $this->request->is('put')) {
                        if ($this->RoomPic->save($this->request->data)) {
                                $this->Session->setFlash(__('The room pic has been saved'), 'default', array('class' => 'alert alert-success'));
                                return $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The room pic could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
                        }
                } else {
                        $options = array('conditions' => array('RoomPic.' . $this->RoomPic->primaryKey => $id));
                        $this->request->data = $this->RoomPic->find('first', $options);
                }
                $rooms = $this->RoomPic->Room->find('list');
                $this->set(compact('rooms'));
        }

        /**
         * admin_delete method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function admin_delete($id = null) {
                $this->RoomPic->id = $id;
                if (!$this->RoomPic->exists()) {
                        throw new NotFoundException(__('Invalid room pic'));
                }
                $this->request->onlyAllow('post', 'delete');
                if ($this->RoomPic->delete()) {
                        $this->Session->setFlash(__('Room pic deleted'), 'default', array('class' => 'alert alert-success'));
                        return $this->redirect($this->referer());
                }
                $this->Session->setFlash(__('Room pic was not deleted'), 'default', array('class' => 'alert alert-error'));
                return $this->redirect($this->referer());
        }

}
