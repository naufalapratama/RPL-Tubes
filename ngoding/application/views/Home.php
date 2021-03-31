<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Karma", sans-serif
    }

    .w3-bar-block .w3-bar-item {
        padding: 20px
    }
</style>

<body>

    <!-- Sidebar (hidden by default) -->
    <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button">Close Menu</a>
        <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
    </nav>

    <!-- Top menu -->
    <div class="w3-top">
        <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
            <div class="w3-right w3-padding-16">Profile</div>
            <div class="w3-center w3-padding-16" style="font-family: Helvetica Neue;">B-Books</div>
        </div>
    </div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

        <!-- First Photo Grid-->
        <div class="w3-row-padding w3-padding-16 w3-center" id="food">
            <div class="w3-quarter">
                <img src="content-2.jpeg" alt="Sandwich" style="width:100%">
                <h3>Dia adalah dilanku</h3>
                <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            </div>
            <div class="w3-quarter">
                <img src="content.jpeg" alt="Steak" style="width:100%">
                <h3>Geez and Ann</h3>
                <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            </div>
            <div class="w3-quarter">
                <img src="content-3.jpeg" alt="Cherries" style="width:100%">
                <h3>Matematika SD</h3>
                <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                <p>What else?</p>
            </div>
            <div class="w3-quarter">
                <img src="kalkulus.jpg" alt="Pasta and Wine" style="width:100%">
                <h3>Kalkulus 2A</h3>
                <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            </div>
        </div>

        <!-- Second Photo Grid-->
        <!-- <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="/w3images/popsicle.jpg" alt="Popsicle" style="width:100%">
      <h3>Harry Potter 1</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="/w3images/salmon.jpg" alt="Salmon" style="width:100%">
      <h3>Kisah Cinta Rahma</h3>
      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
      <h3>Engkau Dimana</h3>
      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="/w3images/croissant.jpg" alt="Croissant" style="width:100%">
      <h3>Pusing Tugas</h3>
      <p>Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
  </div> -->

        <!-- Pagination -->
        <div class="w3-center w3-padding-32">
            <div class="w3-bar">
                <a href="#" class="w3-bar-item w3-button w3-hover-red">«</a>
                <a href="#" class="w3-bar-item w3-hover-red w3-button">1</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-red">2</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-red">3</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-red">4</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-red">»</a>
            </div>
        </div>


        <!-- End page content -->
    </div>

    <script>
        // Script to open and close sidebar
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }
    </script>

</body>

</html>