document.addEventListener('DOMContentLoaded', () => {
    const tabBtns = document.querySelectorAll('.loc-tab-btn');
    const tabPanels = document.querySelectorAll('.loc-tab-panel');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetId = btn.getAttribute('data-target');

            // Remove active classes
            tabBtns.forEach(b => b.classList.remove('active'));
            tabPanels.forEach(p => p.classList.remove('active'));

            // Add active classes
            btn.classList.add('active');
            const targetPanel = document.getElementById(targetId);
            if (targetPanel) {
                targetPanel.classList.add('active');
            }
        });
    });
});
