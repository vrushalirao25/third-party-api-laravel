# Laravel API Integration Hub
A modular Laravel application for integrating and testing multiple third-party APIs such as Weather, Pusher, Stripe, and more.
## ✨ Features
- Clean, modular service-based architecture
- Easily extendable to support multiple APIs
- Real-time weather integration (currently implemented)
- Simple Blade views for UI
- Uses Laravel best practices

---

## 🔌 Available API Modules
| API     | Status   | Description                            |
|---------|----------|----------------------------------------|
| Weather | ✅ Done   | Fetch current weather by city name     |
| Pusher    | 🚧 Planned | Real-time event broadcasting using Pusher |
| Stripe| 🚧 Planned | Handle payments, subscriptions, and webhooks    |

---

## 🧪 How to Use
### Step 1: Clone the repository

```bash
git clone https://github.com/vrushalirao25/third-party-api-laravel.git
cd third-party-api-laravel
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```
### 3. Setup .env and API keys

```bash
# Copy environment file
cp .env.example .env
php artisan key:generate

# Then update your .env:
WEATHER_API_KEY=your_weather_api_key_here

```
### 4. Running the Application

```bash
# Start the development server
php artisan serve
```
Visit `http://localhost:8000` in your browser.
