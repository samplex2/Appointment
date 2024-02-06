<?php
include_once 'template/header.php';
?>

    <div id="patientTab" class="tabcontent">
      <h2>Patient Information</h2>
      <form id="patientForm">
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <label for="gender">Gender:</label> 
        <select id="gender" name="gender" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>

        <label for="bloodType">Blood Type:</label>
        <select id="bloodType" name="bloodType" onchange="checkBloodType()" required>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="AB">AB</option>
          <option value="O">O</option>
          <option value="other">Other</option>
        </select>

        <div id="otherBloodTypeContainer" style="display: none;">
          <label for="otherBloodType">Specify Other Blood Type:</label>
          <input type="text" id="otherBloodType" name="otherBloodType">
        </div>
      </form>
    </div>

    <div id="appointmentTab" class="tabcontent">
      <h2>Appointment Details</h2>
      <form id="appointmentForm">
        <label for="appointmentDate">Date:</label>
        <input type="date" id="appointmentDate" name="appointmentDate" required>

        <label for="appointmentTime">Time:</label>
        <input type="time" id="appointmentTime" name="appointmentTime" required>
      </form>
    </div>

    <div id="doctorTab" class="tabcontent">
      <h2>Doctor Information</h2>
      <form id="doctorForm">
        <label for="doctorName">Doctor's Name:</label>
        <input type="text" id="doctorName" name="doctorName" required>

        <label for="specialty">Specialty:</label>
        <input type="text" id="specialty" name="specialty" required>
      </form>
    </div>

    <button type="button" onclick="submitForms()">Submit</button>
  </div>

  

  <?php
include_once 'template/header.php';
?>