<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">   
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <link rel="stylesheet" href="bulma/bulma.min.css">
  <link rel="stylesheet" href="font-awesome/css/all.min.css">
  <title>Knockout: Address Book Example</title>
</head>
<body>   
  <div class="container mt-4"> 
    <div class="columns is-centered">
      <div class="column is-6-tablet is-6-desktop is-half-widescreen is-one-quarter-fullhd">  
        <div class="field">
          <h1 class="title">Knockout: Address Book Example</h1>
        </div>
        <div class="field">
          <label class="label" for="">Name</label>
          <div class="control has-icons-left">
            <input class="input is-primary" type="text" placeholder="Enter Name"
              data-bind="value: AddressBook.contact.name">
            <span class="icon is-small is-left">
              <i class="fa fa-user"></i>
            </span>
          </div>
        </div>
        
        <div class="field">
          <label class="label" for="">Phone Number</label>
          <div class="control has-icons-left">
            <input class="input is-primary" type="text" placeholder="Enter Phone Number"
              data-bind="value: AddressBook.contact.phoneNumber">
            <span class="icon is-small is-left">
              <i class="fa fa-phone"></i>
            </span>
          </div>
        </div>
          
        <div class="field">
          <div class="control">
            <button class="button is-primary" data-bind="click: AddressBook.addContact">Add</button>
          </div>
        </div>  
        
        <table class="table is-striped is-hoverable is-fullwidth">
          <thead>
            <tr>
              <th>Name</th>
              <th>Phone Number</th>
            </tr>
          </thead>
          <tbody data-bind="foreach:AddressBook.contacts">
            <tr>
              <td data-bind="text:
              name"></td>
              <td data-bind="text:phoneNumber"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
        
  </div>
    
  <script src="js/knockout.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/addressbook.js"></script>
</body>
