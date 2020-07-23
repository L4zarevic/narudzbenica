document.querySelector('#txtSearch').addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
      
     // returns an array for the values of all input elements in the last row of given table
    var t = document.getElementById("narudzbenica");
    var r = t.rows[t.rows.length-1];
    var inputs = r.getElementsByTagName("input");
    var result = new Array(inputs.length);
    for (var i=0; i<inputs.length; i++)
        result[i] = inputs[i].value; // not innerHTML or something
    return result;
    }
});


	
	
  

}