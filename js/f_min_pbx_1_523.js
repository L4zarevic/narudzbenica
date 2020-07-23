$(document).on("keypress", "input", function (e) {

    function add(inputVal) {

        // function below will run clear.php?h=michael
        $.ajax({
            type: "POST",
            url: "dodajStavku-db.php",
            dataType: "json",
            data: ({
                stavka: inputVal
            }),
            success: function () {
                location.reload();
            },
            error: function () {
                location.reload();
            }
        });
    }

    if (e.which == 13) {
        //var inputVal = $(this).val();
        var inputVal;

        if (document.getElementById("1").value.length != 0) {
            inputVal = document.getElementById("1").value + "#" + "B+00065" + "#" + "PHB 0,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("2").value.length != 0) {
            inputVal = document.getElementById("2").value + "#" + "BC+000+00265" + "#" + "PHB cyl 0,00/+0,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("3").value.length != 0) {
            inputVal = document.getElementById("3").value + "#" + "BC+000+00565" + "#" + "PHB cyl 0,00/+0,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("4").value.length != 0) {
            inputVal = document.getElementById("4").value + "#" + "BC+000+00765" + "#" + "PHB cyl 0,00/+0,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("5").value.length != 0) {
            inputVal = document.getElementById("5").value + "#" + "BC+000+01065" + "#" + "PHB cyl 0,00/+1,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("6").value.length != 0) {
            inputVal = document.getElementById("6").value + "#" + "BC+000+01265" + "#" + "PHB cyl 0,00/+1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("7").value.length != 0) {
            inputVal = document.getElementById("7").value + "#" + "BC+000+01565" + "#" + "PHB cyl 0,00/+1,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("8").value.length != 0) {
            inputVal = document.getElementById("8").value + "#" + "BC+000+01765" + "#" + "PHB cyl 0,00/+1,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("9").value.length != 0) {
            inputVal = document.getElementById("9").value + "#" + "BC+000+02065" + "#" + "PHB cyl 0,00/+2,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("10").value.length != 0) {
            inputVal = document.getElementById("10").value + "#" + "B+00265" + "#" + "PHB +0,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("11").value.length != 0) {
            inputVal = document.getElementById("11").value + "#" + "BC+002+00265" + "#" + "PHB cyl +0,25/+0,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("12").value.length != 0) {
            inputVal = document.getElementById("12").value + "#" + "BC+002+00565" + "#" + "PHB cyl +0,25/+0,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("13").value.length != 0) {
            inputVal = document.getElementById("13").value + "#" + "BC+002+00765" + "#" + "PHB cyl +0,25/+0,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("14").value.length != 0) {
            inputVal = document.getElementById("14").value + "#" + "BC+002+01065" + "#" + "PHB cyl +0,25/+1,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("15").value.length != 0) {
            inputVal = document.getElementById("15").value + "#" + "BC+002+01265" + "#" + "PHB cyl +0,25/+1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("16").value.length != 0) {
            inputVal = document.getElementById("16").value + "#" + "BC+002+01565" + "#" + "PHB cyl +0,25/+1,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("17").value.length != 0) {
            inputVal = document.getElementById("17").value + "#" + "BC+000+01765" + "#" + "PHB cyl +0,25/+1,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("18").value.length != 0) {
            inputVal = document.getElementById("18").value + "#" + "BC+002+02065" + "#" + "PHB cyl +0,25/+2,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("19").value.length != 0) {
            inputVal = document.getElementById("19").value + "#" + "B+00565" + "#" + "PHB +0,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("20").value.length != 0) {
            inputVal = document.getElementById("20").value + "#" + "BC+005+00265" + "#" + "PHB cyl +0,50/+0,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("21").value.length != 0) {
            inputVal = document.getElementById("21").value + "#" + "BC+005+00565" + "#" + "PHB cyl +0,50/+0,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("22").value.length != 0) {
            inputVal = document.getElementById("22").value + "#" + "BC+005+00765" + "#" + "PHB cyl +0,50/+0,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("23").value.length != 0) {
            inputVal = document.getElementById("23").value + "#" + "BC+005+01065" + "#" + "PHB cyl +0,50/+1,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("24").value.length != 0) {
            inputVal = document.getElementById("24").value + "#" + "BC+005+01265" + "#" + "PHB cyl +0,50/+1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("25").value.length != 0) {
            inputVal = document.getElementById("25").value + "#" + "BC+005+01565" + "#" + "PHB cyl +0,50/+1,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("26").value.length != 0) {
            inputVal = document.getElementById("26").value + "#" + "BC+005+01765" + "#" + "PHB cyl +0,50/+1,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("27").value.length != 0) {
            inputVal = document.getElementById("27").value + "#" + "BC+005+02065" + "#" + "PHB cyl +0,50/+2,0 0 65mm";
            add(inputVal);
        }
        if (document.getElementById("28").value.length != 0) {
            inputVal = document.getElementById("28").value + "#" + "B+00765" + "#" + "PHB +0,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("29").value.length != 0) {
            inputVal = document.getElementById("29").value + "#" + "BC+007+00265" + "#" + "PHB cyl +0,75/+0,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("30").value.length != 0) {
            inputVal = document.getElementById("30").value + "#" + "BC+007+00565" + "#" + "PHB cyl +0,75/+0,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("31").value.length != 0) {
            inputVal = document.getElementById("31").value + "#" + "BC+007+00765" + "#" + "PHB cyl +0,75/+0,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("32").value.length != 0) {
            inputVal = document.getElementById("32").value + "#" + "BC+007+01065" + "#" + "PHB cyl +0,75/+1,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("33").value.length != 0) {
            inputVal = document.getElementById("33").value + "#" + "BC+007+01265" + "#" + "PHB cyl +0,75/+1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("34").value.length != 0) {
            inputVal = document.getElementById("34").value + "#" + "BC+007+01565" + "#" + "PHB cyl +0,75/+1,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("35").value.length != 0) {
            inputVal = document.getElementById("35").value + "#" + "BC+007+01765" + "#" + "PHB cyl +0,75/+1,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("36").value.length != 0) {
            inputVal = document.getElementById("36").value + "#" + "BC+007+02065" + "#" + "PHB cyl +0,75/+2,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("37").value.length != 0) {
            inputVal = document.getElementById("37").value + "#" + "B+01065" + "#" + "PHB +1,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("38").value.length != 0) {
            inputVal = document.getElementById("38").value + "#" + "BC+010+00265" + "#" + "PHB cyl +1,00/+0,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("39").value.length != 0) {
            inputVal = document.getElementById("39").value + "#" + "BC+010+00565" + "#" + "PHB cyl +1,00/+0,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("40").value.length != 0) {
            inputVal = document.getElementById("40").value + "#" + "BC+010+00765" + "#" + "PHB cyl +1,00/+0,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("41").value.length != 0) {
            inputVal = document.getElementById("41").value + "#" + "BC+010+01065" + "#" + "PHB cyl +1,00/+1,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("42").value.length != 0) {
            inputVal = document.getElementById("42").value + "#" + "BC+010+01265" + "#" + "PHB cyl +1,00/+1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("43").value.length != 0) {
            inputVal = document.getElementById("43").value + "#" + "BC+010+01565" + "#" + "PHB cyl +1,00/+1,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("44").value.length != 0) {
            inputVal = document.getElementById("44").value + "#" + "BC+010+01765" + "#" + "PHB cyl +1,00/+1,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("45").value.length != 0) {
            inputVal = document.getElementById("45").value + "#" + "BC+010+02065" + "#" + "PHB cyl +1,00/+2,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("46").value.length != 0) {
            inputVal = document.getElementById("46").value + "#" + "B+01265" + "#" + "PHB +1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("47").value.length != 0) {
            inputVal = document.getElementById("47").value + "#" + "BC+012+00265" + "#" + "PHB cyl +1,25/+0,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("48").value.length != 0) {
            inputVal = document.getElementById("48").value + "#" + "BC+012+00565" + "#" + "PHB cyl +1,25/+0,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("49").value.length != 0) {
            inputVal = document.getElementById("49").value + "#" + "BC+012+00765" + "#" + "PHB cyl +1,25/+0,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("50").value.length != 0) {
            inputVal = document.getElementById("50").value + "#" + "BC+012+01065" + "#" + "PHB cyl +1,25/+1,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("51").value.length != 0) {
            inputVal = document.getElementById("51").value + "#" + "BC+012+01265" + "#" + "PHB cyl +1,25/+1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("52").value.length != 0) {
            inputVal = document.getElementById("52").value + "#" + "BC+012+01565" + "#" + "PHB cyl +1,25/+1,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("53").value.length != 0) {
            inputVal = document.getElementById("53").value + "#" + "BC+012+01765" + "#" + "PHB cyl +1,25/+1,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("54").value.length != 0) {
            inputVal = document.getElementById("54").value + "#" + "BC+012+02065" + "#" + "PHB cyl +1,25/+2,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("55").value.length != 0) {
            inputVal = document.getElementById("55").value + "#" + "B+01565" + "#" + "PHB +1,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("56").value.length != 0) {
            inputVal = document.getElementById("56").value + "#" + "BC+015+00265" + "#" + "PHB cyl +1,50/+0,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("57").value.length != 0) {
            inputVal = document.getElementById("57").value + "#" + "BC+015+00565" + "#" + "PHB cyl +1,50/+0,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("58").value.length != 0) {
            inputVal = document.getElementById("58").value + "#" + "BC+015+00765" + "#" + "PHB cyl +1,50/+0,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("59").value.length != 0) {
            inputVal = document.getElementById("59").value + "#" + "BC+015+01065" + "#" + "PHB cyl +1,50/+1,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("60").value.length != 0) {
            inputVal = document.getElementById("60").value + "#" + "BC+015+01265" + "#" + "PHB cyl +1,50/+1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("61").value.length != 0) {
            inputVal = document.getElementById("61").value + "#" + "BC+015+01565" + "#" + "PHB cyl +1,50/+1,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("62").value.length != 0) {
            inputVal = document.getElementById("62").value + "#" + "BC+015+01765" + "#" + "PHB cyl +1,50/+1,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("63").value.length != 0) {
            inputVal = document.getElementById("63").value + "#" + "BC+015+02065" + "#" + "PHB cyl +1,50/+2,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("64").value.length != 0) {
            inputVal = document.getElementById("64").value + "#" + "B+01765" + "#" + "PHB +1,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("65").value.length != 0) {
            inputVal = document.getElementById("65").value + "#" + "BC+017+00265" + "#" + "PHB cyl +1,75/+0,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("66").value.length != 0) {
            inputVal = document.getElementById("66").value + "#" + "BC+017+00565" + "#" + "PHB cyl +1,75/+0,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("67").value.length != 0) {
            inputVal = document.getElementById("67").value + "#" + "BC+017+00765" + "#" + "PHB cyl +1,75/+0,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("68").value.length != 0) {
            inputVal = document.getElementById("68").value + "#" + "BC+017+01065" + "#" + "PHB cyl +1,75/+1,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("69").value.length != 0) {
            inputVal = document.getElementById("69").value + "#" + "BC+017+01265" + "#" + "PHB cyl +1,75/+1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("70").value.length != 0) {
            inputVal = document.getElementById("70").value + "#" + "BC+017+01565" + "#" + "PHB cyl +1,75/+1,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("71").value.length != 0) {
            inputVal = document.getElementById("71").value + "#" + "BC+017+01765" + "#" + "PHB cyl +1,75/+1,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("72").value.length != 0) {
            inputVal = document.getElementById("72").value + "#" + "BC+017+02065" + "#" + "PHB cyl +1,75/+2,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("73").value.length != 0) {
            inputVal = document.getElementById("73").value + "#" + "B+02065" + "#" + "PHB +2,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("74").value.length != 0) {
            inputVal = document.getElementById("74").value + "#" + "BC+020+00265" + "#" + "PHB cyl +2,00/+0,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("75").value.length != 0) {
            inputVal = document.getElementById("75").value + "#" + "BC+020+00565" + "#" + "PHB cyl +2,00/+0,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("76").value.length != 0) {
            inputVal = document.getElementById("76").value + "#" + "BC+020+00765" + "#" + "PHB cyl +2,00/+0,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("77").value.length != 0) {
            inputVal = document.getElementById("77").value + "#" + "BC+020+01065" + "#" + "PHB cyl +2,00/+1,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("78").value.length != 0) {
            inputVal = document.getElementById("78").value + "#" + "BC+020+01265" + "#" + "PHB cyl +2,00/+1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("79").value.length != 0) {
            inputVal = document.getElementById("79").value + "#" + "BC+020+01565" + "#" + "PHB cyl +2,00/+1,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("80").value.length != 0) {
            inputVal = document.getElementById("80").value + "#" + "BC+020+01765" + "#" + "PHB cyl +2,00/+1,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("81").value.length != 0) {
            inputVal = document.getElementById("81").value + "#" + "BC+020+02065" + "#" + "PHB cyl +2,00/+2,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("82").value.length != 0) {
            inputVal = document.getElementById("82").value + "#" + "B+02265" + "#" + "PHB +2,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("83").value.length != 0) {
            inputVal = document.getElementById("83").value + "#" + "BC+022+00265" + "#" + "PHB cyl +2,25/+0,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("84").value.length != 0) {
            inputVal = document.getElementById("84").value + "#" + "BC+022+00565" + "#" + "PHB cyl +2,25/+0,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("85").value.length != 0) {
            inputVal = document.getElementById("85").value + "#" + "BC+022+00765" + "#" + "PHB cyl +2,25/+0,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("86").value.length != 0) {
            inputVal = document.getElementById("86").value + "#" + "BC+022+01065" + "#" + "PHB cyl +2,25/+1,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("87").value.length != 0) {
            inputVal = document.getElementById("87").value + "#" + "BC+022+01265" + "#" + "PHB cyl +2,25/+1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("88").value.length != 0) {
            inputVal = document.getElementById("88").value + "#" + "BC+022+01565" + "#" + "PHB cyl +2,25/+1,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("89").value.length != 0) {
            inputVal = document.getElementById("89").value + "#" + "BC+022+01765" + "#" + "PHB cyl +2,25/+1,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("90").value.length != 0) {
            inputVal = document.getElementById("90").value + "#" + "BC+022+00265" + "#" + "PHB cyl +2,25/+2,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("91").value.length != 0) {
            inputVal = document.getElementById("91").value + "#" + "B+02565" + "#" + "PHB +2,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("92").value.length != 0) {
            inputVal = document.getElementById("92").value + "#" + "BC+025+00265" + "#" + "PHB cyl +2,50/+0,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("93").value.length != 0) {
            inputVal = document.getElementById("93").value + "#" + "BC+025+00565" + "#" + "PHB cyl +2,50/+0,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("94").value.length != 0) {
            inputVal = document.getElementById("94").value + "#" + "BC+025+00765" + "#" + "PHB cyl +2,50/+0,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("95").value.length != 0) {
            inputVal = document.getElementById("95").value + "#" + "BC+025+01065" + "#" + "PHB cyl +2,50/+1,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("96").value.length != 0) {
            inputVal = document.getElementById("96").value + "#" + "BC+025+01265" + "#" + "PHB cyl +2,50/+1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("97").value.length != 0) {
            inputVal = document.getElementById("97").value + "#" + "BC+025+01565" + "#" + "PHB cyl +2,50/+1,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("98").value.length != 0) {
            inputVal = document.getElementById("98").value + "#" + "BC+025+01765" + "#" + "PHB cyl +2,50/+1,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("99").value.length != 0) {
            inputVal = document.getElementById("99").value + "#" + "BC+025+02065" + "#" + "PHB cyl +2,50/+2,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("100").value.length != 0) {
            inputVal = document.getElementById("100").value + "#" + "B+02765" + "#" + "PHB +2,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("101").value.length != 0) {
            inputVal = document.getElementById("101").value + "#" + "BC+027+00265" + "#" + "PHB cyl +2,75/+0,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("102").value.length != 0) {
            inputVal = document.getElementById("102").value + "#" + "BC+027+00565" + "#" + "PHB cyl +2,75/+0,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("103").value.length != 0) {
            inputVal = document.getElementById("103").value + "#" + "BC+027+00765" + "#" + "PHB cyl +2,75/+0,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("104").value.length != 0) {
            inputVal = document.getElementById("104").value + "#" + "BC+027+01065" + "#" + "PHB cyl +2,75/+1,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("105").value.length != 0) {
            inputVal = document.getElementById("105").value + "#" + "BC+027+01265" + "#" + "PHB cyl +2,75/+1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("106").value.length != 0) {
            inputVal = document.getElementById("106").value + "#" + "BC+027+01565" + "#" + "PHB cyl +2,75/+1,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("107").value.length != 0) {
            inputVal = document.getElementById("107").value + "#" + "BC+027+01765" + "#" + "PHB cyl +2,75/+1,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("108").value.length != 0) {
            inputVal = document.getElementById("108").value + "#" + "BC+027+02065" + "#" + "PHB cyl +2,75/+2,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("109").value.length != 0) {
            inputVal = document.getElementById("109").value + "#" + "B+03065" + "#" + "PHB +3,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("110").value.length != 0) {
            inputVal = document.getElementById("110").value + "#" + "BC+030+00265" + "#" + "PHB cyl +3,00/+0,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("111").value.length != 0) {
            inputVal = document.getElementById("111").value + "#" + "BC+030+00565" + "#" + "PHB cyl +3,00/+0,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("112").value.length != 0) {
            inputVal = document.getElementById("112").value + "#" + "BC+030+00765" + "#" + "PHB cyl +3,00/+0,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("113").value.length != 0) {
            inputVal = document.getElementById("113").value + "#" + "BC+030+01065" + "#" + "PHB cyl +3,00/+1,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("114").value.length != 0) {
            inputVal = document.getElementById("114").value + "#" + "BC+030+01265" + "#" + "PHB cyl +3,00/+1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("115").value.length != 0) {
            inputVal = document.getElementById("115").value + "#" + "BC+030+01565" + "#" + "PHB cyl +3,00/+1,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("116").value.length != 0) {
            inputVal = document.getElementById("116").value + "#" + "BC+030+01765" + "#" + "PHB cyl +3,00/+1,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("117").value.length != 0) {
            inputVal = document.getElementById("117").value + "#" + "BC+030+02065" + "#" + "PHB cyl +3,00/+2,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("118").value.length != 0) {
            inputVal = document.getElementById("118").value + "#" + "B+03265" + "#" + "PHB +3,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("119").value.length != 0) {
            inputVal = document.getElementById("119").value + "#" + "BC+032+00265" + "#" + "PHB cyl +3,25/+0,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("120").value.length != 0) {
            inputVal = document.getElementById("120").value + "#" + "BC+032+00565" + "#" + "PHB cyl +3,25/+0,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("121").value.length != 0) {
            inputVal = document.getElementById("121").value + "#" + "BC+032+00765" + "#" + "PHB cyl +3,25/+0,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("122").value.length != 0) {
            inputVal = document.getElementById("122").value + "#" + "BC+032+01065" + "#" + "PHB cyl +3,25/+1,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("123").value.length != 0) {
            inputVal = document.getElementById("123").value + "#" + "BC+032+01265" + "#" + "PHB cyl +3,25/+1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("124").value.length != 0) {
            inputVal = document.getElementById("124").value + "#" + "BC+032+01565" + "#" + "PHB cyl +3,25/+1,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("125").value.length != 0) {
            inputVal = document.getElementById("125").value + "#" + "BC+032+01765" + "#" + "PHB cyl +3,25/+1,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("126").value.length != 0) {
            inputVal = document.getElementById("126").value + "#" + "BC+033+02065" + "#" + "PHB cyl +3,25/+2,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("127").value.length != 0) {
            inputVal = document.getElementById("127").value + "#" + "B+03565" + "#" + "PHB +3,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("128").value.length != 0) {
            inputVal = document.getElementById("128").value + "#" + "BC+035+00265" + "#" + "PHB cyl +3,50/+0,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("129").value.length != 0) {
            inputVal = document.getElementById("129").value + "#" + "BC+035+00565" + "#" + "PHB cyl +3,50/+0,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("130").value.length != 0) {
            inputVal = document.getElementById("130").value + "#" + "BC+035+00765" + "#" + "PHB cyl +3,50/+0,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("131").value.length != 0) {
            inputVal = document.getElementById("131").value + "#" + "BC+035+01065" + "#" + "PHB cyl +3,50/+1,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("132").value.length != 0) {
            inputVal = document.getElementById("132").value + "#" + "BC+035+01265" + "#" + "PHB cyl +3,50/+1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("133").value.length != 0) {
            inputVal = document.getElementById("133").value + "#" + "BC+035+01565" + "#" + "PHB cyl +3,50/+1,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("134").value.length != 0) {
            inputVal = document.getElementById("134").value + "#" + "BC+035+01765" + "#" + "PHB cyl +3,50/+1,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("135").value.length != 0) {
            inputVal = document.getElementById("135").value + "#" + "BC+035+02065" + "#" + "PHB cyl +3,50/+2,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("136").value.length != 0) {
            inputVal = document.getElementById("136").value + "#" + "B+03765" + "#" + "PHB +3,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("137").value.length != 0) {
            inputVal = document.getElementById("137").value + "#" + "BC+037+00265" + "#" + "PHB cyl +3,75/+0,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("138").value.length != 0) {
            inputVal = document.getElementById("138").value + "#" + "BC+037+00565" + "#" + "PHB cyl +3,75/+0,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("139").value.length != 0) {
            inputVal = document.getElementById("139").value + "#" + "BC+037+00765" + "#" + "PHB cyl +3,75/+0,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("140").value.length != 0) {
            inputVal = document.getElementById("140").value + "#" + "BC+037+01065" + "#" + "PHB cyl +3,75/+1,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("141").value.length != 0) {
            inputVal = document.getElementById("141").value + "#" + "BC+037+01265" + "#" + "PHB cyl +3,75/+1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("142").value.length != 0) {
            inputVal = document.getElementById("142").value + "#" + "BC+037+01265" + "#" + "PHB cyl +3,75/+1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("143").value.length != 0) {
            inputVal = document.getElementById("143").value + "#" + "BC+037+01565" + "#" + "PHB cyl +3,75/+1,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("144").value.length != 0) {
            inputVal = document.getElementById("145").value + "#" + "BC+037+01765" + "#" + "PHB cyl +3,75/+1,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("145").value.length != 0) {
            inputVal = document.getElementById("145").value + "#" + "BC+037+02065" + "#" + "PHB cyl +3,75/+2,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("146").value.length != 0) {
            inputVal = document.getElementById("146").value + "#" + "B+04065" + "#" + "PHB +4,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("147").value.length != 0) {
            inputVal = document.getElementById("147").value + "#" + "BC+040+00265" + "#" + "PHB cyl +4,00/+0,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("148").value.length != 0) {
            inputVal = document.getElementById("148").value + "#" + "BC+040+00565" + "#" + "PHB cyl +4,00/+0,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("149").value.length != 0) {
            inputVal = document.getElementById("149").value + "#" + "BC+040+00765" + "#" + "PHB cyl +4,00/+0,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("150").value.length != 0) {
            inputVal = document.getElementById("150").value + "#" + "BC+040+01065" + "#" + "PHB cyl +4,00/+1,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("151").value.length != 0) {
            inputVal = document.getElementById("151").value + "#" + "BC+040+01265" + "#" + "PHB cyl +4,00/+1,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("152").value.length != 0) {
            inputVal = document.getElementById("152").value + "#" + "BC+040+01565" + "#" + "PHB cyl +4,00/+1,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("153").value.length != 0) {
            inputVal = document.getElementById("153").value + "#" + "BC+040+01765" + "#" + "PHB cyl +4,00/+1,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("154").value.length != 0) {
            inputVal = document.getElementById("154").value + "#" + "BC+040+02065" + "#" + "PHB cyl +4,00/+2,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("155").value.length != 0) {
            inputVal = document.getElementById("155").value + "#" + "B+04265" + "#" + "PHB +4,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("156").value.length != 0) {
            inputVal = document.getElementById("156").value + "#" + "B+04565" + "#" + "PHB +4,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("157").value.length != 0) {
            inputVal = document.getElementById("157").value + "#" + "B+04765" + "#" + "PHB +4,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("158").value.length != 0) {
            inputVal = document.getElementById("158").value + "#" + "B+05065" + "#" + "PHB +5,00 65mm";
            add(inputVal);
        }
        if (document.getElementById("159").value.length != 0) {
            inputVal = document.getElementById("159").value + "#" + "B+05265" + "#" + "PHB +5,25 65mm";
            add(inputVal);
        }
        if (document.getElementById("160").value.length != 0) {
            inputVal = document.getElementById("160").value + "#" + "B+05565" + "#" + "PHB +5,50 65mm";
            add(inputVal);
        }
        if (document.getElementById("161").value.length != 0) {
            inputVal = document.getElementById("161").value + "#" + "B+05765" + "#" + "PHB +5,75 65mm";
            add(inputVal);
        }
        if (document.getElementById("162").value.length != 0) {
            inputVal = document.getElementById("162").value + "#" + "B+06065" + "#" + "PHB +6,00 65mm";
            add(inputVal);
        }


    }
});