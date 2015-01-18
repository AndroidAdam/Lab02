<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of About
 *
 * @author Adam
 */
class About extends Application {
        /**
         * Index page for this controller.
         */
    	public function index()
	{
		//$this->load->view('about');
            $this->data['pagebody'] = 'welcome';
            $this->render();
	}
}
