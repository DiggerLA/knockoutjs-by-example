/* Module TodoList */

class Task {
  constructor() {
    this.name = ko.observable();
    this.description = ko.observable();
    this.priority = ko.observable();
  }
}

class TodoList {
  constructor(task) {
    this.task = task;
    this.states = {
      NEW: 'new',
      COMPLETE: 'complete',
    };
    this.tasks = ko.observableArray();  
    this.numOfCompletedTasks = ko.computed(() => {
      let completedTasks = [];
      for (let i = 0; i < this.tasks().length; i++) {
        var task = this.tasks()[i];
        if (task.status() == this.states.COMPLETE) {
          completedTasks.push(task);
        }
      }        
      // var completedTasks = ko.utils.arrayFilter(this.tasks(), task => task.status() == this.states.COMPLETE);
      return completedTasks.length;
    });
    this.completeTask = this.completeTask.bind(this);
    this.deleteTask = this.deleteTask.bind(this);
  }
  
  addTask() {
    console.log(`Adding new task with name: ${this.task.name()} and description: ${this.task.description()}`);   
    this.tasks.push({
      name: this.task.name(),
      description: this.task.description(),
      status: ko.observable(this.states.NEW),
      priority: this.task.priority(),
    });
    this.clearTask();
  }
  
  clearTask() {
    this.task.name('');
    this.task.description('');
    this.task.priority(1);
  }
    
  deleteTask(task) {  
    console.log(`Deleting task with name: ${task.name}`);
    this.tasks.remove(task);
  }
  
  completeTask(task) {   
    task.status(this.states.COMPLETE);
    console.log(`Complete task with name: ${task.name}, status: ${task.status()}`);
  }
  
  sortByPriority() {
    console.log('Sorting tasks by priority');   
    this.tasks.sort(function (l, r) {
      if (l.priority == r.priority) 
        return 0;
      else if (l.priority < r.priority)
        return -1;
      else
        return 1;                 
    });
  };
  
  sortByName() {
    console.log('Sorting tasks by name');
    this.tasks.sort(function (l, r) {
      if (l.name == r.name) 
        return 0;
      else if (l.name < r.name)
        return -1;
      else
        return 1;                 
    });
  }
   
}

ko.applyBindings(new TodoList(new Task()));

