<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Registration Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main class="container">
    <section class="form-card">
      <div class="heading">
        <span class="tag">ONLINE APPLICATION</span>
        <h1>Registration Form</h1>
        <p>Please fill in your details to complete registration.</p>
      </div>

      <form id="registrationForm" action="submit.php" method="POST">
        <div class="form-grid">
          <div class="field">
            <label for="fullname">Full Name *</label>
            <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
          </div>
          <div class="field">
            <label for="email">Email Address *</label>
            <input type="email" id="email" name="email" placeholder="name@example.com" required>
          </div>
          <div class="field">
            <label for="phone">Phone Number *</label>
            <input type="tel" id="phone" name="phone" placeholder="10-digit mobile number"
                   pattern="[0-9]{10}" maxlength="10" required>
          </div>
          <div class="field">
            <label for="dob">Date of Birth *</label>
            <input type="date" id="dob" name="dob" required>
          </div>
          <div class="field">
            <label for="gender">Gender *</label>
            <select id="gender" name="gender" required>
              <option value="">Select gender</option>
              <option>Female</option>
              <option>Male</option>
              <option>Other</option>
              <option>Prefer not to say</option>
            </select>
          </div>
          <div class="field">
            <label for="course">Applying For *</label>
            <select id="course" name="course" required>
              <option value="">Select an option</option>
              <option>Computer Science</option>
              <option>Information Science</option>
              <option>Electronics</option>
              <option>Mechanical</option>
              <option>Other</option>
            </select>
          </div>
          <div class="field full">
            <label for="address">Address *</label>
            <textarea id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>
          </div>
        </div>

        <label class="consent">
          <input type="checkbox" id="agree" required>
          <span>I confirm that the information provided is correct.</span>
        </label>
        <button type="submit">Submit Application</button>
        <p class="note">Fields marked * are compulsory.</p>
      </form>
    </section>
  </main>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
