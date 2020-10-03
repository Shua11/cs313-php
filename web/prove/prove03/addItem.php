<?php
// Start the session
session_start();

// get the q parameter from URL
$q = $_REQUEST["q"];

// Add session variable arrays
if ($q == '1') {
    $_SESSION["bathBomb"] = array('Bath Bomb', 'images/bathbomb.jpg', '6.99');
}
if ($q == 2) {
    $_SESSION["showerFizz"] = array('Shower Fizz', 'images/showerfizz.jpg', '7.95');
}
if ($q == 3) {
    $_SESSION["bathSalt"] = array('Bath Salt', 'images/bathsalts.jpg', '12.95');
}
if ($q == 4) {
    $_SESSION["lotion"] = array('Lotion', 'images/lotion.jpg', '7.99');
}
if ($q == 5) {
    $_SESSION["bodyWhip"] = array('Body Whip', 'images/bodywhip.jpg', '9.95');
}
if ($q == 6) {
    $_SESSION["massageBar"] = array('Massage Bar', 'images/massagebar.jpg', '11.19');
}

// Remove session variable arrays
if ($q == -1) {
    unset($_SESSION["bathBomb"]);
    
}
if ($q == -2) {
    unset($_SESSION["bathSalt"]);
}
if ($q == -3) {
    unset($_SESSION["bodyWhip"]);
}
if ($q == -4) {
    unset($_SESSION["lotion"]);
}
if ($q == -5) {
    unset($_SESSION["massageBar"]);
}
if ($q == -6) {
    unset($_SESSION["showerFizz"]);
}

if (isset($_SESSION['bathBomb']) && !empty($_SESSION['bathBomb'])) {
    echo '<li>
            <span class="item">
                <span class="item-left">
                    <img src= '. $_SESSION['bathBomb'][1] .' alt="" height="50" width="50" />
                    <span class="item-info">
                        <span>'. $_SESSION['bathBomb'][0] .'</span>
                        <span>$'. $_SESSION['bathBomb'][2] .'</span>
                    </span>
                </span>
                <span class="item-right">
                    <button class="btn btn-xs btn-danger pull-right" onclick="addItem(-1)">x</button>
                </span>
            </span>
        </li>';}
if (isset($_SESSION['bathSalt']) && !empty($_SESSION['bathSalt'])) {
    echo '<li>
            <span class="item">
                <span class="item-left">
                    <img src= '. $_SESSION['bathSalt'][1] .' alt="" height="50" width="50" />
                    <span class="item-info">
                        <span>'. $_SESSION['bathSalt'][0] .'</span>
                        <span>$'. $_SESSION['bathSalt'][2] .'</span>
                    </span>
                </span>
                <span class="item-right">
                    <button class="btn btn-xs btn-danger pull-right" onclick="addItem(-2)">x</button>
                </span>
            </span>
        </li>';}
if (isset($_SESSION['bodyWhip']) && !empty($_SESSION['bodyWhip'])) {
    echo '<li>
            <span class="item">
                <span class="item-left">
                    <img src= '. $_SESSION['bodyWhip'][1] .' alt="" height="50" width="50" />
                    <span class="item-info">
                        <span>'. $_SESSION['bodyWhip'][0] .'</span>
                        <span>$'. $_SESSION['bodyWhip'][2] .'</span>
                    </span>
                </span>
                <span class="item-right">
                    <button class="btn btn-xs btn-danger pull-right" onclick="addItem(-3)">x</button>
                </span>
            </span>
        </li>';}
if (isset($_SESSION['lotion']) && !empty($_SESSION['lotion'])) {
    echo '<li>
            <span class="item">
                <span class="item-left">
                    <img src= '. $_SESSION['lotion'][1] .' alt="" height="50" width="50" />
                    <span class="item-info">
                        <span>'. $_SESSION['lotion'][0] .'</span>
                        <span>$'. $_SESSION['lotion'][2] .'</span>
                    </span>
                </span>
                <span class="item-right">
                    <button class="btn btn-xs btn-danger pull-right" onclick="addItem(-4)">x</button>
                </span>
            </span>
        </li>';}
if (isset($_SESSION['massageBar']) && !empty($_SESSION['massageBar'])) {
    echo '<li>
            <span class="item">
                <span class="item-left">
                    <img src= '. $_SESSION['massageBar'][1] .' alt="" height="50" width="50" />
                    <span class="item-info">
                        <span>'. $_SESSION['massageBar'][0] .'</span>
                        <span>$'. $_SESSION['massageBar'][2] .'</span>
                    </span>
                </span>
                <span class="item-right">
                    <button class="btn btn-xs btn-danger pull-right" onclick="addItem(-5)">x</button>
                </span>
            </span>
        </li>';}
if (isset($_SESSION['showerFizz']) && !empty($_SESSION['showerFizz'])) {
    echo '<li>
            <span class="item">
                <span class="item-left">
                    <img src= '. $_SESSION['showerFizz'][1] .' alt="" height="50" width="50" />
                    <span class="item-info">
                        <span>'. $_SESSION['showerFizz'][0] .'</span>
                        <span>$'. $_SESSION['showerFizz'][2] .'</span>
                    </span>
                </span>
                <span class="item-right">
                    <button class="btn btn-xs btn-danger pull-right" onclick="addItem(-6)">x</button>
                </span>
            </span>
        </li>';}
?>
