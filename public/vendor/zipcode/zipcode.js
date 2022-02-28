$(function () {
  setTimeout(function(){
    // handling bank code
    $('#postcode').on('keyup', function (e) {
        if (!(48 <= e.keyCode && e.keyCode <= 57)) { // 0 - 9
            return;
        }
        getAddress();
    });
    $('#postcode').on('blur', function (e) {
      getAddress();
    });

    function getAddress(){
      postcode = $('#postcode').val();

      if (postcode.length != 7) {
          $('#postcode').attr('placeholder','郵便番号ご確認ください。');
          $('#prefecture').val('');
          $('#city').val('');
          $('#suburb').val('');
          return;
      }

      $.getJSON("https://postcode.teraren.com/postcodes/" + postcode + ".json", function (json) {
          $('#prefecture').val(json.prefecture);
          $('#city').val(json.city);
          $('#suburb').val(json.suburb);
      }).fail(function (jqXHR, textStatus, errorThrown) {
          $('#prefecture').val('再度フラッシュを行う');
          $('#city').val('');
          $('#suburb').val('');
      });
    }
},0);
});
