<?php
function clean_input($value) {
    return htmlspecialchars(trim((string)$value), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$fullname = clean_input($_POST["fullname"] ?? "");
$email    = clean_input($_POST["email"] ?? "");
$phone    = clean_input($_POST["phone"] ?? "");
$dob      = clean_input($_POST["dob"] ?? "");
$gender   = clean_input($_POST["gender"] ?? "");
$course   = clean_input($_POST["course"] ?? "");
$address  = clean_input($_POST["address"] ?? "");

$errors = [];
if ($fullname === "" || $email === "" || $phone === "" || $dob === "" ||
    $gender === "" || $course === "" || $address === "") {
    $errors[] = "Please complete all required fields.";
}
if (!filter_var($_POST["email"] ?? "", FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email address.";
}
if (!preg_match('/^[0-9]{10}$/', $_POST["phone"] ?? "")) {
    $errors[] = "Phone number must contain exactly 10 digits.";
}

if ($errors) {
    http_response_code(400);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application Status</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main class="container">
    <section class="result-card">
      <?php if ($errors): ?>
        <div class="status error">Application not submitted</div>
        <h1>Please check your details</h1>
        <ul class="error-list">
          <?php foreach ($errors as $error): ?>
            <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
          <?php endforeach; ?>
        </ul>
        <a class="back-link" href="index.php">Go back to form</a>
      <?php else: ?>
        <div class="success-icon">&#10003;</div>
        <div class="status">SUBMISSION SUCCESSFUL</div>
        <h1>Application Received!</h1>
        <p class="intro">Thank you for registering. Your submitted details are shown below.</p>

        <div class="details">
          <div><span>Full Name</span><strong><?php echo $fullname; ?></strong></div>
          <div><span>Email Address</span><strong><?php echo $email; ?></strong></div>
          <div><span>Phone Number</span><strong><?php echo $phone; ?></strong></div>
          <div><span>Date of Birth</span><strong><?php echo $dob; ?></strong></div>
          <div><span>Gender</span><strong><?php echo $gender; ?></strong></div>
          <div><span>Applying For</span><strong><?php echo $course; ?></strong></div>
          <div class="address-row"><span>Address</span><strong><?php echo nl2br($address); ?></strong></div>
        </div>
        <div class="action-buttons">
          <button type="button" class="print-button" onclick="window.print()">Print Student Details</button>
          <a class="back-link" href="index.php">Submit another application</a>
        </div>
      <?php endif; ?>
    </section>
  </main>
</body>
</html>
