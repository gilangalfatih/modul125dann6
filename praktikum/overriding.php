<?php

class Mahasiswa {

public string $nim = "2207101065";

public function setNim() {

return $this->nim;
 }
 }

 class Krs extends Mahasiswa {

 // Method override

 public function setNim() {

 return null;
 }

 }

 $krs = new Krs();
 echo $krs->setNim();