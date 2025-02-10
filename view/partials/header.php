<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proxy.io</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        #wrapper{
        overflow:hidden auto;    
        height:100vh;
        }
        #nav{
            background-color:rgb(247, 243, 243);
            display:flex;
            justify-content:space-evenly;
        }
        .items{
            padding:2rem;
            font-size:1.2rem;
        }
        a{
            text-decoration:none;
            color:black;
        }
        h1{
            text-align:center;
            padding:2rem;
            text-shadow:3px 3px gainsboro;
        }


#container{
    display:flex;
    justify-content:center;
    align-items:center;
}

.item{
    background-color:#ea2121;
    padding:0.8rem 2.3rem;
    color:white;
    font-size:15px;
    font-weight:500;
    box-shadow:5px 5px 7px 0px #003f;
    border:none;
    position:relative;
    z-index:1;
}

.item::before{
    content:"";
    background-color:#1f1f1f;
    position:absolute;
    top:0;
    left:0;
    right:0;
    bottom:0;
    transform:scaleX(0);
    transform-origin:left;
    transition:.7s;
    
}
.item:hover::before{
transform:scaleX(1);
z-index:-1;
}
    </style>
</head>
<body>
    <div id="#wrapper">