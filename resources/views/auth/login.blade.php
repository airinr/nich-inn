<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <style>
        .sign-in {
            background-color: #ffffff;
            display: flex;
            flex-direction: row;
            justify-content: center;
            width: 100%;
        }

        .sign-in .overlap-group-wrapper {
            background-color: #ffffff;
            width: 1440px;
            height: 1024px;
        }

        .sign-in .overlap-group {
            position: relative;
            height: 1024px;
            background-image: url(./img/image-1.png);
            background-size: cover;
            background-position: 50% 50%;
        }

        .sign-in .base {
            position: absolute;
            width: 1299px;
            height: 763px;
            top: 130px;
            left: 70px;
            background-color: #14294acc;
            border-radius: 20px;
            box-shadow: 13px 13px 10px #0a0614;
            backdrop-filter: blur(6px) brightness(100%);
            -webkit-backdrop-filter: blur(6px) brightness(100%);
            opacity: 0.25;
        }

        .sign-in .subtract {
            position: absolute;
            width: 1299px;
            height: 763px;
            top: 130px;
            left: 70px;
        }

        .sign-in .form {
            position: absolute;
            width: 442px;
            height: 90px;
            top: 428px;
            left: 771px;
        }

        .sign-in .group {
            top: 0;
            position: absolute;
            width: 442px;
            height: 32px;
            left: 0;
        }

        .sign-in .img {
            top: 59px;
            position: absolute;
            width: 442px;
            height: 32px;
            left: 0;
        }

        .sign-in .WELCOME-BACK {
            position: absolute;
            top: 248px;
            left: 895px;
            font-family: "Poppins-Regular", Helvetica;
            font-weight: 400;
            color: #ffffff;
            font-size: 40px;
            text-align: center;
            letter-spacing: 0;
            line-height: normal;
        }

        .sign-in .rectangle {
            position: absolute;
            width: 518px;
            height: 545px;
            top: 218px;
            left: 733px;
            border-radius: 49px;
            border: 1px solid;
            border-color: #ffffff;
        }

        .sign-in .frame {
            position: absolute;
            width: 323px;
            height: 76px;
            top: 596px;
            left: 830px;
            border-radius: 23px;
            overflow: hidden;
            background-image: url(./img/wave-SVG.svg);
            background-size: 100% 100%;
        }

        .sign-in .text-wrapper {
            position: absolute;
            top: 13px;
            left: 113px;
            font-family: "Poppins-Medium", Helvetica;
            font-weight: 500;
            color: #14294a;
            font-size: 32px;
            text-align: center;
            letter-spacing: 0;
            line-height: normal;
        }
    </style>
</head>

<body>
    <div class="sign-in">
        <div class="overlap-group-wrapper">
            <div class="overlap-group">
                <div class="base"></div>
                <img class="subtract" src="img/subtract.svg" />
                <div class="form"><img class="group" src="img/group-4.png" /> <img class="img" src="img/group-5.png" /></div>
                <div class="WELCOME-BACK">WELCOME<br />BACK</div>
                <div class="rectangle"></div>
                <div class="frame">
                    <div class="text-wrapper">LOGIN</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>