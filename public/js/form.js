$(document).ready(function(){

      $(document).on("click",'.add' ,function(){
          var $tr = $(this).closest("tr"),lenth=0;
          var tr = $(document).find("table tbody tr").length;
          lenth = tr;
          var radioButton ="<div class='radios'><label for='result-1"+lenth+"'><input type='radio' value='Yes' name='test[result]["+lenth+"]'>Yes</label><label for='result-2"+lenth+"'><input type='radio' value='No' name='test[result]["+lenth+"]'>No</label></div>";
          var lab_initiated="<div class='form-group'><div class='checkbox'><label><input type='checkbox' value='No' class='lab_initiated' name='test[lab_initiated_"+lenth+"]'></lable></div></div>";
          var test_not_performed="<div class='form-group'><div class='checkbox'><label><input type='checkbox' value='No' class='test_not_performed' name='test[test_not_performed_"+lenth+"]'>Test Not Performed</label></div></div>";
          var img_ordered="<div class='checkbox'><label><input type='checkbox' value='No' class='img_ordered' name='test[img_ordered_"+lenth+"]'></label></div'>";
          $tr.clone().insertAfter($tr);
          $(document).find("table tbody tr:last td:nth-child(2)").html(img_ordered);
          $(document).find("table tbody tr:last td:nth-child(3)").html(lab_initiated);
          $(document).find("table tbody tr:last td:nth-child(10)").html(test_not_performed);
          $(document).find("table tbody tr:last td:nth-child(8)").html(radioButton);

          $(document).find("table tbody tr:last td:nth-child(5)").find("input.hasDatepicker").datepicker();

          return true;
      });
      $(document).on("click",'.delete',function(){
          var $tr = $(this).closest("tr");
          var row;
          var tr = $(document).find("table tbody tr").length;
          if(tr > 1){
             $tr.remove();
             for(var i=0;i<(tr-1);i++){
                row =i+1;
                $(document).find("table tbody tr:nth-child("+row+") td:nth-child(2) input").attr('name','test[img_ordered_'+i+']');
                $(document).find("table tbody tr:nth-child("+row+") td:nth-child(3) input").attr('name','test[lab_initiated_'+i+']');
                $(document).find("table tbody tr:nth-child("+row+") td:nth-child(10) input").attr('name','test[test_not_performed_'+i+']');
                $(document).find("table tbody tr:nth-child("+row+") td:nth-child(8) input").attr('name','test[result]['+i+']');
             }
          }
          return true;

      });
      $(document).on("keyup","#family_id",function(){
           var family_id = $(this).val();
           var study_id = $("#study_id").val();
           var affected   = $('input[name="affected"]').val();
           var final_study_id ='RIMGC'+family_id+affected;

           $("#study_id").val(final_study_id)

      });
      $(document).on("change","select[name='subjects']",function(){
           var family_id = $('#family_id').val();
           var study_id  = $("#study_id").val();
           var subject   = $("#subject").val();
           var final_study_id ='RIMGC'+family_id+subject.slice(0,1);

           $("#study_id").val(final_study_id)

      });

      $(document).on("click",".test_not_performed,.lab_initiated,.img_ordered",function(){
           var val = $(this).val();
            if(val =='No')
              {
                  val = 'Yes';
              }else{
                 val = 'No';
              }

           $(this).val(val)

      });
  });

var form = (function() {

  var someElement = $("#foo"); //some element I know I'll use lots
  var family_validate = ['S','O'];
  var subject='';

  var dependency = function()
  {
    $("select[name='subject']").on("change",function(){
          subject = $(this).find('option:selected').val();
          $('#affected_status').css('display', 'block');
          if(family_validate.includes(subject)){
            if(subject=='O') {
              $('.other_member').css('display','block');
              $('.member_number').css('display','block');
            }
          } else {
            $('.member_number').css('display','none');
            $('.other_member').css('display','none');
            if (subject == 'P') {
              $('#affected_status').css('display', 'none');
            }
          }
    });

    $("input:radio[name='photo_permission']").on('change',function() {
        if($(this).val() == 'Yes'){
            $('.div_permission').css('display','block');
        } else {
            $('.div_permission').css('display','none');
        }
    });

    $("select[name='gender']").on('change',function(){
        if($(this).val()=='Other'){
            $('.other_gender').css('display','block');
        }else{
            $('.other_gender').css('display','none');
        }
    });

    $(document).on('change',"select[name='other_gender']",function(){
         if($(this).val()=='12'){
          $('.additional_other_gender').css('display','block');
         } else {
          $('.additional_other_gender').css('display','none');
         }
    });

    $("input:checkbox[name='primary_sample_type[]']").on('click',function(){
          var ischecked= $(this).is(':checked');

          if(!ischecked && $(this).val()=='8'){
            $('.primary_sample_type_other').css('display','none');
          }

          if(ischecked && $(this).val()=="8"){
               $('.primary_sample_type_other').css('display','block');
          }

          if(!ischecked && $(this).val()=='6'){
            $('.tissue_type').css('display','none');
          }

          if(ischecked && $(this).val()=="6"){
               $('.tissue_type').css('display','block');
          }


    });

    $("input:checkbox[name='derived_sample_type[]']").on('click',function(){
          var ischecked= $(this).is(':checked');

          if(!ischecked && $(this).val()=='7'){
            $('.other_derived_sample').css('display','none');
          }

          if(ischecked && $(this).val()=="7"){
               $('.other_derived_sample').css('display','block');
          }


    });

    $("input:checkbox[name='primary_language[]']").on('click',function(){
          var ischecked= $(this).is(':checked');

          if(!ischecked && $(this).val()=='Other'){
            $('.other_language').css('display','none');
          }

          if(ischecked && $(this).val()=="Other"){
               $('.other_language').css('display','block');
          }




    });

    $("input:radio[name='platform']").on('change',function() {
        if($(this).val() == '5'){
            $('.other_platform').css('display','block');
        } else {
            $('.other_platform').css('display','none');
        }
    });

    $("input:radio[name='affected']").on('change',function() {
        var family_id = $('#family_id').val();
        var study_id  = $("#study_id").val();
        var affected   = $(this).val();

        var final_study_id = study_id + affected;

        $("#study_id").val(final_study_id)
    });

  }

  var bionbankChart = function()
  {

    var pieData = [
        {
            value: 30,
            color:"#F38630"
        },
        {
            value : 50,
            color : "#E0E4CC"
        },
        {
            value : 100,
            color : "#69D2E7"
        }

    ];
    // new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
  }

  var init = function() {

    dependency();
  };

  return {
    init: init,

  };


})();

//usage

form.init();
