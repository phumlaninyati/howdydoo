$('#staff_form').validate({
        rules: {
            name: {
                required: true
            },
            aka: {
                required: true
            },
            tittle: {
                required: true
            },
            location: {
                required: true
            },
            bio: {
                required: true
            }
        },

        messages: {
            name: {
                required : "Enter your Name Bitch!"
            },
            aka: {
                required : "You gotta have one, c'mon now"
            },
             tittle: {
                required : "What's your credentials partner?"
            },
             location: {
                required : "Either Or bro"
            },
             bio: {
                required : "Add a littel message about your self"
            }
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        }
    });

function muModal(staff_form)
{
  var form=staff_form,
      modal=$('<div/>', {
    'id':'alert',
  })
  .dialog({
    'title':'Iframe in a modal window',
    'modal':true,
    'width':350,
    'height':'auto',
    'buttons': {
      'OK': function() { 
        $(this).dialog( "close" ); 
        // do something, maybe call form.submit();
      }
     }
  });
  return false;
}