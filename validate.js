
function validateForm() {
  let email = document.getElementById('email').value.trim();
  let password = document.getElementById('password').value.trim();

  if (email === "" || password === "") {
    alert("Email dan Password wajib diisi!");
    return false;
  }
  return true;
}
