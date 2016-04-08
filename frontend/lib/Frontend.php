<?php
class Frontend extends App_Frontend {
    function init() {
        parent::init();

        $this->add('Layout_Centered');
        // you can also use Layout_Fluid
        $this->add('jUI');
        $this->dbconnect();

    }
}
