<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #Bang {
            height: 250px;
            width: 300px;
            border: 1px solid black;
            margin: auto;
        }

        form {
            text-align: center;
        }

        h1 {
            text-align: center;
            color: royalblue;
        }
    </style>
</head>

<body>
    <div id="Bang">
        <h1>WEBSITE</h1>
        <form onsubmit="return validateForm()" action="welcome1.php" method="POST">
            <label>User</label>
            <input id="user" name="user" type="text" placeholder="phone or email"> <br>
            <p id="errUser"></p>

            <label>Pass</label>
            <input id="pass" name="pass" type="password" placeholder="password"> <br>
            <p id="errPass"></p>

            <button type="login">Login</button>
        </form>
    </div>
    <script>
        function validateForm() {
            let Text = document.getElementById('text').value;
            let Pass = document.getElementById('pass').value;
            let SĐT = document.getElementById('sđt').value;

            let regexText = /^[aAàÀảẢãÃáÁạẠăĂằẰẳẲẵẴắẮặẶâÂầẦẩẨẫẪấẤậẬbBcCdDđĐeEèÈẻẺẽẼéÉẹẸêÊềỀểỂễỄếẾệỆfFgGhHiIìÌỉỈĩĨíÍịỊjJkKlLmMnNoOòÒỏỎõÕóÓọỌôÔồỒổỔỗỖốỐộỘơƠờỜởỞỡỠớỚợỢpPqQrRsStTuUùÙủỦũŨúÚụỤưƯừỪửỬữỮứỨựỰvVwWxXyYỳỲỷỶỹỸýÝỵỴzZ \.]+$/;
            let resultText = regexText.test(Text);

            let regexSĐT = /^(0|\+84)[0-9]{9,11}$/
            let resultSĐT = regexSĐT.test(SĐT);
            let dem = 0;
            if (Text.length == 0 && SĐT.length == 0) {
                dem++;
                document.getElementById("errUser").innerHTML = "Không được bỏ trống";
            } else if (resultText == false && resultSĐT == false) {
                dem++;
                document.getElementById("errUser").innerHTML = "Không đúng định dạng";
            } else {
                document.getElementById("errUser").innerHTML = "";
            }

            let regexPass = /^[a-z@-_][0-9]$/
            let resultPass = regexPass.test(pass);
            if (pass.length == 0) {
                dem++;
                document.getElementById("errPass").innerHTML = "Không được bỏ trống";
            } else if (resultPass == false && resultPass<8) {
                dem++;
                document.getElementById("errPass").innerHTML = "Không đúng định dạng";
            } else {
                document.getElementById("errPass").innerHTML = "";
            }
            if (dem != 0) {
                return false;
            }

        }
    </script>
</body>

</html>