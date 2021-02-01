<?php

require "../vendor/autoload.php";

$thumb = new \SimpSyst\Thumbcrop\Thumbcrop("cache", 75, 5, true);
//$thumb->flush();

echo "<p><img src='{$thumb->make("images/image.jpg", 200)}' alt='Happy SimpSyst' title='Happy SimpSyst'></p>";
echo "<p><img src='{$thumb->make("images/image.jpg", 400)}' alt='Happy SimpSyst' title='Happy SimpSyst'></p>";
echo "<p><img src='{$thumb->make("images/image.jpg", 400,400)}' alt='Happy SimpSyst' title='Happy SimpSyst'></p>";
echo "<p><img src='{$thumb->make("images/image.jpg", 1200,628)}' alt='Happy SimpSyst' title='Happy SimpSyst'></p>";
echo "<p><img src='{$thumb->make("images/image.jpg", 200,600)}' alt='Happy SimpSyst' title='Happy SimpSyst'></p>";

echo "<p><img src='{$thumb->make("images/image.png", 200)}' alt='Happy SimpSyst' title='Happy SimpSyst'></p>";
echo "<p><img src='{$thumb->make("images/image.png", 400)}' alt='Happy SimpSyst' title='Happy SimpSyst'></p>";
echo "<p><img src='{$thumb->make("images/image.png", 400,400)}' alt='Happy SimpSyst' title='Happy SimpSyst'></p>";
echo "<p><img src='{$thumb->make("images/image.png", 1200,628)}' alt='Happy SimpSyst' title='Happy SimpSyst'></p>";
echo "<p><img src='{$thumb->make("images/image.png", 200,600)}' alt='Happy SimpSyst' title='Happy SimpSyst'></p>";

//$thumb->flush("images/image.jpg");
//$thumb->flush("images/image.png");
//$thumb->flush();