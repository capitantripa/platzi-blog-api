<?php


class clone_controller {

  public function execute (){

    $Platzi = new Platzi();
    $Sync = new Sync();
    $init = 153;

    set_time_limit(0);
    ignore_user_abort(true);

    while ($init >= 1)
    {
      $Sync->copy_page($init);
      $init  = $init -1;
      sleep(30);
    }
  }
}
