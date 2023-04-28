<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
  public string $color;
  public string $text;
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($color, $text)
  {
    $this->color = $color;
    $this->text = $text;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.button');
  }
}
