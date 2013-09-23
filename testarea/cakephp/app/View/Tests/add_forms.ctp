<?php $html=$this->Helpers->load('Html') ?>
        <h2>Witamy</h2>
        <form action="viewForms" method="POST">
        Podaj cene:<input type="text" name="data[MyModel][price]" />
        <input type="submit" value="wyslij" />
        </form>