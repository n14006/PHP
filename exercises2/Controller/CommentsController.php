<?php 
class CommentsController extends AppController {
  public $helpers = array('Html', 'Form');
  
  
     public function add() {
    if ($this->request->is('post')) {
      if ($this->Comment->save($this->request->data)) {
          $this->Session->setFlash('Success!');
          $this->redirect(array('controller'=>'posts','action' => 'view',$this->data['Comment']['post_id'] ));
      }else{
          $this->Session->setFlash('failed!');
        }
      }
     }

  


  public function delete($id) {
  if ($this->request->is('get')) {
    throw new MethodNotAllowedException();
  }

  if ($this->Comment->delete($id)) {
    $this->Session->setFlash(
      __('The post with id: %s has been delete.', h($id))
    );
  } else {
    $this->Session->setFlash(
      __('The post with id: %s could not be deleted', h($id))
    );
  }

  return $this->redirect(array('controller'=>'posts','action' => 'index'));

}

 
}

?>
