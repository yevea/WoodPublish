# WoodPublish

A FacturaScripts plugin that provides a **Progressive Web App (PWA)** for sawmill suppliers to photograph, price, and publish wood slabs/planks directly into a FacturaScripts product catalogue.

## Features

- **Mobile-first PWA** — Install to home screen, works like a native app
- **Offline support** — Full offline functionality via Service Worker + IndexedDB queue
- **Camera integration** — Take photos of wood slabs directly from the app
- **Auto-pricing** — Automatic price calculation based on wood type, slab type, and dimensions
- **Deferred authentication** — Form is shown to all visitors; login required only on submit
- **Multi-language** — Spanish, English, French, and German translations included
- **Admin panel** — Manage slab pricing table from the FacturaScripts backend

## Installation

1. Copy the `WoodPublish` folder into `Plugins/` directory of your FacturaScripts installation
2. Go to **Admin > Plugins** and enable WoodPublish
3. Let FacturaScripts update the database (creates `tablon_precios` table and adds dimension columns to `productos`)

## Configuration

1. Create at least one **Product Family** (`Familia`) with `tipofamilia = 'tablones'` in FacturaScripts
2. Go to **Admin > Slab Prices** (`ListTablonPrecio`) and add pricing records for each wood type / slab type / thickness combination
3. Visit `/AddTablon` on a mobile device to use the PWA

## Requirements

- FacturaScripts >= 2025.71
- PHP >= 8.1

## File Structure

```
WoodPublish/
├── Assets/
│   ├── JS/
│   │   └── AddTablon.js              # PWA client logic
│   ├── icons/
│   │   ├── icon-192.png              # PWA home screen icon (192×192)
│   │   └── icon-512.png              # PWA splash screen icon (512×512)
│   └── service-worker.js             # Service Worker for offline support
├── Controller/
│   ├── AddTablon.php                 # Main PWA controller
│   ├── ListTablonPrecio.php          # Admin: price list
│   └── EditTablonPrecio.php          # Admin: price edit
├── Model/
│   └── TablonPrecio.php              # Pricing model
├── Table/
│   └── tablon_precios.xml            # Database schema
├── Extension/
│   └── Table/
│       └── productos.xml             # Adds dimension columns to productos table
├── View/
│   └── AddTablon.html.twig           # PWA page template
├── XMLView/
│   ├── ListTablonPrecio.xml          # Price list view definition
│   └── EditTablonPrecio.xml          # Price edit form definition
├── Translation/
│   ├── es_ES.json                    # Spanish (primary)
│   ├── en_EN.json                    # English
│   ├── fr_FR.json                    # French
│   └── de_DE.json                    # German
├── Init.php
├── facturascripts.ini
├── composer.json
├── LICENSE
└── README.md
```

## License

LGPL-3.0-or-later
