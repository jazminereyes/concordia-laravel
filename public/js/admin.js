$(document).ready(function(){
    var base_url = "http://localhost:8080/concordia/";
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('.view').on('click',function(){
        var id = $(this).data('ids');
        console.log(id);
        $.ajax({
            type: "GET",
            url: base_url+'/sponsor/'+id,
            success: function(response) {
                console.log(response);
                $('.name').attr('value', response.firstname+" "+response.lastname);
                $('.address').attr('value', response.street+" "+response.city+" "+response.zip+" "+response.country);
                $('.birthdate').attr('value', response.birthdate);
                $('.email').attr('value', response.email);
                $('.contact').attr('value', response.contactnumber);
                $('.donationtype').attr('value', response.donationtype);
                $('.scholar').attr('value', response.scholarcount);
                $('.amount').attr('value', response.amount);
            },
        });
    });
});
