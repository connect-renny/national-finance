/**
 * Edit Profile — form check + Change Profile Photo (drag & drop preview).
 *
 * PLACEHOLDER: nothing is sent to a server yet. Saving shows a message and
 * "Upload" swaps the photo on this page only. Replace with real requests
 * when the backend exists.
 */
(() => {
  "use strict";

  // ─── Profile form ────────────────────────────────────────────────────────
  const form = document.getElementById("profileForm");
  if (form) {
    const status = form.querySelector("[data-form-status]");
    const save = form.querySelector('[type="submit"]');

    form.addEventListener("submit", (e) => {
      e.preventDefault();
      let firstBad = null;
      form.querySelectorAll("[required]").forEach((field) => {
        const bad = !field.value.trim();
        field.setAttribute("aria-invalid", String(bad));
        if (bad && !firstBad) firstBad = field;
      });
      if (firstBad) {
        status.textContent = "";
        firstBad.focus();
        return;
      }
      status.textContent = save.dataset.saved;
    });

    form.addEventListener("input", (e) => {
      if (e.target.getAttribute("aria-invalid") === "true" && e.target.value.trim()) {
        e.target.setAttribute("aria-invalid", "false");
      }
      status.textContent = "";
    });
  }

  // ─── Change Profile Photo ────────────────────────────────────────────────
  const modal = document.getElementById("photoModal");
  if (!modal) return;

  const MAX_BYTES = 5 * 1024 * 1024;
  const TYPES = ["image/jpeg", "image/png"];

  const zone = modal.querySelector("[data-dropzone]");
  const input = modal.querySelector("[data-photo-input]");
  const hint = modal.querySelector("[data-photo-hint]");
  const preview = modal.querySelector("[data-photo-preview]");
  const uploadBtn = modal.querySelector("[data-photo-upload]");
  const pagePhotos = document.querySelectorAll("[data-profile-photo], .dash-user__toggle img");

  const originalSrc = preview.src;
  const originalHint = hint.textContent;
  let pendingUrl = null;

  const reset = () => {
    if (pendingUrl && preview.src === pendingUrl) URL.revokeObjectURL(pendingUrl);
    pendingUrl = null;
    preview.src = pagePhotos[0]?.src || originalSrc;
    hint.textContent = originalHint;
    zone.classList.remove("is-error", "is-over");
    uploadBtn.disabled = true;
    input.value = "";
  };

  const take = (file) => {
    if (!file) return;
    let error = "";
    if (!TYPES.includes(file.type)) error = input.dataset.errType;
    else if (file.size > MAX_BYTES) error = input.dataset.errSize;

    zone.classList.toggle("is-error", Boolean(error));
    if (error) {
      hint.textContent = error;
      uploadBtn.disabled = true;
      return;
    }
    if (pendingUrl) URL.revokeObjectURL(pendingUrl);
    pendingUrl = URL.createObjectURL(file);
    preview.src = pendingUrl;
    hint.textContent = file.name;
    uploadBtn.disabled = false;
  };

  input.addEventListener("change", () => take(input.files[0]));

  ["dragenter", "dragover"].forEach((type) =>
    zone.addEventListener(type, (e) => {
      e.preventDefault();
      zone.classList.add("is-over");
    }),
  );
  ["dragleave", "drop"].forEach((type) =>
    zone.addEventListener(type, (e) => {
      e.preventDefault();
      zone.classList.remove("is-over");
    }),
  );
  zone.addEventListener("drop", (e) => take(e.dataTransfer.files[0]));

  uploadBtn.addEventListener("click", () => {
    if (!pendingUrl) return;
    pagePhotos.forEach((img) => (img.src = pendingUrl));
    pendingUrl = null; // now owned by the page images
    window.bootstrap?.Modal.getOrCreateInstance(modal).hide();
  });

  modal.addEventListener("hidden.bs.modal", reset);
})();
