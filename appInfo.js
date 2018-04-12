var inputCertification = document.querySelector('.input-certification');
var ok_green = document.querySelector('.ok_green.none');
var input_adjust = document.querySelectorAll('.input-adjust');
var validationBtn = document.querySelector('.validation');
var conditionOpen = document.querySelector('.conditions-span');
var modal = document.querySelector('.modal');
var closeModal = document.querySelector('.close-modal');

inputCertification.addEventListener('click', function() {
  console.log('oUI')
  ok_green.classList.toggle('none');
})


for (let i = 0; i < input_adjust.length; i++) {
  input_adjust[i].addEventListener('focus', function() {
    input_adjust[i].parentNode.classList.add('focus');
  });
  input_adjust[i].addEventListener('blur', function() {
    input_adjust[i].parentNode.classList.remove('focus');
  });
}

validationBtn.addEventListener('click', function(event) {
  if (ok_green.classList.contains("none")) {
    event.preventDefault();
    return;
  }
  for (var i = 0; i < input_adjust.length; i++) {
    if (input_adjust[i].value.length === 0) {
      console.log('sort');
      event.preventDefault();
      return;
    }
  }
});
conditionOpen.addEventListener('click', function() {
  modal.classList.toggle('block');
});
closeModal.addEventListener('click', function() {
  modal.classList.remove('block');
})
