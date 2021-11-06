/* Module TodoList */

const TodoList = (function () {
  
  var States = {
    NEW: 'new',
    COMPLETE: 'complete',
  };
  
  var task = {
    name: ko.observable(),
    description: ko.observable(),
    // status: States.NEW,
    priority: ko.observable(1),
  };
  
  var tasks = ko.observableArray();  
  
  var addTask = function (todolist, /*event*/) {
    console.log(`Adding new task with name: ${task.name()} and description: ${task.description()}`);   
    tasks.push({
      name: task.name(),
      description: task.description(),
      status: ko.observable(States.NEW),
      priority: task.priority(),
    });
    clearTask();
  };
    
  var clearTask = function () {
    task.name(null);
    task.description(null);
    task.priority(1);
  };
  
  var deleteTask = function (task, /*event*/) {  
    console.log(`Deleting task with name: ${task.name}`);
    tasks.remove(task);
  };
  
  var completeTask = (task, /*event*/) => {   
    task.status(States.COMPLETE);
    console.log(`Complete task with name: ${task.name}, status: ${task.status()}`);
  };
  
  var sortByPriority = function (todolist) {
    console.log('Sorting tasks by priority');   
    tasks.sort(function (l , r) {
      if (l.priority == r.priority) 
        return 0;
      else if (l.priority < r.priority)
        return -1;
      else
        return 1;           
      // return (l.priority == r.priority) ? 0 : ((l.priority < r.priority) ? -1 : 1);
    });
  };
  
  var sortByName = function () {
    console.log('Sorting tasks by name');
    tasks.sort(function (l, r) {
      if (l.name == r.name) 
        return 0;
      else if (l.name < r.name)
        return -1;
      else
        return 1;                 
    });
  };
  
  var numOfCompletedTasks = ko.computed(function () {
    var completedTasks = ko.utils.arrayFilter(tasks(), task => task.status() == States.COMPLETE);
    return completedTasks.length;
  });
  
  var init = function () {
    ko.applyBindings(TodoList);
  };
  
  $(init);
  
  return {
    task,
    tasks,
    addTask,   
    deleteTask,
    completeTask,
    sortByPriority,
    sortByName,
    numOfCompletedTasks,
  };
})();