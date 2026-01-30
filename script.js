const readerToggle = document.querySelector(".reader-toggle");

if (readerToggle) {
  const stored = localStorage.getItem("reader-mode");
  const isOn = stored === "on";
  document.body.classList.toggle("reader-mode", isOn);
  readerToggle.setAttribute("aria-pressed", String(isOn));
  readerToggle.textContent = isOn ? "Reader mode: On" : "Reader mode";

  readerToggle.addEventListener("click", () => {
    const enabled = document.body.classList.toggle("reader-mode");
    localStorage.setItem("reader-mode", enabled ? "on" : "off");
    readerToggle.setAttribute("aria-pressed", String(enabled));
    readerToggle.textContent = enabled ? "Reader mode: On" : "Reader mode";
  });
}
