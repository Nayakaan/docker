export const scheduleArrows = () => {
  const wrapper = document.querySelector('.date-bar__list-wrapper')
  const btnPrev = document.querySelector('.date-bar__prev-btn')
  const btnNext = document.querySelector('.date-bar__next-btn')

  const scrollAmount = 200 // Adjust this value to control the scroll amount

  if (btnNext) {
    btnNext.addEventListener('click', function () {
      const scrollLeft = wrapper.scrollLeft
      wrapper.scrollTo({
        left: scrollLeft + scrollAmount,
        behavior: 'smooth', // Add smooth scrolling effect
      })
    })
  }

  if (btnPrev) {
    btnPrev.addEventListener('click', function () {
      const scrollLeft = wrapper.scrollLeft
      wrapper.scrollTo({
        left: scrollLeft - scrollAmount,
        behavior: 'smooth', // Add smooth scrolling effect
      })
    })
  }
}
