function switchText() {
    var x = document.getElementById("text");
    if (x.innerHTML === "I am a student.") {
      x.innerHTML = "I am a Librarian";
    } else {
      x.innerHTML = "I am a student.";
    }
    text.style.cursor="pointer";
  }