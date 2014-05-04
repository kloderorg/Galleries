<?php
App::uses('Component', 'Controller');
class FilterGalleriesComponent extends Component {

    public $components = array('Session', 'Search.Searchable');

    public function initialize(Controller $controller) {
        $this->controller = $controller;
    }

    public function get() {
        $this->controller->paginate = array(
            'conditions' => $this->getConditions(),
            'limit' => $this->getLimit(),
            'order' => array(
                'Gallery.modified' => 'DESC'
            )
        );
        return $this->controller->paginate('Gallery');
    }

    public function getConditions() {
        $conditions = array();
        $conditions += $this->Searchable->getConditions(array('name', 'last_name'));
        return $conditions;
    }

    public function getLimit() {
        $limit = 25;
        if (array_key_exists('limit', $this->controller->request->params['named'])) $limit = $this->controller->request->params['named']['limit'];
        return $limit;
    }

}
