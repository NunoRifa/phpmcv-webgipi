<?php

class Login extends Controller
{
    public function invoke()
    {
        $reslt = $this->model->getlogin(); // it call the getlogin() function of model class
        if ($reslt == 'login') 
        {
            header('Location: ' . BASEURL . 'History');
        }
        else
        {
            header('Location: ' . BASEURL);
        }
    }
}
