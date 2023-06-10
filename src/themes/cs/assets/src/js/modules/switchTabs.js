export const switchTabs = () => {
  const tabs = document.querySelectorAll('.tab')
  for (let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', openTab)
  }

  function openTab(event) {
    const tabId = event.target.getAttribute('data-tab')
    const tabContent = document.getElementsByClassName('tab-content')
    for (let i = 0; i < tabContent.length; i++) {
      tabContent[i].style.display = 'none'
    }

    document.getElementById(tabId).style.display = 'block'

    for (let i = 0; i < tabs.length; i++) {
      tabs[i].classList.remove('active')
    }
    event.target.classList.add('active')
  }
}
