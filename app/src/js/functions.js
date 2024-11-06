var select = document.getElementById("selector");
 
var div = document.getElementById('extra');

    var newLabel = document.createElement('label');
    newLabel.setAttribute("for", "pages");
    newLabel.textContent = "Pages:";

    var newInput = document.createElement('input');
    newInput.type = "number";
    newInput.className = "form-control";
    newInput.id = "pages";
    newInput.name = "pages";

    var br1 = document.createElement("br");
    var br2 = document.createElement("br");

    div.appendChild(newLabel);
    div.appendChild(newInput);
    div.appendChild(br1);
    div.appendChild(br2);  

select.addEventListener("change", function(){

  var div = document.getElementById('extra');
  div.innerHTML = "";

  var selectedOption = this.options[this.selectedIndex];
  console.log("Option selected: " + selectedOption.value);


  if(selectedOption.value === 'book'){
    var div = document.getElementById('extra');

    var newLabel = document.createElement('label');
    newLabel.setAttribute("for", "pages");
    newLabel.textContent = "Pages:";

    var newInput = document.createElement('input');
    newInput.type = "number";
    newInput.className = "form-control";
    newInput.id = "pages";
    newInput.name = "pages";

    var br1 = document.createElement("br");
    var br2 = document.createElement("br");

    div.appendChild(newLabel);
    div.appendChild(newInput);
    div.appendChild(br1);
    div.appendChild(br2);  
  }

  if(selectedOption.value === 'magazine'){
    var div = document.getElementById('extra');

    var newLabel = document.createElement('label');
    newLabel.setAttribute("for", "edition");
    newLabel.textContent = "Edition:";

    var newInput = document.createElement('input');
    newInput.type = "number";
    newInput.className = "form-control";
    newInput.id = "edition";
    newInput.name = "edition";

    var br1 = document.createElement("br");
    var br2 = document.createElement("br");

    div.appendChild(newLabel);
    div.appendChild(newInput);
    div.appendChild(br1);
    div.appendChild(br2);  
  }

});