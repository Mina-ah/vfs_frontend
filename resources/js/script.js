document.querySelectorAll('.accordion-button').forEach((button) => {
    button.addEventListener('click', function () {
      const panelId = this.getAttribute('data-panel');
      const panel = document.getElementById(panelId);
      const icon = this.querySelector('.accordion-icon');

      // Toggle visibility of the panel
      if (panel.classList.contains('hidden')) {
        panel.classList.remove('hidden', 'animate-slide-out');
        panel.classList.add('animate-slide-in');
        icon.classList.add('rotate-180'); // Rotate icon for open state
      } else {
        panel.classList.add('hidden', 'animate-slide-out');
        icon.classList.remove('rotate-180'); // Reset icon to default
      }
    });
  });

  document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".count");
    const speed = 50; // Adjust speed for faster/slower animation

    const animateCounts = (counter) => {
      const target = +counter.getAttribute("data-target");
      const count = +counter.innerText;

      const increment = Math.ceil(target / speed);

      if (count < target) {
        counter.innerText = count + increment;
        setTimeout(() => animateCounts(counter), 20);
      } else {
        counter.innerText = target; // Final value
      }
    };

    const startCounting = () => {
      counters.forEach((counter) => {
        if (!counter.classList.contains("started")) {
          counter.classList.add("started");
          animateCounts(counter);
        }
      });
    };

    // Using IntersectionObserver for animation trigger when visible
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            startCounting();
          }
        });
      },
      { threshold: 0.5 }
    );

    counters.forEach((counter) => observer.observe(counter));
  });

  document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.tab-title');
    const panels = document.querySelectorAll('.tab-panel');

    // Set first tab visible on load
    const firstTab = tabs[0];
    const firstPanel = panels[0];

    firstPanel.classList.remove('hidden'); // Ensure the first panel is visible
    firstTab.classList.add('bg-blue-50', 'text-blue-600', 'font-semibold'); // Highlight the first tab

    tabs.forEach((tab) => {
      tab.addEventListener('click', function () {
        const target = this.getAttribute('data-tab');
        const activePanel = document.querySelector(`.${target}`);

        if (activePanel) {
          // Hide other panels
          panels.forEach((panel) => {
            panel.classList.add('hidden');
          });

          // Show the clicked panel
          activePanel.classList.remove('hidden');

          // Update styling for active tab
          tabs.forEach((t) => t.classList.remove('bg-blue-50', 'text-blue-600', 'font-semibold'));
          this.classList.add('bg-blue-50', 'text-blue-600', 'font-semibold');
        }
      });
    });
  });
