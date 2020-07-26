 function getValue() {
      var rowID;
      var fieldValue;
      var inputVal;
      if (event.keyCode == 13) {
        rowID = event.srcElement.id;
        fieldValue = document.getElementById(rowID).value;
        inputVal = rowID + "#" + fieldValue;
		
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

function deleteRow() {
      var rowID = event.srcElement.id;
      if (confirm('Da li želite da uklonite stavku?')) {
        $.ajax({
          type: "POST",
          url: "deleteRow.php",
          dataType: 'json',
          data: ({
            stavka: rowID
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
    
	