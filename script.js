function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
  
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.backgroundColor = "";
      tablinks[i].style.color = "";
    }
  
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.style.backgroundColor = "#007BFF";
    evt.currentTarget.style.color = "#fff";
  }
  
  function checkBloodType() {
    var bloodTypeDropdown = document.getElementById('bloodType');
    var otherBloodTypeContainer = document.getElementById('otherBloodTypeContainer');
    var otherBloodTypeInput = document.getElementById('otherBloodType');
  
    if (bloodTypeDropdown.value === 'other') {
      otherBloodTypeContainer.style.display = 'block';
      otherBloodTypeInput.required = true;
    } else {
      otherBloodTypeContainer.style.display = 'none';
      otherBloodTypeInput.required = false;
    }
  }
  
  function submitForms() {
    // Your code for submitting forms goes here
    // Access form data using document.getElementById
    // You can perform additional validation or send data to a server
    // Display an alert or handle the data as needed
    alert('Forms submitted successfully!');
  }
  