# phpEasyKeyboard

**The easiest and fastest way to build Telegram keyboards in PHP** 🚀

![PHP](https://img.shields.io/badge/PHP-%5E7.4-blue)
![License](https://img.shields.io/badge/License-MIT-green)
![Composer](https://img.shields.io/badge/Composer-ready-green)

A lightweight and fluent PHP library for creating **Inline Keyboards** and **Reply Keyboards** for Telegram Bots.

---

## About This Project

This library was my **first real experience with Object-Oriented Programming (OOP)**  many years ago and found it when I was exploring my old codes. I originally designed and developed it as a learning project to better understand OOP concepts in PHP.

Even though I haven't actively maintained it for a while, I believe it can still be genuinely helpful for the community. Many existing Telegram wrappers make keyboard creation unnecessarily complicated, while **phpEasyKeyboard** focuses on maximum simplicity and a clean fluent interface.

---

## ✨ Features

- Beautiful **Fluent Interface** (Method Chaining)
- Support for all Telegram button types (Callback, URL, Web App, Request User, Copy, Login, etc.)
- Automatic row & column management
- Easy JSON conversion
- PSR-4 compliant
- Lightweight with zero dependencies

---

## 📦 Installation

```bash
composer require thecipherdetective/phpeasykeyboard
```

---

## 🚀 Quick Start

### Inline Keyboard

```php
use TheCipherDetective\Telegram\Keyboards\InlineKeyboard;

$keyboard = new InlineKeyboard();

$keyboard
    ->createCallbackButton("👍 Like", "like_123")
    ->createUrlButton("🌐 Visit Website", "https://example.com")
    ->addRow() // Start new row
    ->createWebAppButton("🧩 Open Web App", ["url" => "https://example.com/webapp"])
    ->createCopyButton("📋 Copy Text", "Text to be copied");

echo $keyboard->getInlineKeyboardAsJson();
```

### Reply Keyboard

```php
use TheCipherDetective\Telegram\Keyboards\ReplyKeyboard;

$keyboard = new ReplyKeyboard(maxColumns: 3);

$keyboard
    ->createTextButton("📍 Send Location")
    ->createRequestContactButton("📞 Share Contact")
    ->createRequestLocationButton("📍 Share My Location")
    ->setResizeKeyboard(true)
    ->setOneTimeKeyboard(true);

echo $keyboard->getKeyboardAsJson();
```

---

## 📖 Documentation

### InlineKeyboard Methods

| Method | Description |
|--------|-------------|
| `createCallbackButton($text, $callback_data)` | Callback button |
| `createUrlButton($text, $url)` | URL button |
| `createWebAppButton($text, $web_app)` | Web App button |
| `createCopyButton($text, $copy_text)` | Copy text button |
| `createLoginUrlButton(...)` | Login URL button |
| `createSwitchInlineQueryButton(...)` | Switch inline query |
| `getInlineKeyboard()` | Returns array |
| `getInlineKeyboardAsJson()` | Returns JSON string |

### ReplyKeyboard Methods

| Method | Description |
|--------|-------------|
| `createTextButton($text)` | Regular text button |
| `createRequestContactButton($text)` | Request contact |
| `createRequestLocationButton($text)` | Request location |
| `createRequestUsersButton(...)` | Request users |
| `createRequestChatButton(...)` | Request chat |
| `setResizeKeyboard(bool)` | Resize keyboard |
| `setOneTimeKeyboard(bool)` | One-time keyboard |
| `setIsPersistent(bool)` | Persistent keyboard |
| `setPlaceholder(string)` | Input placeholder |

---

## ⚙️ Configuration

```php
// Custom grid size
new InlineKeyboard(maxColumns: 3, maxRows: 10);
new ReplyKeyboard(maxColumns: 4, maxRows: 8, is_persistent: true);
```

---

## 📌 Important Notes

- Telegram limit: Maximum **100 buttons** per keyboard
- `callback_data` maximum length is **64 bytes**
- Use `addRow()` to start a new row

---

## 🤝 Contributing

Contributions, issues, and feature requests are very welcome!  
Since this was originally a learning project, any help to improve code quality, add tests, fix typos, or enhance documentation is greatly appreciated.

---

## 📄 License

This project is licensed under the **MIT License**.

---

**Made with ❤️ for the Telegram Bot developer community**