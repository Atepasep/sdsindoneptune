        <script src="<?= base_url().'assets/js/vendor/jquery-3.3.1.js' ?>"></script>
        <script src="<?= base_url().'assets/js/vendor/bootstrap.min.js' ?>"></script>
        <!-- <script src="js/jquery.easing.min.js"></script> -->
        <script src="<?= base_url().'assets/js/isotope.pkgd.min.js' ?>"></script>
        <script src="<?= base_url().'assets/js/jquery.nicescroll.min.js' ?>"></script>
        <script src="<?= base_url().'assets/js/owl.carousel.min.js' ?>"></script>
        <script src="<?= base_url().'assets/js/jquery-validation.min.js' ?>"></script>
        <script src="<?= base_url().'assets/js/form.min.js' ?>"></script>
        <script src="<?= base_url().'assets/js/main.js' ?>"></script>
        <script src="<?= base_url().'assets/js/myjs.js' ?>"></script>
        <script src="<?= base_url().'assets/vendor/toast/jquery.toast.min.js' ?>"></script>
        <script type="text/javascript">
        <?php if($this->session->flashdata('msg') == 'usernotfound'): ?>
            $.toast({
                heading: 'Error',
                text: "Id Key tidak ditemukan, Hubungi HRD anda.",
                showHideTransition: 'slide',
                icon: 'error',
                hideAfter: 5000,
                position: 'bottom-right',
                bgColor: ' 	#ff6f69'
            });
        <?php $this->session->sess_destroy(); endif; ?>
        <?php if($this->session->flashdata('msg') == 'berhasil'): ?>
            $.toast({
                heading: 'Info',
                text: "data berhasil disimpan, terima kasih atas perhatian anda",
                showHideTransition: 'slide',
                icon: 'error',
                hideAfter: 5000,
                position: 'bottom-right',
                bgColor: ' 	#0d76d8'
            });
        <?php $this->session->sess_destroy(); endif; ?>
        </script>
    </body>
</html>