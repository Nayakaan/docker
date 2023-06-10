export const betDropdown = () => {
  const btns = document.querySelectorAll('.match-bet__btn')

  btns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      const dropdown = this.parentNode.querySelector(
        '.match-bet-dropdown-wrapper'
      )
      this.parentNode.classList.toggle('active')
      dropdown.classList.toggle('visible')

      const label = this.querySelector('.match-bet__btn-label')
      label.textContent = label.textContent === 'Details' ? 'Less' : 'Details'
    })
  })
}
