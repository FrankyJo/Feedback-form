let button = document.querySelector('button');


button.addEventListener('click', function(event) {
  event.preventDefault();

  let formData = {
    name: document.querySelector('#name').value,
    messangerContact: document.querySelector('#messanger-contact').value,
    messanger: document.querySelector('#messanger').value,
    message: document.querySelector('#message').value
  }

  let request = new XMLHttpRequest();

  request.open('POST', "https://www.denyspopov.com/wp-content/themes/denyspopov/sendmessage.php")
  request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8');
  request.send('name=' + encodeURIComponent(formData.name) + '&messangerContact=' + encodeURIComponent(formData.messangerContact) + '&messanger=' +  encodeURIComponent(formData.messanger) + '&message=' +    encodeURIComponent(formData.message))
})
