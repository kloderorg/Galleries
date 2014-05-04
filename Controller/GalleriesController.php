<?php
class GalleriesController extends GalleriesAppController {

	public $paginate = array(
        'Gallery' => array(
            'Gallery.date' => 'desc'
        )
    );

	public function index() {
		$galleries = $this->paginate('Gallery');
		$this->set(compact('galleries'));
	}

	public function view($id = null) {
		$gallery = $this->Gallery->findById($id);
		$this->set(compact('gallery'));
	}

	public function threed() {

	}

	public function add() {
		if (!empty($this->request->data)) {
			if ($this->Gallery->save($this->request->data)) {
				$this->Session->setFlash(__d('team', 'Your gallery has been saved.'), 'messages/success');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function edit($id = null) {
		$this->Gallery->id = $id;
		if (empty($this->request->data)) {
			$this->request->data = $this->Gallery->read();
		} else {
			if ($this->Gallery->save($this->request->data)) {
				$this->Session->setFlash(__d('team', 'Your gallery has been updated.'), 'messages/success');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function delete($id) {
		$gallery = $this->Gallery->findById($id);
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Gallery->delete($this->request->data['Gallery']['id']);
			$this->Session->setFlash(__d('team', 'The gallery has been deleted.'), 'messages/success');
			$this->redirect(array('action'=>'index'));
		}
		if (!$this->request->data) $this->request->data = $gallery;
	}

}
?>
