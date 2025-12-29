// pwa-install-button.js

let deferredPrompt;
const installBtn = document.getElementById('pwa-install-btn');

// Hide the button initially if not needed
installBtn.style.display = 'none';

// Listen for the beforeinstallprompt event
window.addEventListener('beforeinstallprompt', (e) => {
    e.preventDefault();
    deferredPrompt = e;

    // Show the install button
    installBtn.style.display = 'inline-block';
});

// Handle button click
installBtn.addEventListener('click', async () => {
    if (!deferredPrompt) return;

    deferredPrompt.prompt();
    const { outcome } = await deferredPrompt.userChoice;
    
    // Optionally, hide the button after prompt
    installBtn.style.display = 'none';

    // Reset the deferred prompt
    deferredPrompt = null;

    // You can show a message based on outcome if you want
    if (outcome === 'accepted') {
        alert('App installed successfully!');
    } else {
        alert('Installation dismissed.');
    }
});

// Optional: fallback message for unsupported browsers
window.addEventListener('load', () => {
    if (!window.matchMedia || !window.navigator.standalone && !('BeforeInstallPromptEvent' in window)) {
        const msg = document.createElement('div');
        msg.className = 'pwa-fallback-msg';
        msg.innerText = 'Your browser does not support installing this app.';
        installBtn.parentNode.insertBefore(msg, installBtn.nextSibling);
    }
});
