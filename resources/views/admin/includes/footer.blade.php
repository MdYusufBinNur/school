
<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                {{--<li>--}}
                    {{--<a href="#?">--}}
                        {{--OCTORIZ--}}
                    {{--</a>--}}
                {{--</li>--}}

            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="https://www.tech-bari.com">TECH-BARI</a>
        </div>
    </div>
</footer>

</div>



</div>


<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
<script src="{{ asset('paper_dashboard/assets/js/jquery.min.js') }}"  type="text/javascript"></script>
<script src="{{ asset('paper_dashboard/assets/js/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('paper_dashboard/assets/js/perfect-scrollbar.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('paper_dashboard/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Forms Validations Plugin -->
<script src="{{ asset('paper_dashboard/assets/js/jquery.validate.min.js') }}" ></script>

<!-- Promise Library for SweetAlert2 working on IE -->
<script src="{{ asset('paper_dashboard/assets/js/es6-promise-auto.min.js') }}" ></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('paper_dashboard/assets/js/moment.min.js') }}"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<script src="{{ asset('paper_dashboard/assets/js/bootstrap-datetimepicker.js') }}"></script>

<!--  Select Picker Plugin -->
<script src="{{ asset('paper_dashboard/assets/js/bootstrap-selectpicker.js') }}"  ></script>

<!--  Switch and Tags Input Plugins -->
<script src="{{ asset('paper_dashboard/assets/js/bootstrap-switch-tags.js') }}"  ></script>

<!-- Circle Percentage-chart -->
<script src="{{ asset('paper_dashboard/assets/js/jquery.easypiechart.min.js') }}" ></script>

<!--  Charts Plugin -->
<script src="{{ asset('paper_dashboard/assets/js/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('paper_dashboard/assets/js/bootstrap-notify.js') }}" ></script>

<!-- Sweet Alert 2 plugin -->
<script src="{{ asset('paper_dashboard/assets/js/sweetalert2.js') }}"></script>

<!-- Vector Map plugin -->
<script src="{{ asset('paper_dashboard/assets/js/jquery-jvectormap.js') }}"></script>

<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script>

<!-- Wizard Plugin    -->
<script src="{{ asset('paper_dashboard/assets/js/jquery.bootstrap.wizard.min.js') }}"  ></script>

<!--  Bootstrap Table Plugin    -->
<script src="{{ asset('paper_dashboard/assets/js/bootstrap-table.js') }}" ></script>

<!--  Plugin for DataTables.net  -->
<script src="{{ asset('paper_dashboard/assets/js/jquery.datatables.js') }}"></script>

<!--  Full Calendar Plugin    -->
<script src="{{ asset('paper_dashboard/assets/js/fullcalendar.min.js') }}"  ></script>

<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
<script src="{{ asset('paper_dashboard/assets/js/paper-dashboard.js') }}" ></script>

<!--   Sharrre Library    -->
<script src="{{ asset('paper_dashboard/assets/js/jquery.sharrre.js') }}" ></script>

<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
<script src="{{ asset('paper_dashboard/assets/js/demo.js') }}" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>




<script type="text/javascript">
    $().ready(function(){
        demo.checkFullPageBackgroundImage();

        setTimeout(function(){
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
@yield('script')
@yield('footer')
