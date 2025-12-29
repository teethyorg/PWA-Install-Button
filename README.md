# PWA Install Button for WordPress

A lightweight, zero-configuration WordPress plugin that adds a professional **Install App** button to your site. It bridges the gap between different browsers by triggering native prompts where supported and providing smart manual instructions for iOS and Safari users.

🔗 **Live Demo:** [teethy.org](https://teethy.org/app)

## 🚀 Features

* **Native Prompts:** Uses the `beforeinstallprompt` API for a seamless experience on Chrome, Edge, and Android.
* **Smart Fallback:** Automatically detects iOS/Safari and provides step-by-step instructions for manual installation.
* **Simple Shortcode:** Place the button anywhere with `[pwa_install_button]`.
* **Highly Styleable:** Clean CSS classes for easy branding overrides.

## 🛠 Installation

1.  Download the repository as a ZIP.
2.  Upload to your WordPress site via **Plugins > Add New > Upload Plugin**.
3.  Activate the plugin.
4.  (Required) Ensure your site has a valid `manifest.json` and a registered Service Worker.

## 📖 Usage

### Standard Button
Simply add this to any post or page:
`[pwa_install_button]`

### Custom Label
Change the button text directly in the shortcode:
`[pwa_install_button button_text="Download App"]`

## 📁 Project Structure

* `pwa-install-button.php`: Core plugin logic and shortcode registration.
* `pwa-install-button.js`: JavaScript for handling installation events and fallbacks.

## 📄 License
Distributed under the GPL2 License. See `LICENSE` for more information.

---
Built with ❤️ by [teethy](https://teethy.org)
