<?php
/**
 * Created by Seinaru
 * Date: 25.01.2019
 */
class Controller_404 extends Controller
{
    function action_index()
    {
        $this->view->generate('404_view.php','404_view.php');
    }
}