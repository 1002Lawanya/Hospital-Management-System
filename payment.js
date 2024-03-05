window.addEventListener("load", () => {
   autoSlide();
})

function autoSlide() {
   setInterval(() => {
      slide(getItemActiveIndex() + 1);
   }, 3000); // slide speed = 3s
}

function slide(toIndex) {
   const itemsArray = Array.from(document.querySelectorAll(".carousel_item_payment"));
   const itemActive = document.querySelector(".carousel_item__active_payment");

  //check if toIndex exceeds the number of carousel items
   if (toIndex >= itemsArray.length) {
      toIndex = 0;
   }

   const newItemActive = itemsArray[toIndex];

   // start transition
   newItemActive.classList.add("carousel_item__pos_next_payment");
   setTimeout(() => {
      newItemActive.classList.add("carousel_item__next_payment");
      itemActive.classList.add("carousel_item__next_payment");
   }, 20);

   // remove all transition class and switch active class
   newItemActive.addEventListener("transitionend", () => {
      itemActive.className = "carousel_item_payment";
      newItemActive.className = "carousel_item carousel_item__active_payment";
   }, {
      once: true
   });
}

function getItemActiveIndex() {
   const itemsArray = Array.from(document.querySelectorAll(".carousel_item_payment"));
   const itemActive = document.querySelector(".carousel_item__active_payment");
   const itemActiveIndex = itemsArray.indexOf(itemActive);
   return itemActiveIndex;
}