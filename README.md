# HandwerkPilot – WordPress service workflow

HandwerkPilot is a portfolio project that demonstrates a complete service-request workflow for a fictional electrical company. It is not only a visual website: the repository contains a custom WordPress theme and a custom plugin with an operational backend workflow.

## What the project demonstrates

- custom WordPress theme without a page builder
- custom plugin architecture using WordPress hooks and APIs
- six-step, responsive service-request form
- server-side validation and sanitization
- nonce and capability checks
- honeypot spam protection
- restricted image upload with size and MIME checks
- private custom post type for submitted requests
- WordPress admin workflow with statuses and internal notes
- filtering and custom columns in the admin area
- protected UTF-8 CSV export
- accessible labels, status messages and keyboard-friendly controls

## Technology

PHP, WordPress, JavaScript, HTML5, CSS3 and Git.

## Repository structure

```text
plugin/handwerkpilot-core/   Custom workflow plugin
theme/elektrofix-achern/     Custom WordPress theme
docs/                        Technical notes and manual QA checklist
```

## Installation

1. Copy `theme/elektrofix-achern` into `wp-content/themes/`.
2. Copy `plugin/handwerkpilot-core` into `wp-content/plugins/`.
3. Activate the theme and the **HandwerkPilot Core** plugin.
4. Add the shortcode `[handwerkpilot_form]` to the service-request page.
5. Submit a demo request and manage it under **Serviceanfragen** in WordPress Admin.

## Security decisions

The public form is protected with a WordPress nonce and a honeypot field. Every submitted value is validated and sanitized on the server. Uploaded images are limited to 5 MB and JPEG, PNG or WebP. Administrative changes require the appropriate capability and a separate nonce. CSV export is restricted to administrators.

## Project status

This is an independent practice project created for a development portfolio. ElektroFix Achern is fictional and no real customer data is processed.

