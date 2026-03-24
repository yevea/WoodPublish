# WoodPublish

PWA for sawmill suppliers to photograph and publish wood slabs to the FacturaScripts product catalogue.

## Description

**WoodPublish** is a FacturaScripts plugin that provides a **Progressive Web App (PWA)** for sawmill suppliers to photograph, price, and publish wood slabs/planks directly into a FacturaScripts product catalogue.

### Features
- **Offline-first**: Full offline support via Service Worker + IndexedDB queue
- **Mobile-optimised**: Standalone PWA that looks like a native mobile app
- **Photo capture**: Take photos directly from the phone camera
- **Auto-pricing**: Real-time price calculation from a configurable pricing table
- **Deferred authentication**: Form is shown to all visitors; login modal appears only on submit

## Installation

1. Copy the `WoodPublish` folder to your FacturaScripts `Plugins` directory
2. Enable the plugin from the FacturaScripts admin panel
3. Create a product family with `tipofamilia = 'tablones'` in FacturaScripts
4. Add pricing entries via **Warehouse → Slab Prices** in the admin menu
5. Visit `/AddTablon` on a mobile device to use the PWA

## Requirements

- FacturaScripts >= 2025.71
- PHP >= 8.1

## License

This project is licensed under the [GNU Lesser General Public License v3](LICENSE).
