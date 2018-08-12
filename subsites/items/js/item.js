function formCopy() {
	var mgr_name = document.getElementById("myForm").elements.item(0).value;
	var nom_name = document.getElementById("myForm").elements.item(1).value;
	var nom_num = document.getElementById("myForm").elements.item(2).value;
	var phone = document.getElementById("myForm").elements.item(3).value;
	var train = document.getElementById("myForm").elements.item(4).value;

	document.getElementById("textArea").innerHTML = "Hello Ramesh," + "\n" + 
	"\nThis is " + mgr_name + " and I would like to present a nomination for this training: " + "\n" + "\n"
	+ "Nominee Name: " + nom_name + "\n"
	+ "Employee Number: " + nom_num + "\n"
	+ "Phone Number: " + phone + "\n"
	+ "Training Name: " + train + "\n" + "\n"
	+ "You can reach me if you have any further doubts." + "\n" + "\n"
	+ "Regards,";
}

var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

copyTextareaBtn.addEventListener('click', function(event) {
  var copyTextarea = document.querySelector('.js-copytextarea');
  copyTextarea.select();

  try {
    var successful = document.execCommand('copy');
    var msg = successful ? 'successful' : 'unsuccessful';
    console.log('Copying text command was ' + msg);
  } catch (err) {
    console.log('Oops, unable to copy');
  }
});