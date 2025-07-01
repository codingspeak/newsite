document.addEventListener("DOMContentLoaded", function () {
  const mobileNavToggle = document.querySelector(".mobile-nav");
  const mobileOverlay = document.querySelector(".mobile-overlay");
  const closeBtn = document.querySelector(".mobile-overlay .close-btn");
  const submenuToggles = document.querySelectorAll(".mobile-overlay .has-submenu > span");

  // Toggle mobile menu visibility
  mobileNavToggle.addEventListener("click", () => {
    mobileOverlay.classList.add("show");
  });

  // Close menu
  closeBtn.addEventListener("click", () => {
    mobileOverlay.classList.remove("show");
  });

  // Toggle submenu
  submenuToggles.forEach(toggle => {
    toggle.addEventListener("click", () => {
      const submenu = toggle.nextElementSibling;
      submenu.classList.toggle("open");
    });
  });
});


// Trust Pilot Review Slider Code
// let currentIndex = 0;
// const testiBoxes = document.querySelectorAll('.testiBox');
// const leftArrow = document.getElementById('left-arrow');
// const rightArrow = document.getElementById('right-arrow');

// function showReview(index) {
//     testiBoxes.forEach((box) => {
//         box.style.display = 'none';
//     });
//     testiBoxes[index].style.display = 'flex';
// }

// function nextReview() {
//     currentIndex++;
//     if (currentIndex >= testiBoxes.length) {
//         currentIndex = 0;
//     }
//     showReview(currentIndex);
// }

// function prevReview() {
//     currentIndex--;
//     if (currentIndex < 0) {
//         currentIndex = testiBoxes.length - 1;
//     }
//     showReview(currentIndex);
// }
// showReview(currentIndex);
// leftArrow.addEventListener('click', prevReview);
// rightArrow.addEventListener('click', nextReview);

// Google Review Slider Code
let currentIndex2 = 0;
const testiBoxes2 = document.querySelectorAll('.testiBox2');
const leftArrow2 = document.getElementById('left-arrow2');
const rightArrow2 = document.getElementById('right-arrow2');

function showReview2(index) {
    testiBoxes2.forEach((box) => {
        box.style.display = 'none';
    });
    testiBoxes2[index].style.display = 'flex';
}
function nextReview2() {
    currentIndex2++;
    if (currentIndex2 >= testiBoxes2.length) {
        currentIndex2 = 0;
    }
    showReview2(currentIndex2);
}

function prevReview2() {
    currentIndex2--;
    if (currentIndex2 < 0) {
        currentIndex2 = testiBoxes2.length - 1;
    }
    showReview2(currentIndex2);
}
showReview2(currentIndex2);
leftArrow2.addEventListener('click', prevReview2);
rightArrow2.addEventListener('click', nextReview2);


// FAQ
const faqItems = document.querySelectorAll('.faq-item');
faqItems.forEach(item => {
  item.addEventListener('click', () => {
    item.classList.toggle('open');
  });
});
