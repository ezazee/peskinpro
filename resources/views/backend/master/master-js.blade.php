     <script src="{{ asset('backend/assets/js/vendor.js') }}"></script>

     <!-- App Javascript (Require in all Page) -->
     <script src="{{ asset('backend/assets/js/app.js') }}"></script>

     <!-- Vector Map Js -->
     <script src="{{ asset('backend/assets/vendor/jsvectormap/js/jsvectormap.min.js') }}"></script>
     <script src="{{ asset('backend/assets/vendor/jsvectormap/maps/world-merc.js') }}"></script>
     <script src="{{ asset('backend/assets/vendor/jsvectormap/maps/world.js') }}"></script>

     <!-- Dashboard Js -->
     <script src="{{ asset('backend/assets/js/pages/dashboard.js') }}"></script>


     <script>
         document.addEventListener("DOMContentLoaded", function() {
             const passwordField = document.getElementById("example-password");
             const togglePasswordButton = document.getElementById("togglePassword");

             togglePasswordButton.addEventListener("click", function() {
                 const type = passwordField.type === "password" ? "text" : "password";
                 passwordField.type = type;

                 const icon = type === "password" ? "bx bx-show" : "bx bx-hide"; // Mengganti ikon
                 this.innerHTML = `<i class="${icon}"></i>`;
             });
         });
     </script>


     <script>
         document.addEventListener("DOMContentLoaded", function() {
             const passwordField = document.getElementById("profile-password");
             const togglePasswordButton = document.getElementById("toggleProfilePassword");

             togglePasswordButton.addEventListener("click", function() {
                 const type = passwordField.type === "password" ? "text" : "password";
                 passwordField.type = type;

                 const icon = type === "password" ? "bx bx-show" : "bx bx-hide"; // Mengganti ikon
                 this.innerHTML = `<i class="${icon}"></i>`;
             });

             const confirmPasswordField = document.getElementById("profile-password-confirm");
             const toggleConfirmPasswordButton = document.getElementById("toggleProfilePasswordConfirm");

             toggleConfirmPasswordButton.addEventListener("click", function() {
                 const type = confirmPasswordField.type === "password" ? "text" : "password";
                 confirmPasswordField.type = type;

                 const icon = type === "password" ? "bx bx-show" : "bx bx-hide"; // Mengganti ikon
                 this.innerHTML = `<i class="${icon}"></i>`;
             });
         });
     </script>


     <script>
         document.addEventListener("DOMContentLoaded", function() {
             const passwordField = document.getElementById("create-user-password");
             const togglePasswordButton = document.getElementById("toggleCreateUserPassword");

             togglePasswordButton.addEventListener("click", function() {
                 const type = passwordField.type === "password" ? "text" : "password";
                 passwordField.type = type;

                 const icon = type === "password" ? "bx bx-show" : "bx bx-hide"; // Mengganti ikon
                 this.innerHTML = `<i class="${icon}"></i>`;
             });

             const confirmPasswordField = document.getElementById("create-user-password-confirmation");
             const toggleConfirmPasswordButton = document.getElementById("toggleCreateUserPasswordConfirm");
             const passwordError = document.getElementById("create-user-password-error");

             toggleConfirmPasswordButton.addEventListener("click", function() {
                 const type = confirmPasswordField.type === "password" ? "text" : "password";
                 confirmPasswordField.type = type;

                 const icon = type === "password" ? "bx bx-show" : "bx bx-hide"; // Mengganti ikon
                 this.innerHTML = `<i class="${icon}"></i>`;
             });

             confirmPasswordField.addEventListener("input", function() {
                 if (passwordField.value !== confirmPasswordField.value) {
                     passwordError.style.display = "block";
                 } else {
                     passwordError.style.display = "none";
                 }
             });
         });
     </script>



     <script>
         document.addEventListener("DOMContentLoaded", function() {
             const passwordField = document.getElementById("edit-user-password");
             const togglePasswordButton = document.getElementById("toggleEditUserPassword");

             togglePasswordButton.addEventListener("click", function() {
                 const type = passwordField.type === "password" ? "text" : "password";
                 passwordField.type = type;

                 const icon = type === "password" ? "bx bx-show" : "bx bx-hide"; // Mengganti ikon
                 this.innerHTML = `<i class="${icon}"></i>`;
             });

             const confirmPasswordField = document.getElementById("edit-user-password-confirmation");
             const toggleConfirmPasswordButton = document.getElementById("toggleEditUserPasswordConfirm");
             const passwordError = document.getElementById("edit-user-password-error");

             toggleConfirmPasswordButton.addEventListener("click", function() {
                 const type = confirmPasswordField.type === "password" ? "text" : "password";
                 confirmPasswordField.type = type;

                 const icon = type === "password" ? "bx bx-show" : "bx bx-hide"; // Mengganti ikon
                 this.innerHTML = `<i class="${icon}"></i>`;
             });

             confirmPasswordField.addEventListener("input", function() {
                 if (passwordField.value !== confirmPasswordField.value) {
                     passwordError.style.display = "block";
                 } else {
                     passwordError.style.display = "none";
                 }
             });
         });
     </script>
