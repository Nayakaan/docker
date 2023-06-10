/**
 * SASS
 */
import '../sass/frontend.scss'

/**
 * JavaScript
 */
import { switchTabs } from './modules/switchTabs'
import { betDropdown } from './modules/betDropdown'
import { scheduleArrows } from './modules/scheduleArrows'
import { FixedNav } from './modules/fixedNav'
import { Select2 } from './modules/select2'

/**
 * Add here your JavasScript code
 */

document.addEventListener('DOMContentLoaded', () => {
  switchTabs()
  betDropdown()
  scheduleArrows()
  new FixedNav()
  new Select2()
})
