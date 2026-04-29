<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>404 Not Found</title>

<style>
body {
    margin: 0;
    padding: 0;
    background: #f2f2f2;
    font-family: Arial, sans-serif;
}

/* center layar */
.container {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* flow vertikal aman */
.content {
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* 4 - gambar - 4 */
.number {
    display: flex;
    align-items: center;
    justify-content: center;
}

/* angka */
.four {
    font-size: 120px;
    font-weight: bold;
    line-height: 1;

    position: relative; 
    z-index: 10;        
}

/* tarik mendekat */
.four:first-child {
    margin-right: -25px;
}

.four:last-child {
    margin-left: -25px;
}

/* wrapper gambar */
.image-wrapper {
    position: relative;
    width: 170px;
    height: 170px;
}

/* shape (background) */
.shape {
    position: absolute;
    width: 80%;
    top: 55%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
}

/* peti (foreground) */
.peti {
    position: absolute;
    width: 80%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
}

/* teks bawah */
.text {
    margin-top: -15px;
    font-size: 28px;
    font-weight: 800;
}

.oops {
    font-size: 36px;
    font-weight: 900;
    color: #a0524a;
}
</style>

</head>

<body>

<div class="container">
    <div class="content">

        <div class="number">
            <span class="four">4</span>

            <div class="image-wrapper">
                <!-- pastikan file ada di public/ -->
                <img src="{{ asset('shape.png') }}" class="shape">
                <img src="{{ asset('peti.png') }}" class="peti">
            </div>

            <span class="four">4</span>
        </div>

        <div class="text">
            <span class="oops">Oops!</span> PAGE NOT FOUND
        </div>

    </div>
</div>

</body>
</html>