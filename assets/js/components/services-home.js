/**
 * Services Home Tabs Component Logic
 * Used to switch between service categories on the homepage.
 */
function switchTab(categoryId) {
  const activeBtn = document.getElementById(`tab-${categoryId}`);
  document.querySelectorAll('.service-tab-btn').forEach((tab) => tab.classList.remove('active'));
  if (activeBtn) activeBtn.classList.add('active');

  const container = document.getElementById('service-content');
  if (!container) return;

  // Toggle panes
  const allPanes = container.querySelectorAll('.service-pane');
  const targetPane = document.getElementById(`hp-pane-${categoryId}`);

  container.classList.add('opacity-0');
  setTimeout(() => {
    allPanes.forEach(pane => pane.classList.remove('active'));
    if (targetPane) targetPane.classList.add('active');
    container.classList.remove('opacity-0');
  }, 200);
}

document.addEventListener('DOMContentLoaded', () => {
  if (document.querySelectorAll('.service-tab-btn').length) {
    switchTab('core');
  }
});
