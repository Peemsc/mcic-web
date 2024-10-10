<!DOCTYPE html>
<html lang="th">

<head>
    <script src="https://www.google.com/recaptcha/api.js?render=6LeekLMjAAAAAOYfVsKYlRVIUUDSTi2-MPL2NgSI"></script>
</head>

<body>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.excute('6LeekLMjAAAAAOYfVsKYlRVIUUDSTi2-MPL2NgSI', {
                action: 'contact'
            }).then(function(token) if (token) {
                document.getElementByID('response').value = token;
            })

        })
    </script>
</body>

</html>
