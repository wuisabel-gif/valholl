<p align="center">
  <img src="valhalla/assets/valhol_logo.png" alt="Valhöll logo" width="160">
</p>

<h1 align="center">Valhöll — Viking Bar & Mead Hall</h1>

<p align="center">🌐 <strong>Live site:</strong> <a href="https://valholl.onrender.com">valholl.onrender.com</a></p>

A PHP + Bootstrap site for a Viking bar and mead hall in Los Angeles.

A practice project by [@wuisabel-gif](https://github.com/wuisabel-gif). Valhöll
isn't a real bar. I made it up so I'd have a full site to build from scratch.

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

Note: the reservation form uses PHP `mail()`, which needs an SMTP service
configured on the host to actually send email.

## About this project

I wanted to build a whole website on my own instead of just one page, so I made up
a Viking bar and built the entire thing for it.

What it does:
- Five pages: home, the full menu, an about page, a contact page, and search.
- The menu has 36 dishes. I kept them all in one PHP array, so when a price changes
  I only edit it in one place instead of digging through the HTML.
- The search box works. It looks through the dish names and descriptions and shows
  whatever matches.
- The reservation form checks what you typed before it sends, and I added a little
  protection so people can't slip junk into the email.
- There's a founder story, a map, a logo and favicon, and two promo videos that
  load from Cloudinary instead of off my own server.

Some things I figured out along the way:
- The images were huge, around 93 MB of PNGs. I turned them into JPEGs and got it
  down to about 17 MB, and the pages load a lot faster now.
- I tried to make the writing sound like a real bar, not a template.
- I put it online with Render using a small Dockerfile.

Built with PHP, Bootstrap 5, my own CSS, Cloudinary for the videos, Docker, and Render.
