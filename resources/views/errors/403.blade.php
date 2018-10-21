@include('layouts.partials.head')
<style>
    /* ---------------------------------------------------
    403.blade.php custom style
    ----------------------------------------------------- */
    .txtBox1{
        font-size: 36px;
        height: 100px;
        width: 768px;
        position: absolute;
        top: 58%;
        left: 22%;
        text-align: center;
    }

    .txtBox2{
        font-size: 22.5px;
        height: 30px;
        width: 768px;
        position: absolute;
        top: 78%;
        left: 22%;

        text-align: center;
    }

    .imgBox{
        height: 300px;
        position: absolute;
        top: 15%;
        left: 38%;

        padding: 11.25px 11.25px;
        border-radius: 11.25px;
    }

    .imgBox img{
        width: 300px;
        border-radius: 11.25px;

    }

    .imgBox input{
        border-radius: 6px;
        width: 50%;
        height: 35px;
        border: 0;
        background: #dddddd;
        outline: none;
        margin: 15px 0;
    }

    .imgBox p a{
        text-decoration: underline;
        color: #fc9e02;
    }

    .copy{
        font-size: 14px;
        margin-top: 51.5px;
        background: #CCC;
    }
    </style>
    <body>
        <div class="imgBox">
                <img src="/css/images/stop.png" alt="">
        </div>
        <div class="txtBox1">
            <p>Oh no! You can’t go further. Are you trying to hack our website?</p>
        </div>

        <div class="txtBox2">
            <p>403 Forbidden. Click <a href="{{ url('/') }}">homepage</a> to give up.</p>
        </div>


    </body>
</html>
