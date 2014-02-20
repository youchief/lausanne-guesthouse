<?php
App::uses('AppController', 'Controller');

/**
 * Faqs Controller
 *
 * @property Faq $Faq
 * @property PaginatorComponent $Paginator
 */
class FaqsController extends AppController
{

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
    public function admin_index()
    {
        $this->Faq->recursive = 0;
        $this->set('faqs', $this->Paginator->paginate());
    }

    public function index()
    {


        $this->Faq->recursive = 0;
        $this->paginate = array('limit' => 100);

        if ($this->request->is('post')) {


        }else{
            $this->set('faqs', $this->Paginator->paginate());
        }


    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null)
    {
        if (!$this->Faq->exists($id)) {
            throw new NotFoundException(__('Invalid faq'));
        }
        $options = array('conditions' => array('Faq.' . $this->Faq->primaryKey => $id));
        $this->set('faq', $this->Faq->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add()
    {
        if ($this->request->is('post')) {
            $this->Faq->create();
            if ($this->Faq->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__('The faq has been saved'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The faq could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
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
    public function admin_edit($id = null)
    {
        if (!$this->Faq->exists($id)) {
            throw new NotFoundException(__('Invalid faq'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Faq->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__('The faq has been saved'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The faq could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-error'));
            }
        } else {
            $options = array('conditions' => array('Faq.' . $this->Faq->primaryKey => $id));
            $this->request->data = $this->Faq->find('first', $options);
        }
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null)
    {
        $this->Faq->id = $id;
        if (!$this->Faq->exists()) {
            throw new NotFoundException(__('Invalid faq'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Faq->delete()) {
            $this->Session->setFlash(__('Faq deleted'), 'default', array('class' => 'alert alert-success'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Faq was not deleted'), 'default', array('class' => 'alert alert-error'));
        return $this->redirect(array('action' => 'index'));
    }
}
