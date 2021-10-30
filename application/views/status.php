<div class="main-pagenya">
    <main class="site-wrapper">
        <div class="pt-table">
            <div class="pt-tablecell page-home relative" id="halamannya">
                <div class="overlay"></div>

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                            <div class="page-title home text-center text-success">
                                <img src="<?= base_url().'assets/' ?>img/logodepan.png" alt="" class="img-responsive center-block">
                                <p>DEKLARASI SEHAT</p>
                            </div>
                            <div class="isideklarasi">
                                Dalam rangka pencegahan dan pengendalian COVID 19, saya :
                                <input type="hidden" id="kodeinduk" value="<?= $datapersonil['noinduk'] ?>">
                                <input type="hidden" id="urlsehat" value="<?= base_url().'status/sehat' ?>">
                                <input type="hidden" id="urlsukses" value="<?= base_url().'status/oke' ?>">
                                <table>
                                    <tr>
                                        <td class="fixed1" style="vertical-align: top">Nama</td>
                                        <td style="width: 10px;" style="vertical-align: top">:</td>
                                        <td style="font-weight: bold;"><?= $datapersonil['nama']?></td>
                                    </tr>
                                    <tr>
                                        <td class="fixed1" style="vertical-align: top">Alamat</td>
                                        <td style="vertical-align: top">:</td>
                                        <td style="font-weight: bold;"><?= $datapersonil['alamat'] ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fixed1">NIK</td>
                                        <td>:</td>
                                        <td style="font-weight: bold;"><?= $datapersonil['noktp'] ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fixed1">No HP</td>
                                        <td>:</td>
                                        <td style="font-weight: bold;"><?= $datapersonil['nohp'] ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fixed1">Tanggal</td>
                                        <td>:</td>
                                        <td style="font-weight: bold;"><?= date('d-m-Y') ?></td>
                                    </tr>
                                </table>
                                Dengan ini menyatakan bahwa :
                                <table class="tablepernyataan">
                                    <tr style="font-weight: bold; text-align : center;">
                                        <td style="width: 40px;">No</td>
                                        <td>Pernyataan</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; vertical-align: top;">1</td>
                                        <td>
                                            <ul type="circle">
                                                Dalam 14 hari terakhir saya, 
                                                <li>Tidak ada anggota keluarga satu Rumah yang bergejala/terkonfirmasi COVID 19</li>
                                                <li>Tidak pernah bersentuhan fisik / berdekatan kurang dari 1 meter dengan orang yang bergejala/terkonfirmasi COVID 19</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td style="text-align: center; vertical-align: top;">2</td>
                                        <td>
                                            <ul type="circle">
                                            Saya tidak dalam kondisi dibawah ini :
                                                <li>demam, <i>fatigue, myalgia/ </i>nyeri otot</li>
                                                <li>batuk,</li>
                                                <li>hidung tersumbat, pilek</li>
                                                <li>sakit tenggorokan,</li>
                                                <li>sakit kepala,</li>
                                                <li>diare, anoreksia (tidak nafsu makan), mual dan muntah,</li>
                                                <li>kehilangan penciuman/anosmia</li>
                                                <li>hilang pengecapan/ageusia,</li>
                                                <li>sesak</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td style="text-align: center; vertical-align: top;">3</td>
                                        <td>
                                            <ul>
                                                Saya tidak dinyatakan terkonfirmasi COVID 19
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                                Demikian, Pernyataan ini dibuat dengan sebenar-benarnya untuk keselamatan dan kesehatan bersama.
                                <hr style="border: 1px solid black;">
                                <div class="tombol">
                                    <a href="#" class="btn btn-sm btn-success btn-flat" id="sayasehat">Saya sehat</a>
                                    <a href="#" class="btn btn-sm btn-danger btn-flat" id="sayasakit">Saya kurang sehat</a>
                                </div>
                                <div style="margin-top: 15px;">
                                    <a href="<?= base_url().'status/batal' ?>" class="btn btn-sm btn-info btn-flat" style="width: 100%;" id="batalkan">Kembali / Batal</a>
                                </div>
                            </div>

                        </div> <!-- /.col-xs-12 -->

                    </div> <!-- /.row -->
                </div> <!-- /.container -->

            </div> <!-- /.pt-tablecell -->
        </div> <!-- /.pt-table -->
    </main> <!-- /.site-wrapper -->
</div>