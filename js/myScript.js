 function getValue() {
      var rowID;
      var fieldValue;
      var inputVal;
      if (event.keyCode == 13) {
        rowID = event.srcElement.id;
        fieldValue = document.getElementById(rowID).value;
        inputVal = rowID + "#" + fieldValue;

        //alert("Vrijednost polja je" + vrijednost);
        $.ajax({
          type: 'POST',
          url: 'updateRow.php',
          dataType: 'json',
          data: ({
            stavka: inputVal
          }),
          success: function() {
            location.reload();
          },
          error: function() {
            location.reload();
          }
        });
      }
    }