const downloadCharacterSheet = () => {

  const node = document.getElementById('id-card');

  html2canvas(node).then(canvas => {
    var link = document.createElement('a');
    link.download = 'filename.png';
    link.href = canvas.toDataURL();
    link.click();
  });

};

const bindInputToElement = (inputEl, elementEl) => {
  inputEl.addEventListener('change', () => {
    elementEl.textContent = inputEl.value;
  });
};

document.
getElementById('download-button').
addEventListener('click', downloadCharacterSheet);



// Bind name
const nameEl = document.getElementById('name');
bindInputToElement(
nameEl,
document.getElementById('id-card-name'));

nameEl.
addEventListener('change', () => {
  document.
  querySelector('.id-card__subject-id').
  textContent = md5(nameEl.value).slice(0, 8);
});

// Bind date of birth
bindInputToElement(
document.getElementById('date-of-birth'),
document.getElementById('id-card-date-of-birth'));


// Bind gender
bindInputToElement(
document.getElementById('gender'),
document.getElementById('id-card-gender'));


// Bind gender
bindInputToElement(
  document.getElementById('hobby'),
  document.getElementById('id-card-hobby'));


// Bind height
bindInputToElement(
document.getElementById('height'),
document.getElementById('id-card-height'));


// Bind weight
bindInputToElement(
document.getElementById('weight'),
document.getElementById('id-card-weight'));


bindInputToElement(
  document.getElementById('Email'),
  document.getElementById('id-card-email'));

bindInputToElement(
    document.getElementById('phone'),
    document.getElementById('id-card-phone'));

bindInputToElement(
    document.getElementById('Department'),
    document.getElementById('id-card-dept'));

bindInputToElement(
      document.getElementById('blood'),
      document.getElementById('id-card-blood'));

bindInputToElement(
        document.getElementById('hometown'),
        document.getElementById('id-card-home'));


// Bind mugshot
document.
getElementById('mugshot').
addEventListener('change', function () {
  if (this.files && this.files[0]) {
    var FR = new FileReader();
    FR.onload = function (e) {
      var img = document.getElementById('id-card-mugshot');
      img.src = e.target.result;
    };
    FR.readAsDataURL(this.files[0]);
  }
});