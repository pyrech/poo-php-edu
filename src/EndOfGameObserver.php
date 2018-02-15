<?php

interface EndOfGameObserver
{
    public function notify(Game $game);
}
