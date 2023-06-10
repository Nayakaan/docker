import $ from 'jquery'
import { select2 } from 'select2';

export class Select2 {
  constructor() {
    this.events();
  }

  events() {
    $('.js-select2').select2({
      minimumResultsForSearch: -1
    });
  }
}
