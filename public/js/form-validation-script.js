var Script = function () {

    $.validator.setDefaults({
        submitHandler: function() { alert("submitted!"); }
    });

    $().ready(function() {
        // validate the comment form when it is submitted
        $("#feedback_form").validate();

        // validate signup form on keyup and submit
        $("#researchs").validate({
            rules: {
                family_id: {
                    required: true,
                   
                },
                study_id: {
                    required: true,
                    
                },
                subject: {
                    required: true,
                    
                },
                family_option: {
                    required: true,
                   
                },
                first_name: {
                    required: true,
                    
                   
                },
                last_name: {
                    required: true,
                   
                },
                gender: {
                    required: true,
                    
                },
                dob: {
                    required: true,
                    
                },
                project_name: {
                    required: true,
                }
            },

            messages: {                
                family_id: {
                    required: "Please enter a family ID.",
                    
                },
                study_id: {
                    required: "Please enter a Study ID.",
                    
                },
                subject: {
                    required: "Please select a Family Relation.",
                    
                },
                family_option: {
                    required: "Please enter Family option.",
                    
                },
                 first_name: {
                    required: "Please provide a first name.",
                    
                    
                },
                last_name: {
                    required: "Please provide a Last name.",
                },
                subject: {
                    required: "Please select a Gender.",
                    
                },
                dob: {
                    required: "Please enter date of birth.",
                    
                },
                project_name: {
                    required: "Please Name is required.",
                    
                },
            },
            errorPlacement: function(error, element) {
              var placement = $(element).data('error');
               if (placement) {
                 $(placement).append(error)
               } else {
                 error.insertAfter(element);
               }
             }
          
        });

        // propose username by combining first- and lastname
        $("#username").focus(function() {
            var firstname = $("#firstname").val();
            var lastname = $("#lastname").val();
            if(firstname && lastname && !this.value) {
                this.value = firstname + "." + lastname;
            }
        });

        //code to hide topic selection, disable for demo
        var newsletter = $("#newsletter");
        // newsletter topics are optional, hide at first
        var inital = newsletter.is(":checked");
        var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
        var topicInputs = topics.find("input").attr("disabled", !inital);
        // show when newsletter is checked
        newsletter.click(function() {
            topics[this.checked ? "removeClass" : "addClass"]("gray");
            topicInputs.attr("disabled", !this.checked);
        });
    });


}();