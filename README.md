# Valhöll — Viking Bar & Mead Hall

🌐 **Live site:** https://valholl.onrender.com

A PHP + Bootstrap site for a Viking bar and mead hall in Los Angeles.

> **Concept / portfolio project** by [@wuisabel-gif](https://github.com/wuisabel-gif).
> Valhöll is a fictional venue built to demonstrate a complete small-business site.

## Run locally

The site lives in the `valhalla/` folder. With PHP installed:

```bash
cd valhalla
php -S localhost:8765
```

Then open http://localhost:8765

## Deploy

The included `Dockerfile` serves the `valhalla/` folder on PHP 8.2 + Apache, so
it deploys on any Docker-based host (Render, Railway, Fly.io):

1. Push to GitHub.
2. Create a new **Web Service** on the host and connect this repo.
3. The host detects the `Dockerfile` and builds automatically.

> Note: the reservation form uses PHP `mail()`, which needs an SMTP service
> configured on the host to actually send email.

## Case study

**The brief.** Give a fictional Viking bar a complete web presence — somewhere to
read the menu, learn the story, and book a table — that feels like the venue, not
a template.

**What I built.**
- A themed, fully responsive site (PHP + Bootstrap 5, custom CSS theme) across five
  pages: home, full menu, about, contact, and search.
- An illustrated, data-driven menu of 36 dishes, rendered from a single PHP array
  so items and prices live in one place.
- A working menu search (`search.php`) over dish names, descriptions, and sections.
- A reservation form with server-side validation and header-injection guarding.
- A founder story, an embedded map, a logo + favicon, and promo videos delivered
  from a Cloudinary CDN.

**The craft.**
- Images optimised from ~93 MB of PNGs down to ~17 MB of JPEGs.
- Copy written and edited to a consistent house voice (dry, concrete, Norse).
- Deployed on Render via a small `Dockerfile`.

**Stack.** PHP, Bootstrap 5, custom CSS, Cloudinary (video), Docker, Render.
