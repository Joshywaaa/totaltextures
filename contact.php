<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set character encoding and viewport for responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Link to the external CSS stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Include Bootstrap CSS and JavaScript using CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
    <!-- Title of the webpage -->
    <title>Total Textures</title>
</head>
<body>
    <!-- Navigation bar with Bootstrap styling -->
    <?php include "includes/nav.php"?>

    <main>
        <!-- Container for the article -->
        <div class="article-row">
            <!-- Left column with text content -->
            <div class="text-content">
                <h2>Contact</h2>
                <div class="container">
                    <p>
                        <strong>Dennis Mobile:</strong>
                        <a href="tel:+1234567890" id="phoneLink">+1 (234) 567-890</a>
                        <button class="btn btn-primary btn-sm" onclick="copyToClipboard('phoneLink')">Copy</button>
                    </p>
                    <p>
                        <strong>Dennis Email:</strong>
                        <a href="mailto:contact@example.com" id="emailLink">contact@example.com</a>
                        <button class="btn btn-primary btn-sm" onclick="copyToClipboard('emailLink')">Copy</button>
                    </p>
                </div>
            </div>
            <!-- Right column with the contact form -->
            <div class="container">
                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name:</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
<script>
    // JavaScript function to copy text to clipboard
    function copyToClipboard(elementId) {
        var link = document.getElementById(elementId);
        var text = link.textContent;
    
        var textArea = document.createElement('textarea');
        textArea.value = text;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);
    
        alert('Copied to clipboard: ' + text);
    }
</script>
