<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .myDiv {
            display: none;
        }
    </style>
</head>

<body>

    <select id="myselection" name="orderstatus">
        <option selected disabled>select an option</option>
        <option value="inprogress">first</option>
        <option value="stn">second</option>
        <option value="swapped">third</option>
    </select>

    <br>
    <br>
    <br>
    <div id="showinprogress" class="myDiv" style="background-color: pink; height:100px; width:300px;">first <br>
        <ul>
            <li>first1 &nbsp; &nbsp; <button>Add To Cart</button></li>
            <li>first2 &nbsp; &nbsp; <button>Add To Cart</button></li>
            <li>first3 &nbsp; &nbsp; <button>Add To Cart</button></li>
        </ul>
    </div>
    <div id="showstn" class="myDiv" style="background-color: yellow; height:100px; width:300px;">second <br>
        <ul>
            <li>second1 &nbsp; &nbsp; <button>Add To Cart</button></li>
            <li>second2 &nbsp; &nbsp; <button>Add To Cart</button></li>
            <li>second3 &nbsp; &nbsp; <button>Add To Cart</button></li>
        </ul>
    </div>
    <div id="showswapped" class="myDiv" style="background-color: cyan; height:100px; width:300px;">third <br>
        <ul>
            <li>third1 &nbsp; &nbsp; <button>Add To Cart</button></li>
            <li>third2 &nbsp; &nbsp; <button>Add To Cart</button></li>
            <li>third3 &nbsp; &nbsp; <button>Add To Cart</button></li>
        </ul>
    </div>



    <!-- jQuery for hide and show  -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myselection').on('change', function() {
                var demovalue = $(this).val();
                $("div.myDiv").hide();
                $("#show" + demovalue).show();
            });
        });
    </script>
</body>

</html>