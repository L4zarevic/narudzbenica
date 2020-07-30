
 $(document).keypress(function(e) {
      if (e.which == 13) {
        var inputVal = 0;
        for (var i = 1; i <= 2362; i++) {
          if (document.getElementById(i).value.length != 0) {
            if (document.getElementById(i).value > 0) {
              if (!isNaN(document.getElementById(i).value)) {
                inputVal = document.getElementById(i).value + "#" + i;
                add(inputVal);
              }
            }
          }
        }
      }
    });

//Metod za azuriranje reda u tabeli naruzbenice
 function getValue() {
      if (event.keyCode == 13) {
        var rowID = event.srcElement.id;
        var fieldValue = document.getElementById(rowID).value;
        var inputValue = rowID + "#" + fieldValue;
		
        $.ajax({
          type: 'POST',
          url: 'updateRow.php',
          dataType: 'json',
          data: ({
            stavka: inputValue
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
	
	

//Metod za brisanje reda u tabeli narudzbenice
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
	
//Metod za validaciju forme u unosu specijale
function checkForm() {

      var odOsOu = document.getElementById("select1");
      var vrstaSoc = document.getElementById("select2");
      var indeks = document.getElementById("select4");
      var vrstaMat = document.getElementById("select5");
      var precnik1 = document.getElementById("select6");
      var precnik2 = document.getElementById("select7");

      var jm = document.getElementById("select11").value;
      var kolicina = document.getElementById("kolicina").value;

      var precnik;

      if (precnik1.selectedIndex == 0) {
        precnik = document.getElementById("select7").value;
      } else if (precnik2.selectedIndex == 0) {
        precnik = document.getElementById("select6").value;
      }else{
		  precnik = 0;
	  }

      if ((odOsOu.selectedIndex == 0) || (vrstaSoc.selectedIndex == 0) || (indeks.selectedIndex == 0) || (vrstaMat.selectedIndex == 0) || (precnik == 0) || (kolicina == 0)) {
		  
        alert("Niste unijeli sve potrebne parametre\nObavezna polja za unos su:\n - Od/Os/Ou \n- Vrsta sočiva \n- Index \n- Vrsta materijala \n- Prečnik \n- Količina");
        return false;
      }
    }
    