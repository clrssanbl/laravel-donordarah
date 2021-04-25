(function($) {

  $('#golonganDarah').parent().append('<ul class="list-item" id="newgolonganDarah" name="golonganDarah"></ul>');
  $('#golonganDarah option').each(function(){
      $('#newgolonganDarah').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
  });
  $('#golonganDarah').remove();
  $('#newgolonganDarah').attr('id', 'golonganDarah');
  $('#golonganDarah li').first().addClass('init');
  $("#golonganDarah").on("click", ".init", function() {
      $(this).closest("#golonganDarah").children('li:not(.init)').toggle();
  });
  
  var allOptions = $("#golonganDarah").children('li:not(.init)');
  $("#golonganDarah").on("click", "li:not(.init)", function() {
      allOptions.removeClass('selected');
      $(this).addClass('selected');
      $("#golonganDarah").children('.init').html($(this).html());
      allOptions.toggle();
  });

  var marginSlider = document.getElementById('slider-margin');
  if (marginSlider != undefined) {
      noUiSlider.create(marginSlider, {
            start: [500],
            step: 10,
            connect: [true, false],
            tooltips: [true],
            range: {
                'min': 0,
                'max': 1000
            },
            format: wNumb({
                decimals: 0,
                thousand: ',',
                prefix: '$ ',
            })
    });
  }
  $('#reset').on('click', function(){
      $('#register-form').reset();
  });

  $('#register-form').validate({
    rules : {
        first_name : {
            required: true,
        },
        last_name : {
            required: true,
        },
        company : {
            required: true
        },
        email : {
            required: true,
            email : true
        },
        phone_number : {
            required: true,
        }
    },
    onfocusout: function(element) {
        $(element).valid();
    },
});

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });
})(jQuery);