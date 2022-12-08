Drupal.behaviors.accordian = {
  attach() {
    const icon = document.getElementsByClassName(
      'accordian_container__accordian_button',
    );
    const linkBox = document.getElementsByClassName(
      'accordian_para__accordian_paragraph',
    );
    for (let i = 0; i < icon.length; i += 1) {
      icon[i].addEventListener('click', () => {
        for (let j = 0; j < icon.length; j += 1) {
          if (i === j) {
            linkBox[j].style.display =
              linkBox[j].style.display === 'block' ? 'none' : 'block';
            icon[j].innerHTML =
              linkBox[j].style.display === 'block'
                ? '<button class="button">-</button>'
                : '<button class="button">+<button>';
          } else {
            linkBox[j].style.display = 'none';
            icon[j].innerHTML = '+';
          }
        }
      });
    }
  },
};

Drupal.behaviors.transition = {
  attach() {
    const icon = document.getElementsByClassName(
      'accordian_container__accordian_button',
    );
    const linkBox = document.getElementsByClassName(
      'accordian_para__accordian_paragraph',
    );
    for (let i = 0; i < icon.length; i += 1) {
      icon[i].addEventListener('click', () => {
        for (let j = 0; j < icon.length; j += 1) {
          if (i === j) {
            icon[j].innerHTML =
              linkBox[j].getBoundingClientRect().height === 0
                ? '<button class="button">-</button>'
                : '<button class="button">+<button>';
            linkBox[j].classList.toggle(
              'accordian_para__accordian_paragraph-transition',
            );
          } else {
            icon[j].innerHTML = '+';
            linkBox[j].classList.remove(
              'accordian_para__accordian_paragraph-transition',
            );
          }
        }
      });
    }
  },
};
