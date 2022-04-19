const scrollElements = document.querySelectorAll(".js-scroll");

const elementInView = (el, dividend = 1) => {
  let elementTop = el.getBoundingClientRect().top;

  return (
    elementTop <=
    (window.innerHeight || document.documentElement.clientHeight) / dividend
  );
};

const elementOutofView = (el) => {
  let elementTop = el.getBoundingClientRect().top;
  if($( window ).width() <= 980){
    elementTop = el.getBoundingClientRect().top - 100;
  }
  return (
    elementTop > (window.innerHeight || document.documentElement.clientHeight)
  );
};

const displayScrollElement = (element) => {
  element.classList.add("scrolled");
};

const hideScrollElement = (element) => {
  element.classList.remove("scrolled");
};

const handleScrollAnimation = () => {
  scrollElements.forEach((el) => {
    if (elementInView(el, 1.25)) {
      displayScrollElement(el);
    } else if (elementOutofView(el)) {
      hideScrollElement(el)
    }
  })
}

handleScrollAnimation();
window.addEventListener("scroll", () => { 
  handleScrollAnimation();
});

if($( window ).width() >= 980){
setTimeout(() => {
  $('.--first-content').css('opacity', "1");
}, 600);
setTimeout(() => {
  $('.--first-content_2').css('opacity', "1");
}, 800);
setTimeout(() => {
  $('.--first-content_3').css('opacity', "1");
}, 1000);
}else{
    $('.--first-content').css('opacity', "1");
    $('.--first-content_2').css('opacity', "1");
    $('.--first-content_3').css('opacity', "1");
}