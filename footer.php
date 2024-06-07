</div>
<!-- bottom footer -->
<div class="content-footer">
    <nav class="footer-right">
        <ul class="nav">
            <li>
                <a href="javascript:;">Feedback</a>
            </li>
        </ul>
    </nav>
    <nav class="footer-left">
        <ul class="nav">
            <li>
                <a href="javascript:;">
                    <span>Copyright</span>
                    &copy; 2016 Your App
                </a>
            </li>
            <li class="hidden-md-down">
                <a href="javascript:;">Privacy</a>
            </li>
            <li class="hidden-md-down">
                <a href="javascript:;">Terms</a>
            </li>
            <li class="hidden-md-down">
                <a href="javascript:;">help</a>
            </li>
        </ul>
    </nav>
</div>
<!-- /bottom footer -->
</div>
<!-- /main area -->
</div>
<!-- /content panel -->


</div>

<script type="text/javascript">
    window.paceOptions = {
        document: true,
        eventLag: true,
        restartOnPushState: true,
        restartOnRequestAfter: true,
        ajax: {
            trackMethods: ['POST', 'GET']
        }
    };
</script>

<!-- build:js({.tmp,app}) scripts/app.min.js -->
<script src="<?= asset('theme/assets/vendor/jquery/dist/jquery.js') ?>"></script>
<script src="<?= asset('theme/assets/vendor/pace/pace.js') ?>"></script>
<script src="<?= asset('theme/assets/vendor/tether/dist/js/tether.js') ?>"></script>
<script src="<?= asset('theme/assets/vendor/bootstrap/dist/js/bootstrap.js') ?>"></script>
<script src="<?= asset('theme/assets/vendor/fastclick/lib/fastclick.js') ?>"></script>
<script src="<?= asset('theme/assets/scripts/constants.js') ?>"></script>
<script src="<?= asset('theme/assets/scripts/main.js') ?>"></script>
<!-- endbuild -->

<!-- page scripts -->
<script src="<?= asset('theme/assets/vendor/flot/jquery.flot.js') ?>"></script>
<script src="<?= asset('theme/assets/vendor/flot/jquery.flot.resize.js') ?>"></script>
<script src="<?= asset('theme/assets/vendor/flot/jquery.flot.stack.js') ?>"></script>
<script src="<?= asset('theme/assets/vendor/flot-spline/js/jquery.flot.spline.js') ?>"></script>
<script src="<?= asset('theme/assets/vendor/bower-jvectormap/jquery-jvectormap-1.2.2.min.js') ?>"></script>
<script src="<?= asset('theme/assets/data/maps/jquery-jvectormap-us-aea.js') ?>"></script>
<script src="<?= asset('theme/assets/vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.js') ?>"></script>
<script src="<?= asset('theme/assets/vendor/noty/js/noty/packaged/jquery.noty.packaged.min.js') ?>"></script>
<script src="<?= asset('theme/assets/scripts/helpers/noty-defaults.js') ?>"></script>
<!-- end page scripts -->

<!-- Datatables -->
<script src="<?= asset('theme/assets/vendor/datatables/media/js/jquery.dataTables.js') ?>"></script>
<script src="<?= asset('theme/assets/vendor/datatables/media/js/dataTables.bootstrap4.js') ?>"></script>

<script src="<?= asset('theme/assets/js/datatables/datatables.min.js') ?>"></script>
<script src="<?= asset('theme/assets/js/datatables/datatables.bootstrap5.min.js') ?>"></script>
<script src="<?= asset('theme/assets/js/datatables-pagingtype/full_numbers_no_ellipses.js') ?>"></script>



<!-- initialize page scripts -->
<script src="<?= asset('theme/assets/scripts/dashboard/dashboard.js') ?>"></script>
<!-- end initialize page scripts -->

<?php foot_script() ?>
</body>

</html>