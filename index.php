<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <script>
            //get query
            const urlQuery = new URLSearchParams(window.location.search);const query = urlParams.get('couple');
            //create iframe
            var iframe = document.createElement('iframe');
            //styling iframe
            iframe.style.width = "100%";
            iframe.style.height = "100vh";
            iframe.src = 'http://google.com';
            //styling body
            document.body.style.margin = "0";
            document.body.appendChild(iframe);
        </script>
    </body>
</html>