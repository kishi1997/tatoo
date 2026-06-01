function reinkInit() {
  // --- Nav scroll ---
  console.log("Header found, adding scroll listener");
  var hdr = document.getElementById("site-header");
  if (hdr) {
    window.addEventListener(
      "scroll",
      function () {
        hdr.classList.toggle("scrolled", window.scrollY > 50);
      },
      { passive: true },
    );
  }

  // --- Mobile nav ---
  var toggle = document.getElementById("nav-toggle");
  var mobileNav = document.getElementById("mobile-nav");
  if (toggle && mobileNav) {
    toggle.addEventListener("click", function () {
      toggle.classList.toggle("open");
      mobileNav.classList.toggle("open");
      document.body.style.overflow = mobileNav.classList.contains("open")
        ? "hidden"
        : "";
    });
    mobileNav.querySelectorAll("a").forEach(function (a) {
      a.addEventListener("click", function () {
        toggle.classList.remove("open");
        mobileNav.classList.remove("open");
        document.body.style.overflow = "";
      });
    });
  }

  // --- Fade in observer ---
  var observer =
    "IntersectionObserver" in window
      ? new IntersectionObserver(
          function (entries) {
            entries.forEach(function (e) {
              if (e.isIntersecting) {
                e.target.classList.add("on");
                observer.unobserve(e.target);
              }
            });
          },
          { threshold: 0.12, rootMargin: "0px 0px -8% 0px" },
        )
      : null;

  function observeFadeIns(root) {
    (root || document).querySelectorAll(".fi").forEach(function (el) {
      if (observer) {
        observer.observe(el);
      } else {
        el.classList.add("on");
      }
    });
  }

  observeFadeIns(document);

  // --- FAQ accordion ---
  document.querySelectorAll(".top-faq-q, .faq-q").forEach(function (btn) {
    btn.addEventListener("click", function () {
      var item = btn.closest(".top-faq-item, .faq-item");
      var isOpen = item.classList.contains("open");
      document
        .querySelectorAll(".top-faq-item, .faq-item")
        .forEach(function (i) {
          i.classList.remove("open");
        });
      if (!isOpen) item.classList.add("open");
    });
  });

  // --- Works load more ---
  var loadMore = document.getElementById("load-more");
  var galleryGrid = document.getElementById("gallery-grid");
  if (loadMore && galleryGrid && window.reinkWorks) {
    loadMore.addEventListener("click", function () {
      if (loadMore.disabled) return;

      var currentPage = parseInt(loadMore.dataset.currentPage || "1", 10);
      var maxPages = parseInt(loadMore.dataset.maxPages || "1", 10);
      var nextPage = currentPage + 1;

      if (nextPage > maxPages) {
        loadMore.hidden = true;
        return;
      }

      var formData = new FormData();
      formData.append("action", "reink_load_more_works");
      formData.append("nonce", window.reinkWorks.nonce);
      formData.append("page", nextPage);

      loadMore.disabled = true;
      loadMore.textContent = "Loading...";

      fetch(window.reinkWorks.ajaxUrl, {
        method: "POST",
        credentials: "same-origin",
        body: formData,
      })
        .then(function (response) {
          return response.json();
        })
        .then(function (response) {
          if (!response.success || !response.data || !response.data.html) {
            throw new Error("No works returned.");
          }

          var fragment = document.createElement("div");
          fragment.innerHTML = response.data.html;

          while (fragment.firstElementChild) {
            galleryGrid.appendChild(fragment.firstElementChild);
          }

          observeFadeIns(galleryGrid);
          loadMore.dataset.currentPage = String(nextPage);
          maxPages = parseInt(response.data.maxPages || maxPages, 10);
          loadMore.dataset.maxPages = String(maxPages);

          if (nextPage >= maxPages) {
            loadMore.hidden = true;
          }
        })
        .catch(function () {
          loadMore.textContent = "Try Again";
        })
        .finally(function () {
          if (!loadMore.hidden) {
            loadMore.disabled = false;
            if (loadMore.textContent !== "Try Again") {
              loadMore.textContent = "Load More Works";
            }
          }
        });
    });
  }
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", reinkInit);
} else {
  reinkInit();
}
