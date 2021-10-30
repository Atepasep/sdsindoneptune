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
                                <p>Surat Deklarasi Sehat<br> Silahkan masukan <strong>id Key</strong> yang terdiri dari noinduk+tgllahir.<i> ex : BXXXX110190</i></p>
                            </div>

                            <div class="form-idkey">
                                <form class="idkey-form" action="<?= $formlogin ?>" method="post" id="formsignin" name="formsignin">
                                    <label for="username" id="labeluser">masukan id Key anda Disini</label>
                                    <input type="text" name="username" id="username" autocomplete="off">
                                    <a class="btn btn-sm btn-success btn-flat" id="cekdatakey">S u b m i t</a>
                                </form>
                            </div>

                        </div> <!-- /.col-xs-12 -->

                    </div> <!-- /.row -->
                </div> <!-- /.container -->

            </div> <!-- /.pt-tablecell -->
        </div> <!-- /.pt-table -->
    </main> <!-- /.site-wrapper -->
</div>