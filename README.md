# levo
1. Setup wordpress on your Local Env
2. Migrate from Live to your Local Env
3. Locate folder "/wp-content/themes/"
4. Backup and Empty "contentberg-child" folder
5. Clone this repo in "/wp-content/themes/contentberg-child"
6. Download standalone tailwindcss <a href="https://github.com/tailwindlabs/tailwindcss/releases/tag/v3.3.2">here</a>. Rename to "tailwindcss.exe" and move it to "/wp-content/themes/contentberg-child"
7. Open your CLI and cd to "/wp-content/themes/contentberg-child" then enter command "tailwindcss -i src/css/tailwind.input.css -o style.css --watch"
8. And make sure "ContentBerg Child" is activated in your wordpress theme

Parent Theme
https://drive.google.com/file/d/1lsd6F2MDeRWMRHmz8oSHg4kTTiTxtOMt/view?usp=drive_link

Child Theme
This repo
