$(document).ready(function () {
  // Basic client-side validation using jQuery.
  $("#registrationForm").on("submit", function (event) {
    const phone = $("#phone").val().trim();

    if (!/^[0-9]{10}$/.test(phone)) {
      event.preventDefault();
      alert("Please enter a valid 10-digit phone number.");
      $("#phone").focus();
      return;
    }

    if (!$("#agree").is(":checked")) {
      event.preventDefault();
      alert("Please confirm that your information is correct.");
    }
  });

  // Prevent selecting a future date of birth.
  const today = new Date().toISOString().split("T")[0];
  $("#dob").attr("max", today);
});
