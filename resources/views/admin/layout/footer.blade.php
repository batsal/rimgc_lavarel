  </section>
 <!-- container section end -->
  <!-- javascripts -->
  <script src="{{URL::asset('js/jquery.js')}}"></script>
  <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{URL::asset('js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{URL::asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="{{URL::asset('js/jquery-ui-1.9.2.custom.min.js')}}"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="{{URL::asset('js/ga.js')}}"></script>
  <!--custom switch-->
  <script src="{{URL::asset('js/bootstrap-switch.js')}}"></script>
  <!--custom tagsinput-->
  <script src="{{URL::asset('js/jquery.tagsinput.js')}}"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="{{URL::asset('js/jquery.hotkeys.js')}}"></script>
  <script src="{{URL::asset('js/bootstrap-wysiwyg.js')}}"></script>
  <script src="{{URL::asset('js/bootstrap-wysiwyg-custom.js')}}"></script>
  <script src="{{URL::asset('js/moment.js')}}"></script>
  <script src="{{URL::asset('js/daterangepicker.js')}}"></script>
 <script src="{{URL::asset('js/bootstrap-datepicker.js')}}"></script>
 <script src="{{URL::asset('js/bootstrap-colorpicker.js')}}"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="{{URL::asset('assets/ckeditor/ckeditor.js')}}"></script>
  <!-- custom form component script for this page-->
  <script src="{{URL::asset('js/form-component.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/jquery.validate.min.js')}}"></script>

  <!-- custom form validation script for this page-->
  <script src="{{URL::asset('js/form-validation-script.js')}}"></script>
  <!-- custome script for all page -->
  <script src="{{URL::asset('js/scripts.js')}}"></script>
  <script src="{{URL::asset('js/form.js')}}"></script>

<script>
  
  $( function() {
    $(".datepicker,#enrolled_date,#sampleRecDate,#dob,#date_ordered,#able_assent_adult_date,#unable_assent_adult_date,#unable_assent_child_date,#able_assent_child_date,#consent_obtaining_date,#consent_authorized_date,#created_date,#receipt_date,#transfer_date").datepicker({ dateFormat: "Y-m-d" }).val();


  
  });
</script>
  @yield("script")

</body>

</html>
