<?php

class Dice
{
  public $sides = null;

  public function __construct($num_sides)
  {

    $this->sides = $num_sides;
  }
  public function roll()
  {
    return rand(1, $this->sides);
  }
  public function __toString()
  {
    return "<div style='height: 30px; width: 30px; display: inline-block; text-align: center; border: 1px solid black; font-size: 24px; line-height: 30px;'>
    {$this->roll()}
    </div>";
  }
}
