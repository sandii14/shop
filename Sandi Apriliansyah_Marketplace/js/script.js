const wrapper = document.getElementsByClassName("wrapper")[0];
const button = document.getElementsByClassName("button");
const beritaTitle = document.querySelectorAll(
  "main .berita .berita__content h6"
);
const agendaTitle = document.querySelectorAll(
  "main .agenda .agenda__content h6"
);

let num = 0;

for (let i = 0; i < button.length; i++) {
  button[i].addEventListener("click", function (e) {
    if (button[i].classList.contains("next")) {
      num++;
      if (num > 2) {
        wrapper.style.left = "0%";
        num = 0;
      } else {
        wrapper.style.left = `-${num}00%`;
      }
    } else if (button[i].classList.contains("previous")) {
      num--;
      if (num < 0) {
        num = 2;
        wrapper.style.left = `-${num}00%`;
      } else {
        wrapper.style.left = `-${num}00%`;
      }
    }
  });
}

// autoslide
function autoSlide() {
  num++;
  if (num > 2) {
    wrapper.style.left = "0%";
    num = 0;
  } else {
    wrapper.style.left = `-${num}00%`;
  }
}
setInterval(() => {
  autoSlide();
}, 4000);

for (let i = 0; i < beritaTitle.length; i++) {
  if (beritaTitle[i].innerText.length > 40) {
    beritaTitle[i].innerText =
      beritaTitle[i].innerText.substring(0, 39) + " . . .";
  }
}

for (let i = 0; i < agendaTitle.length; i++) {
  if (agendaTitle[i].innerText.length > 36) {
    agendaTitle[i].innerText =
      agendaTitle[i].innerText.substring(0, 35) + " . . .";
  }
}
