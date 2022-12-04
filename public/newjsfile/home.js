const allsliderelement = document.querySelectorAll(".slider__elemnt");
const sliderlength = allsliderelement.length;
let index = 0;
const showslider = () => {
  allsliderelement[index].classList.remove("active");
  index = (index + 1) % sliderlength;
  allsliderelement[index].classList.add("active");
};
setInterval(() => {
  showslider();
}, 5000);

const modal=document.getElementById('modal__of_data');

window.onload = function() {
  modal.classList.remove('remove')
   modal.classList.add('active')
};

const hidemodal=document.getElementById('hide__modal');
hidemodal.addEventListener('click',()=>{
  modal.classList.remove('active')
  modal.classList.add('remove')
})
