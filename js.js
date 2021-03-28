function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function copyEmail() {
  var copyText = document.getElementById("email");
  copyText.className = "copy";
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  copyText.className = "hide";

  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Másolva: " + copyText.value;
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Vágólapra másolás";
}
