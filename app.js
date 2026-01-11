document.querySelectorAll('a, button').forEach(el => {
  el.addEventListener('mouseenter', () => el.style.transform = 'scale(1.05)')
  el.addEventListener('mouseleave', () => el.style.transform = '')
})
