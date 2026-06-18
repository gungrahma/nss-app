## NSS Project

Build by Flora or Gung Rahma, NSS is a website that provides nightshot picture from denpasar to other worlds! Initiate by super collaborator SOS and Ian, 
NSS can deliver many professional nightshot picture anytime and anywhere!

## Can I Clone this project?

Yes! This is a widely open source project laravel, just clone like usual!

```bash
git clone https://github.com/gungrahma/nss-app.git

php artisan serve
```

## Thanks to

- SOS = Collaborator NSS team
- Ian (SB) = Collaborator NSS team
- Flora (Agung rahma) = Collaborator (IT Section) NSS team


### 2026 - NSS Dev Ops 

## Deployment (Render)

Repo ini sudah disiapkan untuk deploy gratis ke [Render](https://render.com) via `render.yaml`.

**Langkah:**

1. Push perubahan ke GitHub:
   ```bash
   git add .
   git commit -m "chore: add Render deployment config"
   git push origin main
   ```
2. Buka https://render.com → **New** → **Blueprint** → pilih repo `nss-app`.
3. Render akan auto-detect `render.yaml` dan setup service-nya.
4. Tunggu build selesai, app live di `https://nss-app.onrender.com`.

**Catatan penting:**

- **Database**: pakai **SQLite** (file di disk). Di free tier Render, filesystem **ephemeral** — data akan **hilang tiap restart/redeploy**. Build script otomatis `migrate` + `db:seed` ulang, jadi aman untuk portfolio/showcase. Kalau butuh data persistent (user-generated), upgrade ke plan berbayar + tambahkan persistent disk, atau pakai Railway dengan PostgreSQL.
- **APP_KEY** di-generate otomatis oleh Render (`generateValue: true`).
- **APP_URL** default `https://nss-app.onrender.com` — sesuaikan kalau pakai subdomain custom.
- **Upload file** (`storage/app/public`) juga ephemeral. Untuk portfolio statis oke, kalau ada fitur upload banyak, perlu object storage (S3/R2).