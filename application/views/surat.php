<?php 
function hariIndo ($hariInggris) {
    switch ($hariInggris) {
      case 'Sunday':
        return 'Minggu';
      case 'Monday':
        return 'Senin';
      case 'Tuesday':
        return 'Selasa';
      case 'Wednesday':
        return 'Rabu';
      case 'Thursday':
        return 'Kamis';
      case 'Friday':
        return 'Jumat';
      case 'Saturday':
        return 'Sabtu';
      default:
        return 'hari tidak valid';
    }
  }

  function bulanindo ($bulannya) {
    switch ($bulannya) {
      case 'January':
        return 'Januari';
      case 'February':
        return 'Februari';
      case 'April':
        return 'April';
      case 'September':
        return 'September';
      case 'November':
        return 'November';
      case 'March':
        return 'Maret';
      case 'May':
        return 'Mei';
      case 'June':
        return 'Juni';
      case 'July':
        return 'Juli';
      case 'August':
        return 'Agustus';
      case 'October':
        return 'Oktober';
      case 'December':
        return 'Desember';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .tdleft {
            width:30%;
        }
    </style>
</head>
<body onload="window.print()">
    <table align="center">
        <tr>
            <td>
                <img src="<?= base_url('assets/image/kudushp.jpg')?>" width="80">
            </td>
            <td>
                <center>
                    <b>
                        <font size="3">PEMERINTAH KABUPATEN KUDUS</font>
                        <br>
                        <font size="3">DINAS SOSIAL, PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN</font>
                        <br>
                        <font size="3">ANAK, PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA</font>
                    </b>
                    <br>
                    <font size="3">Jalan Mejobo No 99 (Komplek Perkantoran) Telp. (0291) 442622</font>
                    <br>
                    <font size="2">Email: dinsosp3ap2kb.kudus@gmail.com Website: dinsosp3ap2kb-kabkudus.com</font>
                    <br>
                    <font size="2">KUDUS 59319</font>
                </center>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <hr style="border: 3px solid black; background-color: black; margin-bottom: 5px !important">
                <hr style="background-color: black; border:1px solid black; margin: 0em">
            </td>
        </tr>
    </table>
    <center style="margin-top: 3px">
        <u>
            <b>
                <font size="4">HASIL VERIFIKASI CALON PENERIMA PBI JKN KUDUS</font>
                <br>
            </b>
        </u>
        <font size="3">NOMOR _ _ _ /<?= date('m') ?>/<?= date('Y')?></font>
        <table>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2">
                    <p style="font-size: 18px; margin-left: 8%; margin-right:8%; text-align: justify; text-justify: inter-word">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan Berita Acara Hasil verifikasi dan validasi yang dilaksanakan pada hari 
                        <b><?= hariindo(date('l'))?></b> 
                        tanggal 
                        <b><?= date('d') ?></b> 
                        bulan 
                        <b><?= bulanindo(date('F')) ?></b> 
                        tahun 
                        <b><?= date('Y') ?></b> 
                        tentang Calon Peserta Bantuan Iur Jaminan Kesehatan Nasional (PBI JKN) bersama ini diberitahukan dengan hormat bahwa : 
                    </p>
                </td>
            </tr>
        </table>
        <div style="width:100%">
            <table width="80%" style="margin: 0 auto; padding-left: 4%; padding-right: 4%" align="center">
                <tr>
                    <td class="tdleft">Nama</td>
                    <td style="text-transform: uppercase">&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<?= $nama?></td>
                </tr>
                <tr>
                    <td class="tdleft">Tempat, Tanggal Lahir</td>
                    <td style="text-transform: uppercase">&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<?= $ttl ?></td>
                </tr>
                <tr>
                    <td class="tdleft">Alamat</td>
                    <td style="text-transform: uppercase">&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<?= $alamat ?></td>
                </tr>
                    <td class="tdleft">Kecamatan</td>
                    <td style="text-transform: uppercase">&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<?= $kecamatan ?></td>
                </tr>
            </table>
        </div>
        <table>
            <tr>
                <td colspan="2">
                    <p style="font-size: 18px; margin-left: 8%; margin-right:8%; text-align: justify; text-justify: inter-word">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dinyatakan
                        <b> 
                                LAYAK / TIDAK LAYAK
                                <!-- <span style="text-decoration: line-through">TIDAK LAYAK</span> -->

                        </b>
                        untuk mendapatkan Bantuan Iur Jaminan Kesehatan Nasional, dengan masa berlaku satu bulan terhitung mulai tanggal
                        <b style="text-transform: uppercase"> <?= date('d').' '.bulanindo(date('F'))." ".date('Y') ?> </b>
                        s/d tanggal
                        <?php 
                            $tgldepan = date('d', strtotime("+30 day", strtotime(date("Y-m-d"))));; 
                            $bulandepan = bulanindo(date('F', strtotime("+30 day", strtotime(date("Y-m-d")))));;
                            $tahundepan = date('Y', strtotime("+30 day", strtotime(date("Y-m-d"))));
                            ?>
                        <b style="text-transform: uppercase"><?= $tgldepan . ' ' . $bulandepan . ' '. $tahundepan ?></b>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <p style="font-size: 18px; margin-left: 8%; margin-right:8%; text-align: justify; text-justify: inter-word">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat rekomendasi ini dibuat untuk dapat digunakan sebagaimana mestinya.
                    </p>
                </td>
            </tr>
        </table>
    </center>
    <div style="max-width:340px; float:right; margin-right: 10%; position:relative">
        <p style="font-size: medium; text-align: center">
            Kudus, <span style="text-transform: uppercase"><?= date('d').' '.bulanindo(date('F'))." ".date('Y') ?></span>
            <br>
            a.n Kepala Dinas Sosial, Pemberdayaan Perempuan,
            <br>
            Perlindungan Anak, Pengendalian Penduduk
            <br>
            dan Keluarga Berencana Kabupaten Kudus
            <br>
            Kepala Bidang Pemberdayaan Kelembagaan Sosial
            <br>
            Dan Keluarga Miskin
            <br>
            <!-- <img src="http://bantuan.com/img/ttd.png" height="130" width="260" style="display: block; margin-bottom: -5%; margin-top: -5%"> -->
            <span style="text-transform: uppercase; position: absolute; left: 0; right: 0; margin-top: 100px; width: 100%">
                <b>
                    <u>DARWATI, SH</u>
                </b>
                <br>
                Pembina
                <br>
                NIP. 19671222 199208 2 001
            </span>
        </p>
    </div>
</body>
</html>