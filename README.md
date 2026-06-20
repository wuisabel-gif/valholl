# Valhöll — Viking Bar & Mead Hall

🌐 **Live site:** https://valholl.onrender.com

A PHP + Bootstrap site for a Viking bar and mead hall in Los Angeles.

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
