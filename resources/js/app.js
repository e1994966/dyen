import 'flowbite';
const backToTop = document.getElementById("backToTop");

window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    backToTop.classList.add("opacity-100");
    backToTop.classList.remove("opacity-0", "pointer-events-none");
  } else {
    backToTop.classList.add("opacity-0", "pointer-events-none");
    backToTop.classList.remove("opacity-100");
  }
});

backToTop.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
});

document.addEventListener('DOMContentLoaded', function () {
  const btn = document.getElementById('mobile-menu-button');
  const menu = document.getElementById('mobile-menu');
  const overlay = document.getElementById('menu-overlay');

  const openMenu = () => {
    menu.classList.remove('max-h-0');
    menu.classList.add('max-h-[400px]');
    overlay.classList.remove('hidden');
    document.body.classList.add('overflow-hidden'); // 避免滾動背景
  };

  const closeMenu = () => {
    menu.classList.add('max-h-0');
    menu.classList.remove('max-h-[400px]');
    overlay.classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  };

  btn.addEventListener('click', (e) => {
    e.stopPropagation(); // 防止冒泡導致馬上被關閉
    if (menu.classList.contains('max-h-0')) {
      openMenu();
    } else {
      closeMenu();
    }
  });

  overlay.addEventListener('click', closeMenu);

  // 👉 點其他地方也能關閉
  document.addEventListener('click', (e) => {
    if (
      !menu.contains(e.target) &&
      !btn.contains(e.target) &&
      !menu.classList.contains('max-h-0')
    ) {
      closeMenu();
    }
  });
});
