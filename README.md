# FAYSi's Web Proxy

A simple, modern, and secure web proxy built with PHP. This proxy allows users to access websites anonymously by entering a URL. The design is sleek and minimal, with dark mode support, and the proxy uses cURL to fetch content from the requested URLs.

## Features

- **Dark Mode Theme**: A modern and eye-friendly dark theme.
- **Responsive Design**: Optimized for both desktop and mobile devices.
- **Easy-to-Use Interface**: Just enter a URL and the proxy will load the page.
- **Smooth UI**: Rounded corners, hover effects, and user-friendly elements.
- **Error Handling**: Clear and concise error messages if the URL is invalid or if there’s an issue with loading the page.
- **GitHub Source Link**: Easy access to the source code for modifications and contributions.

## Prerequisites

- PHP 7.0 or higher installed on your server.
- cURL extension enabled in PHP (most servers have it enabled by default).
- A web server like Apache or Nginx to serve the PHP file.

## Installation

1. Clone the repository or download the source code.

    ```bash
    git clone https://github.com/faysi223/web-proxy.git
    ```

2. Upload the `index.php` file to your server. Ensure it is placed in the public directory of your web server (e.g., `htdocs` for Apache).
   
3. Make sure your server supports PHP and the cURL extension is enabled.

4. Navigate to the location where `index.php` is hosted in your browser.

## Usage

- Open the proxy in your browser.
- Enter a valid URL (e.g., `https://example.com`) into the input field.
- Press **Load Page** to fetch the content of the entered website.
- The website will be loaded through the proxy with the current theme and design.

## Customization

- You can easily customize the UI styles by modifying the `style` block in the `proxy.php` file.
- Change the color scheme or fonts by updating the CSS in the `<style>` tag.
- Modify the PHP code to add additional functionality if needed, such as caching or logging user requests.

## Security Warning

Please be cautious when allowing users to access external websites through this proxy. There could be risks of loading malicious content, so consider additional security measures before deploying this proxy in a production environment.

## License

This project is open-source and available under the [MIT License](LICENSE).

## Contributing

Contributions are welcome! Please feel free to fork the repository, submit pull requests, and report issues.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-name`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to the branch (`git push origin feature-name`).
6. Create a new pull request.

## Author

**FAYSi**  
- GitHub: [https://github.com/faysi223](https://github.com/faysi223)
- Website: [https://webproxy.faysi.de](https://webproxy.faysi.de)
