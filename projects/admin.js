var controller = {
  add: function(){
    Swal.fire({
      title: 'Add a contributor',
      input: 'text',
      showCancelButton: true,
      preConfirm: (user) => {
        addRemoveUser(model.project_name, user, 'add', function(){return;});
      }
    });
  },
  remove: function(){
    Swal.fire({
      title: 'Remove a contributor',
      input: 'text',
      showCancelButton: true,
      preConfirm: (user) => {
        addRemoveUser(model.project_name, user, 'delete', function(){return;});
      }
    });
  },
  editDesc: function(){
    let desc = document.getElementById('description');
    desc.innerHTML = `
      <textarea rows="4" cols="50">${model.description}</textarea>
      <button class="button small" onclick="controller.updateDesc()">Save</button>
      <button class="button small" onclick="controller.cancelDesc()">Cancel</buttton>`;
  },
  cancelDesc: function(){
    let desc = document.getElementById('description');
    desc.innerHTML = model.description;
  },
  updateDesc: function(){
    let desc = document.getElementById('description').children[0];
    updateDesc(desc.value, function(){
      model.description = desc.value;
      controller.cancelDesc();
    });
  }
}

function addRemoveUser(proj_name, name, action, callback){
  let url = "/api/projects/contributors.php";
  $.post(
    url, 
    {
      project_name: proj_name,
      name: name,
      action: action
    },
    function(data){
      if(callback)
        callback(data);
    });
}

function updateDesc(desc, callback){
  let action = 'update';
  let url = "/api/projects/description.php";
  $.post(
    url, 
    {
      project_name: model.project_name,
      description: desc,
      action: action
    },
    function(data){
      if(callback)
        callback(data);
    });
}

