<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h1>HALO</h1>
        <script>
            //check is url exist
            var r = new XMLHttpRequest();
            r.open("GET", "http://localhost:8000/check?current_url="+window.location.href+'&token=68501fe8d004ef236c0370ce97eef8d1');
            r.onreadystatechange = function () {
            if (r.readyState != 4 || r.status != 200) return;
                let res = JSON.parse(r.responseText)
                if(res.code === 1)
                    setIframe()
            };
            r.send();
            //set iframe
            function setIframe() {
                //get query
                const urlQuery = new URLSearchParams(window.location.search);
                const query = urlQuery.get('couple');
                //create iframe
                var iframe = document.createElement('iframe');
                //styling iframe
                iframe.style.width = "100%";
                iframe.style.height = "100vh";
                iframe.src = 'http://localhost:8000?couple='+query+'&token=68501fe8d004ef236c0370ce97eef8d1';
                //styling body
                document.body.style.margin = "0";
                document.body.appendChild(iframe);
            }
        </script>
    </body>
</html>