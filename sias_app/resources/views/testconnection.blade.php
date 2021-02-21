<?php
  use Illuminate\Support\Facades\DB;
  $users = DB::select("select * from sias_paciente")
  var_dump($users);
 ?>
