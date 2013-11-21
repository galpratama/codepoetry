<?php
/*

Aku tak prnah ingin melupakan dirimu.
Apalagi benci.
Sekian masa sekian cerita tlah kita lewati.
Suka dn duka brsama.

Sungguh berat untk kulupakan.
Sangat tak mungkin untk benci.
Karena kau sangat berkesan.
Karena kau sangat mendalam.

Percayalah kekasihku.
Hanya satu kau kasihku.
Dan hanya satu inginku.
Hidup bersama denganmu.

 */

$this->aku->lupa(FALSE, $kamu);
$this->aku->benci(FALSE, $kamu);
$this->aku->berkesan(TRUE, $kamu);
$this->aku->mendalam(TRUE, $kamu);

$waktu = 2;
$bersama = TRUE;
$forever = TRUE;

$suka = $this->kita->kehidupan($waktu,$bersama);
$duka = $suka;

if ($kamu['percaya'] == TRUE){
	$this->aku->kasih($kamu['name'],$forever);
}

