document.oncontextmenu = rightClick;

function rightClick(clickEvent) {
  clickEvent.preventDefault();
  // return false; 
}

document.onclick = hideMenu;
document.oncontextmenu = rightClick;

function hideMenu() {
  document.getElementById("contextMenu")
    .style.display = "none"
}

function rightClick(e) {
  e.preventDefault();

  if (document.getElementById("contextMenu")
    .style.display == "block")
    hideMenu();
  else {
    var menu = document.getElementById("contextMenu")

    menu.style.display = 'block';
    menu.style.left = e.pageX + "px";
    menu.style.top = e.pageY + "px";
  }
}


document.addEventListener('DOMContentLoaded', () => {
  let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  const checkboxall = document.getElementById('flexCheckAll');
  const checkboxList = document.querySelectorAll('.checkbox-item');
  const removebtn = document.getElementById('remove-btn');
  let removeUrl = './removeuser';
  var checkedBoxes = [];


  checkboxall.addEventListener('change', () => {
    for (const checkbox of checkboxList) {
      if (!checkbox.disabled) {
        checkbox.checked = checkboxall.checked;
      }
    }
  });

  checkboxList.forEach(checkbox => {
    checkbox.addEventListener('change', () => {
      if (!checkbox.checked && checkboxall.checked) {
        checkboxall.checked = false;
      }
    });
  });

  removebtn.addEventListener('click', () => {
    checkboxList.forEach(checkbox => {
      if (checkbox.checked) {
        checkedBoxes.push(checkbox.value);
      }
    })
    postData(checkedBoxes)
  })

  function postData(boxes = []) {
    boxes.forEach(box => {
      var boxjson = {
        'id': box,
      }
      $.ajax({
        url: removeUrl,
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify(boxjson),
        headers: {
          'X-CSRF-TOKEN': token
        },
        success: function (response) {
          console.log('success: ' + response)
          console.log('url: ' + removeUrl)
        },
        error: function (error) {
          console.log('error_ ' + error.message)
          console.log('url: ' + removeUrl)
          console.log('json: ' + JSON.stringify(boxjson))
        },
      });
    })
  }


});

document.getElementById('logo').ondragstart = function () { return false; };