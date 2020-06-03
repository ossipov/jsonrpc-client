<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $page_uid;
    public $page_fields;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pageUid, $pageFields)
    {
        $this->page_uid = $pageUid;
        $this->page_fields = $pageFields;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form',[
            'page_uid' => $this->page_uid,
            'page_fields' => $this->page_fields
        ]);
    }
}
