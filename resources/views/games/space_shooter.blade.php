@extends('layouts.game')
@section('title', 'Space Shooter')

@section('content')
<!-- The canvas element that Phaser creates will be simply be appended to the
document at the point the script was called, but you can also specify a parent
container in the game config should you wish. -->

  <!-- Main -->
  <div id="game_container" class="w3-center w3-margin-top">
    
  </div>
  <div class="w3-center w3-margin-top" width="1334">
    <p>Use the mouse or left and right arrows on the keyboard to move.</p>
    <p></p>
    <a href="">Link to the Code.</a>
  </div>

@endsection()

@section("scripts")
    <script type="text/javascript" src="/games/space_shooter/js/Entities.js"></script>
    <script type="text/javascript" src="/games/space_shooter/js/SceneMainMenu.js"></script>
    <script type="text/javascript" src="/games/space_shooter/js/SceneMain.js"></script>
    <script type="text/javascript" src="/games/space_shooter/js/SceneGameOver.js"></script>
    <script type="text/javascript" src="/games/space_shooter/js/game.js"></script>
@endsection()