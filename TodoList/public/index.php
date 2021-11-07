<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">   
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <link rel="stylesheet" href="bulma/bulma.min.css">
  <link rel="stylesheet" href="font-awesome/css/all.min.css">
  <title>Knockout: Todo List Example</title>
</head>
<body>   
  <div class="container mt-4">     
    <div class="columns is-centered">      
      <div class="column is-6-tablet is-6-desktop is-half-widescreen is-one-quarter-fullhd">  
        
        <div class="field">
          <h1 class="title">Knockout: Todo List Example</h1>
        </div>
        
        <div class="field is-grouped">
          <div class="field mr-1">
            <label class="label" for="taskName">Task Name</label>
            <div class="control has-icons-left">
              <input class="input is-primary" type="text" id="taskName" placeholder="Enter task name"
                data-bind="value: task.name">
              <span class="icon is-small is-left">              
                <i class="fas fa-tasks"></i>
              </span>
            </div>
          </div>
          
          <div class="field mr-1">
            <label class="label" for="decription">Description</label>
            <div class="control has-icons-left">
              <input class="input is-primary" type="text" id="decription" placeholder="Enter description"
                data-bind="value: task.description">
              <span class="icon is-small is-left">              
                <i class="far fa-file-alt"></i>
              </span>
            </div>
          </div>                    
        </div>
        
        <!-- <div class="field is-grouped"> -->
          <div class="field is-grouped mr-2">
            <label class="label control mt-2" for="priority">Priority</label>
            <div class="control has-icons-left">
              <div class="select">
                <select id="priority"
                  data-bind="value: task.priority">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
              <div class="icon is-small is-left">
                <i class="fas fa-exclamation-circle"></i>
              </div>
            </div>
          </div>
          
          <div class="field">
            <div class="control">
              <button class="button is-primary is-fullwidth" 
                data-bind="click: addTask">
                Add
              </button>
            </div>
          </div>  
        <!-- </div> -->
        
        <div class="field is-grouped">          
          <div class="control mt-2">
            <label class="label">Sort by</label>
          </div>
          <div class="control">
            <button class="button" data-bind="click: sortByPriority">priority</button>
          </div>
          <div class="control">
            <button class="button" data-bind="click: sortByName">name</button>
          </div>
        </div>
        
        <table class="table is-striped is-hoverable is-fullwidth">
          <thead>
            <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Priority</th>
              <th>Actions</th>              
            </tr>
          </thead>
          <tbody data-bind="foreach: tasks">
            <tr data-bind="css:{ 'has-background-success-light': status() == 'complete'}">
              <td data-bind="text: name"></td>
              <td data-bind="text: description"></td>
              <td data-bind="text: priority"></td>
              <td>
                <button class="button is-success is-small is-rounded mb-1"
                  data-bind="click: $parent.completeTask, visible: status() != 'complete'">
                  Complete
                </button>
                <button class="button is-danger is-small is-rounded" 
                  data-bind="click: TodoList.deleteTask">
                  Delete
                </button>              
              </td>             
            </tr>
          </tbody>
        </table>
        
        <div>
          <span class="field is-grouped" data-bind="visible: tasks().length > 0">
            <label class="label mr-2">Total: <span data-bind="text: tasks().length"></span></label>
            <label class="label">Completed: <span data-bind="text: numOfCompletedTasks()"></span></label>
          </span>
          <span data-bind="visible: tasks().length == 0">
            <label class="label">No tasks in my list</label>
          </span>          
        </div>
        
      </div>
    </div>
        
  </div>
    
  <script src="js/knockout.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/todolist.js"></script>
</body>
