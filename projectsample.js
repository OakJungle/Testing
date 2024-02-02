

function addedu() {
  const head = document.createElement('div');
  document.getElementById("education").appendChild(head);
  head.innerHTML = ('<div class="edublock"><span><input type="checkbox" class="input-checkbox"></span><span class="education-head" contenteditable="true"></span><div ><span contenteditable="true"></span><span contenteditable="true"><input type="text"></span></div></div>');
  saveresume();
}
function remedu(event) {
  let val = 0;
  let empty = true;
  const allInputCheckboxes = event.target.parentElement.getElementsByClassName("input-checkbox");
  const array = Array.from(allInputCheckboxes);
  if (array.length === 0) {
      alert("No fields are present to be deleted!")
  }
  else {
      console.log(array);
      array.forEach(element => {
          if (element.checked === true) {
              val = 1;
              element.parentElement.parentElement.remove();
          }
      })
      if (val === 0) alert("Please select the checkboxes to delete the required field!")
  }
  saveresume();
}


function addskill() {
  const head = document.createElement('div');
  document.getElementById("skills").appendChild(head);
  head.innerHTML = ('<div class="skill"><span><input type="checkbox" class="input-checkbox"></span><span><input type="text"><i class="fas fa-chevron-circle-right"></i></span>   <span contenteditable="true"></span></div>');
  saveresume();
}

function remskill(event) {
  let val = 0;
  const allInputCheckboxes = event.target.parentElement.getElementsByClassName("input-checkbox");
  const array = Array.from(allInputCheckboxes);
  if (array.length === 0) {
      alert("No fields are present to be deleted!")
  }
  else {
      console.log(array);
      array.forEach(element => {
          if (element.checked === true) {
              val = 1;
              element.parentElement.parentElement.remove();
          }
      })
      if (val === 0) alert("Please select the checkboxes to delete the required field!")
  }
  saveresume();
}


function addLang() {
  const head = document.createElement('div');
  document.getElementById("languages").appendChild(head);
  head.innerHTML = ('<div class="language"><span><input type="checkbox" class="input-checkbox"></span><span contenteditable="true"></span><span contenteditable="true"><input type="text"></span></div>');
  saveresume();
}
function remLang(event) {
  let val = 0;
  const allInputCheckboxes = event.target.parentElement.getElementsByClassName("input-checkbox");
  const array = Array.from(allInputCheckboxes);
  if (array.length === 0) {
      alert("No fields are present to be deleted!")
  }
  else {
      console.log(array);
      array.forEach(element => {
          if (element.checked === true) {
              val = 1;
              element.parentElement.parentElement.remove();
          }
      })
      if (val === 0) alert("Please select the checkboxes to delete the required field!")
  }
  saveresume();
}


function addAch() {
  const head = document.createElement('div');
  document.getElementById("achievement").appendChild(head);
  head.innerHTML = ('<div class="achieve" ><span><input type="checkbox" class="input-checkbox"></span><span contenteditable="true"><input type="text"></span></div>');
  saveresume();
}
function remAch(event) {
  let val = 0;
  const allInputCheckboxes = event.target.parentElement.getElementsByClassName("input-checkbox");
  const array = Array.from(allInputCheckboxes);
  if (array.length === 0) {
      alert("No fields are present to be deleted!")
  }
  else {
      console.log(array);
      array.forEach(element => {
          if (element.checked === true) {
              val = 1;
              element.parentElement.parentElement.remove();
          }
      })
      if (val === 0) alert("Please select the checkboxes to delete the required field!")
  }
  saveresume();
}


function addInt() {
  const head = document.createElement('div');
  document.getElementById("interest").appendChild(head);
  head.innerHTML = ('<div class="achieve" ><span><input type="checkbox" class="input-checkbox"></span><span contenteditable="true"><input type="text"></span></div>');
  saveresume();
}
function remInt(event) {
  let val = 0;
  const allInputCheckboxes = event.target.parentElement.getElementsByClassName("input-checkbox");
  const array = Array.from(allInputCheckboxes);
  if (array.length === 0) {
      alert("No fields are present to be deleted!")
  }
  else {
      array.forEach(element => {
          if (element.checked === true) {
              val = 1;
              element.parentElement.parentElement.remove();
          }
      })
      if (val === 0) alert("Please select the checkboxes to delete the required field!")
  }
  saveresume();
}




function saveresume() {
  var sec = document.getElementById("print");
  value1 = sec.innerHTML;
  var info = document.getElementById("custinfo");
  info.value = value1;
}
