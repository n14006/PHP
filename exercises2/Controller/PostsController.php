<?php 
class PostsController extends AppController {
  public $helpers = array('Html', 'Form');
  
  public function index() {
    $this->set('posts', $this->Post->find('all'));
  }

  public function view($id = null) {
    if (!$id) {
      throw new NotFoundException(__('Invalid post'));
    }

    $post = $this->Post->findById($id);
    if (!$post) {
      throw new NotFoundException(__('Invalid post'));
    }
    $this->set('post', $post);
  }
  
  public function add() {
    if ($this->request->is('post') || $this->request->is('put')){
      $this->Post->create();
      if ($this->Post->save($this->request->data)) {
          //画像保存先のパス
          $path = IMAGES;
          $image = $this->request->data['Post']['image'];
          move_uploaded_file($image['tmp_name'], $path . DS . $image['name']);
          $data = array(
            'Post' => array(
              'img' => $image['name']
            )
          );
        $this->Post->save($data);
        $this->Session->setFlash(__('Your post has been saved.'));
        }else{
          $this->Session->setFlash('画像が登録できませんでした');
        }
        return $this->redirect(array('action' => 'index'));
    }
  }
public function edit($id = null) {
  if (!$id) {
    throw new NotFoundException(__('Invalid post'));
  }

  $post = $this->Post->findById($id);
  if (!$post) {
    throw new NotFoundException(__('Invalid post'));
  }


  if ($this->request->is(array('post', 'put'))) {
    $this->Post->id = $id;
    if ($this->Post->save($this->request->data)) {
      $this->Session->setFlash(__('Your post has been updated.'));
      return $this->redirect(array('action' => 'index'));
    }
    $this->Session->setFlash(__('Unable to update your post.'));
  }

  if (!$this->request->data) {
    $this->request->data = $post;
  }
}

public function delete() {
  if ($this->request->is('post')) {
      $this->Post->create();
      $pass = $this->request->data['Post']['password'];
      $pass2 = $this->request->data['Post']['dpass'];
      $id = $this->request->data['Post']['Post_id'];
      if ($pass == $pass2){
        if ($this->Post->delete($id)) {
          $this->Session->setFlash(
            __('The post with id: %s has been delete.', h($id))
          );
        } else {
          $this->Session->setFlash(
            __('The post with id: %s could not be deleted', h($id))
          );
        }

        return $this->redirect(array('action' => 'index'));

      }else {

 $this->Session->setFlash(__('パスワードが間違ってます'));
 return $this->redirect(array('action' => 'view', h($id)));
      }

  }
}


}


?>
