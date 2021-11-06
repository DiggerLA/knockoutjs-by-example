/* Module Demo */

class Model {
  constructor() {
    this.name = ko.observable();
  }
}

class ViewModel {  
  constructor(model) {   
    this.model = model;    
  }
  
  clickHandler() {
    console.log('clicked');
  }  
}

ko.applyBindings(new ViewModel(new Model()));  
