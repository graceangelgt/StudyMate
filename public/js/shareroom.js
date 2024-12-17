  // Seleksi tombol dan elemen notifikasi
  const saveButton = document.getElementById("save-btn");
  const notification = document.getElementById("save-notification");
  const friendInput = document.querySelector(".friend-id-input");

  // Event listener untuk tombol
  saveButton.addEventListener("click", () => {
    if (friendInput.value.trim() !== "") {
      // Tampilkan notifikasi
      notification.style.display = "block";

      // Hilangkan notifikasi setelah 3 detik
      setTimeout(() => {
        notification.style.display = "none";
      }, 3000);

      // Optional: Bersihkan input
      friendInput.value = "";
    } else {
      alert("Please enter a friend's ID first!");
    }
  });