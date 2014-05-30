<?php

class BaseController extends Controller {

    protected $layout = 'layouts.default';

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }

    public function source()
    {
        return DataGrid::make(new City, array(
            'id',
            'country',
            'subdivision',
            'city',
            'population',
            'created_at',
        ), array(
            'sort' => 'id',
            'direction' => 'desc',
            'max_results' => 20,
        ));
    }

}