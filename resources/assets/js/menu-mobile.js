import outsideClick from "./outsideclick";

export default function initMenuMobile() {}
  const menuButton = document.querySelector('[data-menu="button"]');
  const menuList = document.querySelector('[data-menu="list"]');
  const eventos = ['click', 'touchstart'];
  
  if(menuButton){
    function openMenu(event) {
     menuList.classList.add('active');
     menuButton.classList.add('active');
     outsideClick(menuList, ['click', 'touchstart'], () => {
       menuList.classList.remove('active');
       menuButton.classList.remove('active');
     })
    }
    eventos.forEach(evento => menuButton.addEventListener('click', openMenu));
    

  }

