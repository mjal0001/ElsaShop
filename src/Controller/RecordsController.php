<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;
use Cake\View\ViewBuilder;
use Cake\ORM\Locator\LocatorAwareTrait;

/**
 * Records Controller
 *
 * @property \App\Model\Table\RecordsTable $Records
 * @method \App\Model\Entity\Record[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RecordsController extends AppController
{


    public function beforeFilter(EventInterface $event)
    {
        $this->ViewBuilder()->setLayout('records');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
   

        $this->loadModel('Genres');

        $genres = $this->Genres->find();
        $this->set('genres', $genres);


        $records = $this->Records->find();
        $this->set('records', $records);


    }

    /**
     * View method
     *
     * @param string|null $id Record id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $record = $this->Records->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('record'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $articlesTable = $this->getTableLocator()->get('Records');
        $record = $articlesTable->newEmptyEntity();

        if($this->request->is(['post'])){
            $record = $this->Records->patchEntity($record, $this->request->getData());
            if ($this->Records->save($record)) {
                
                return $this->redirect(['action' => 'index']);
                $this->Flash->success(__('The record has been saved.'));
            }
            $this->Flash->error(__('The record could not be saved. Please, try again.'));

        }



    }

    /**
     * Edit method
     *
     * @param string|null $id Record id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $record = $this->Records->get($id, [
            'contain' => [],
        ]);

        $this->loadModel('Genres');

        $genres = $this->Genres->find();
        $this->set('genres', $genres);


        if ($this->request->is(['patch', 'post', 'put'])) {
            $record = $this->Records->patchEntity($record, $this->request->getData());
            if ($this->Records->save($record)) {
                $this->Flash->success(__('The record has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The record could not be saved. Please, try again.'));
        }
        $this->set(compact('record'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Record id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $record = $this->Records->get($id);
        if ($this->Records->delete($record)) {
            $this->Flash->success(__('The record has been deleted.'));
        } else {
            $this->Flash->error(__('The record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function search()
    {
        

        $this->loadModel('Genres');

        $genres = $this->Genres->find();
        $this->set('genres', $genres);


        $search = $this->request->getData('search');
        if(isset($search)){

            $title = $this->request->getData('title');
            $date = $this->request->getData('date');
            $artist = $this->request->getData('artist');
            $genre = $this->request->getData('genre');

            if(empty($genre)){

                if(empty($title) && !empty($date) && !empty($artist))
                {
                    $results = $this->Records->find()->where([ 'OR' => [ ['artist LIKE' => '%'.$artist.'%'] ,  ['year' => $date] ]]);  
                    $this->set('records' , $results);  


                }else if(empty($date) && !empty($title) && !empty($artist)){

                    $results = $this->Records->find()->where([ 'OR' => [['record_name LIKE' => '%'.$title.'%'] , ['artist LIKE' => '%'.$artist.'%']]]);  
                    $this->set('records' , $results);


                }else if(empty($artist) && !empty($date) && !empty($title)){

                    $results = $this->Records->find()->where([ 'OR' => [['record_name LIKE' => '%'.$title.'%'] , ['year' => $date] ]]);  
                    $this->set('records' , $results);  



                }else if(empty($artist) && empty($date) && !empty($title)){

                    $results = $this->Records->find()->where(['record_name LIKE' => '%'.$title.'%']);  
                    $this->set('records' , $results);


                }else if(empty($artist) && !empty($date) && empty($title)){

                    $results = $this->Records->find()->where(['year' => $date]);  
                    $this->set('records' , $results);


                }else if(!empty($artist) && empty($date) && empty($title)){

                    $results = $this->Records->find()->where(['artist LIKE' => '%'.$artist.'%']);  
                    $this->set('records' , $results);

                }else {

                    $results = $this->Records->find()->where([ 'OR' => [['record_name LIKE' => '%'.$title.'%'] , ['artist LIKE' => '%'.$artist.'%'] ,  ['year' => $date] ]]);  
                    $this->set('records' , $results);

                }
            }else {

                if(empty($title) && !empty($date) && !empty($artist))
                {
                    $results = $this->Records->find()->where([ 'OR' => [ ['artist LIKE' => '%'.$artist.'%'] ,  ['year' => $date] , ['genre' => $genre] ]]);  
                    $this->set('records' , $results);  


                }else if(empty($date) && !empty($title) && !empty($artist)){

                    $results = $this->Records->find()->where([ 'OR' => [['record_name LIKE' => '%'.$title.'%'] , ['artist LIKE' => '%'.$artist.'%'] , ['genre' => $genre]]]);  
                    $this->set('records' , $results);


                }else if(empty($artist) && !empty($date) && !empty($title)){

                    $results = $this->Records->find()->where([ 'OR' => [['record_name LIKE' => '%'.$title.'%'] , ['year' => $date] , ['genre' => $genre] ]]);  
                    $this->set('records' , $results);  



                }else if(empty($artist) && empty($date) && !empty($title)){

                    $results = $this->Records->find()->where(['OR' => [['record_name LIKE' => '%'.$title.'%'] , ['genre' => $genre]]]);  
                    $this->set('records' , $results);


                }else if(empty($artist) && !empty($date) && empty($title)){

                    $results = $this->Records->find()->where(['OR' => [['date' => $date] , ['genre' => $genre]]]);  
                    $this->set('records' , $results);


                }else if(!empty($artist) && empty($date) && empty($title)){

                    $results = $this->Records->find()->where(['OR' => [['artist LIKE' => '%'.$artist.'%'] , ['genre' => $genre]]]);  
                    $this->set('records' , $results);

                }else if(empty($artist) && empty($date) && empty($title)){


                    $results = $this->Records->find()->where(['genre' => $genre]);  
                    $this->set('records' , $results);

                }
                
                else {

                    $results = $this->Records->find()->where([ 'OR' => [['record_name LIKE' => '%'.$title.'%'] , ['artist LIKE' => '%'.$artist.'%'] ,  ['year' => $date] , ['genre' => $genre] ]]);  
                    $this->set('records' , $results);

                }
            }
            


        }



  

        
    }
}
