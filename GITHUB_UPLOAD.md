# GitHub Upload Guide

This repository is now set up so the HTML app can be uploaded and published through GitHub.

## Files added for GitHub

- `.nojekyll` for static hosting compatibility
- `.github/workflows/deploy-pages.yml` for GitHub Pages deployment
- `data/clients.json` as a tracked starter data file
- `data/README.md` describing the data format

## What to upload

Push the full repository to GitHub, including:

- `index.html`
- `logo.png`
- `india-locations.js`
- `data/clients.json`
- `.github/workflows/deploy-pages.yml`

## Recommended GitHub setup

1. Create a GitHub repository
2. Push this project to the repository
3. In GitHub, enable Pages for the repository
4. Use the GitHub Actions source when prompted
5. The workflow will publish the site automatically on pushes to `main` or `master`

## Data note

The browser app currently saves client data to local browser storage.

If you want GitHub to store updated client records, keep `data/clients.json` in the repo and commit changes to that file when your data changes.
