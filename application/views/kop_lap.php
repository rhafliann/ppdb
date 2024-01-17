<?php
defined('BASEPATH') or exit('No direct script access allowed');
$id = $this->db->get('tbl_user')->row_array();
?>

<table border="0" width="100%">
  <tr>
    <td align="left">
      <img src="img/logosesat.png" alt="logo" width="100">
    </td>
    <td align="center">
      <b style="font-size:25px;">PANITIA PENERIMAAN PESERTA DIDIK BARU (PPDB)</b> <br>
      <b style="font-size:25px;">SMA SEJAHTERA 1 DEPOK</b> <br>
      <b style="font-size:25px;">TAHUN PELAJARAN <?php echo $id['th_pelajaran']; ?></b><br>
      <b align="left" style="font-size:15px;">
        Kantor : Jl. Anyelir Raya No. 68 Depok Jaya Kec. Pancoranmas <img src="img/telp.jpg" alt="telp." style="margin-bottom:-5px;margin-right:-5px;"> 021-7520622
        <br>
        Website : smasejahtera1depok.sch.id - E-mail : sandy.nurhadi@yahoo.co.id</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" align="center">
      <hr size="0" color="black" style="margin:0px;margin-bottom:1px;">
      <hr size="2" color="black" style="margin:0px;">
    </td>
  </tr>
</table>
<br>