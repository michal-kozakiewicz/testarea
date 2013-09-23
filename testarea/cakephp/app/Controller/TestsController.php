<?php
class TestsController extends AppController{
    public function AddForms(){
       
    }
    public function viewForms(){
        $stawkaVat=$this->request->data['MyModel']['price'];
        $wynik=$stawkaVat*5;
        $this->set('wynik', $wynik);
    }
}