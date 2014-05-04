<?php
class GalleriesArtworksController extends GalleriesAppController {

	public $paginate = array(
        'GalleriesArtwork' => array(
            'GalleriesArtwork.date' => 'desc'
        )
    );

	public function index() {
		$galleries_artworks = $this->paginate('GalleriesArtwork');
		$this->set(compact('galleries_artworks'));
	}

	public function view($id = null) {
		$galleries_artwork = $this->GalleriesArtwork->findById($id);
		$this->set(compact('galleries_artwork'));
	}

	public function add($consultant_id = null) {
		if (!empty($this->request->data)) {
			if ($this->GalleriesArtwork->save($this->request->data)) {
				$this->Session->setFlash(__d('team', 'Your artwork has been saved.'), 'messages/success');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function edit($id = null) {
		$this->GalleriesArtwork->id = $id;
		if (empty($this->request->data)) {
			$this->request->data = $this->GalleriesArtwork->read();
		} else {
			if ($this->GalleriesArtwork->save($this->request->data)) {
				$this->Session->setFlash(__d('team', 'Your artwork has been updated.'), 'messages/success');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function delete($id) {
		$galleries_artwork = $this->GalleriesArtwork->findById($id);
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->GalleriesArtwork->delete($this->request->data['GalleriesArtwork']['id']);
			$this->Session->setFlash(__d('team', 'The artwork has been deleted.'), 'messages/success');
			$this->redirect(array('action'=>'index'));
		}
		if (!$this->request->data) $this->request->data = $galleries_artwork;
	}

}
?>
