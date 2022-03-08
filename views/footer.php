</div><!-- az-content-body -->
        <div class="az-footer">
            <div class="container-fluid">
                <span>&copy; 2022 Computron programming team</span>
                <span></span>
            </div><!-- container -->
        </div><!-- az-footer -->
    </div><!-- az-content -->

    <script src="<?php echo constant('URL') ?>public/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo constant('URL') ?>public/lib/ionicons/ionicons.js"></script>
        <script src="<?php echo constant('URL') ?>public/lib/lightslider/js/lightslider.min.js"></script>

    <script src="<?php echo constant('URL') ?>public/js/azia.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function() {
            'use strict'

            $('.az-sidebar .with-sub').on('click', function(e) {
                e.preventDefault();
                $(this).parent().toggleClass('show');
                $(this).parent().siblings().removeClass('show');
            })

            $(document).on('click touchstart', function(e) {
                e.stopPropagation();

                // closing of sidebar menu when clicking outside of it
                if (!$(e.target).closest('.az-header-menu-icon').length) {
                    var sidebarTarg = $(e.target).closest('.az-sidebar').length;
                    if (!sidebarTarg) {
                        $('body').removeClass('az-sidebar-show');
                    }
                }
            });


            $('#azSidebarToggle').on('click', function(e) {
                e.preventDefault();

                if (window.matchMedia('(min-width: 992px)').matches) {
                    $('body').toggleClass('az-sidebar-hide');
                } else {
                    $('body').toggleClass('az-sidebar-show');
                }
            })

            /* ----------------------------------- */
            /* Dashboard content */


        });
    </script>
</body>

</html>