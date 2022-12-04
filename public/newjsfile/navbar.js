const dropdown=document.getElementById('dropdown__menu');
const navitem=document.getElementById('navbardrop');
navitem.addEventListener('click',(e)=>{
  dropdown.classList.toggle('active');
})

const show__menu=document.getElementById('show__menu');
const main__navbar=document.getElementById('main__navbar');
console.log(show__menu,main__navbar); 
show__menu.addEventListener('click',()=>{
  main__navbar.classList.toggle('active');
  if(dropdown.classList.length==1){
    dropdown.classList.remove('active')
  }
})
