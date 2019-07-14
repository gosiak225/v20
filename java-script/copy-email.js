
function setClipboard(value) {
  var tempInput = document.createElement("input");
  tempInput.style = "position: absolute; left: -1000px; top: -1000px";
  tempInput.value = value;
  document.body.appendChild(tempInput);
  tempInput.select();
  document.execCommand("copy");
  // document.getElementById("mail").title = "Déjà copié !";
}

var mailHolder = document.getElementById("mail");
    mailHolder.addEventListener('click', function() {
        document.getElementById("text").innerText="Mon adresse email a été copiée dans votre presse-papiers ✅";
        document.getElementById("text").style.backgroundColor="#57652a";
        document.getElementById("text").style.opacity="0.6";
        mailHolder.addEventListener('mouseleave', function() {
            document.getElementById("text").innerText="Cliquez ici pour copier mon adress mail";
            document.getElementById("text").style.backgroundColor="#555";
            document.getElementById("text").style.opacity="1";
         }, false);
	}, false);

var mailHolder2 = document.getElementById("mail2");
    mailHolder2.addEventListener('click', function() {
        document.getElementById("text2").innerText="Mon adresse email a été copiée dans votre presse-papiers ✅";
        document.getElementById("text2").style.backgroundColor="#57652a";
        document.getElementById("text2").style.opacity="0.6";
        mailHolder2.addEventListener('mouseleave', function() {
            document.getElementById("text2").innerText="Cliquez ici";
            document.getElementById("text2").style.backgroundColor="#555";
            document.getElementById("text2").style.opacity="1";
         }, false);
	}, false);