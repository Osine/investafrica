<script type="text/javascript" src="javascript/myFunction.js"></script>
<style>
    .topnav{
        position: fixed;
    /* Set the navbar to fixed position */
    top: 0;
    /* Position the navbar at the top of the page */
    width: 100%;
    }

    @media screen and (max-width: 600px) {
        .topnav{
            position: relative;
        }
    }
    </style>
<div class="topnav" style="height: 70px">
    <nav id="links">
        <a href="index.php"><img title="investafrica" src="images/investafrica.png" height="30px"></a>
        <!-- <input type="text" placeholder="Opportunity awaits..."> -->
        <a class="home" href="index.php">Home</a>
        <a class="chat" href="https://expandafrica.slack.com">Chat</a>
        <!-- <a class="request" href="">Add a Country</a> -->
        <a class="help" href="help.php">Help</a>
        <!-- <a href="#about">About</a>
    <a class="login" href="#contact">Contact</a> -->
    </nav>
    <!-- <div class="cta-box">
        <button> INVEST NOW </button>
    </div> -->
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <!-- <i class="fa fa-bars"></i> -->
    </a>
</div>